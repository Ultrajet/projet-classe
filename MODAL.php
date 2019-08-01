<?php

require 'script.php';

$id = 2;
$reponse->bindValue(':id', $id, PDO::PARAM_STR);
$reponse->execute();
$data = $reponse->fetch(PDO::FETCH_ASSOC);

extract($data);

?>

<div id="myModalNoBS" class="modalNoBS">

        <!-- contenue du modal -->
        <div class="modalNoBS-content">

                <div class="container-fluid">
                    <div class="row justify-content-center imgback">
    
                        <div class="col-md-4 ml-5 mr-5 align-self-center card">
                            <!--- CROIX FERMETURE MODALE -->
                            <div class="cross">
                                <svg viewbox="0 0 40 40">
                                    <path class="close" d="M 10,10 L 30,30 M 30,10 L 10,30" />
                                </svg>
                            </div>
                            <div class="row justify-content-center">
                                <!-- CLASS NOM & Prénom -->
                                <div class="nomprenom"> <?= $prenom ?> <?= $nom ?> </div>
                            </div>
                            <!-- CLASS Spécialité -->
                            <div class="row justify-content-center">
                                <div class="specialite"> spécialité ? </div>
                            </div>
                            <div class="row hrpourvincent"> . </div>
                            <div class="row justify-content-center texteperso">
                                <!-- CLASS Blabla-perso -->
                                <div class="col-md-10"> <span class="quote">"</span>Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Corporis mollitia, ducimus expedita animi iste cupiditate amet. Possimus in
                                    quaerat, earum autem, excepturi illum odio tempore molestias dicta nemo natus totam molestiae
                                    dolore placeat fuga, ipsam dolorem officia officiis saepe voluptatem quas cumque. Expedita minus
                                    sapiente tenetur quia, labore fuga rerum? <span class="quote">"</span></div>
                            </div> <br>
                            <div class="row justify-content-center">
                                <!-- CLASS Compétences -->
                                <div class="col-xl-6 compet">
                                    <!-- CLASS Compétences -->
                                    <div class="titrecompetences">COMPETENCES</div>
                                    <div class="competences">COMPETENCES</div>
                                </div>
                            </div><br>
                            <div class="row justify-content-center fondlien">
                                <!-- CLASS Coordonnées -->
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
                                        <div CLASS="col-md-6 BOXLIEN">
                                            <!-- CLASS Lien LINKEDIN -->
                                            <div class="lienlinkedin">
                                                <span class="iconelien"><i class="fab fa-linkedin"></i> </span>
                                                <br>LINKEDIN
                                            </div>
                                        </div>
                                        <div CLASS="col-md-6 BOXLIEN">
                                            <!-- CLASS Lien GitHub -->
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
    
                    </div>
                </div>
            

     
        </div>

    </div>