<?php

namespace PHPDevsr\Rector\Codeigniter4\Tests\Utils\UnderscoreToCamelCaseVariableNameRector\Fixture;

function run($a_b){
    $some_value = $a_b;
}

?>
-----
<?php

namespace PHPDevsr\Rector\Codeigniter4\Tests\Utils\UnderscoreToCamelCaseVariableNameRector\Fixture;

function run($aB){
    $someValue = $aB;
}

?>
