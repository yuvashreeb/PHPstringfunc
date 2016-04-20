<?php
//$input=$_GET['name'];
//$maxlength=10;
//if(strlen($input)>$maxlength){
//    echo 'Sorry,too loong<br>';
//}else{
//    echo'ok<br>';
//}

$name='yuva shree bandapally';
echo substr($name,0,4).'<br>';
$body='This is article.It\'s quite long and could go on for some time,leaving you no room on the page';
$body=(strlen($body))>25?substr($body,0,25)."....":$body;
echo $body;

echo '<h3>strtolower</h3>';
$name='YuVa';
echo strtolower($name).'<br>';

$username='YuvaShreeBandapally';
$username_lc=strtolower($username);
$input1='Yuvashreebandapally';
if(strtolower($input1)==$username_lc){
    echo 'ok';
}else{
    echo 'Doesnt match';
}

echo '<h3>htmlentities</h3>';
//echo '<script>alert("Hello")</script>';
$fromdb='<script>alert("Hello")</script>';
//charcr to entities
$sanitised=  htmlentities($fromdb);
echo $sanitised;

echo '<h3>trim</h3>';
$userName='   yuva            ';
if(strlen(trim($userName))==0){
    echo '<br>Please enter name';
}else{
    echo '<br>Fine!';
}

echo '<h3>Numberformat</h3>';
$number=10000000;
$number--;
$numberformatted=number_format($number,0);
echo 'You have &pound '.$numberformatted.'<br>';

$pi=pi();
$pishort=  number_format($pi,3);
echo $pishort.'<br>';

if(isset($_POST['text'])){
    echo nl2br(htmlentities($_POST['text']));
}

?>
<form action="" method="post">
    <textarea name="text" cols="30" rows="10"></textarea><br>
    <input type="submit"/>
</form>
