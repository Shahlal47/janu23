<?php
//without global
$a = 5;
function myTestFunction1(){
    $a = 6;
    return $a;
}

echo $a;
echo '<br>';
echo myTestFunction1();
echo '<br>';
echo $a;
echo '<br>';
echo '<br>';
//exit;
?>


<?php
//with global
$a = 5;
function myTestFunction2(){
    global $a;
    $a = 6;
    return $a;
}

echo $a;
echo '<br>';
echo myTestFunction2();
echo '<br>';
echo $a;
echo '<br>';
?>
