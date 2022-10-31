<?php

declare(strict_types=1);

namespace Stickee\PhpCsFixerConfig;

use PhpCsFixer\Fixer\FixerInterface;

interface RuleSetInterface
{
    /**
     * Returns the name of the rule set.
     */
    public function name(): string;

    /** 
     * Returns an array of rules along with their configuration.
     * 
     * @return array<string, array|bool>
    */
    public function rules(): array;

    /**
     * Returns any custom fixers in use.
     * 
     * @return iterable<array-key, FixerInterface>
     */
    public function getCustomFixers(): iterable;

    /**
     * Returns if risky rules are allowed.
     */
    public function getRiskyAllowed(): bool;
}