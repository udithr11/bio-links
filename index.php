<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="index.css">

    <title>Hello, world!</title>
  </head>
  <body>
    

  <!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="shareModalLabel">Share this Bio Link</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="qr_code_container">
                <img src="assets/QR.svg" alt="QR_code">
              </div>
              
            </div>
            <div class="col-md-7">
              <div class="share-container-wrapper">
                <a href="#" class="share-container">
                  <div class="share-new" >
                    <div class="share-container-inner">
                    <img src="assets/x_logo.svg" alt="x-logo" class="share-images">
                    </div>
                    <p>Share on Twitter</p>
                  </div>
                  
                  <img src="assets/right.svg" alt="">
                </a>
                <a href="#" class="share-container">
                  <div class="share-new" >
                    <div class="share-container-inner">
                    <img src="assets/x_logo.svg" alt="x-logo" class="share-images">
                    </div>
                    <p>Share on Facebook</p>
                  </div>
                  
                  <img src="assets/right.svg" alt="">
                </a>
                <a href="#" class="share-container">
                  <div class="share-new" >
                    <div class="share-container-inner">
                    <img src="assets/x_logo.svg" alt="x-logo" class="share-images">
                    </div>
                    <p>Share via Mail</p>
                  </div>
                  
                  <img src="assets/right.svg" alt="">
                </a>
              </div>

              
              
            </div>
            <div class="copy-link">
              <input type="text" id="copy_input" value="www.google.com" readonly>
              <div id="copy_button">Copy</div>
            </div>

          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    

    <div class="wrapper">
      <div class="full-content">
      <div class="button-wrapper">
      <div class="share-button" data-bs-toggle="modal" data-bs-target="#shareModal">
        <i class="fa-solid fa-arrow-up-from-bracket" style="color: #000000;"></i>
      </div>
      </div>

      

      <img src="assets/dp.jpeg" alt="profile_picture" id="profile_picture">
      <div class="name_container">
        <p id="name">Jo Franco</p>
        <img src="assets/verified.svg" alt="" id="verified">

      </div>
      <?php
          $social_links = [
              "https://www.instagram.com" => "fa-brands fa-instagram",
              "https://www.twitter.com" => "fa-brands fa-x-twitter",
              "https://www.tiktok.com" => "fa-brands fa-tiktok",
              "https://www.youtube.com" => "fa-brands fa-youtube",
              "https://www.spotify.com" => "fa-brands fa-spotify"
          ];
          ?>

      <div class="social_container">
          <?php foreach ($social_links as $href => $icon_class) : ?>
              <a href="<?php echo $href; ?>" target="_blank">
                  <i class="<?php echo $icon_class; ?>"></i>
              </a>
          <?php endforeach; ?>
      </div>


      <?php
      
      $links = [
          "Free Life Reboot Prompt Pack" =>"https://www.google.com/",
          "My Podcast: Not Your Average Jo" =>"https://www.google.com/",
          "Free 7 Day Journal Course!" =>"https://www.google.com/",
          "How I Learn Languages" =>"https://www.google.com/",
          "My YouTube Channel" =>"https://www.google.com/",
          "My Book Recommendations" =>"https://www.google.com/",
          "My Netflix Show" =>"https://www.google.com/",
          "My Website" =>"https://www.google.com/",
          "Learn How to Journal" =>"https://www.google.com/",
          "My Favorite Products" =>"https://www.google.com/",
          "Credit Card Recommendations" =>"https://www.google.com/",
          "Work with Me" =>"https://www.google.com/"
      ];
      ?>
      
      <div class="link_container">
          <?php foreach ($links as $link => $href) : ?>
              <a href="<?php echo $href; ?>" class="link_each" target="_blank">
                  <?php echo $link; ?>
              </a>
          <?php endforeach; ?>
      </div>

      <div class="logo">
        <img src="assets/logo_tail.svg" alt="brand-logo">
      </div>
      </div>

      
        <img class="background" src="assets/glassmorphism.jpg" alt="rotating_image">
      
      

    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script>
      document.getElementById("copy_button").addEventListener("click", function() {
        var copyText = document.getElementById("copy_input");

        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices


        document.execCommand("copy");

        this.textContent = "Copied";

        
      });


    </script>
  </body>
</html>
