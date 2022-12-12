<?php 
    session_start();
    require_once "../models/patientModel.php";
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_POST['email'];
    $userType = $_POST['userType'];

     if($userName == "" || $password == "" || $confirmpassword == ""|| $email == ""|| $userType == "") {
        header('location: ../views/signUp.php?err=null');
    }else{
        $user = ['userName'=> $userName, 'password'=>$password, 'confirmpassword'=>$confirmpassword, 'email'=>$email, 'userType'=>$userType];
        $status = addUser($user);
        $_SESSION['user'] = $user;

       /*  $user = $firstName."|".$lastName."|".$userName."|".$password."|".$dob."|".$age."|".$gender."\r\n";
        $file = fopen('patientRegistration.txt', 'a');
        fwrite($file, $user);
        fclose($file); */
        if($status){
            header('location: ../views/logIn.php');
        }else{
            echo "Database error...";
        }
       /*  header('location: logInPatient.php'); */
    }
