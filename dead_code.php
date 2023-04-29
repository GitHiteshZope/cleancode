<?php 
    //Not Good
    function oldRequestModule(string $url): void
    {
        // ...
    }

    function newRequestModule(string $url): void
    {
        // ...
    }

    $request = newRequestModule($requestUrl);
    inventoryTracker('apples', $request, 'www.inventory-awesome.io');



    //Good
    function requestModule(string $url): void
    {
        // ...
    }

    $request = requestModule($requestUrl);
    inventoryTracker('apples', $request, 'www.inventory-awesome.io');

?>