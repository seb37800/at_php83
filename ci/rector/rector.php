<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/../../src',
    ]);

    // define sets of rules
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_83
    ]);
    $rectorConfig->skip([
        __DIR__ . '/../../src/AnonymousReadonlyClass',
        __DIR__ . '/../../src/DynamicClassConstantFetch',
        __DIR__ . '/../../src/JsonValidate',
        __DIR__ . '/../../src/TypedClassConstant',
    ]);
};
