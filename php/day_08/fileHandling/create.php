<?php

$file= fopen("example.txt","w");

fwrite($file,"hello world\n");
fwrite($file,"aadim\n");
fwrite($file,"college\n");

fclose($file);
