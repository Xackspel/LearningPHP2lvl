<?php
    $greetings = "Welcome";
    $username = "Oleksii";
    $space = " ";

    function HelloUser($greetings, $space, $username){
        echo $greetings.$space.$username;
    }

    function StringLength($variable){
        $doublecode=strlen($variable);
        return $doublecode;
    }

    HelloUser($greetings, $space, StringLength($username));

