
<?php


// $name = $_POST['name'];
// $email= $_POST['email'];
// $message= $_POST['textarea'];
// $to = "febsep96@gmail.com";
// $subject = "Mail From website";
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
// $headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
// header("Location:thankyou.html");

echo "<pre>";

print_r($_POST);
echo '<pre>';



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="https://www.blitzpools.com/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/contact.css">
  </head>
  <body>
    <div class="title">
      <div class="left-side">
        <h2>GET IN TOUCH</h2>
      </div>
      <div class="right-side">
        <p><span>Lorem ipsum</span> dolor sit amet, consectetur adipisicing elit. Quas iure nulla quasi nesciunt consequatur nihil debitis nostrum at expedita, odio.</p>
      </div>
    </div>

    <div class="container">
      <div class="left-side">
        <div class="item">
          <h3>EMAIL</h3>
          <a href="">blitzpools@gmail.com</a>
        </div>
        <div class="item">
          <h3>PHONE</h3>
          <a href="">(000) 000-0000</a>
        </div>
        <div class="item">
          <h3>ADDRESS</h3>
          <span>Khar road, Mumbai</span>
        </div>
        <div class="item">
          <h3>ELSEWHERE</h3>
          <div class="icons">
            <a href="" class = "fa fa-twitter"></a>
            <a href="" class = "fa fa-instagram"></a>
            <a href="" class = "fa fa-facebook"></a>
        
          </div>
        </div>
      </div>
      <div class="right-side">
        <form action="mail.php" method = "post">
          <div class="top">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
          </div>
          <textarea name="textarea" placeholder="Message"></textarea>
          <button type = "submit">SEND MESSAGE</button>
        </form>
      </div>
    </div>
  </body>
</html>
