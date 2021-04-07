<section class="hero is-link has-text-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Bienvenidos a mi Blog
            </h1>
            <h2 class="subtitle">
                Lista de entradas
            </h2>
        </div>
    </div>
    <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
                <ul>
                    <li class="<?= service('request')->uri->getPath() == '/' ? 'is-active' : ''; ?>">
                        <a href="<?= base_url(route_to('home'))?>">Inicio</a>
                    </li>
                    <li class="<?= service('request')->uri->getPath() == 'auth/registro' ? 'is-active' : ''; ?>">
                        <a href="<?= base_url(route_to('register'))?>">Registro</a>
                    </li>
                    <li class="<?= service('request')->uri->getPath() == 'auth/login' ? 'is-active' : ''; ?>">
                        <a href="<?= base_url(route_to('login'))?>">Ingresar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>