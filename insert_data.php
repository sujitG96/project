<?php include('dbcon.php'); ?>
<?php
   
   if (isset($_POST['add_student'])) {
       $fname = $_POST['f_name'];
       $lname = $_POST['l_name'];
       $age = $_POST['age'];

       if ($fname == "" || empty($fname)) {
          header('location:index.php?message=Fill the First Name');
       }

       else {
           $query= "insert into student(first_name,last_name,age)values('$fname','$lname','$age')";
           
           $result= mysqli_query($connection,$query);

           if (!$result) {
               die("Query Failed".mysqli_error($connection));
           }
           else{
            header('location:index.php?insert_message=Data Added Suessfully');
           }
       }
   }
?>