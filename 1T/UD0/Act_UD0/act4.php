<?php

$strWithSpaces = "      Man In The Middle sOso     ";
printf("%s<br>", trim($strWithSpaces, "")); //rm the spaces of the end and beginning

printf("%s<br>", strlen($strWithSpaces)); //length of a str
printf("%s<br>", strtoupper($strWithSpaces));
printf("%s<br>", strtolower($strWithSpaces));

printf("Position => %d<br>", strpos("María está en el mar negro", "mar")); //position of a str into a str
printf("Position => %d<br>", substr_count(strtolower("Al final todo se quedó en nada"), "a"));

if (!stripos("I love my mum", "MUM")) {
    print("Not Found!");
} else {
    printf("Position => %d<br>", stripos("I love my mum", "MUM"));
}

printf("%s<br>",str_replace("o", "0", strtolower($strWithSpaces)));
