<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
p {
    text-align: center;
    transition: 500ms;
}
</style>

<body>
<?php include 'script.php'; ?>
    <?php if(id_contact = 1) ?>
    <p> <?=$dev[2] ." ". $dev[1]?> </p>
    <?php endif; ?>

</body>

</html>