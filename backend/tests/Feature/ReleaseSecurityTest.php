<?php

namespace Tests\Feature;

use App\Models\User;
use App\Notifications\ResetPasswordNotification;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\ProductionAdminSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Mail\MailManager;
use Illuminate\Mail\Markdown;
use Illuminate\Notifications\Channels\MailChannel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Mime\Exception\RfcComplianceException;
use Symfony\Component\Mime\Header\ParameterizedHeader;
use Tests\QuizTestCase;

class ReleaseSecurityTest extends QuizTestCase
{
    private function production(): void
    {
        $this->app->detectEnvironment(fn () => 'production');
        config(['app.env' => 'production', 'bootstrap_admin' => [
            'name' => 'Release fixture', 'email' => 'release@example.test',
            'username' => 'releasefixture', 'password' => 'FixtureOnly!9LongPassword',
        ]]);
    }

    public function test_demo_entrypoints_refuse_production_before_writing(): void
    {
        $this->production();
        foreach ([UserSeeder::class, DatabaseSeeder::class] as $seeder) {
            try {
                app($seeder)->run();
                $this->fail('Production accepted demo seeding.');
            } catch (\RuntimeException $e) {
                $this->assertStringContainsString('local/testing', $e->getMessage());
            }
        }
        $this->assertDatabaseCount('users', 0);
        $this->assertDatabaseCount('quizzes', 0);
    }

    public function test_production_bootstrap_requires_explicit_strong_credentials(): void
    {
        $this->production();
        foreach ([null, '', 'short', 'predictablepassword12345'] as $password) {
            config(['bootstrap_admin.password' => $password]);
            try {
                app(ProductionAdminSeeder::class)->run();
                $this->fail('Bootstrap accepted missing or weak credentials.');
            } catch (ValidationException $e) {
                $this->assertArrayHasKey('password', $e->errors());
            }
        }
        $this->assertDatabaseCount('users', 0);
    }

    public function test_production_bootstrap_is_explicit_and_preserves_existing_admin_credentials(): void
    {
        $this->production();
        app(ProductionAdminSeeder::class)->run();
        $admin = User::sole();
        $this->assertTrue($admin->isAdmin());
        $this->assertTrue($admin->hasVerifiedEmail());
        $this->assertTrue(Hash::check(config('bootstrap_admin.password'), $admin->password));
        $before = $admin->getRawOriginal();
        config(['bootstrap_admin.password' => 'DifferentFixture!6LongPassword', 'bootstrap_admin.name' => 'Do not overwrite']);
        app(ProductionAdminSeeder::class)->run();
        $this->assertSame($before, $admin->fresh()->getRawOriginal());
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('quiz_attempts', 0);
    }

    public function test_bootstrap_cannot_promote_existing_user_or_steal_another_username(): void
    {
        $this->production();
        $user = $this->student()->fresh();
        $before = $user->getRawOriginal();
        foreach ([['email' => $user->email], ['username' => strtoupper($user->username)]] as $collision) {
            config(['bootstrap_admin.email' => 'release@example.test', 'bootstrap_admin.username' => 'releasefixture']);
            foreach ($collision as $key => $value) config(['bootstrap_admin.'.$key => $value]);
            try {
                app(ProductionAdminSeeder::class)->run();
                $this->fail('Bootstrap overwrote an existing identity.');
            } catch (ValidationException $e) {
                $this->assertArrayHasKey(array_key_first($collision), $e->errors());
            }
        }
        $this->assertSame($before, $user->fresh()->getRawOriginal());
        $this->assertDatabaseCount('users', 1);
    }

    public function test_mime_rejects_non_token_parameter_names_and_accepts_normal_attachments(): void
    {
        foreach (["filename\r\nX-Injected", 'invalid name', 'bad;name'] as $name) {
            try {
                new ParameterizedHeader('Content-Disposition', 'attachment', [$name => 'fixture.txt']);
                $this->fail('MIME parameter injection was accepted.');
            } catch (RfcComplianceException) {
                $this->addToAssertionCount(1);
            }
        }
        $header = new ParameterizedHeader('Content-Disposition', 'attachment', ['filename' => 'fiche-révision.txt']);
        $this->assertStringContainsString('attachment;', $header->toString());
    }

    public function test_reset_and_verification_mail_serialize_through_memory_transport(): void
    {
        config(['mail.default' => 'array', 'mail.from.address' => 'noreply@example.test',
            'app.url' => 'https://api.example.test', 'app.frontend_url' => 'https://example.test']);
        $mailer = new MailManager($this->app);
        $channel = new MailChannel($mailer, app(Markdown::class));
        $user = $this->student();
        $channel->send($user, new ResetPasswordNotification('fixture-reset-token'));
        $channel->send($user, new VerifyEmail);
        $messages = $mailer->mailer('array')->getSymfonyTransport()->messages();
        $this->assertCount(2, $messages);
        $this->assertStringContainsString('/reset-password', $messages[0]->getOriginalMessage()->toString());
        $this->assertStringContainsString('/email/verify/', $messages[1]->getOriginalMessage()->toString());
        foreach ($messages as $message) {
            $this->assertStringContainsString('MIME-Version: 1.0', $message->getOriginalMessage()->toString());
            $this->assertSame($user->email, $message->getOriginalMessage()->getTo()[0]->getAddress());
        }
    }
}
