<?php

session_start();




$serverName="localhost";
$dBUsername="root";
$dBPassword="";


$conn = mysqli_connect($serverName,$dBUsername,$dBPassword);

mysqli_select_db($conn,'algoritmo');

$numero=$_POST['numeroPHP'];




$sql="select * from users where Prenotazione='$numero'";

	
$result=mysqli_query($conn,$sql);


$num = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if($num == 1){


exit('<font color="green">Prenotazione di: '.$row["Nome"].' '.$row["Cognome"].'</font>');
	
}
else{
	
exit('<font color="red">Numero prenotazione non presente nella lista!</font>');
	

}

?>