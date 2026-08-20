<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration — Infrastructure — Professional #1',
                'slug' => 'system-administration-professional-1',
                'description' => 'Quiz Professional de System Administration : Infrastructure.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement immutable infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de immutable infrastructure dans Infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi immutable infrastructure est-il important dans un environnement professionnel ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant immutable infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement immutable infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de immutable infrastructure dans Infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi immutable infrastructure est-il important dans un environnement professionnel ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant immutable infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement immutable infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de immutable infrastructure dans Infrastructure ?',
                        'explanation' => 'immutable infrastructure désigne une approche où les instances sont remplacées plutôt que modifiées directement en production. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une approche où les instances sont remplacées plutôt que modifiées directement en production', 'is_correct' => true],
                            ['text' => 'manual patching', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'local-only deployment', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Configuration — Professional #2',
                'slug' => 'system-administration-professional-2',
                'description' => 'Quiz Professional de System Administration : Configuration.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement configuration drift ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de configuration drift dans Configuration ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi configuration drift est-il important dans un environnement professionnel ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant configuration drift ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement configuration drift ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de configuration drift dans Configuration ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi configuration drift est-il important dans un environnement professionnel ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant configuration drift ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement configuration drift ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de configuration drift dans Configuration ?',
                        'explanation' => 'configuration drift désigne la divergence entre la configuration attendue et la configuration réelle. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la divergence entre la configuration attendue et la configuration réelle', 'is_correct' => true],
                            ['text' => 'data compression', 'is_correct' => false],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'CPU throttling', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Security — Professional #3',
                'slug' => 'system-administration-professional-3',
                'description' => 'Quiz Professional de System Administration : Security.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement least privilege ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de least privilege dans Security ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi least privilege est-il important dans un environnement professionnel ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant least privilege ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement least privilege ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de least privilege dans Security ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi least privilege est-il important dans un environnement professionnel ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant least privilege ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement least privilege ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de least privilege dans Security ?',
                        'explanation' => 'least privilege désigne le principe d\'accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe d\'accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'full access', 'is_correct' => false],
                            ['text' => 'shared root', 'is_correct' => false],
                            ['text' => 'implicit trust', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Security Incident — Professional #4',
                'slug' => 'system-administration-professional-4',
                'description' => 'Quiz Professional de System Administration : Security Incident.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement privilege escalation ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de privilege escalation dans Security Incident ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi privilege escalation est-il important dans un environnement professionnel ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant privilege escalation ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement privilege escalation ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de privilege escalation dans Security Incident ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi privilege escalation est-il important dans un environnement professionnel ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant privilege escalation ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement privilege escalation ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de privilege escalation dans Security Incident ?',
                        'explanation' => 'privilege escalation désigne l\'obtention non autorisée de privilèges supérieurs. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'l\'obtention non autorisée de privilèges supérieurs', 'is_correct' => true],
                            ['text' => 'backup rotation', 'is_correct' => false],
                            ['text' => 'load balancing', 'is_correct' => false],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Cryptography — Professional #5',
                'slug' => 'system-administration-professional-5',
                'description' => 'Quiz Professional de System Administration : Cryptography.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement PKI ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de PKI dans Cryptography ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi PKI est-il important dans un environnement professionnel ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant PKI ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement PKI ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de PKI dans Cryptography ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi PKI est-il important dans un environnement professionnel ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant PKI ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement PKI ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de PKI dans Cryptography ?',
                        'explanation' => 'PKI désigne une infrastructure de gestion des certificats, clés et relations de confiance. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une infrastructure de gestion des certificats, clés et relations de confiance', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Security Architecture — Professional #6',
                'slug' => 'system-administration-professional-6',
                'description' => 'Quiz Professional de System Administration : Security Architecture.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement Zero Trust ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Zero Trust dans Security Architecture ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Zero Trust est-il important dans un environnement professionnel ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Zero Trust ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Zero Trust ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Zero Trust dans Security Architecture ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Zero Trust est-il important dans un environnement professionnel ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Zero Trust ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Zero Trust ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Zero Trust dans Security Architecture ?',
                        'explanation' => 'Zero Trust désigne un modèle qui vérifie explicitement identité, contexte et autorisation. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un modèle qui vérifie explicitement identité, contexte et autorisation', 'is_correct' => true],
                            ['text' => 'implicit trust', 'is_correct' => false],
                            ['text' => 'flat network', 'is_correct' => false],
                            ['text' => 'shared credentials', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Business Continuity — Professional #7',
                'slug' => 'system-administration-professional-7',
                'description' => 'Quiz Professional de System Administration : Business Continuity.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement RPO ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RPO dans Business Continuity ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RPO est-il important dans un environnement professionnel ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant RPO ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement RPO ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RPO dans Business Continuity ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RPO est-il important dans un environnement professionnel ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant RPO ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement RPO ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RPO dans Business Continuity ?',
                        'explanation' => 'RPO désigne la quantité maximale de données qu\'une organisation accepte de perdre. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['text' => 'RTO', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'CPU load', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Business Continuity — Professional #8',
                'slug' => 'system-administration-professional-8',
                'description' => 'Quiz Professional de System Administration : Business Continuity.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement RTO ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RTO dans Business Continuity ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RTO est-il important dans un environnement professionnel ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant RTO ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement RTO ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RTO dans Business Continuity ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RTO est-il important dans un environnement professionnel ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant RTO ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement RTO ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RTO dans Business Continuity ?',
                        'explanation' => 'RTO désigne la durée cible de restauration d\'un service après une interruption. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la durée cible de restauration d\'un service après une interruption', 'is_correct' => true],
                            ['text' => 'RPO', 'is_correct' => false],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'IOPS', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(['subject_id' => $subject->id, 'slug' => $quizData['slug']], [
                'title' => $quizData['title'], 'description' => $quizData['description'],
                'difficulty' => $quizData['difficulty'], 'is_active' => true,
            ]);

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'order' => $questionIndex + 1],
                    ['question' => $questionData['question'], 'explanation' => $questionData['explanation']]
                );

                $question->choices()->delete();
                $choices = $questionData['choices'];
                shuffle($choices);
                foreach ($choices as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'text' => $choiceData['text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
