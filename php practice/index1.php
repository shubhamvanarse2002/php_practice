<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website <br>
        <?php
        echo "hello world php statement";
        ?>
        <?php
        echo " Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolorum amet fuga consequuntur praesentium reiciendis temporibus molestiae deserunt doloribus alias! Accusamus, ut repudiandae iure vel consectetur id distinctio commodi ratione quam eligendi excepturi velit sint omnis! Rerum, recusandae placeat. Temporibus optio unde recusandae similique. Accusamus?";
        echo"<br>";
        

        // variable 
        $variable1 = 5;
        $variable2 = 78;

        // arithmetic opreator

        echo "addition of above varialbles is  ",$variable1 +$variable2;


        $newvar = $variable1;
        $newvar += 4;
        echo "<br>";
        echo $newvar;



        //comparision 
        echo "the value of 1==4 is ";
        echo var_dump(4==4);


        echo $variable1 ." ". $variable2;


        $myvar1 = (true) && (true);
        $myvar2 = (true) xor (false);
        echo "<br>";
        echo var_dump($myvar2);
        // echo var_dump($myvar1);






        
        ?>

    </div>
</body>
</html>