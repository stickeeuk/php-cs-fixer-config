<?php

declare(strict_types=1);

namespace Stickee\PhpCsFixerConfig\RuleSet;

final class Php81 extends StickeeBaseline
{
    public function name(): string
    {
        return 'stickee (PHP 8.1)';
    }

    public function rules(): array
    {
        return array_merge([
            '@PHP81Migration' => true,
        ], parent::rules());
    }
}
