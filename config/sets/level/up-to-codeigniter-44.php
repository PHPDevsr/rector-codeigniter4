<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use PHPDevsr\Rector\Codeigniter4\Set\CodeigniterSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([CodeigniterSetList::CODEIGNITER_44]);
};
