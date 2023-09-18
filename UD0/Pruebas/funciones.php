<?php

function incrementa($a)
{
    $a += 1;
}

$a = 1;
echo $a;
incrementa($a);

printf("<br> => %d<br>", $a);