<?php

declare(strict_types=1);

namespace Stickee\PhpCsFixerConfig\RuleSet;

use Stickee\PhpCsFixerConfig\RuleSetInterface;

abstract class StickeeBaseline implements RuleSetInterface
{
    public function rules(): array
    {
        return [
            '@PER-CS2.0' => true,
            '@PER-CS2.0:risky' => true,
            'AdamWojs/phpdoc_force_fqcn_fixer' => true,
            'align_multiline_comment' => [
                'comment_type' => 'all_multiline',
            ],
            'array_indentation' => true,
            'array_syntax' => ['syntax' => 'short'],
            'blank_line_before_statement' => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'do',
                    'exit',
                    'for',
                    'foreach',
                    'goto',
                    'if',
                    'include',
                    'include_once',
                    'phpdoc',
                    'require',
                    'require_once',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                ],
            ],
            'cast_spaces' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'clean_namespace' => true,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'declare_parentheses' => true,
            'dir_constant' => false,
            'echo_tag_syntax' => true,
            'empty_loop_body' => ['style' => 'braces'],
            'escape_implicit_backslashes' => true,
            'explicit_indirect_variable' => true,
            'explicit_string_variable' => true,
            'final_internal_class' => true,
            'fopen_flag_order' => true,
            'fopen_flags' => true,
            // 'fully_qualified_strict_types' => true,
            'function_to_constant' => true,
            'general_phpdoc_tag_rename' => true,
            'heredoc_indentation' => true,
            'heredoc_to_nowdoc' => true,
            'implode_call' => true,
            'include' => true,
            'increment_style' => ['style' => 'post'],
            'integer_literal_case' => true,
            'lambda_not_used_import' => true,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => ['syntax' => 'short'],
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'mb_str_functions' => true,
            'method_chaining_indentation' => true,
            'modernize_types_casting' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_whitespace_before_semicolons' => [
                'strategy' => 'no_multi_line',
            ],
            'native_function_casing' => true,
            'native_function_invocation' => false,
            'native_type_declaration_casing' => true,
            'no_alias_functions' => true,
            'no_alias_language_construct_call' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'break',
                    'case',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                ],
            ],
            'no_homoglyph_names' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_around_offset' => true,
            'no_superfluous_elseif' => true,
            'no_trailing_comma_in_singleline' => true,
            'no_unneeded_braces' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_final_method' => true,
            'no_unreachable_default_argument_value' => true,
            'no_unset_cast' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'non_printable_character' => ['use_escape_sequences_in_strings' => true],
            'normalize_index_brace' => true,
            'not_operator_with_successor_space' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'object_operator_without_whitespace' => true,
            'operator_linebreak' => ['only_booleans' => true],
            'ordered_class_elements' => [
                'order' => [
                    'use_trait',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public',
                    'property_protected',
                    'property_private',
                    'construct',
                    'destruct',
                    'magic',
                    'method_public_static',
                    'method_private_static',
                    'method_protected_static',
                    'method_public',
                    'method_protected',
                    'method_private',
                ],
            ],
            'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
            'phpdoc_align' => ['align' => 'left'],
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order_by_value' => true,
            'phpdoc_order' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => false,
            'phpdoc_tag_type' => true,
            'phpdoc_to_comment' => false,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_trim' => true,
            'phpdoc_types_order' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
            'phpdoc_types' => true,
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            'protected_to_private' => true,
            'psr_autoloading' => true,
            'random_api_migration' => true,
            'self_accessor' => true,
            'semicolon_after_instruction' => true,
            'simple_to_complex_string_variable' => true,
            'simplified_null_return' => false,
            'single_line_comment_style' => true,
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline' => true,
            'trim_array_spaces' => true,
            'type_declaration_spaces' => true,
            'whitespace_after_comma_in_array' => true,
        ];
    }

    public function getCustomFixers(): iterable
    {
        yield from [
            new \AdamWojs\PhpCsFixerPhpdocForceFQCN\Fixer\Phpdoc\ForceFQCNFixer(),
        ];
    }

    public function getRiskyAllowed(): bool
    {
        return true;
    }
}
