<?php 

   
    $connect = mysqli_connect("localhost:3307:3307", "root", "", "form");



    if(isset($_POST['send'])){

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

   

    $sql = "INSERT INTO students(full_name, email, gender) VALUES('$full_name', '$email', '$gender')";

    $result = mysqli_query($connect, $sql);

    if($result){

        echo "<script> alert ('Data is successfully inserted into the database!') </script>";
          
     }else{
    
        echo "<script> alert ('Errors insertion try it again!') </script>";
    }
    
}
              
?>