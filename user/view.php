<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');               // MySQL 서버에 접속
$query ="select * from myuser";
$result = mysqli_query($conn, $query);          // 쿼리 실행
$count = mysqli_num_rows($result);

echo "<table border=1 width = 500 text align=center>";
echo "<tr align=center><td colspan=5> 데이터의 개수는 ".$count."개 입니다 <br></td></tr>";
echo "<tr><th>번호</th><th>이름</th><th>나이</th><th>성별</th><th>직업</th></tr>";


while ($row = mysqli_fetch_assoc($result)) {         
    echo "<tr align=center><td>" . $row["num"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td>
    <td>" . $row["gender"] . "</td><td>" . $row["work"] . "</td></tr>";                   // 결과 출력
}
echo "</table>";                                                       // MySQL 연결 닫기
?>

<form method = post action =insert.php align=center>
    이름: <input type= text name =u_name><br>
    나이: <input type= text name =u_age><br>    
    성별: <input type= text name =u_gender><br>
    직업: <input type= text name =u_work><br>  
    <input type=submit value=저장>  
</form>
