<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $container_configurator): void {
    $parameters = $container_configurator->parameters();

    $parameters->set(Option::SETS, [
        SetList::SYMFONY,
        SetList::PSR_12,
        SetList::ARRAY,
        SetList::PHP_70,
        SetList::PHP_71,
        SetList::PHPUNIT,
    ]);

    // alternative to CLI arguments, easier to maintain and extend
    $parameters->set(Option::PATHS, [
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/resources/lang',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

    // exclude paths with really nasty code
    //$parameters->set(Option::EXCLUDE_PATHS, []);

    // scan other file extensions [default: ['php']]
    //$parameters->set(Option::FILE_EXTENSIONS, ['php']);

    // [default: PHP_EOL]; other options: '\n'
    $parameters->set(Option::LINE_ENDING, '\n');

    // configure cache paths & namespace - useful for Gitlab CI caching, where getcwd() produces always different path
    // default: sys_get_temp_dir() . '/_changed_files_detector_tests']
    $parameters->set(Option::CACHE_DIRECTORY, __DIR__ . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . '.ecs_cache');

    $parameters->set(Option::SKIP, [
        // skip rule completely
        PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class => null,
        PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class => null,
        PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class => null,
        PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class => null,
        // skip single rule only on specific path
        Symplify\CodingStandard\Fixer\ArrayNotation\ArrayListItemNewlineFixer::class => [
            // path to file
            'config/*',
        ],
        PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class => [
            // path to file
            'config/*',
        ],
    ]);

    $services = $container_configurator->services();
    $services->set(Symplify\CodingStandard\Fixer\Commenting\ParamReturnAndVarTagMalformsFixer::class);
    $services->set(Symplify\CodingStandard\Fixer\Spacing\RemoveSpacingAroundModifierAndConstFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class)
        ->call('configure', [[
            'align' => 'left',
        ]]);
};
