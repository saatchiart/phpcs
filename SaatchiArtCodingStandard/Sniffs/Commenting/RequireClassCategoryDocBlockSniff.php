<?php

declare(strict_types=1);

namespace SaatchiArtCodingStandard\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\ClassCommentSniff;

final class RequireClassCategoryDocBlockSniff extends ClassCommentSniff
{
    /** @var array<string, array{ required: bool, allow_multiple: bool }> */
    protected $tags = [
        '@category' => [
            'required' => true,
            'allow_multiple' => false,
        ],
        '@package' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@subpackage' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@author' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@copyright' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@license' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@version' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@link' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@see' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@since' => [
            'required' => false,
            'allow_multiple' => false,
        ],
        '@deprecated' => [
            'required' => false,
            'allow_multiple' => false,
        ],
    ];

    /**
     * @param File $phpcsFile
     * @param array<int> $tags
     *
     * @return void
     */
    protected function processCategory($phpcsFile, array $tags)
    {
        return;
    }
}
