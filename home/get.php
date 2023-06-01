<?php
// if(isset($_GET['num'])){
//     echo $_GET['num'];
// }
// else {
//     echo "정의되지 않았습니다.";
// }
if($_GET['name']== '김상윤') {
echo "당신의 이름은 ".$_GET['name']."이고, 나이는".$_GET['age']."세 입니다.";
}
else{
    // 알림을 띄우고, 확인을 누르면 뒤로가기
    echo "<script>";
    echo "alert('내가 원하는 이름이 아닙니다!!!!!!!');";
    echo "history.back();";
    echo "</script>";
}
?>