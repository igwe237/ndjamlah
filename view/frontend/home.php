<?php require_once('header.php'); ?>

      <!-- Caroussel -->

       <div style="height: 10px;"></div>
    <div class="carousel-sliders">
        <div class="carousel-sliders-inner">
            <div class="slide active">
                <div class="carousel-caption">
                    <h3>Appartement Moderne</h3>
                    <p>90 000 FCFA / Mois</p>
                </div>
                <img alt="Slide 1" src="../../public/images/img-5.jpg" />
            </div>
            <div class="slide">
                <img alt="Slide 2" src="../../public/images/img-4.jpg" />
                <div class="carousel-caption">
                    <h3>Appartement meublé</h3>
                    <p>20 000 FCFA / Jour</p>
                </div>
            </div>
            <div class="slide">
                <img alt="Slide 3" src="../../public/images/img-7.jpg" />
                <div class="carousel-caption">
                    <h3>Duplex à vendre</h3>
                    <p>25 000 000 FCFA</p>
                </div>
            </div>
            <div class="slide">
                <img alt="Slide 4" src="../../public/images/img-1.jpg" />
                <div class="carousel-caption">
                    <h3>Chambre à Louer</h3>
                    <p>25 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="slide">
                <img alt="Slide 5" src="../../public/images/img-2.jpg" />
                <div class="carousel-caption">
                    <h3>Studio à Louer</h3>
                    <p>40 000 FCFA / Mois</p>
                </div>                    
            </div>
        </div> 
        <div class="carousel-controls left">
            <div tabindex="0" class="prevSlide" role="button">
                <span class="prevIcon"></span>
                <span class="sr-only">Previous</span>
            </div> 
        </div>
        <div class="carousel-controls right">    
            <div tabindex="0" class="nextSlide" role="button">
                <span class="nextIcon"></span>
                <span class="sr-only">Next</span>
            </div>
        </div>                     
        <ul class="carousel-indicators">
            <li tabindex="0" role="button" class="active" aria-disabled="false"></li>
            <li tabindex="0" role="button" aria-disabled="true"></li>
            <li tabindex="0" role="button" aria-disabled="true"></li>
            <li tabindex="0" role="button" aria-disabled="true"></li>
            <li tabindex="0" role="button" aria-disabled="true"></li>
        </ul>            
    </div>
     

    <!-- tri, filtre, liste de domiciles -->
    <div style="height:20px;"></div>
    <section class="part2">
      <div style="width:20px;"></div>
      <div class="filter">
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off"><h4 style="text-align: center;">Filtre</h4>
          <div>
            <label class="label" for="city">Ville</label>
            <select name="city" id="city">
              <option value="Douala">Douala</option>
              <option value="Yaounde">Yaounde</option>
              <option value="Bafang" selected="select">Bafang</option>
              <option value="Bafoussam">Bafoussam</option>
              <option value="Garoua">Garoua</option>
              <option value="Bamenda">Bamenda</option>
              <option value="Bertoua">Bertoua</option>
              <option value="Ebolowa">Ebolowa</option>
            </select>
          </div>
          <div>
            <span class="label" for="quartier">Quartier</span><br />
            <select name="quartier" id="quartier">
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
            <div><span class="label">Style d'habithat</span>
              <label for="chambre">Chambre</label>
              <input type="checkbox" name="chambre" id="chambre">
              <label for="studio">Studio</label>
              <input type="checkbox" name="studio" id="studio"> <br>
              <label for="Appartement">Appartement</label>
              <input type="checkbox" name="Appartement" id="Appartement"><br>
              <label for="duplex">Duplex</label>
              <input type="checkbox" name="duplex" id="duplex">
              <label for="villa">Villa</label>
              <input type="checkbox" name="villa" id="villa"> <br>
              <label for="terrain">Terrain</label>
              <input type="checkbox" name="terrain" id="terrain">
            </div>
          <div><span class="label">Nombre de pièces</span> <br>
            <label for="piece_1">1</label>
            <input type="checkbox" name="piece_1" id="piece_1">
            <label for="piece_2">2</label>
            <input type="checkbox" name="piece_2" id="piece_2">
            <label for="piece_3">3</label>
            <input type="checkbox" name="piece_3" id="piece_3">
            <label for="piece_4">4</label>
            <input type="checkbox" name="piece_4" id="piece_4">
            <label for="piece_5">5</label>
            <input type="checkbox" name="piece_5" id="piece_5"> <br>
            <label for="piece_6">6</label>
            <input type="checkbox" name="piece_6" id="piece_6">
            <label for="piece_7">7</label>
            <input type="checkbox" name="piece_7" id="piece_7">
            <label for="piece_8">8</label>
            <input type="checkbox" name="piece_8" id="piece_8"> 
            <label for="piece_9">9</label>
            <input type="checkbox" name="piece_9" id="piece_9">
            <label for="piece_10">10</label>
            <input type="checkbox" name="piece_10" id="piece_10">
          </div>
          <div><span class="label">Etat </span><br>
            <label for="louer">A Louer</label>
            <input type="checkbox" name="louer" id="louer">
            <label for="vendre">A Vendre</label>
            <input type="checkbox" name="vendre" id="vendre">
          </div>
        </form>
      </div>
    <div class="houses">
        <div class="house">
          <img src="../../public/images/img-1.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-2.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-3.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-4.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-5.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-6.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-7.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-8.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-9.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-10.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-11.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-12.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-13.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-14.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-5.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-1.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-2.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
        <div class="house">
          <img src="../../public/images/img-1.jpg">
          <span class="location">Douala-akwa</span>
          <div class="house-details">
            <h5 class="house-title">Studio 4 pièces</h5>
            <h6 class="price">25 000 F CFA / Mois</h6>
            <span class="time">il y'a 30 Mins</span>
          </div>          
        </div>
      </div>
    </section>

     <!-- Pied de page -->
<?php require_once('footer.php'); ?>
