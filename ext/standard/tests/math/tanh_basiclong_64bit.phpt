--TEST--
Test tanh function : 64bit long and bigint tests
--FILE--
<?php
 
define("MAX_64Bit", 9223372036854775807);
define("MAX_32Bit", 2147483647);
define("MIN_64Bit", -9223372036854775807 - 1);
define("MIN_32Bit", -2147483647 - 1);

$longVals = array(
    MAX_64Bit, MIN_64Bit, MAX_32Bit, MIN_32Bit, MAX_64Bit - MAX_32Bit, MIN_64Bit - MIN_32Bit,
    MAX_32Bit + 1, MIN_32Bit - 1, MAX_32Bit * 2, (MAX_32Bit * 2) + 1, (MAX_32Bit * 2) - 1,
    MAX_64Bit -1, MAX_64Bit + 1, MIN_64Bit + 1, MIN_64Bit - 1
);


foreach ($longVals as $longVal) {
   echo "--- testing: $longVal ---\n";
   var_dump(tanh($longVal));
}
   
?>
===DONE===
--EXPECT--
--- testing: 9223372036854775807 ---
float(1)
--- testing: -9223372036854775808 ---
float(-1)
--- testing: 2147483647 ---
float(1)
--- testing: -2147483648 ---
float(-1)
--- testing: 9223372034707292160 ---
float(1)
--- testing: -9223372034707292160 ---
float(-1)
--- testing: 2147483648 ---
float(1)
--- testing: -2147483649 ---
float(-1)
--- testing: 4294967294 ---
float(1)
--- testing: 4294967295 ---
float(1)
--- testing: 4294967293 ---
float(1)
--- testing: 9223372036854775806 ---
float(1)
--- testing: 9223372036854775808 ---
float(1)
--- testing: -9223372036854775807 ---
float(-1)
--- testing: -9223372036854775809 ---
float(-1)
===DONE===
