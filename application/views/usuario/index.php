<body>

    <header class="container">
        <nav>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registro usuario</a>
                </li>
                
            </ul>
        </nav>


    </header>
    <div class="container Contenedor">
        <h1 class="text-primary text-center">Registro de formulario</h1>
        <div class="col-md-8">
            <form method="POST" action="<?= base_url() ?>index.php/usuario/registro">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">perfil</label>
                    <select name="teextid" id="teextid">
                        <option value="">seleccione</option>
                        <?php foreach ($selPerfil as $perfil) : ?>
                            <option value="<?= $perfil->per_id ?>"><?= $perfil->per_nombre ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">nombre</label>
                    <input require name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">apellido</label>
                    <input name="apellido" type="text" class="form-control" id="apellido">
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">correo</label>
                    <input name="correo" type="text" class="form-control" id="correo">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">telefono</label>
                    <input name="telefono" type="text" class="form-control" id="telefono">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>



    <!-- <footer class="">
        <p class="text-center">
            johandry rojas
            &copy; <?= date('Y') ?>
        </p>


    </footer> -->

</body>

</html>