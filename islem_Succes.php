<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GİRİŞ BAŞARILI</title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

</head>
<body>


</body>
</html>

	<?php 	

	require_once'connect.php';

	if (isset($_POST['i_send'])) {
		
		$kaydet=$db->prepare("INSERT into bilgiler set 

			b_ad=:b_adi,
			b_soyad=:b_soyad,
			b_mail=:b_mail,
			b_yas=:b_yas
			");
		$insert=$kaydet->execute(array(
			'b_adi'=>$_POST['b_ad'],
			'b_soyad'=>$_POST['b_soyad'],
			'b_mail'=>$_POST['b_mail'],
			'b_yas'=>$_POST['b_yas']
			));
		}

	if(isset($_POST['update'])) {

	$kaydet=$db->prepare("UPDATE bilgiler set 

		b_ad=:b_adi,
		b_soyad=:b_soyad,
		b_mail=:b_mail,
		b_yas=:b_yas
		where b_id={$_POST['b_id']}
	");

	$insert=$kaydet->execute(array(
		'b_adi'=>$_POST['b_ad'],
		'b_soyad'=>$_POST['b_soyad'],
		'b_mail'=>$_POST['b_mail'],
		'b_yas'=> $_POST['b_yas']
	));
	}

if($_GET['b_delete']=="ok") {
	$sil=$db->prepare("DELETE  from bilgiler where b_id=:id");
	$kontrol=$sil->execute(array('id'=>$_GET['b_id']));

	if ($kontrol) {
		echo "silme işlemi başarılı";
		Header("Location:kayit-view.php?durum=ok");
		exit;
	}	
	else {
		echo "silme işlemi başarısız";
		Header("Location:kayit-view.php?durum=no");
exit;
	}
}
?>
<img src="succes2.gif" style="user-select: none;";>
<p style="font-family: 'Righteous', cursive;  font-size:35px;" > İşleminiz Başarıyla tamamlanmıştır.</p>
<a href="kayit-page.php"> <button type="button" class="btn btn-success"><i class="bi bi-caret-left-square-fill"> </i>ANASAYFAYA DÖN</button></a>
<a href="kayit-view.php"> <button type="button" class="btn btn-success"><i class="bi bi-caret-left-square-fill"> </i>KAYITLARI GORUNTULE</button></a>


 <a href="#"><h6><i class="bi bi-chat-left-text-fill"></i> hata bildirimleri için tıkla </h6></a>
</body>
</html>