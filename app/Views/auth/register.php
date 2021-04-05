<?= $this->extend('front/layout/main') ?>

<?= $this->section('title')?>
Registro
<?= $this->endSection()?>

<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/font-awesome.all.min.css" />
<?= $this->endSection()?>

<?= $this->section('content')?>
<section class="section">

    <div class="container">
    
        <h1 class="title">Registrate ahora!</h1>
        <h2 class="subtitle">
            Solo debes ingresar algunos datos para comenzar a publicar.
        </h2>

        <form action="<?= base_url('auth/store')?>" method="post">

            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input name="name" class="input" type="text" placeholder="Text input">
                </div>
            </div>

            <div class="field">
                <label class="label">Apellidos</label>
                <div class="control">
                    <input name="surname" class="input" type="text" placeholder="Text input">
                </div>
            </div>

            <div class="field">
                <label class="label">Correo</label>
                <div class="control has-icons-left has-icons-right">
                    <input name="email" class="input" type="email" placeholder="Email input">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
                <p class="help"></p>
            </div>

            <div class="field">
                <label class="label">Elije tu país:</label>
                <div class="control">
                    <div class="select">
                        <select name="id_country">
                            <option disabled selected>Elije un pais...</option>

                            <?php foreach($countries as $c): ?>

                            <option value="<?= $c->id_country ?>"><?= $c->name ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Contraseña</label>
                <div class="control">
                    <input name="password" class="input" type="password" placeholder="Text input">
                </div>
            </div>

            <div class="field">
                <label class="label">Confirma tu Contraseña</label>
                <div class="control">
                    <input name="c-password" class="input" type="password" placeholder="Text input">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Registrarse</button>
                </div>
            </div>

        </form>

    </div>

</section>
<?= $this->endSection()?>