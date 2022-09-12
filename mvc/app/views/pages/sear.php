<?php
if(isset($data['title']));
{
  print_r($data['title']);
}
?>


<table class="tab" border="10px" >
   <tr>
      <th>Email</th>
      <th>EmployeeID</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>PhoneNo</th>
      <th>Street</th>
      <th>City</th>
      <th>Country</th>
      <th>Zip</th>
       <th>File</th>
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
  <th> <?=$post->Country?> </th>
  <th> <?=$post->Zip?> </th>
  <th> <img src="<?=$post->File?>" height="50px" weight="50px" > </th>
  
</tr>

   <?php endforeach ?>
