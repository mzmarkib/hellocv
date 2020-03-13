<?php

session_start();

include 'config.php';


// register script

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];

    $s = "select * from users_data where email = '$email'";

    $result = mysqli_query($con , $s);
    $num = mysqli_num_rows($result);


    if($num == 1){
        //echo 'email already taken';
        header("location:../register.php?error");
    }
    else{
        //echo 'new here';
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header("location:../index.php");
        $reg = "insert into users_data(email, username, password, phone) values ('$email' , '$username' , '$password' , '$phone')";
        mysqli_query($con , $reg);
    }
}

// login script

else{

    $email = $_POST['email'];
    $password = $_POST['pass'];

    
    $s = "select * from users_data where email = '$email' && password = '$password'";   

    $result = mysqli_query($con , $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        //echo 'Login success';
        $followingdata = $result->fetch_assoc();
        
        $usern =  $followingdata['username'];
        $ifsaved =  $followingdata['cv_template'];
        if($ifsaved != ''){
            $_SESSION['cv_link'] = $ifsaved;
        }
        

        $_SESSION['username'] = $usern;
        $_SESSION['email'] = $email;
        header("location:../index.php");
    }
    else{
        //echo 'Wrong password or email';
        header("location:../login.php?error");
    }
}


