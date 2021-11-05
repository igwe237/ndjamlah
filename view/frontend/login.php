<?php 
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>

<?php require_once('header.php') ?>
  <div class="body-inscription">
  <div class="wrapper">
    <section class="form login">
      <div class="header">NDJAMLAH</div>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text">Ceci est un message d'erreur</div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Entrez votre email" required>
        </div>
        <div class="field input">
          <label>Mot de pass</label>
          <input type="password" name="password" placeholder="Choisir un mot de pass" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Se connecter">
        </div>
      </form>
      <div class="link">Pas encore inscrit ? <a href="signup.php">Inscrivez-vous</a></div>
    </section>
  </div>
</div>
  


<script src="../../public/js/password.js"></script>
<script src="../../public/js/login.js"></script>


<?php require_once('footer.php') ?>
