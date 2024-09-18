
<?php
/**
 * This file has been generated by phpmyadmin/scripts:/develdocs/build.sh
 * @see https://github.com/phpmyadmin/scripts/blob/master/develdocs/sami.php
 * @see https://github.com/phpmyadmin/scripts/blob/master/develdocs/build.sh
 */
use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name("*.php")
    ->in("./src")
;

return new Sami($iterator, [
    "title"                => "A validating SQL lexer and parser with a focus on MySQL dialect.",
    "build_dir"            => "./doc/",
    "cache_dir"            => "./tmp"
]);

