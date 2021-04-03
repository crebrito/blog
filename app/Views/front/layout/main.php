<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection('title') ?>&nbsp;-&nbsp;Mi Blog!</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bulma.min.css">
    <?= $this->renderSection('css') ?>
</head>

<body>
    <?= $this->include('front/layout/header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('front/layout/footer') ?>
    <?= $this->renderSection('js') ?>
</body>

</html>