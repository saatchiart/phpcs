<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.64.0|configurator
 * you can change this configuration by importing this file.
 */
$config = new PhpCsFixer\Config();
return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER' => true,
        // Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
        'align_multiline_comment' => true,
        // Each element of an array must be indented exactly once.
        'array_indentation' => true,
        // Class, trait and interface elements must be separated with one or none blank line.
        'class_attributes_separation' => ['elements' => ['method' => 'one']],
        // Converts FQCN strings to `*::class` keywords.
        'class_keyword' => true,
        // Using `isset($var) &&` multiple times should be done in one call.
        'combine_consecutive_issets' => true,
        // Calling `unset` on multiple items should be done in one call.
        'combine_consecutive_unsets' => true,
        // Comments with annotation should be docblock when used on structural elements.
        'comment_to_phpdoc' => ['ignored_tags' => ['todo','see','link']],
        // Concatenation should be spaced according to configuration.
        'concat_space' => ['spacing' => 'one'],
        // All classes must be final, except abstract ones and Doctrine entities.
        'final_class' => true,
        // Spaces should be properly placed in a function declaration.
        'function_declaration' => ['closure_fn_spacing' => 'one'],
        // Configured annotations should be omitted from PHPDoc.
        'general_phpdoc_annotation_remove' => ['annotations' => ['author','package','copyright']],
        // Imports or fully qualifies global classes/functions/constants.
        'global_namespace_import' => ['import_classes' => false,'import_constants' => false,'import_functions' => false],
        // Add, replace or remove header comment.
        'header_comment' => ['header' => ''],
        // Replaces `is_null($var)` expression with `null === $var`.
        'is_null' => true,
        // Shorthand notation for operators should be used if possible.
        'long_to_shorthand_operator' => true,
        // Replace non multibyte-safe functions with corresponding mb function.
        'mb_str_functions' => true,
        // Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
        'method_chaining_indentation' => true,
        // Replaces `intval`, `floatval`, `doubleval`, `strval` and `boolval` function calls with according type casting operator.
        'modernize_types_casting' => true,
        // DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
        'multiline_comment_opening_closing' => true,
        // Add leading `\` before constant invocation of internal constant to speed up resolving. Constant name match is case-sensitive, except for `null`, `false` and `true`.
        'native_constant_invocation' => true,
        // Add leading `\` before function invocation to speed up resolving.
        'native_function_invocation' => ['include' => ['@internal','append_config','array_add','array_collapse','array_divide','array_dot','array_except','array_first','array_flatten','array_forget','array_get','array_has','array_last','array_only','array_pluck','array_prepend','array_pull','array_random','array_set','array_sort','array_sort_recursive','array_where','array_wrap','blank','camel_case','class_basename','class_uses_recursive','collect','config','data_fill','data_get','data_set','dd','e','ends_with','filled','head','kebab_case','last','object_get','optional','preg_replace_array','resolve','response','retry','snake_case','starts_with','str_after','str_before','str_contains','str_finish','str_is','str_limit','str_plural','str_random','str_replace_array','str_replace_first','str_replace_last','str_singular','str_slug','str_start','studly_case','tap','throw_if','throw_unless','title_case','trait_uses_recursive','transform','value','windows_os','with']],
        // Removes `@param`, `@return` and `@var` tags that don't provide any useful information.
        'no_superfluous_phpdoc_tags' => true,
        // Unused `use` statements must be removed.
        'no_unused_imports' => true,
        // There should not be useless `else` cases.
        'no_useless_else' => true,
        // Orders the elements of classes/interfaces/traits/enums.
        'ordered_class_elements' => true,
        // `@access` annotations should be omitted from PHPDoc.
        'phpdoc_no_access' => true,
        // Annotations in PHPDoc should be ordered in defined sequence.
        'phpdoc_order' => ['order' => ['param','custom','return','throws']],
        // Orders all `@param` annotations in DocBlocks according to method signature.
        'phpdoc_param_order' => true,
        // Fixes casing of PHPDoc tags.
        'phpdoc_tag_casing' => true,
        // Forces PHPDoc tags to be either regular annotations or inline.
        'phpdoc_tag_type' => true,
        // Takes `@param` annotations of non-mixed types and adjusts accordingly the function signature. Requires PHP >= 7.0.
        'phpdoc_to_param_type' => true,
        // Takes `@var` annotation of non-mixed types and adjusts accordingly the property signature. Requires PHP >= 7.4.
        'phpdoc_to_property_type' => true,
        // Takes `@return` annotation of non-mixed types and adjusts accordingly the function signature.
        'phpdoc_to_return_type' => true,
        // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
        'phpdoc_trim' => true,
        // Removes extra blank lines after summary and after description in PHPDoc.
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        // Converts `protected` variables and methods to `private` where possible.
        'protected_to_private' => true,
        // Inside class or interface element `self` should be preferred to the class name itself.
        'self_accessor' => true,
        // Inside an enum or `final`/anonymous class, `self` should be preferred over `static`.
        'self_static_accessor' => true,
        // Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (`${` to `{$`).
        'simple_to_complex_string_variable' => true,
        // Simplify `if` control structures that return the boolean result of their condition.
        'simplified_if_return' => true,
        // Single-line comments must have proper spacing.
        'single_line_comment_spacing' => true,
        // Single-line comments and multi-line comments with only one line of actual content should use the `//` syntax.
        'single_line_comment_style' => true,
        // Lambdas not (indirectly) referencing `$this` must be declared `static`.
        'static_lambda' => true,
        // Comparisons should be strict.
        'strict_comparison' => true,
        // Functions should be used with `$strict` param set to `true`.
        'strict_param' => true,
        // String tests for empty must be done against `''`, not with `strlen`.
        'string_length_to_empty' => true,
        // Use the Elvis operator `?:` where possible.
        'ternary_to_elvis_operator' => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->in(__DIR__)
        ->exclude('vendor')
        // ->exclude([
        //     'folder-to-exclude',
        // ])
        // ->append([
        //     'file-to-include',
        // ])
    )
;
