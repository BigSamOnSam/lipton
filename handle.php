<?php
    $fname = $_POST['firstname'];
    if ($fname == 'John') {
        echo "<h1>Hello $fname</h1>";
    } else {
        echo "<h1> I don't know you, $fname</h1>. <h2>Please, refrain from trying to access the system again. 
        <br>Otherwise, I GO CRASH!!</h2>";
    }
?>