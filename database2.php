<?php

session_start();




$serverName="localhost";
$dBUsername="root";
$dBPassword="";


$conn = mysqli_connect($serverName,$dBUsername,$dBPassword);

mysqli_select_db($conn,'algoritmo');

$nome=$_POST['nomePHP'];
$cognome=$_POST['cognomePHP'];



$sql="select * from users where Nome='$nome' and Cognome='$cognome'";

	
$result=mysqli_query($conn,$sql);


$num = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if($num == 1){


exit('<font color="green">Numero Prenotazione: '.$row["Prenotazione"].'</font>');
	
}
else{
	
	exit('<font color="red">Persona non in lista!</font>');
	

}

?>