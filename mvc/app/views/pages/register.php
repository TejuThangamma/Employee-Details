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
<form method="POST" class="squid" action="<?php echo URLROOT.'Pages/insert' ?>" enctype="multipart/form-data">
         <div class="container">
           <h1 class="up"> Register </h1>

            <input type='email' class='email' name='Email' placeholder="Enter your email" required><br>
            <!-- <input type="text" name="EmployeeID" class="EmployeeID" placeholder="Enter your EmployeeID"  ><br> -->
            <input type="text" name="FirstName" class="fname" placeholder="Enter Your FirstName" required><br>
            <input type="text" name="LastName" class="lname" placeholder="Enter your LastName" required ><br>
            <input type="tel" name="PhoneNo" maxlength="10" minlength="10" class="phone" placeholder="Enter your PhoneNo" required ><br>
            <input type="text" name="Street" class="street" placeholder="Enter your Street" required ><br>
            <input type="text" name="City" class="city" placeholder="Enter your City" required><br>
            <input type="text" name="State" class="state" placeholder="Enter your State" required><br>
            <label for="cars"> Select Country :</label>
            <select name="country" class="con">
                <option value="default"></option>
                <option value="India">India</option>
                <option value="Pakisthan">Pakisthan</option>
                <option value="Srilanka">Srilanka </option>
                <option value="China">China </option>

</select>
                 <br><br>
            <input type="tel" name="Zip" class="zip" maxlength="6" minlength="6" placeholder="Enter your zip" required><br>
            <input type="file" name="file" class="File" placeholder="Upload file" required><br> <br>
            <button type="submit" name ="sub" class="btn btn-primary" >Submit</button> <br> <br>
</form>

 <form method="POST" action="<?php echo URLROOT.'/Pages/display1' ?>">
<button type="submit" id='sub' >Display</button>
</form>
</div>
</body>
</html>