<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Employee Details',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

      public function insert()
    {
    
      $target_dir='../public/img';
      $target_file=$target_dir . basename($_FILES['file']['name']);
      move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
      var_dump($_POST);
      $models=$this->model('mode');
      $postdata=$_POST;
      $models->emp($postdata,$target_file);
      // header('Location: http://localhost:81/mvc/pages/log');
      $redirectUri=URLROOT. "index/log";
      header('Location:' .$redirectUri);
    }
    public function display1(){
      $model=$this->model('mode');
      $posts=$model->fetchData();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/display',$data);
    }
    

    public function add(){
      $this->view('pages/register');
    }


    public function login(){
      
      if($_POST['adminname'] == '' || ($_POST['pass'] == ''))
      {
        $data=[
          'title'=> 'fill the field!'
         ];
         $this->view('Pages/admin' , $data);
      }
      if($_POST['adminname'] != 'Adminname' || ($_POST['pass'] != 'password'))
      {
        $data=[
          'title'=> 'invalid user and password!'
        ];
        $this->view('pages/admin',$data);

      }

    if(isset($_POST)){
      $ad=$_POST['adminname'];
      $pass=$_POST['pass'];
    if(Adminname==$ad && password==$pass)
     {

      
      session_start();
      $_SESSION['ad']='adminname';
      // header('Location: http://localhost:81/mvc/pages/log');
      $redirectUri = URLROOT." index/log ";
      header("Location:".$redirectUri);
      exit;
     }
    }
   }
  
  public function log()
  { 
   session_status();
      if(isset($_SESSION['ad']))
      {
        
      
    $model=$this->model('mode');
    $posts=$model->fetchData();
   $data=[
    'posts'=>$posts
   ];
    $this->view('pages/user' ,$data);
  }
  else
  {
    header('Location: http://localhost:81/mvc/pages/regi');
    exit;
  }
}
public function back(){
  $this->view('pages/index');

}

  public function display(){
    if(isset($_SESSION['ad']))
    {
    $this->view('pages/register');
  }
  else{
    $this->view('pages/admin');
  }
  }

  public function regi(){
    error_reporting(E_ERROR | E_PARSE);
    $this->view('pages/admin');
  }
  
   public function display2(){
     $model=$this->model('mode');
      $posts=$model->fetchData(); 
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/user',$data);

   }
   
   public function delete($id){
    
     $models=$this->model('mode');
     $models->remove($id);
     $model=$this->model('mode');
       $posts=$model->fetchData();
      $data=[
       'posts'=>$posts
      ];
      $this->view('pages/user',$data);
   }

  

  public function edit($empId){
    if(isset($_SESSION['ad']))
    {
      
    
    $models=$this->model('mode');
    $models1=$models->empp($empId);
    $this->view('pages/update',$models1);
    }
    else{
      $this->view('pages/admin');
    }
  }

  public function save(){
    $target_dir='../public/img';
      $target_file=$target_dir . basename($_FILES['File']['name']);
      move_uploaded_file($_FILES["File"]["tmp_name"],$target_file);
    $email=$_POST['Email'];
    $empId = $_POST['EmployeeID'];
    $fname=$_POST['FirstName'];
    $lname =$_POST['LastName'];
    $phone=$_POST['PhoneNo'];
    $street=$_POST['Street'];
    $city=$_POST['City'];
    $state=$_POST['State'];
    $country=$_POST['country'];
    $zip=$_POST['Zip'];
    $file=$target_file;
    $data=[$email,$empId,$fname,$lname,$phone,$street,$city,$state,$country,$zip,$file];
    $modal=$this->model('mode');
      $target_file=$target_dir . basename($_FILES['File']['name']);
    $model1=$modal->modeleditsave($data,$target_file);
    header('Location:http://localhost:81/mvc/pages/log');

    
  }


public function sw(){
  

  $model=$this->model('mode');
  $posts=$model-> dis();
  if($posts){
  $data=[
    'posts'=>$posts
   ];

  $this->view('pages/sear',$data);
  }

  else{
    $data=[
      'title'=> 'ID not found!'
     ];
     $this->view('Pages/sear' , $data);
    //  die('ID doesnt exist');
    // header('Location:http://localhost:81/mvc/pages/log');
  }
}



   public function signout(){
      session_unset();
      session_destroy();
   $this->view('pages/admin');

}
public function export()
{
  $exp = $this->model('mode');
  $result = $exp->export();
  $filename =  "emp.csv";
  $file = fopen('php://output', 'w');
  $head = array("email","employeeid", "Fname", "Lname",  "Mobile", "street", "city", "state", "country", "pincode", "file");
  fputcsv($file, $head);
  foreach ($result as $row) {
    $lineData = array($row->Email, $row->EmployeeID, $row->FirstName, $row->LastName, $row->PhoneNo, $row->Street, $row->City, $row->State, $row->Country, $row->Zip, $row->File);
    fputcsv($file, $lineData);
    header("Content-Description:File Transfer");
    header("content-Disposition: attachment;filename=\"$filename\"");
    header('Content-type:application/csv');
  }
  fclose(($file));
  exit;
}
  }
