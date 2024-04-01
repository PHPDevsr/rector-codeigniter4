<?php

declare(strict_types=1);

namespace PHPDevsr\Rector\Codeigniter4\Set;

use Rector\Set\Contract\SetListInterface;

final class CodeigniterSetList implements SetListInterface
{
    /**
     * @var string
     */
    final public const CODEIGNITER_44 = __DIR__ . '/../../config/sets/codeigniter44.php';
}
