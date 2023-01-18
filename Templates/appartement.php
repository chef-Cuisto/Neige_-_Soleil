<section class="container">
  <div class="container text-center">
    <div class="row " style="width:80%;">
      <div class="col-6 ">
        <div class="p-3 "><img src="images/chalet_1.jpg" class="card-img-top" id="full" alt="..."></div>
      </div>
      <div class="col-6 ">
        <div class="container text-center">
          <div class="row g-2">
            <div class="col-6">
              <div class="p-3"><img src="images/chalet_2.jpg" class="card-img-top small" alt="..."></div>
            </div>
            <div class="col-6">
              <div class="p-3"><img src="images/chalet_3.jpg" class="card-img-top small" alt="..."></div>
            </div>
            <div class="col-6">
              <div class="p-3"><img src="images/chalet_4.jpg" class="card-img-top small" alt="..."></div>
            </div>
            <div class="col-6">
              <div class="p-3"><img src="images/chalet_5.jpg" class="card-img-top small" alt="..."></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="d-flex py-5">
    <div class="pe-5">
      <?php
      echo '<h2 class="text-primary fw-lighter">' . $appartement['intitule_appart'] . ' ' . $appartement['type_appart'] . ' au ' . $appartement['adresse_appart'] . ', ' . $appartement['cp_appart'] . ', ' . $appartement['ville_appart'] . '</h2>';

      echo '
      <hr>
      <h4 class="mt-5 ps-3 text-primary fw-lighter">Les atouts du bien</h4>
      <div class="d-flex">
        <div class="text-center p-3">
          <i class="fa-solid fa-circle-plus fs-1 text-primary m-2"></i>
          <p>' . $appartement['atout_appart1'] . '</p>
        </div>
        <div class="text-center p-3">
          <i class="fa-solid fa-circle-plus fs-1 text-primary m-2"></i>
          <p>' . $appartement['atout_appart2'] . '</p>
        </div>
        <div class="text-center p-3">
          <i class="fa-solid fa-circle-plus fs-1 text-primary m-2"></i>
          <p >' . $appartement['atout_appart3'] . '</p>
        </div>
      </div>
      <hr>
      <h4>Description de l\'appartement</h4>
      <p style="height: 25vh;">' . $appartement['description_appart'] . '</p>
      <hr>
      <div class="d-flex">
        <div class="d-flex pe-5">
          <i class="fa-solid fa-user fs-1 me-3"></i>
          <p>Présenté par votre expert.e en location N&S<br><span class="fs-5">Deborah</span></p>
        </div>
        <div class="pe-5">
          <i class="fa-solid fa-phone fs-5"></i></i> Deborah
        </div>
      </div>
      <hr>
      <h4>Nos autres logements à proximité</h4>

    </div>
  
    <div>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Réservation</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">';

      if ($appartement['id_reservation'] == null) {
        echo '
            <button type="button" class="alert alert-succes" role="alert"> Il n\'existe pas de réservation sur cette appartement</button> 
            <div class= "d-flex mt-3">
            <input type="date" class="form-control w-25 me-1"  aria-describedby="button-addon1" >
            <input type="date" class="form-control w-25 ms-1"  aria-describedby="button-addon1"><button type="button" class="btn btn-success ms-2">Choisir</button>  
          </div>';
      } else {
        echo '
            <button type="button" class="alert alert-danger" role="alert"> Il existe déjà une réservation sur cette appartement</button>   
            <div class= "d-flex mt-3">
              <input type="date" class="form-control w-25 me-1"  aria-describedby="button-addon1" >
              <input type="date" class="form-control w-25 ms-1"  aria-describedby="button-addon1"><button type="button" class="btn btn-success ms-2">Choisir</button>  
            </div>
            ';
      }

      echo '</div>
          <div class="modal-footer">
            <button class="btn btn-outline-warning" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Contacter le propriétaire</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">';
        require_once ('Templates/formulaire.php');
        echo ' </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Retour</button>
          </div>
        </div>
      </div>
    </div>';
    if (!isset($_SESSION["email_locataire"]) && !isset($_SESSION["email_proprio"])) {

    echo '<button class="btn btn-warning w-100" data-bs-target="" data-bs-toggle="modal"><a class="text-decoration-none text-black" href="index.php?page=connexion_locataire">Réserver</a></button>';
    }else{
      echo '<button class="btn btn-warning w-100" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Réserver</button>';
    }
        echo '<hr class="y-5">
        <div>
          <ul class="list-group">
          <li class="list-group-item bg-warning fw-semibold">' . $appartement['prix_appart'] . ' €/mois</li>
          <li class="list-group-item">' . $appartement['capacite_appart'] . ' Pièce(s)</li>
            <li class="list-group-item">' . $appartement['nb_chambres'] . ' Chambre(s)</li>
            <li class="list-group-item">' . $appartement['nb_lits'] . ' Lit(s)</li>
            <li class="list-group-item">' . $appartement['nb_salles_bain'] . ' Salle de bain(s)</li>
            <li class="list-group-item">' . $appartement['superficie_appart'] . ' m²</li>
          </ul>
        </div>
      </div>';

      ?>
    </div>
</section>