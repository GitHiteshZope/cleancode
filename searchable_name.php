<?php 

    //Not good
    class User
    {
        public $access = 7;
    }
    
    
    if ($user->access == 7) {
        // do this
    }else{
        //do this
    }

    

    //Good
    class Useraccess
    {
        public const ACCESS_READ = 1;

        public const ACCESS_CREATE = 2;

        public const ACCESS_UPDATE = 4;

        public const ACCESS_DELETE = 8;

        // User as default can read, create and update something
        public $access = self::ACCESS_READ | self::ACCESS_CREATE | self::ACCESS_UPDATE;
    }

    if ($user->access == Useraccess::ACCESS_UPDATE) {
        // do edit ...
    }

    if ($user->access == Useraccess::ACCESS_DELETE) {
        // do delete ...
    }
?>