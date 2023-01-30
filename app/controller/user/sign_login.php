<?php 

include "config/function.php";

if (isset($_POST['signup_btn'])) {
    
    $refer_id     = $_POST['refer_id'];
    $name         = $_POST['name'];
    $user_name    = $_POST['user_name'];
    $email_id     = $_POST['email_id'];
    $phone_no     = $_POST['phone_no'];
    $password     = $_POST['password'];
    $pin          = $_POST['pin'];
    $country      = $_POST['country'];
    $gender       = $_POST['gender'];
    $placemnet_id = $_POST['placemnet_id'];
    $placement    = $_POST['placement'];
        
    $insert = "INSERT INTO  users (`refer_id`,`name`,`user_name`,`email_id`,`phone_no`,`password`,`pin`,`country`,`gender`,`placemnet_id`,`placement`) 
                        VALUES ('$refer_id','$name','$user_name','$email_id','$phone_no','$password','$pin','$country','$gender','$placemnet_id','$placement')
                                   
                 ";
    if (mysqli_query($conn,$insert)==TRUE) {
        header('location:login.php');
    }else{
        $mess="Sorry!";
    }
}



// Login===========

    if (isset($_POST['login_btn'])) {
        
       $userid_email =htmlspecialchars($_POST['userid_email']);
       $password = $_POST['password'];

       if (!empty($userid_email) AND !empty($password) ) {

            $data = SelectData('users', "WHERE email_id='$userid_email' OR user_name='$userid_email' ");  
            $result=$data->fetch_object();
            
            if ($data->num_rows>0) {
                if ($password==$result->password) {                    
                   $_SESSION['user']=$result->user_name;
                    Reconect('index.php');                
                }else{
                    $mess =  "Password does not match.";
                }                
            }else{
                $mess = "User name not match";
            }
          
       }else{
        $mess = "All fill are required fields";
       }
        
    }
