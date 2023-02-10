<?php


email_send(
    "Congratulations on your successful registration!",

    "Congratulations!",
    "
    
       Dear ". $name . ",<br><br>

       <br><br> 
       Username:". $user_name." <br>
       Password:" . $password ." <br>
       PIN:" . $pin . " <br>
       
       <br>

        We would like to extend our warmest congratulations on your successful registration with us! We are so glad to have you as a member of our community. <br><br>

        As a valued member, you will now have access to a range of exclusive benefits and privileges. From exclusive promotions and discounts to special access to content, you will be the first to know about everything happening within our community.<br><br>

        We are committed to providing you with the best experience possible and look forward to building a long-lasting relationship with you. If you have any questions or need assistance, our customer support team is always here to help.<br><br>

        Once again, congratulations on your successful registration. We are excited to have you with us!

        <br><br><b>Best regards,</b>
        <br>
        Team<br>
        Punus Finance International   
    
    ", $email_id
);





?>