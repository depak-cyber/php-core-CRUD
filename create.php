<?php
 //create a connection two files and create a database
   include 'config.php';

   //checking if submit button on the form is click, then send to the database
   if(isset($_POST['submit'])){
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
   }

   //insert a data into table
   $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

   //execute the quesry
   $result = $conn->query($sql);

   if($result ==TRUE) {
    echo 'New record created successful';
   }else{
    echo 'error:' . $sql . "<br>" . $conn->error;
   }
   ?>

   <!DOCTTYPE html>
   <html>
   <body>
   <h2>Sighup form</h2>


   <form actions='' method='POST'>
      <fieldset>
        <legend>Personal Information</legend>
        First Name:<br>
        <input type='text'  name='firstname'>
        <br>
        Last Name:<br>
        <input type='text'  name='lastname'>
        <br>
        Email:<br>
        <input type='text'  name='email'>
        <br>
        Password:<br>
        <input type='text'  name='password'>
        <br>
        Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">
      </fieldset>


 


   </form>


   </body>



   </html>
