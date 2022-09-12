<!-- <?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  -->


  <?php require APPROOT . '/views/inc/footer.php'; ?>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style7.css">
<div class="pad">
<form method="POST" action="<?php echo URLROOT.'pages/login' ?>">

<label><b>Admin Name :</b></label>
<input type="text" name="adminname" class="adminname" placeholder="adminname"><br><br>
<label><b>Password :</b></label>
<input type="password" name="pass"  placeholder="password"><br><br>   
<input type="submit" name="Login" class="check" value="Login"> 

</form>
<form method="POST" action="<?php echo URLROOT.'pages/back' ?>">
<input type="submit" name="back" class="check" value="back">
</form>
<?php
if(isset($data['title']));
{
  print_r($data['title']);
}
?>
</div>