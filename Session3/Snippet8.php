<?php
include 'Snippet7.php';
use aptech\{Boston, NewYork};
use  function  aptech\{fool, fool2};
$d = new Boston();
$d -> say();
$n = new NewYork();
$n -> say();
fool();
fool2();
?>