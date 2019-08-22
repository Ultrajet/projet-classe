<?php

require_once ('script.php');
$data = $bdd->query("SELECT * FROM etudiants WHERE id_contact = $_GET[id]")->fetch(PDO::FETCH_ASSOC);

extract($data);

?>


<div class="imgback">
    <div class="modal-custom col-12 col-md-6 offset-md-5 col-lg-4 offset-lg-7">

        <svg viewbox="0 0 40 40" class="cross">
            <path class="close" d="M 10,10 L 30,30 M 30,10 L 10,30" />
        </svg>

        <h1 class="nomprenom text-center"><?= $prenom ?> <?= $nom ?></h1>

        <h3 class="text-center specialite">{spécialité?}</h3>

        <div class="row align-items-center text-center mx-4 my-4 commentaire">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis mollitia, ducimus expedita animi iste
            cupiditate amet. Possimus in quaerat, earum autem, excepturi illum odio tempore molestias dicta nemo natus
            totam molestiae dolore placeat fuga, ipsam dolorem officia officiis saepe voluptatem quas cumque. Expedita
            minus sapiente tenetur quia, labore fuga rerum?
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
                <div class="telephone">09 87 65 43 21</div>
                <div class="zonegeo">ville, région </div>

            </div>

            <!-- CLASS Lien -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">

                <div class="row">
                    <!-- CLASS Lien LINKEDIN -->
                    <div CLASS="col-6">
                        <div class="lienlinkedin BOXLIEN">
                            <span class="iconelien"><i class="fa fa-linkedin align-items-center"></i></span><span
                                class="textlien"> LINKEDIN </span>
                        </div>
                    </div>

                    <!-- CLASS Lien GitHub -->
                    <div CLASS="col-6 justify-content-center">
                        <div class="liengithub BOXLIEN">
                            <span class="iconelien"><i class="fa fa-github"></i></span><span class="textlien"> GITHUB
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-around text-center">
                    <div CLASS="col-6">
                        <!-- CLASS LIENCV -->
                        <div class="liencv BOXLIEN">
                            <span class="iconelien"><i class="fa fa-question-circle"></i></span><span class="textlien">
                                ??? </span>
                        </div>
                    </div>

                    <div CLASS="col-6">
                        <!-- CLASS Portfolio -->
                        <div class=" lienportfolio BOXLIEN">
                            <span class="iconelien"><i class="fa fa-globe"></i></span><span class="textlien"> PORTFOLIO
                            </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>