<?php 

if (isset($_POST['signup_btn'])) {
    
    $frist_name   = $_POST['frist_name'];
    $last_name    = $_POST['last_name'];
    $phone_no     = $_POST['phone_no'];
    $email        = $_POST['email'];
    $country      = $_POST['country'];
    $refer_id     = $_POST['refer_id'];
    $placemnet_id = $_POST['placemnet_id'];
    $placement    = $_POST['placement'];
    $user_name    = $_POST['user_name'];
    $password     = $_POST['password'];
    $trans_pin    = $_POST['trans_pin'];



    $insert = "INSERT INTO  users (frist_name,last_name,phone_no,email,country,refer_id,placemnet_id,placement,user_name,password,trans_pin) 
                        VALUES ('$frist_name','$last_name','$phone_no','$email','$country','$refer_id','$placemnet_id','$placement','$user_name','$password','$trans_pin') ";

    if (mysqli_query($conn,$insert)==TRUE) {
        $mess="Success!";
    }else{
        $mess="Sorry!";
    }
    
}






// Login===========

    if (isset($_POST['login_btn'])) {
        
       $userid_email =htmlspecialchars($_POST['userid_email']);
       $password = $_POST['password'];

       if (!empty($userid_email) AND !empty($password) ) {

            $data = SelectData('users', "WHERE email='$userid_email' OR user_name='$userid_email' ");  
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












?>