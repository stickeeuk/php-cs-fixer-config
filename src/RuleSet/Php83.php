<?php

declare(strict_types=1);

namespace Stickee\PhpCsFixerConfig\RuleSet;

final class Php83 extends StickeeBaseline
{
    public function name(): string
    {
        return 'stickee (PHP 8.3)';
    }

    public function rules(): array
    {
        return array_merge([
            '@PHP83Migration' => true,
        ], parent::rules());
    }
}
