<?php

require_once('script.php');
$data = $bdd->query("SELECT * FROM etudiants WHERE id_contact = $_GET[id]")->fetch(PDO::FETCH_ASSOC);

extract($data);

?>


<div style="background-image: url('img/imgback/<?= $id_contact ?>.jpg'); background-size: auto">
    <div class="modal-custom col-12 col-md-6 offset-md-5 col-lg-4 offset-lg-7">

        <svg viewbox="0 0 40 40" class="cross">
            <path class="close" d="M 10,10 L 30,30 M 30,10 L 10,30" />
        </svg>

        <h1 class="nomprenom text-center"><?= $prenom ?> <?= $nom ?></h1>

        <!-- <div class="overflow-custom"> -->
                    <h3 class="text-center specialite"><?= $specialite ?></h3>

            <div class="row align-items-center text-center mx-4 my-4 commentaire">
                <?= $commentaire ?>
            </div>

            <!-- <div class="row justify-content-center">
                <div class="col-xl-6 compet">
                    <div class="titrecompetences">COMPETENCES</div>
                    <div class="competences">COMPETENCES</div>
                </div>
            </div> -->

            <div class="row fondlien justify-content-center">
                <div class="col-xl-6 col-md-12 col-sm-12 align-self-center coord">
                    <div class="titrecoordonnees">COORDONNEES</div>
                    <br>
                    <div class="mail"><?= $data["e-mail"] ?></div>
                    <div class="telephone"><?= $tel ?></div>
                    <div class="zonegeo"><?= $zone_geo ?></div>

                </div>

                <!-- CLASS Lien -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">

                    <div class="row">
                        <!-- CLASS Lien LINKEDIN -->
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div class="lienlinkedin BOXLIEN">
                                <span class="iconelien"><i class="fa fa-linkedin align-items-center"></i></span><span class="textlien"><a href="<?= $linkedin ?>" title="LinkedIn"> LINKEDIN </a></span>
                            </div>
                        </div>

                        <!-- CLASS Lien GitHub -->
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div class="liengithub BOXLIEN">
                                <span class="iconelien"><i class="fa fa-github"></i></span><span class="textlien"><a href="<?= $github ?>" title="GitHub"> GITHUB </a></span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-around text-center">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <!-- CLASS LIENCV -->
                            <div class="liencv BOXLIEN">
                                <span class="iconelien"><i class="fa fa-file-pdf-o"></i></span><span class="textlien"><a href="<?= "http://localhost/GitHub/projet-classe/CV/" . $id_contact . ".pdf" ?>"> CV </a></span>
                            </div>
                        </div>

                        <div CLASS="col-6 d-flex justify-content-center align-items-center">
                            <!-- CLASS Portfolio -->
                            <div class=" lienportfolio BOXLIEN">
                                <span class="iconelien"><i class="fa fa-globe"></i></span><span class="textlien"><a href="<?= $portfolio ?>" title="Portfolio"> PORTFOLIO </a></span>
                            </div>
                        </div>
                    </div>

                </div> <!-- fermeture class lien -->

            </div> <!-- fermeture row -->
        <!-- </div> -->

        
    </div>
</div>