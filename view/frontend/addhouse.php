<?php 

  if(!isset($_SESSION['unique_id'])){
    echo "Veuillez vous connecter";
  }
?>

<?php require_once 'header.php'; ?>
  <style>
    label{
      cursor: pointer;
    }
    .form-add{
      width: 70%;
      margin: auto;
    }
    .input-house-wrapper{
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    border-radius: 20px;
    padding: 20px;
    margin: 20px;
    }
    .input-house{
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .image-upload label{
      border-radius: 20px;
    }
    .image-upload span{
     display: block;
     position: relative;
     right: 0;
     margin-top: -30px;
     margin-bottom: 10px;
     left: 0;
     z-index: 10;
     text-align: center;
     color: #fff;
     text-align: center;
     background: rgba(0,0,0,0.4);
     font-size: 14px;
     padding: 0px;
     width: 99px;
     border-radius: 20px;
    }
    .image-upload{
      margin: 20px;
      border-radius: 20px;
    }
    input[type=radio]{
      display: none;
    }
    .image-upload img{
      width: 100px; 
      height: 100px;
    }
    .style-img{
      width: 200px;
      height: 150px;
      border-radius: 10px;
      box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.3);
      margin: 5px;
      align-items: center;
      cursor: pointer;
    }
    .style-img img{
      width: 200px;
      height: 150px;
      border-radius: 10px;
    }
    .style-img span{
     display: block;
     position: relative;
     right: 0;
     bottom: -30%;
     margin-bottom: 10px;
     left: 0;
     text-align: center;
     text-align: center;
     font-size: 1.7em;
     padding: 0px;
     width: 199px;
     border-radius: 0px;
    }

    form ol {
      padding-left: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    form li, div > p {
    list-style-type: none;
      border: none;
    }

    form img {
      height: 64px;
      order: 1;
    }

    form p {
      line-height: 32px;
      padding-left: 10px;
    }
  </style>

<div class="form-add">
  <div class="">
    <section class="">
     <h1>Ajouter un domicile</h1>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="on">
        <div class="input-house-wrapper">
          <h2>Images du domicile*</h2>
          <div class="input-house">         
              <label for="image_uploads"><img id="previewImg" src="../../public/images/img-30.jpg"></label>
              <input id="image_uploads" type="file" multiple name="image_uploads" accept=".jpg, .jpeg, .png, .gif" required>
          </div>
          <div class="preview">
            
          </div>
        </div>
        <div class="input-house-wrapper">
          <h2>Style de domicile*</h2>
          <div class="input-house">
            <div class="style-img">
              <input type="radio" id="villa" name="style_house">
                <label for="villa"><span>villa</span></label><br>
            </div>
            <div class="style-img">
              <input type="radio" id="appartement" name="style_house">
                <label for="appartement"><span>appartement</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="appartement_meuble" name="style_house">
                <label for="appartement_meuble"><span>appartement meublé</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="chambre" name="style_house">
                <label for="chambre"><span>chambre</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="studio" name="style_house">
                <label for="studio"><span>studio</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="duplex" name="style_house">
                <label for="duplex"><span>duplex</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="bureau" name="style_house">
                <label for="bureau"><span>bureau</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="immeuble" name="style_house">
                <label for="immeuble"><span>immeuble</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="terrain" name="style_house">
                <label for="terrain"><span>terrain</span></label><br>
            </div>
             <div class="style-img">
              <input type="radio" id="ferme" name="style_house">
                <label for="ferme"><span>ferme</span></label><br>
            </div>
          </div>
        </div>
        <div class="input-house-wrapper">
          <h2>Style d'offre*</h2>
          <div class="input-house">
            <div class="">
              <input type="radio" id="louer" name="style_offre">
                <label for="louer">A louer</label><br>
            </div>
            <div class="">
              <input type="radio" id="vendre" name="style_offre">
                <label for="vendre">A vendre</label><br>
            </div>
          </div>
        </div>
        <div class="input-house-wrapper">
          <h2 for="price">Prix*</h2>
           <input type="text" min="1" name="prix" id="price" placeholder="Prix en chiffre" required> F Cfa par
            <select>
              <option value="mois">Mois</option>
              <option value="jour">Jour</option>
            </select>
        </div>      
        <div class="input-house-wrapper">
           <div class="">
            <label class="" for="city">Ville du domicile</label>
            <select name="city" id="city">
              <option value="">choisir la ville</option>
              <option value="Douala">Douala</option>
              <option value="Yaounde">Yaounde</option>
              <option value="Bafang">Bafang</option>
              <option value="Bafoussam">Bafoussam</option>
              <option value="Garoua">Garoua</option>
              <option value="Bamenda">Bamenda</option>
              <option value="Bertoua">Bertoua</option>
              <option value="Ebolowa">Ebolowa</option>
            </select>
          </div>
          <div class="">
            <span class="">Quartier du domicile</span><br />
            <select name="quartier" id="quartier">
              <option value="">Choisir le quartier</option>
              <option value="Boko">Ndogpassi</option>
              <option value="Bali">Bali</option>
              <option value="Akwa" selected="select">Akwa</option>
              <option value="Bonamoussadi">Bonamoussadi</option>
              <option value="Makepe">Makepe</option>
              <option value="Deido">Deido</option>
              <option value="Kotto">Kotto</option>
              <option value="Ndokotti">Ndokotti</option>
            </select>
          </div>
        </div>
        <div class="input-house-wrapper">
          <div class="">
              <label>Superficie*</label>
              <input type="number" min="1" name="superficie" placeholder="Superficie moyenne du lieux" required> 
              <span>
                <input type="radio" id="m2" name="m2_hectare">
                <label for="m2">M<sup>2</sup></label><br>
              </span>
              <span>
                <input type="radio" id="hectare" name="m2_hectare">
               <label for="hectare">Ha</label><br>
              </span>
          </div>

          <div class="">
            <label>Nombre total de pièces</label>
            <input type="number" min="1" name="nombre_piece" placeholder="nombre total de pièces" required>
          </div>
          <div class="">
              <label>Nombre de Chambre</label>
              <input type="number"  min="1" name="nombre_chambre" placeholder="nombre de chambre" required>
          </div>
          <div class="">
            <label>Nombre de douche</label>
            <input type="number"  min="1" name="nombre_douche" laceholder="nombre de douche" required>
          </div>
        </div>
        <div class="input-house-wrapper">
          <textarea rows="12" cols="30">Donnez plus de précisions sur le lieux du domicile
          </textarea>
        </div>        
        <div class="input-house-wrapper">
            <label>Titre du bien</label>
            <input type="text" name="fname" placeholder="Entrez vos Noms" required>
        </div>
        <div class="input-house-wrapper">
          <input type="submit" name="submit" value="Ajouter">
          <input type="reset" name="submit" value="Annuler">
        </div>
      </form>
      
    </section>
  </div>
</div>
  
 <script>
    const input = document.querySelector('.input-house input[type=file]');
    const preview = document.querySelector('.preview');

   
    input.style.display = 'none';
    input.addEventListener('change', updateImageDisplay);

    function updateImageDisplay() {
     
      const curFiles = input.files;
      if(curFiles.length === 0) {
        const para = document.createElement('p');
        para.textContent = 'Acune image selectionnée';
        preview.appendChild(para);
      } else {
        const list = document.createElement('ol');
        preview.appendChild(list);

        for(const file of curFiles) {
          const listItem = document.createElement('li');

          if(validFileType(file)) {
            const image = document.createElement('img');
            image.src = URL.createObjectURL(file);

            listItem.appendChild(image);
          } else {
            para.textContent = ` ${file.name}: est un fichier invalide.`;
            listItem.appendChild(para);
          }

          list.appendChild(listItem);
        }
      }
    }

// https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types
    const fileTypes = [
        'image/apng',
        'image/bmp',
        'image/gif',
        'image/jpeg',
        'image/pjpeg',
        'image/png',
        'image/svg+xml',
        'image/tiff',
        'image/webp',
        `image/x-icon`
    ];

    function validFileType(file) {
      return fileTypes.includes(file.type);
    }

    function returnFileSize(number) {
      if(number < 1024) {
        return number + 'bytes';
      } else if(number > 1024 && number < 1048576) {
        return (number/1024).toFixed(1) + 'KB';
      } else if(number > 1048576) {
        return (number/1048576).toFixed(1) + 'MB';
      }
    }
  </script>
