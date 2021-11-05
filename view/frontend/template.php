<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <title><?= $title; ?></title>
</head>
<body>
  <div class="">
    <header>
      <div class="header1">
        <div class="contact">
          <span><i class="fas fa-phone"></i> 690759196</span>

          <a href="mailto:#"><i class="fas fa-envelope-square"></i> ndjamlah@admin.com</a>
        </div>
        <div class="wish">
          <span><i class="fas fa-heart"></i>mes souhaits</span>
        </div>
      </div>
      <div>
        <nav class="header2">
          <div id="logo">
              <a href="#"> <img src="../../public/images/logo.png" alt="logo"> </a>
          </div>
          <form class="search">
              <input type="search" name="search" placeholder="rechercher">
              <button><i class="fas fa-search"></i></button>
          </form>
          <div class="connection">
                <div class="data_user">
                 <i class="fas fa-user" style=" position: relative; top: 20px; margin-right: -10px; height: 30px; color: #3D87FF; "></i>
                 <a href="signup.html" class="button">Inscription</a>
                 <a href="login.html" class="button">Connexion</a>
                </div>
          </div>
        </nav>
      </div>
    </header>

        <?php $content; ?>


    <footer>
     <p>&copy; Contactez-nous au 690759196</p>
      <div class="social-media">
        <p><i class="fab fa-facebook-f"></i></p>
        <p><i class="fab fa-twitter"></i></p>
        <p><i class="fab fa-instagram"></i></p>
        <p><i class="fab fa-linkedin-in"></i></p>
      </div>
    </footer>
      <!-- Fin du pied de page -->
     
  </div>
      <!-- JavaScript -->

<script type="text/javascript" src="../../public/js/home.js"></script>
</body>
</html>
