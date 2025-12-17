<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
print "お名前は、".$name."<br />";

$count = htmlspecialchars($_POST['count'],ENT_QUOTES);
print "ご希望の商品は、".$count."<br />";

$choice = htmlspecialchars($_POST['choice'],ENT_QUOTES);
print "注文数は、".$choice."<br />";