<html>
    <title> my homepage </title>
    <head><h1> my second project </h1></head>
    <br>
    <body> 
        <?php
        for ($i=0; $i<5; $i++)
        {
            echo '이름 입력 <input type = text placeholder = 이름을 입력해주세요><br>';
        }
        echo '컬러를 선택해주세요 <input type = color><br>';
        echo '생일을 선택해주세요 <input type = date><br>';
        echo '숫자를 선택해주세요 <input type = number><br>';
        echo '슬라이드 값을 선택해주세요 <input type = range><br>';
        echo '값을 선택해주세요 <input type = checkbox><br>';
        echo '버튼을 눌러주세요 <input type = button value = 확인><br>';
        
        ?>
        <table border =1 width =400 align=center>
            <tr align=center>
                
                <td>
                    1
                </td>
                <td>
                   2
                </td>
            </tr>
            <tr align=center>
                <td>
                    3
                </td>
                <td>
                    4
                
                <?php
                    for ($i=0; $i<5; $i++)
                    {
                        echo '이름 입력 <input type = text placeholder = 이름을 입력해주세요><br>';
                    }
                ?></td>
            </tr>
        </table>
    </body>
</html>

