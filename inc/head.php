<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= $meta_description ?>">
    <link rel="icon" href="../assets/img/favicon/3377380-line-icon-for-web-develop-vectoriel.ico"> <?php // a remplacer par le futur logo quand il sera fait ?>
    <title><?= $constant["SITE_NAME"] . $name_page ?></title>
    <?php foreach ($css as $value): ?>
        <link rel="stylesheet" href="<?= $value ?>">
    <?php endforeach; ?>
    <?php foreach ($js as $value): ?>
        <script src="<?= $value ?>" defer></script>
    <?php endforeach; ?>
</head>
