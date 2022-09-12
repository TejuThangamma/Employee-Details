<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style6.css">
<h1 class="port">Welcome to Portal</h1>
<form method="post" action="<?php echo URLROOT . 'Pages/regi'?>" >
<button type="submit" name ="Admin" class="admin" >Admin</button>
</div>
</form>
<form method="POST" action="<?php echo URLROOT.'/Pages/display1' ?>">
<button type="submit" id='sub' >Guest</button>
</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>