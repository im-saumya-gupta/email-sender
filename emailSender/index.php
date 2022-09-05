<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email Sender</title>
    <link rel="stylesheet" href="style.css" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body class="">
    <div class="container my-5">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-container d-flex flex-column py-5">
        <label for="Email:">Email:</label><input type="email" class="py-2 my-2" name="email"/> 
        <label for="Email:">Subject:</label><input type="text" class="py-2 my-2" name="subject" />
        <label for="Email:">Message:</label><textarea
        class="py-2 my-2"
          id="w3review"
          name="w3review"
          rows="6"
          cols="40"
          name="message"
        ></textarea>
        <button name="esubmit" type="submit" class="btn btn-dark text-white py-2 my-5">Send</button>
      </form>
    </div>
  </body>
</html>
<?php
  if(isset($_POST['esubmit'])){

  $to="saumyagupt24@gmail.com";
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $form=$_POST['email'];
  $headers="From: $form";

  mail( $to,$subject, $messag, $headers);
  echo "Mail Send";
  }
?>
