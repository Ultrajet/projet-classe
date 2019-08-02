<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="MODAL.css">
    <link rel="stylesheet" href="modaljs.css">
    <link rel="stylesheet" href="style-card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>INDEX</title>
</head>

<body>

    <div class="container my-3">

        <h1 class="display-4 text-center">projet-classe WIP</h1>
        <hr>

        <div class="d-flex flex-wrap div-parent">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=liste_contacts', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $eleves = $bdd->query("SELECT id_contact, nom, prenom FROM etudiants")->fetchAll(PDO::FETCH_ASSOC);

            foreach ($eleves as $eleve) :
                ?>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="our-team">
                        <a class="d-block" href="?id=<?= $eleve["id_contact"] ?>">
                            <div class="picture">
                                <img class="img-fluid" src="23623810.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="name"><?= $eleve["prenom"] ?></h3>
                                <h3 class="name"><?= $eleve["nom"] ?></h3>
                                <small>#<?= $eleve["id_contact"] ?></small>
                                <!-- <h4 class="title">Web Developer</h4> -->
                            </div>
                        </a>
                        <ul class="social">
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>


            <?php
            endforeach;
            ?>
        </div>

        <?php
        require_once("MODAL.php");
        ?>

        <section>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mr-auto groupe">
                        <h4 class="display-4-custom"> Notre groupe </h4>
                        <hr>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas qui tempore
                            corrupti commodi
                            magnam provident animi maiores error. Libero eligendi, dolorum quas veritatis magni
                            blanditiis
                            praesentium dolore facilis cupiditate velit? Lorem ipsum dolor, sit amet consectetur
                            adipisicing
                            elit. Libero fuga eveniet hic architecto natus vitae, nemo voluptates harum nisi fugiat
                            nulla?
                            Quasi atque est ab tenetur corporis unde eum magni.</p>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-10 ml-auto wf3">
                        <h4 class="display-4-custom web">Webforce3</h4>
                        <hr>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas qui tempore
                            corrupti commodi
                            magnam provident animi maiores error. Libero eligendi, dolorum quas veritatis magni
                            blanditiis
                            praesentium dolore facilis cupiditate velit? Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Aperiam deserunt quae magnam sit delectus quos voluptates ipsa, provident quidem
                            itaque et
                            voluptatum, magni obcaecati commodi exercitationem, quod aspernatur accusamus perferendis!
                        </p>
                    </div>
                </div>
            </div>
            <br>

        </section>

    </div>

    <footer>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2 list-group ">
                    <a href="https://www.wf3.fr/"> Webforce3 </a> <br>
                    <a href="https://www.wf3.fr/formation/formation-developpeur-web-et-web-mobile/"> Formation
                        développeur Web </a> <br>
                    <a href="https://lesmureaux.info/item/campus-innovation-responsable/"> Lien du Campus </a> <br>
                    <a href="https://www.grandeecolenumerique.fr/"> Grande École du Numérique</a> <br>
                </div>
                <div class="col-md-2 list-group ">
                    <a href="https://www.linkedin.com/"> LinkedIn </a> <br>
                    <a href="https://github.com/"> GitHub </a> <br>
                </div>
                <div class="col-md-2 list-group ">
                    <a href="#"> Mentions Légales </a> <br>
                    <a href="#"> Crédits </a> <br>
                    <a href="#"> CGV </a> <br>
                    <a href="#"> CGU </a> <br>
                </div>
            </div>

            <br>
            <hr>
            <br>
            <div class="row justify-content-center aligncenter">
                <div class="col">
                    <span>Ce site est à but pédagogique | </span> <span> Politique de Confidentialité | </span> <span>
                        Copyright © </span>
                </div>
            </div>

        </div>
        <br>
        <br>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="testmodal.js"></script>
</body>

</html>