<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Please, enter your name</h1>
    <form action="handle.php" method="post">
    <input type="text" name="firstname"
     placeholder="Enter your name"/>
     <button type="submit">submit</button>
    </form> -->

    <!-- 
        WORKING WITH VARIABLES IN PHP
        TO CREATE A VARIABLE, YOU NEED TO START WITH "$"

        TO DISPLAY ELEMENTS, WE USE THE FOLLOWIN
        PRINT
        ECHO
        GET TYPE
        PRINT_R    THIS IS USED TO PRINT  THE RAW VALUE


        ALSO KEEP IN MIND THAT "ECHO" CANNOT BE USED WITHIN MULTIPLE LINES OF CODES. WHEN USIING 
        "ECHO", ONE MUST BE CAREFUL SO AS TO AVOID MAKING AN ERROR. THERE WILL BE EXAMPLES BELOW.
        HOWEVER, "PRINT" IS THE EXACT OPPOSITE IN THIS CASE
        
        THINGS TO KEEP IN MIND ABOUT "ECHO"
        ECHO COMPLIES FASTER
        ECHO IS NOT CASE-SENSITIVE


        "VAR_DUMP" IS ANOTHER THING TO LOOK INTO.
        "GET_TYPE" IS ALSO SOMETHING TO LOOK INTO.


        WHEN DEALING WITH PHP, ONLY NUMBERS AND BOOLIAN CAN BE WRITTEN WITHOUT PUTTING SINGLE OR
        DOUBLE QUOTES. HOWEVER, LETTERS ARE DIFFERENT




        REFERENCE VARIABLE IS SOMETHING TO LOOK INTO



        BEFORE VERSION 8 OF PHP WAS CREATED, YOU WOULD NEED TO USE THE "DEFINE" KEYWORD IN ORDER TO
        CREATE A CONSTANT. BUT NOW THERE IS A KEYWORD FOR IT CALLED "CONST"
        THE STRUCTURE OF THE CODE IS ALSO VERY INTERESTING. THERE ARE A FEW THINGS TO KEEP IN MIND


    -->
    <?php
    // const PAYMENT = 200.5;
    // echo PAYMENT;
    echo PHP_VERSION;
    ?>





<?php


// echo "<pre>"

// var_dump(110);
// var_dump(200.5);
// echo(false);
?>



<?php
// GLOBAL VARIABLES

// $x = 5;
// function alex() {
//     echo $x
// }

// alex()

// $john = 5;
// function alex() {
//     echo $GLOBALS['john'];
// }
// alex()

// $pikin = 88;
// function echo () : Returntype {
    
// }

// all variables are stored in the $GLOBALS variables 
// it is an associative array that stores all variables created.
//  Exept the ones inside the function, because anything
// created inside the function is a local variable



//SERVER
// echo $_SERVER['PHP']
 
?>

</body>
</html>