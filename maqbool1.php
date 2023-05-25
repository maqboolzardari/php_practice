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
        echo "<br />";
        $b = 67;
        br($b);
        $c = 45.23;
        br($c);
        $d = array ("Shahbaz" , "Mohsin" , "Maqbool");
        br($d);
        $f = array (123 , 13.24 , "Maqbool");
        br($f);
        $e = "hello world";  
        br($e);
        $g = null;  
        br($g);
    ?>
</body>
</html>