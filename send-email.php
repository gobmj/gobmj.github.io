if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'govindmj2002@gmail.com';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $to" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo '<p>Your message has been sent.</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message.</p>';
    }
}