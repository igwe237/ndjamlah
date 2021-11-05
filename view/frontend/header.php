<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <title>ndjamlah.cm</title>
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
              <a href="/ndjamlah/view/frontend/home.php"> <img src="../../public/images/logo.png" alt="logo"> </a>
          </div>
          <form class="search">
              <input type="search" name="search" placeholder="rechercher">
              <button><i class="fas fa-search"></i></button>
          </form>
          <?php if (isset($_SESSION['unique_id'])) {
                  require_once ('../../model/backEnd.php');
                  $sql = mysqli_query($db, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                  if (mysqli_num_rows($sql)  > 0) {
                    $row = mysqli_fetch_assoc($sql);
                  }                 
           ?>
            <div class="connection">
                <div class="data_user">
                  <img src="../../public/images/<?php echo $row['profile_picture'] ?>">
                  <p ><?php echo $row['f_name'] . "" .  $row['l_name'] ?></p>
                  <a href="../../controller/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Déconnexion</a>
                </div>
          </div>
          <?php  } else { ?>     
          <div class="connection">
                <div class="data_user">
                 <i class="fas fa-user" style=" position: relative; top: 20px; margin-right: -10px; height: 30px; color: #3D87FF; "></i>
                 <a href="signup.php" class="button">Inscription</a>
                 <a href="login.php" class="button">Connexion</a>
                </div>
          </div>
        <?php } ?>
        </nav>
      </div>
  </header>
  <div style="height:100px;"></div>
