<html>
    <title> my homepage </title>
    <head><h1> my first project </h1></head>
    <br>
    <body> 
        <?php
        echo "Hello php world<br>";
        echo '<br>';
        echo "Hello php world";

        $num1 = 10; //숫자
        $num2 = "10"; //문자열
        $txt = '안녕하세요';
        
        echo '<br>'; //쓰기로 약속하자
        echo $num1 + 5;
        echo '<br>';
        echo $num2 + 5,'<br>';
        echo $txt.'<br>'.'5';
        echo '<br>';
        echo $txt,'<br>'.$num1;
        echo '<br>';
        
        $myarray = [1, 2, 3, 4, 5];
        // $myarray = array(1,2,3,4,5);
        echo "배열의 개수는 ";
        echo count($myarray);
        echo "개 입니다.";
        echo '<br>';
        for ($i=0; $i<5; $i++)
        {
            echo $myarray[$i];
            echo '<br>';            
        }
        // ['key' => 'value'];

        $mykv =['이름' => '홍길동', '나이' => '24'];
        echo $mykv['이름'];
        echo '<br>';  
        echo $mykv['나이'];  

        ?>
    </body>
</html>

