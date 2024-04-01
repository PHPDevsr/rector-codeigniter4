<?php

declare(strict_types=1);

namespace PHPDevsr\Rector\Codeigniter4\Set;

use Rector\Set\Contract\SetListInterface;

final class CodeigniterLevelSetList implements SetListInterface
{
    /**
     * @var string
     */
    final public const UP_TO_CODEIGNITER_44 = __DIR__ . '/../../config/sets/level/up-to-codeigniter-44.php';
}
