<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefon = $_POST['Telefon'] ?? '';
    $racun = $_POST['Racun'] ?? '';
    $email = $_POST['Email'] ?? '';
    $grad = $_POST['Grad'] ?? '';
    
    $to = "andrej.jovic01@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: andrej.jovic01@gmail.com" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $email_body = "Telefon: $telefon\n";
    $email_body .= "Racun: $racun\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Grad:\n$grad\n";
    
    if(mail($to, $subject, $email_body, $headers)){
        echo "Email Successfully Sent!";
    }else{
        echo "Failed to send the email!";
    }
}
?>
