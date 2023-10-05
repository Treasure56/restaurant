<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // sendMail($email, $name);
    // adminMail($email, $name, $subject, $message);

    echo 'successful, we will get back to you shortly';
    return false;


    function sendMail($email, $name){
        $mailcontent = '
                        <div>
                            <h3 style="color: green; text-align: center;">Restaurant</h3>
                            <p>Good Day '.$name.'....</p>
                            <p>You are getting this mail because you filled in the contact form on our website restaurant. Please be patient with us while we process your request and get back to you...</p><br><br><br>
                            <p>Team restaurant</p>
                            <p style="text-align: center;">2023 &copy; EstateAgency All Rights Reserved</p>
                        </div>
                    ';
        $subject = 'Successful Contact';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <support@restaurant.com>" . "\r\n";
        mail($email, $subject, $mailcontent, $headers);
        return false;
    }

    function adminMail($email, $name, $subject, $message){
        $adminemail = 'support@restaurant.com';
        $mailcontent = '
                        <div>
                            <img src="https://www.restaurant.com/assets/img/logo.png" width="50" height="50">
                            <h3 style="color: green; text-align: center;">restaurant</h3>
                            <p>Customer Name: '.$name.'....</p>
                            <p>Customer Email: '.$email.'....</p>
                            <p>Message:<br>'.$message.'</p>
                            <br><br><br>
                            <p>Team retaurant</p>
                            <p style="text-align: center;">2023 &copy; restaurant All Rights Reserved</p>
                        </div>
                    ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <support@simplicitytreasure@gmail.com>" . "\r\n";
        mail($adminemail, $subject, $mailcontent, $headers);
        return false;
    }

?>