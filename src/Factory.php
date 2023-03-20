<?php

declare(strict_types=1);

namespace Stickee\PhpCsFixerConfig;

use PhpCsFixer\Config;

final class Factory
{
    public static function fromRuleSet(RuleSetInterface $ruleset, array $overrideRules = []): Config
    {
        $config = new Config($ruleset->name());

        $config
            ->setRiskyAllowed($ruleset->getRiskyAllowed())
            ->setRules(array_merge(
                $ruleset->rules(),
                $overrideRules
            ))
            ->registerCustomFixers($ruleset->getCustomFixers());

        return $config;
    }
}
