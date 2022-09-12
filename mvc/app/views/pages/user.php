<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style8.css"> 

</head>
<body>
    <div class="container-1">
    <form method="POST" class="squid" action="<?php echo URLROOT.'Pages/display' ?>" enctype="multipart/form-data">
    <h2>Welcome Admin</h2>
    <button type="submit" class='add2' >Add user</button><br> <br>
   </form>

   <form method="POST" class="squ" action="<?php echo URLROOT.'/Pages/sw' ?>">
     <input type='text' class='search' name='search' placeholder="Search"> <br> <br>
    <button class="search1">Search</button>
</form>
<br>
<br>
<form method="POST" class="expo" action="<?php echo URLROOT.'/Pages/export' ?>">
      <button type="submit" class='export' >Export</button> <br> <br>
   </form>  
   <br>
<br>

    <form method="POST" class="squ" action="<?php echo URLROOT.'/Pages/signout' ?>">
      <button type="submit" class='add1' >Logout</button> <br> <br>
   </form>   

<table class="tab" border="10px" >
   <tr class="tr2">
      <th>Email</th>
      <th>EmployeeID</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>PhoneNo</th>
      <th>Street</th>
      <th>City</th>
      <th>State</th>
      <th>Country</th>
      <th>Zip</th>
      <th>File</th>
      <th>Edit</th>
      <th>Delete</th>
     
</tr>


<?php foreach($data['posts']as $post):?>
   <tr>
  
  <th> <?=$post->Email?></th>
 <th><?=$post->EmployeeID?></th>
  <th> <?=$post->FirstName?> </th>
  <th> <?=$post->LastName?> </th> 
  <th> <?=$post->PhoneNo?> </th>
  <th> <?=$post->Street?> </th>
  <th> <?=$post->City?> </th>
  <th> <?=$post->State?> </th>
  <th> <?=$post->Country?> </th>
  <th> <?=$post->Zip?> </th>
  <th> <img src="<?=$post->File?>" height="50px" weight="50px" > </th>
  <th><a href="<?php echo URLROOT.'Pages/edit/' .$post->EmployeeID ?>" ><input type="button"value="edit" class="edit"></a></th>
  <th><a href="<?php echo URLROOT.'Pages/delete/'.$post->EmployeeID; ?>"><input type="button"value="delete" class="delete"></a></th>

</tr>
   <?php endforeach ?>
</div>
</table> <br> <br>


 
</body>
</html>