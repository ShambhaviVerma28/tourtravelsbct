<?php

include("connection.php");

if(isset($_POST['register'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];
    

    $user_exists_query= " SELECT * FROM register_form where username= '$username'";
    $result= mysqli_query($connection, $user_exists_query);
        if(mysqli_num_rows($result)> 0)
        {
                echo "<script>
              alert('$result_fetch[username]- Username already exists');
              window.location.href ='home.php' 
                </script>";
        }
        else{
            if($password==$confirm_password){
            $query="INSERT INTO register_form(`username`, `password`, `confirm_password`) VALUES ('$username','$password', '$confirm_password')";

            if(mysqli_query($connection, $query))
            {
                echo "<script>
                alert('Registration successfull!');
                window.location.href ='home.php' 
                </script>";
            }
        }
            else{
                echo "<script>
            alert('Password do not match');
            window.location.href ='home.php' 
            </script>";
            }
        }
    }
    else
    {
        echo "<script>
            alert('Cannot run query');
            window.location.href ='home.php' 
        </script>";
    }