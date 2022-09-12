<?php
class Show extends Database
{
function update($id){
   // die($id);
    // $id = $_GET['EmployeeID'];
    // $email=$postdata['Email'];
    // $empId = $postdata['EmployeeID'];
    // $fname=$postdata['FirstName'];
    // $lname = $postdata['LastName'];
    // $phone=$postdata['PhoneNo'];
    // $street=$postdata['Street'];
    // $city=$postdata['City'];
    // $state=$postdata['State'];
    // $country=$postdata['country'];
    // $zip=$postdata['Zip'];
  //  $file=$target_file;

die($id);
    // public function update($id){
        $id = $_GET['EmployeeID'];
        $this->query("UPDATE 'detail' set EmployeeID='$id',Email='$email',FirstName='$fname',LastName='$lname',PhoneNo='$phone',Street='$street',City='$city',State='$state',country='$country',Zip='$zip' where  EmployeeID='$id'");
        return $this->execute();
    // }
}
public function fetch(){
    $query= "SELECT * from detail";
   $this->query($query);
   $value=$this->resultSet();
   return $value;
}
}