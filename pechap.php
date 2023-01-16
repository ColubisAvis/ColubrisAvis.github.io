<?php
if (isset($_POST['email'], $_POST['nick'], $_POST['typ'], $_POST['temat'], $_POST['tresc'])){
$email = $_POST['email'];
$nick = $_POST['nick'];
$typ = $_POST['typ'];
$temat = $_POST['temat'];
$tresc = $_POST['tresc'];

echo "E-mail: $email<br>";
echo "Nick: $nick<br>";
echo "Typ: $typ<br>";
echo "Temat: $temat<br>";
echo "Treść: $tresc<br>";
  if (isset($_POST['userfile']))
  {
    $userfile=$_POST['userfile'];
    echo "$userfile<br>";
}
else{
echo 'Wpisz dane';
}
?>
