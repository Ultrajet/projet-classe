<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/modaljs.css">
    <link rel="stylesheet" href="css/style-card.css">
    <title>INDEX</title>
</head>

<body>

    <div class="container-fluid">

        <img src="http://localhost:8888/projet-classe/img/logo-wf3_xl.png" style="width: 300px; margin: 0 auto; height: auto" class="d-block mt-4" alt="">

        <section>
                <div class="row skewgroupe">
                    <div class="col-md-6 offset-md-3 mr-auto groupe ">
                        <h4 class="display-4-custom titredesc top">Notre groupe</h4>
                        <p class="lead top">Nous sommes des Développeurs web et web mobile issus de la formation Webforce3. Nous serons diplômés en octobre 2019. Certains d'entre nous cherchent encore un stage qui débuterait le 10 septembre pour une durée minimale de deux mois. Découvrez nos profils !</p>
                    </div>
                </div>
        </section>
    </div>

    <div class="container my-3">
        <div class="row flex-wrap">
            <?php
            
            require_once 'script.php';
            $eleves = $bdd->query("SELECT * FROM etudiants ORDER BY RAND()")->fetchAll(PDO::FETCH_ASSOC);

            foreach ($eleves as $eleve) :
                ?>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="our-team">
                        <div class="d-block">
                            <div class="picture">
                                <img class="img-fluid" src="<?= URL . "/thumbnail/" . $eleve["id_contact"] . ".jpg" ?>">
                            </div>
                            <div class="team-content">
                                <h3 class="name"><?= $eleve["prenom"] ?></h3>
                                <h3 class="name surname"><?= $eleve["nom"] ?></h3>
                            </div>
                        </div>
                        <?php
                        if ($eleve["Stage"] == "Non") {
                            ?>
                            <div class="statutstage">Recherche un stage</div>

                            <?php
                        }
                        ?>
                            <h4 class="title savoirplus lelien" id="<?= $eleve["id_contact"] ?>">En savoir plus</h4>


                        <ul class="social">
                            <li><a href="<?= $eleve["github"] ?>" class="fa fa-github" aria-hidden="true"></a></li>
                            <?php
                                if (!empty($eleve["portfolio"])) {
                                    ?>
                                        <li><a target="_blank" href="<?= $eleve["portfolio"] ?>" class="fa fa-globe"  aria-hidden="true"></a></li>
                                    <?php
                                }
                            ?>
                            <li><a href="<?= $eleve["linkedin"] ?>" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>


            <?php
            endforeach;
            ?>
        </div>

        <div id="myModalNoBS" class="modalNoBS d-flex"></div>

    </div>

    <div class="container-fluid">
        <section>
            <div class="row skewwf3">
                <div class="col-md-6 offset-md-3 mr-auto wf3 bottom">
                    <h4 class="display-4-custom titredesc ">Webforce3</h4>
                    <p class="lead">WebForce 3 est un réseau de centres de formation aux métiers de l’informatique. Depuis sa fondation en 2014, WebForce3 a formé plus de 3000 apprenants, de tous âges et de tous horizons, aux métiers en tension du web.</p>
                </div>
            </div>   
        </section>
    </div>
    <br>

    <footer>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-3 list-group align-items-center">
                    <a href="https://www.wf3.fr/formation/formation-developpeur-web-et-web-mobile/" class="lienfoot"> Formation
                        développeur Web </a> <br>
                    <a href="https://lesmureaux.info/item/campus-innovation-responsable/" class="lienfoot"> Lien du Campus </a> <br>
                </div>
                <div class="col-md-3 list-group align-items-center">
                <a href="https://www.wf3.fr/" class="lienfoot"> Webforce3 </a> <br>
                    <a href="https://www.grandeecolenumerique.fr/" class="lienfoot"> Grande École du Numérique</a> <br>
                </div>
                <div class="col-md-3 list-group align-items-center">
                    <a href="https://www.linkedin.com/school/webforce3/" class="lienfoot"> LinkedIn WF3 </a> <br>
                    <a href="https://www.linkedin.com/company/la-grande-ecole-du-num%C3%A9rique/" class="lienfoot"> LinkedIn G.E.N </a> <br>
                </div>
            </div>

            <hr>
            <div class="row justify-content-center align-center">
                    Ce site est à but pédagogique |  Politique de Confidentialité |   Copyright © 
            </div>

        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/modal.js"></script>

</body>

</html>