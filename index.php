<?php
session_start();
include('connection.php');
include('functions.php');
// redirect to login if not logged in
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css">

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    

    <title>Blog Website</title>
  </head>
  
  <body>
    
  <?php
      include './fragments/header.php';
      ?>
    <main>
      <section class="section-home">
        <div class="home">
          <div class="home-text-box">
            <h1 class="heading-primary">
              Talk about what you're passionate about, in your own way
            </h1>
            <p class="home-description">
              Discover a world of ideas and stories on our online publishing and
              blogging platform. Share your voice with a global audience and
              connect with like-minded individuals. Join our community today and
              start exploring the power of online publishing.
            </p>
            <a href="#" class="btn btn--full margin-right-sm">Sign up</a>
            <a href="#" class="btn btn--outline">Login</a>
          </div>
          <div class="home-img-box">
            <img
              src="img/img3.jpg"
              class="home-img"
              alt="home image"/>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <p class="copyright">
            Copyright &copy; 2023 <br> by Khalil and Mouadh, <br>All rights reserved.
          </p>
        </div>
        </div>
    </footer>
  </body>
</html>
