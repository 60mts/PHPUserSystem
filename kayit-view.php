<html> 
  <head>
    <title> KAYITLARI GÖRÜNTÜLE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  </head>
  <body> 
<?php require_once 'connect.php' ;

$bilgilerc=$db->prepare("SELECT from * bilgiler")

	?>
  <div class="card text-center">
  <div class="card-header">
   KULLANICI KAYITLARIMIZ
  </div>
  <div class="card-body">
  <table class="table table-success table-striped">  <tr>
<th> <i class="bi bi-sort-numeric-down">  </i> ID</th>
<th> <i class="bi bi-file-check"> </i> AD</th>
<th> <i class="bi bi-file-check"> </i> SOYAD</th>
<th> <i class="bi bi-envelope-fill"> </i>  MAİL</th>
<th> <i class="bi bi-person-check-fill"></i> YAŞ</th>
<th> <i class="bi bi-watch"></i> KAYIT SAATİ</th>
<th> <i class="bi bi-pencil-square"></i> EYLEMLER</th>
</tr>
<tr>
  <?php 
  $bilgilerims=$db->prepare("SELECT *from bilgiler");
  $bilgilerims->execute();
  while ($bilgilerc=$bilgilerims->fetch(PDO::FETCH_ASSOC)) {?>
  
  <td><?php  echo $bilgilerc['b_id']?> </td>
  <td><?php  echo $bilgilerc['b_ad']?> </td>
  <td><?php  echo $bilgilerc['b_soyad']?> </td>
  <td><?php  echo $bilgilerc['b_mail']?> </td>
  <td><?php  echo $bilgilerc['b_yas']?> </td>
  <td><?php  echo $bilgilerc['b_zaman']?> </td>

  <td><a href="user-delete-page.php"><button id="delete" class="btn btn-danger"><i class="bi bi-x-lg"></i></button></a>
  <a href="user-rename.php?b_id=<?php echo $bilgilerc['b_id']?>">  <button id="edit" class="btn btn-warning"> <i class="bi bi-pencil-square"></i></button></a>
 <a href="#"> <button id="detaylı-secenekler" class="btn btn-warning"> <i class="bi bi-three-dots-vertical"></i></button></td></a>
</tr>
<?php   } ?>
</table>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
  © 2021  by Muhammed Tayyib Şahin
  </div>
</div>


</body>
</html>