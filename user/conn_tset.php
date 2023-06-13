<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');               // MySQL 서버에 접속
if (mysqli_connect_errno()) {                                                // 접속 오류 확인
  echo 'MySQL 접속 실패: ' . mysqli_connect_error();
  exit();
}
$result = mysqli_query($conn, "select * from myuser");          // 쿼리 실행
while ($row = mysqli_fetch_assoc($result)) {                            // 결과 출력
    echo "번호:" . $row["num"] . ", 이름:" . $row["name"] . ", 나이:" . $row["age"] . ", 성별:" . $row["gender"] . ",직업:" . $row["work"] . "<BR>";
}
mysqli_close($conn);                                                          // MySQL 연결 닫기
?>
