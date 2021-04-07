<?= $this->extend('front/layout/main') ?>

<?= $this->section('title')?>
Login
<?= $this->endSection()?>

<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/font-awesome.all.min.css" />
<?= $this->endSection()?>

<?= $this->section('content')?>
<?= session('msg') ?>
<section class="section">

    <div class="container">
    <h1 class="title">Inicio de Sesión</h1>
        <h2 class="subtitle">
            Solo debe ingresar su email y password.
        </h2>

        <form action="" method="post">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="password" placeholder="Password">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <button class="button is-link">
                        Ingresar
                    </button>
                </p>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection() ?>