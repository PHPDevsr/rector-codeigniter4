<?php

declare(strict_types=1);

namespace PHPDevsr\Rector\Codeigniter4\Tests\Utils\UnderscoreToCamelCaseVariableNameRector;

use PHPUnit\Framework\Attributes\Test;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class UnderscoreToCamelCaseVariableNameRectorTest extends AbstractRectorTestCase
{
    public static function provideData(): Iterator
    {
        return self::yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    #[DataProvider('provideData')]
    #[Test]
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
