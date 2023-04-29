<?php 
    
    $a = '42';
    $b = 42;
    

    if ($a != $b) {    
        echo 'first if';
    }

    if ($a !== $b) {        
        echo 'second if';
    }

    //The comparison $a != $b returns FALSE but in fact it's TRUE! The string 42 is different than the integer 42.

?>