
<?php

session_start();

include("connection.php");

if(isset($_POST['login'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    $query="SELECT * FROM register_form where username= '$username' ";
    $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)== 1)
        {
                $_SESSION["logged_in"]=true;
                $_SESSION["user_name"] = $username;
                header("location:login-home.php");
            }
        else{
            echo "<script>
                alert('Login failed');
                window.location.href ='login_register.php' 
                </script>";
         }
        }





