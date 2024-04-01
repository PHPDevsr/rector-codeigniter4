<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use PHPDevsr\Rector\Codeigniter4\Utils\UnderscoreToCamelCaseVariableNameRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../config/config.php');
    $rectorConfig->rule(UnderscoreToCamelCaseVariableNameRector::class);
};
