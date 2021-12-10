

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

</head>
<body>
<?php 

try{
	$db=new PDO("mysql:host=localhost;dbname=emrahydata; charset=utf8",'root','');
	echo "Veritabanı bağlantısı başarılı!";

}
catch (PDOException $e)
{	
	echo $e->getMessage()."veri tabanı baglantısı başarısız!";

	}
 ?>

</body>
</html>




