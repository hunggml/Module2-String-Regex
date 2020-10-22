<?php

$demo = "hello world ! this is a fu*king world";
echo strlen($demo). "<br>";
echo str_word_count($demo) . "<br>";
echo strrev($demo) . "<br>";
echo strpos($demo,"a") . "<br>";
echo str_replace("world","life",$demo) . "<br>";
echo substr($demo,-1) . "<br>";
echo substr($demo,0,10) . "<br>";
