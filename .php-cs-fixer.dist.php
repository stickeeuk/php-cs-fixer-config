<?php

declare(strict_types=1);

use Stickee\PhpCsFixerConfig;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->append([
        __DIR__ . '/.php-cs-fixer.dist.php',
    ])
;

$overrideRules = [
    'ordered_class_elements' => ['order' => ['use_trait']],
];

$config = PhpCsFixerConfig\Factory::fromRuleSet(
    new PhpCsFixerConfig\RuleSet\Php82(),
    $overrideRules
);

$config
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache')
;

return $config;
