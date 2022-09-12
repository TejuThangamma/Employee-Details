<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style5.css">
</head>
<body>
<form method="POST" class="squid" action="<?php echo URLROOT.'Pages/save' ?>" enctype="multipart/form-data">
         <div class="container">
         <h1 class="up"> Update </h1>
            
            <input type='email' class='email' value='<?php echo $data->Email ?>' name='Email' placeholder="Enter your email"><br>
            
            <input type="text" name="EmployeeID" class="EmployeeID" value='<?php echo $data->EmployeeID ?>' placeholder="Enter your EmployeeID"><br>
            
            <input type="text" name="FirstName" class="fname" value='<?php echo $data->FirstName ?>'  placeholder="Enter Your FirstName"><br>
            
            <input type="text" name="LastName" class="lname" value='<?php echo $data->LastName ?>' placeholder="Enter your LastName"><br>
            
            <input type="tel" name="PhoneNo" class="phone" maxlength="10" minlength="10" value='<?php echo $data->PhoneNo ?>' placeholder="Enter your PhoneNo"><br>
            
            <input type="text" name="Street" class="street" value='<?php echo $data->Street ?>' placeholder="Enter your Street"><br>
            
            <input type="text" name="City" class="city" value='<?php echo $data->City ?>' placeholder="Enter your City"><br>
            
            <input type="text" name="State" class="state" value='<?php echo $data->State ?>' placeholder="Enter your State"><br>
            <label for="cars"> Select Country :</label>
            <select name="country" class="con">
                <!-- <option value="default"></option> -->
                <option value="India" <?php if($data->Country == "India") echo "selected" ?>>India</option>
                <option value="Pakisthan" <?php if($data->Country == "Pakisthan") echo "selected" ?>>Pakisthan</option>
                <option value="Srilanka" <?php if($data->Country == "Srilanka") echo "selected" ?>>Srilanka </option>
                <option value="China" <?php if($data->Country == "China") echo "selected" ?>>China </option>

            </select>
             <br><br>
            <input type="tel" name="Zip" class="zip" maxlength="6" minlength="6" value='<?php echo $data->Zip ?>' placeholder="Enter your zip"><br>
            <input type="file" name="File" class="File" value='<?php echo  $file->$target_file; ?>' required ><br> <br>
            <button>Update </button> <br> <br> 
</form>
</div>
</body>
</html>