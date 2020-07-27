<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/icon.png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" 
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Making A Mark 2020</title>
</head>

<body>
  <!-- NAV BAR GOES HERE -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav" id="main-nav">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="img/mlogo.png" width="50" height="50" alt="">
        <h4 class="d-inline align-middle">Making A Mark</h4>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="intro.html" class="nav-link">Introduction</a>
          </li>
          <li class="nav-item">
            <a href="virtual.html" class="nav-link">Exhibition</a>
          </li>
          <li class="nav-item">
            <a href="tutor.html" class="nav-link">Tutor</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link active">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <!-- CONTACT FORM SECTION -->
 <?php 
     $Msg = "";
      if(isset($_GET['error']))
      {
        $Msg = " Please Fill in the Blanks ";
        echo '<div class="alert alert-danger">'.$Msg.'</div>';
      }

      if(isset($_GET['success']))
      {
        $Msg = " Your Message Has Been Sent ";
        echo '<div class="alert alert-success">'.$Msg.'</div>';
      }
                        
  ?>

<!-- CONTACT SECTION -->
<section id="contact" class="contact-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-6 order-1 text-center">
                  <h4 class="card-title"><br><br>If you have any questions about any of the peices of art work, 
                    please do not esertate in getting intouch where I will be 
                    happy to answer any questions</h4>
  
                    <a href="https://www.facebook.com/marklippettart/" target="blank" class="my-text">
                      <i class="fab fa-facebook fa-3x"></i>
                    </a>
                    <a href="https://www.instagram.com/marklippettartist/?hl=en" target="blank" class="my-text">
                      <i class="fab fa-instagram fa-3x"></i>
                    </a>
                    <a href="https://twitter.com/planivaar?lang=en" target="blank" class="my-text">
                      <i class="fab fa-twitter fa-3x"></i>
                    </a>
                    <a href="mailto:marklippett@hotmail.co.uk" target="blank" class="my-text">
                    <i class="fas fa-envelope fa-3x"></i>
                    </a>
                </div>

                <div class="col-md-6 order-2 text-center mt-2">
                    <h2 class="card-title">Contact Us</h2>

                    <form action="process.php" method="post">
                      <input type="text" name="Name" placeholder="Name" class="form-control mb-2">
                      <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                      <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                      <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                      <button class="btn btn-block btn-primary" name="btn-send"> Send </button>
                    </form>

                </div>
            </div>
        </div>
    </section>

  



  <!-- FOOTER SECTION -->
  <footer id="main-footer" class=" bg-dark text-white fixed-bottom">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12 text-center">
          <p>
            <a href="https://evanswebsolutions.co.uk/" target="blank">www.evanswebsolutions.co.uk</a>
              Copyright &copy;<span id="year"></span>
          </p>
        </div>
      </div>
    </div>
  </footer>




  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // LIGHTBOX INIT 
    $(document).on('click', '[data-toggle="lightbox"]', function (e) {
      e.preventDefault();
      $(this).ekkoLightbox();
    });

  </script>
</body>

</html>