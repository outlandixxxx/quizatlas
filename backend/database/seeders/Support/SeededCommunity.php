<?php

namespace Database\Seeders\Support;

/** Stable identities shared by the user, activity and achievement seeders. */
final class SeededCommunity
{
    /** @return list<array{name: string, username: string, email: string}> */
    public static function students(): array
    {
        $students = [
            ['Ahmed Benali', 'outlandish', 'ahmed@maroquiz.test'],
            ['Sara Amrani', 'BeautifulGirl', 'sara@maroquiz.test'],
            ['Youssef El Idrissi', 'TheStrongest', 'youssef@maroquiz.test'],
            ['Fatima Zahra', 'FatimaZahra', 'fatima@maroquiz.test'],
            ['Omar Alaoui', 'OmarAtlas', 'omar@maroquiz.test'],
            ['Meryem Chafik', 'MeryemRose', 'meryem@maroquiz.test'],
            ['Hassan Tazi', 'Hassanix', 'hassan@maroquiz.test'],
            ['Salma Idrissi', 'SalmaMoon', 'salma@maroquiz.test'],
            ['Khalid Bennis', 'KhalidPro', 'khalid@maroquiz.test'],
            ['Aya El Fassi', 'AyaSun', 'aya@maroquiz.test'],
        ];
        $firstNames = [
            'Mohammed', 'Zakaria', 'Imane', 'Nadia', 'Rachid', 'Soufiane', 'Houda', 'Karim', 'Leila', 'Mehdi',
            'Amina', 'Anas', 'Btissam', 'Driss', 'Ghita', 'Hamza', 'Ilyas', 'Jamal', 'Kenza', 'Lamia',
            'Mourad', 'Nour', 'Othmane', 'Rania', 'Said', 'Tarik', 'Widad', 'Yassine', 'Zineb', 'Adil',
        ];
        // Keep the existing generated emails so reruns update the same 225 accounts.
        $lastNames = ['Berrada', 'Lahlou', 'Mansouri', 'Benjelloun', 'Skalli', 'Madani', 'ElFassi', 'ElGhazali', 'ElIdrissi', 'ElOuazzani'];
        $nicknames = [
            'Abdo2008', 'Moonlight', 'AtlasSoul', 'Sunflower', 'WildRose', 'BlueSky', 'NightOwl', 'GoldenMind',
            'DreamWalker', 'Firefly', 'OceanEyes', 'SilentStorm', 'LittleGenius', 'SilverFox', 'JustChilling',
            'Stargazer', 'BraveHeart', 'CoffeeLover', 'CherryBlossom', 'WonderGirl', 'LionHeart', 'FreeSpirit',
            'LuckyStar', 'DayDreamer', 'CoolBreeze', 'TheWanderer', 'CleverCat', 'MidnightSun', 'VelvetSky',
            'SunnySide', 'HappyFeet', 'PaperPlane', 'StayCurious', 'MintTea', 'TheDreamer', 'BrightSoul',
            'CasablancaKid', 'DesertRose', 'PixelNomad', 'LittleLegend', 'AmberEyes', 'CloudNine', 'SnowLeopard',
            'TheOptimist', 'QuietGenius', 'BookDragon', 'UrbanExplorer', 'LunaNova', 'HumbleHero', 'DancingRain',
        ];
        $adjectives = ['Brave', 'Curious', 'Gentle', 'Clever', 'Happy', 'Golden', 'Calm', 'Witty', 'Bright', 'Kind', 'Bold', 'Quiet', 'Lucky', 'Wild', 'Wise'];
        $nouns = ['Falcon', 'Panda', 'Nomad', 'Dreamer', 'Fox', 'Owl', 'Lion', 'Comet', 'Tiger', 'Sparrow', 'Dolphin', 'Robin', 'Lotus', 'Otter', 'Phoenix', 'Maple'];
        $endings = ['Nova', 'Bee', 'Star', 'Joy', 'Moon', 'Sky', 'Rose', 'Zen', 'Flow', 'Ace'];

        for ($i = 0; $i < 225; $i++) {
            $first = $firstNames[$i % count($firstNames)];
            $last = $lastNames[($i + intdiv($i, 30)) % count($lastNames)];
            $username = match ($i % 4) {
                0 => $first.self::number("username:{$i}", 1994, 2008),
                1 => $nicknames[intdiv($i, 4) % count($nicknames)],
                2 => $adjectives[intdiv($i, 4) % count($adjectives)].$nouns[intdiv($i, 4) % count($nouns)],
                3 => $first.$endings[intdiv($i, 4) % count($endings)],
            };
            $students[] = ["{$first} {$last}", $username, strtolower("{$first}.{$last}@maroquiz.test")];
        }

        $used = [];

        return array_map(function (array $student) use (&$used): array {
            [$name, $desired, $email] = $student;
            $username = $desired;
            for ($suffix = 2; isset($used[strtolower($username)]); $suffix++) {
                $username = substr($desired, 0, 20 - strlen((string) $suffix)).$suffix;
            }
            $used[strtolower($username)] = true;

            return compact('name', 'username', 'email');
        }, $students);
    }

    /** Stable variation without changing PHP's global random generator. */
    public static function number(string $key, int $minimum, int $maximum): int
    {
        return $minimum + ((int) hexdec(substr(hash('sha256', $key), 0, 7)) % ($maximum - $minimum + 1));
    }

    /** @return array{attempts: int, run_days: int, inactive_days: int, min_accuracy: int, max_accuracy: int, night_owl: bool, country: string, avatar_url: ?string, bio: string} */
    public static function activity(int $index): array
    {
        $number = fn (string $key, int $min, int $max): int => self::number("profile:{$index}:{$key}", $min, $max);
        [$attempts, $runDays, $inactiveDays, $minAccuracy, $maxAccuracy] = match (true) {
            $index % 47 === 0 || $index === 2 => [$number('attempts', 102, 125), $number('run', 30, 40), $number('inactive', 0, 1), 90, 100],
            $index % 13 === 0 => [$number('attempts', 0, 3), 1, $number('inactive', 0, 1), 35, 85],
            $index % 5 === 0 => [$number('attempts', 8, 20), $number('run', 2, 6), $number('inactive', 3, 25), 45, 90],
            $index % 6 === 0 => [$number('attempts', 35, 65), $number('run', 7, 21), $number('inactive', 0, 1), 70, 100],
            default => [$number('attempts', 9, 30), $number('run', 1, 9), $number('inactive', 0, 1), 50, 95],
        };
        $countries = ['Morocco', 'Morocco', 'Morocco', 'Morocco', 'Morocco', 'Morocco', 'France', 'Spain', 'Algeria', 'Tunisia', 'Canada'];
        $bios = [
            'Un peu de curiosité et beaucoup de café.',
            'Un quiz après l’autre, à mon rythme.',
            'Toujours partant pour apprendre quelque chose.',
            'Je révise, je me trompe et je progresse.',
            'Objectif : mieux comprendre, pas seulement mémoriser.',
            'Entre deux cours, quelques QCM.',
        ];

        return [
            'attempts' => $attempts,
            'run_days' => min($runDays, $attempts),
            'inactive_days' => $inactiveDays,
            'min_accuracy' => $minAccuracy,
            'max_accuracy' => $maxAccuracy,
            'night_owl' => $index % 4 === 0,
            'country' => $countries[$number('country', 0, count($countries) - 1)],
            'avatar_url' => $index % 5 === 0 ? null : 'assets/avatars/avatar-'.str_pad((string) $number('avatar', 1, 12), 2, '0', STR_PAD_LEFT).'.webp',
            'bio' => $bios[$number('bio', 0, count($bios) - 1)],
        ];
    }
}
