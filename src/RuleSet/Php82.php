<?php

declare(strict_types=1);

namespace Stickee\PhpCsFixerConfig\RuleSet;

final class Php82 extends StickeeBaseline
{
    public function name(): string
    {
        return 'stickee (PHP 8.2)';
    }

    public function rules(): array
    {
        return array_merge([
            '@PHP82Migration' => true,
        ], parent::rules());
    }
}
