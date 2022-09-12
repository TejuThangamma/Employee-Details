<?php
class mode extends Database
{
function emp($postdata,$target_file){
    $email=$postdata['Email'];
    $empId = $postdata['EmployeeID'];
    $fname=$postdata['FirstName'];
    $lname = $postdata['LastName'];
    $phone=$postdata['PhoneNo'];
    $street=$postdata['Street'];
    $city=$postdata['City'];
    $state=$postdata['State'];
    $country=$postdata['country'];
    $zip=$postdata['Zip'];
    $file=$target_file;
    

    $this->query("INSERT INTO detail (Email,EmployeeID,FirstName,LastName,PhoneNo,Street,City,State,Country,Zip,File)  VALUES ('$email','$empId','$fname','$lname','$phone','$street','$city','$state','$country','$zip','$file')");
     $this->execute();
}

public function fetchData(){
   $query= "SELECT * from detail";
   $this->query($query);
   $value=$this->resultSet();
   return $value;
}

public function readone()
{
    $email = $_POST['mail'];
    $this->query("select Email,Password from detail where Email='$email' ");
    return $this->single();
}
   
public function remove($id){
    $this->query("DELETE  FROM detail WHERE EmployeeID='$id'");
    return $this->execute();
} 
      
 public function empp($empId)
 {
    $this->query("SELECT * FROM detail where EmployeeID='$empId' ");
    return $this->single();
}

public function dis()
{
    // if($_POST['EmployeeID']==$empId){
    
    $empId=$_POST['search'];
    $this->query("SELECT * FROM detail where EmployeeID='$empId' ");
    return $this->resultSet();
}
// else{
//     echo("Id not found");
//   }
// }


public function export(){
    $this->query("select * from detail");
    return $this->resultSet();
   }

public function modeleditsave($data,$target_file){
      
    $email=($data[0]);
    $empId = ($data[1]);
    $fname=($data[2]);
    $lname = ($data[3]);
    $phone=($data[4]);
    $street=($data[5]);
    $city=($data[6]);
    $state=($data[7]);
    $country=($data[8]);
    $zip=($data[9]);
     $file=$target_file;
    $this->query("UPDATE detail set Email='$email',FirstName='$fname',LastName='$lname',PhoneNo='$phone',Street='$street',City='$city',State='$state',country='$country',Zip='$zip',File='$file' where  EmployeeID='$empId'");
    $this->execute();
    echo "success";
   // EmployeeID='$empId'
}

}
?>
    