<?php 
    //Not good
    $l = ['Austin', 'New York', 'San Francisco'];

    for ($i = 0; $i < count($l); $i++) {
        $li = $l[$i];
        doStuff();
        doSomeOtherStuff();
        // ...
        // ...
        // ...
        // Wait, what is `$li` for again?
        dispatch($li);
    }


    //Good
    $locations = ['Austin', 'New York', 'San Francisco'];

    foreach ($locations as $location) {
        doStuff();
        doSomeOtherStuff();
        // ...
        // ...
        // ...
        dispatch($location);
    }


?>