<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Maqbool";
        $a;
        for($a = 0;$a <= 10;$a++){
            echo "<br />", $a;
        }
        function br($x){
            var_dump($x);
            echo "<br />";
        }
        #br();
        echo "<br />";
        $b = 67;
        #echo "String: " . $b . var_dump($b);
        br($b);
        $c = 45.23;
        #var_dump($c);
        br($c);
        $d = array ("Shahbaz" , "Mohsin" , "Maqbool");
        #var_dump($d);
        br($d);
        $f = array (123 , 13.24 , "Maqbool");
        #var_dump($f);
        br($f);
        $e = "hello world";  
        #var_dump($e);
        br($e);
        $g = null;  
        #var_dump($g);
        br($g);
    ?>
</body>
</html>