<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter Rector.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use CodeIgniter\CodingStandard\CodeIgniter4;
use Nexus\CsConfig\Factory;
use Nexus\CsConfig\Fixer\Comment\NoCodeSeparatorCommentFixer;
use Nexus\CsConfig\FixerGenerator;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->files()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/config',
        __DIR__ . '/tests',
    ])
    ->append([
        __FILE__,
        __DIR__ . '/rector.php',
    ]);

$overrides = [
    'declare_strict_types' => true,
    'void_return'          => true,
];

$options = [
    'finder'       => $finder,
    'cacheFile'    => '.php-cs-fixer.cache',
];

$config = Factory::create(new CodeIgniter4(), $overrides, $options)->forLibrary(
    'CodeIgniter Rector',
    'PHPDevsr',
    'admin@phpdevsr.com'
);

$config
    ->registerCustomFixers(FixerGenerator::create('vendor/nexusphp/cs-config/src/Fixer', 'Nexus\\CsConfig\\Fixer'))
    ->setRules(array_merge($config->getRules(), [
        NoCodeSeparatorCommentFixer::name() => true,
    ]));

return $config;
