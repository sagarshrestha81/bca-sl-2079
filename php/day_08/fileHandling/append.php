<?php

$file= fopen("example.txt","a");

fwrite($file,"test2");

fclose($file);
