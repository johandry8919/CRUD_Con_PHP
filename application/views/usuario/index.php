<div class="container Contenedor">
        <!-- <div id="alertas" class="alertas">
            <h1>erro el completa los campos requerido</h1>

        </div> -->
    
    <div class="col-12 col-md-8">
    <h1 class=" text-black text-center">Registro de formulario</h1>
    
        <form method="POST" action="<?= base_url() ?>index.php/usuario/registro">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">perfil</label>
                <select name="teextid" id="teextid">
                    <?php foreach ($selPerfil as $perfil) : ?>
                        <option value="<?= $perfil->per_id ?>"><?= $perfil->per_nombre ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input placeholder="Nombre" name="nombre" type="text" class="form-control" id="nombre">

            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">apellido</label>
                <input placeholder="Apellido" name="apellido" type="text" class="form-control" id="apellido">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">correo</label>
                <input placeholder="Correo electronico " name="correo" type="text" class="form-control" id="correo">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">telefono</label>
                <input placeholder="telefono" name="telefono" type="text" class="form-control" id="telefono">
            </div>

            <button id="boton" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



<footer class="">
    <p class="text-center">
        johandry rojas
        &copy; <?= date('Y') ?>
    </p>


</footer>
<script src="<?php echo base_url('public/app/app.js') ?>"></script>

</body>

</html>