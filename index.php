<?php

function input(){
        $input ='h';
        $next = ++$input;

        if(strlen($next) > 1)
        {
         $next = $next[0];
        }
        echo $next;
    }

input();
?>





