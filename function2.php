<?php
//function2 without static
function myTest1(){
    $number1 = 4;
    echo $number1;
    $number1++;
}

echo myTest1();
echo '<br>';
echo myTest1();
echo '<br>';
echo myTest1();
echo '<br>';
echo myTest1();
echo '<br>';
echo myTest1();
echo '<br>';
echo myTest1();
echo '<br>';
echo '<br>';
?>




<?php
//function2 with static
function myTest2(){
    static $number1 = 4;
    echo $number1;
    $number1++;
}

echo myTest2();
echo '<br>';
echo myTest2();
echo '<br>';
echo myTest2();
echo '<br>';
echo myTest2();
echo '<br>';
echo myTest2();
echo '<br>';
echo myTest2();
echo '<br>';
?>