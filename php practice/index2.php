<!DOCTYPE html>
<html lang="en">
<head>
    <title>index 2</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width: 80%;
        background-color: purple;
        margin: auto;
        padding: 23px;
       
    }

</style>
<body>
    <div class="container">
        <h1>status of party</h1>
        
        <?php
        $age = 12;


        if($age>=18){
            echo "you are adult";
        }
        else{
            echo "you are not an adult";
        }
        

        $a=0;
        while ($a<=10){
            echo "<br>the value of a is: ";
            echo $a;
            $a++;
        }

        for($i = 0; $i<=11;$i++){
            echo "<br>the value of i is: ";
            echo  $i;
        }

        function print_number($number){
            echo "<br>your number is: ";
            echo $number;
        }
        print_number(345);

       
        ?>
    </div>
 
    
</body>
</html>