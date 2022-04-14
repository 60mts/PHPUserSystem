<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete user</title> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <?php 
    require_once 'connect.php';
    $sil=$db->prepare("DELETE  from bilgiler where b_id=:b_id");
    $kontrol->execute(array('b_id'=>$_GET['b_id']));
    ?><div id="form-out" style="margin:50px;  margin:40px; ">
    <h5>KAYDINIZI SİLİN</h5>
    <form action="islem_Succes.php" method="POST">
    <input type="hidden" name="b_id" value=" <?php echo $bilgilerimc['b_id'] ?>"  readonly="">
   <input type="text" class="form-control" readonly="" style="width:400px; margin-top:20px;" value="<?php echo $bilgilerimc['b_ad'] ?>" name="b_ad" >
  <input type="text" class="form-control"  readonly="" style="width:400px;margin-top:20px;" value="<?php echo $bilgilerimc['b_soyad'] ?>" name="b_soyad" >
  <input type="email" class="form-control"   readonly=""  style="width:400px; margin-top:20px;" value="<?php echo $bilgilerimc['b_mail'] ?>" name="b_mail" >
  <input type="text" class="form-control"   readonly=""  style="width:400px; margin-top:20px;"  value="<?php echo $bilgilerimc['b_yas'] ?>" name="b_yas" >
<button type="submit" name="delete" >SİL </button>
</body>
</html>