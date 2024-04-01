# 3 Rules Overview

## PassStrictParameterToFunctionParameterRector

Pass strict to function parameter on specific position argument when no value provided

- class: [`PHPDevsr\Rector\Codeigniter4\Utils\PassStrictParameterToFunctionParameterRector`](../src/Utils/PassStrictParameterToFunctionParameterRector.php)

```diff
-array_search($value, $array);
+array_search($value, $array, true);
```

<br>

```diff
-base64_decode($string);
+base64_decode($string, true);
```

<br>

```diff
-in_array('a', $array);
+in_array('a', $array, true);
```

<br>

## RemoveErrorSuppressInTryCatchStmtsRector

Remove error suppression operator `@` inside try...catch blocks

- class: [`PHPDevsr\Rector\Codeigniter4\Utils\RemoveErrorSuppressInTryCatchStmtsRector`](../src/Utils/RemoveErrorSuppressInTryCatchStmtsRector.php)

```diff
 try {
-		@rmdir($dirname);
-	} catch (Exception $e) {}
+	rmdir($dirname);
+} catch (Exception $e) {}
```

<br>

## UnderscoreToCamelCaseVariableNameRector

Change under_score names to camelCase

- class: [`PHPDevsr\Rector\Codeigniter4\Utils\UnderscoreToCamelCaseVariableNameRector`](../src/Utils/UnderscoreToCamelCaseVariableNameRector.php)

```diff
 final class SomeClass
 {
-    public function run($a_b)
+    public function run($aB)
     {
-        $some_value = $a_b;
+        $someValue = $aB;
     }
 }
```

<br>
