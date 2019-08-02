<?php

require_once 'script.php';
$data = $bdd->query("SELECT * FROM etudiants WHERE id_contact = $_GET[id]")->fetch(PDO::FETCH_ASSOC);

extract($data);

?>

<div class="col-4 offset-6 overflow-auto">

    <!--- CROIX FERMETURE MODALE -->
    <div class="cross">
        <svg viewbox="0 0 40 40">
            <path class="close" d="M 10,10 L 30,30 M 30,10 L 10,30" />
        </svg>
    </div>

    <!-- CLASS NOM & Prénom -->
    <div class="row justify-content-center">
        <div class="nomprenom"> <?= $prenom ?> <?= $nom ?> </div>
    </div>

    <!-- CLASS Spécialité -->
    <div class="row justify-content-center">
        <div class="specialite"> spécialité ? </div>
    </div>
    <div class="row hrpourvincent"> . </div>

    <!-- CLASS Blabla-perso -->
    <div class="row justify-content-center texteperso">
        <div class="col-md-10"> <span class="quote">"</span>Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Corporis mollitia, ducimus expedita animi iste cupiditate amet. Possimus in
            quaerat, earum autem, excepturi illum odio tempore molestias dicta nemo natus totam molestiae
            dolore placeat fuga, ipsam dolorem officia officiis saepe voluptatem quas cumque. Expedita minus
            sapiente tenetur quia, labore fuga rerum? <span class="quote">"</span></div>
    </div> <br>

    <!-- CLASS Compétences -->
    <div class="row justify-content-center">
        <div class="col-xl-6 compet">
            <div class="titrecompetences">COMPETENCES</div>
            <div class="competences">COMPETENCES</div>
        </div>
    </div><br>

    <!-- CLASS Coordonnées -->
    <div class="row justify-content-center fondlien">
        <div class="col-xl-6 align-self-center coord">
            <div class="titrecoordonnees">COORDONNEES</div>
            <br>
            <div class="mail">mail@mail.com</div>
            <div class="telephone">09 87 65 43 21</div>
            <div class="zonegeo">ville, région </div>

        </div>

        <!-- CLASS Lien LinkedIn -->
        <div class="col-xl-6 align-self-center">
            <div class="row">

                <!-- CLASS Lien LINKEDIN -->
                <div CLASS="col-md-6 BOXLIEN">
                    <div class="lienlinkedin">
                        <span class="iconelien"><i class="fab fa-linkedin"></i> </span>
                        <br>LINKEDIN
                    </div>
                </div>

                <!-- CLASS Lien GitHub -->
                <div CLASS="col-md-6 BOXLIEN">
                    <div class="liengithub">
                        <span class="iconelien"> <i class="fab fa-github"></i></span>
                        <br>GITHUB
                    </div>
                </div>
            </div>

            <div class="row">
                <div CLASS="col-md-6 BOXLIEN">

                    <!-- CLASS LIENCV -->
                    <div class="liencv ">
                        <span class="iconelien"><i class="fas fa-id-card-alt"></i></span>
                        <br> CV
                    </div>
                </div>
                <div CLASS="col-md-6 BOXLIEN">

                    <!-- CLASS Portfolio -->
                    <div class=" lienportfolio">
                        <span class="iconelien"><i class="fas fa-file-signature"></i></span>
                        <br> PORTFOLIO
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>