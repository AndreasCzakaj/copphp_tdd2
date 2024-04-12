composer require symfony/twig-bundle

composer require phpunit/phpunit --dev
inotifywait -r -m -e close_write --format '%w%f' src tests | while read MODFILE; do vendor/bin/phpunit ; done



symfony server:start