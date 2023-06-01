<?php

$myarray = [1,2,3,4,5]; // a[] = {1,2,3,4,5}; (c에서 하는 방법)
// $myarray = array(1,2,3,4,5);
echo $myarray[0];
echo '<br>';
echo $myarray[4];
echo '<br>';
echo "배열의 개수는 ". count($myarray). "개 입니다.";

echo '<br>';

for ($i = 0; $i<5; $i++) {
    echo $myarray[$i];
    echo '<br>';
}

echo "<script>";
echo "function myfun() {";
echo "document.getElementById('mytext').value = '부산소마고';";
echo "}";
echo "</script>";

echo "<input type= text id=mytext>";
echo "<input type= button value='push' onclick='myfun()'>";

// php html, js...

// int a[5];
// sizeof(a)/sizeof(int);
?>

