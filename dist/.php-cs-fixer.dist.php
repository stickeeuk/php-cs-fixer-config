<?php

declare(strict_types=1);

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;
use Stickee\PhpCsFixerConfig;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/app')
    ->in(__DIR__ . '/config')
    ->in(__DIR__ . '/routes')
    ->in(__DIR__ . '/tests')
    ->append([
        __DIR__ . '/.php-cs-fixer.dist.php',
    ]);

$overrideRules = [
    'ordered_class_elements' => ['order' => ['use_trait']],
];

$config = PhpCsFixerConfig\Factory::fromRuleSet(
    new PhpCsFixerConfig\RuleSet\Php83(),
    $overrideRules
);

$config
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache');

$config->setParallelConfig(ParallelConfigFactory::detect());

return $config;
