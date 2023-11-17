# at_php83
Meetup AFUP Tours - PHP 8.3

Check PHPStan
- Compatibilité PHP 8.2 `vendor/bin/phpstan analyze -c ci/phpstan/php82-compatibility.neon`
- Compatibilité PHP 8.3 `vendor/bin/phpstan analyze -c ci/phpstan/php83-compatibility.neon`

Check Rector
- `vendor/bin/rector process -c ci/rector/rector.php --dry-run`
- Fix rector issues with `vendor/bin/rector process -c ci/rector/rector.php`