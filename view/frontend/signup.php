<?php 

  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>

<?php include_once 'header.php'; ?>
  <div class="body-inscription">
  <div class="wrapper">
    <section class="form signup">
     <div class="header">NDJAMLAH</div>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="on">
        <div class="error-text">Ceci est un message d'erreur</div>
        <div class="form-details">
          <div class="field input">
            <label> Noms</label>
            <input type="text" name="fname" placeholder="Entrez vos Noms" required>
          </div>
          <div class="field input">
            <label> Prenoms</label>
            <input type="text" name="lname" placeholder="Entrez vos Prenoms" required>
          </div>
        </div>
          <div class="field input">
              <label>Ville</label>
              <input type="text" name="city" placeholder="Ville de résidence" required>
          </div>
        <div class="form-details">
          <div class="field input">
              <label>Address Mail</label>
              <input type="email" name="email" placeholder="Entrez votre email" required>
          </div>
          <div class="field input">
            <label>Téléphone</label>
            <input type="tel" name="phone_number" placeholder="Entrez votre numéro" required>
          </div>
        </div>
        <div class="field input">
          <label>Mot de pass</label>
          <input type="password" name="password" placeholder="Choisir un mot de pass" required>
          <i class="fas fa-eye"></i>
        </div>        
        <div class="field image">
          <label>Choisir une Image</label>
          <input type="file" name="profile_picture" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="S'inscrire">
        </div>
      </form>
      <div class="link">Déjà inscrit ? <a href="login.php">Connectez-vous</a></div>
    </section>
  </div>
</div>


<script src="../../public/js/password.js"></script>
<script src="../../public/js/signup.js"></script>

<?php require_once 'footer.php'; ?>