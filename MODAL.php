<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="MODAL.css"> <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> <!-- FONT AWESOME -->
    <title>MODAL </title>
</head>

<body>
    <?php

    require 'script.php';

    $id = 1;
    $reponse->bindValue(':id', $id, PDO::PARAM_STR);
    $reponse->execute();
    $data = $reponse->fetch(PDO::FETCH_ASSOC);

    extract($data);

    ?>

    <div class="container-fluid">
        <div class="row justify-content-center imgback">
            <div class="col-md-5"></div>
            <div class="col-md-4 ml-5 mr-5 align-self-center card">
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












    <!-- BOOTSTRAP JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>