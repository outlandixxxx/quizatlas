Seed the curriculum and its quizzes first, then run the community seeders together:

```sh
php artisan db:seed --class=DemoCommunitySeeder
```

With the project's running PHP container, run this from the repository root:

```sh
docker exec quizatlas-php php artisan db:seed --class=DemoCommunitySeeder
```

This creates or updates the same 235 student identities with readable usernames,
plus the existing administrator and manager. Student emails stay stable. Name-based
handles, nicknames and adjective combinations are unique without random character
strings. A taken username receives a short numeric suffix.

Students receive varied preset avatars, short biographies and countries. Their
recorded quiz answers, scores, XP transactions, streaks and achievement dates come
from the application's scoring and gamification services. Some profiles are new,
some inactive, and some experienced. Only active public quizzes are used.

Rerunning preserves existing passwords, profile details and activity. Accounts
outside the explicit fixture list are left alone. When quiz content is unavailable,
users and achievement definitions are still created; run the command again after
the quizzes have been seeded to add activity.

The individual seeders are also available:

- `UserSeeder`: usernames and initial student profiles.
- `AchievementSeeder`: achievement definitions, shared with real users.
- `LeaderboardSeeder`: recorded quiz activity and the XP/streaks it earns.
- `UserAchievementSeeder`: missing achievements supported by fixture users' history.

The seeder tests force an in-memory SQLite connection. Run them with:

```sh
docker exec -e APP_ENV=testing -e DB_CONNECTION=sqlite -e DB_DATABASE=:memory: quizatlas-php php vendor/bin/phpunit --filter=SeededCommunityTest
```
