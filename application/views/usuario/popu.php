<button>Cosulta de datos</button>
<div class="popup-wrapper">
    <div class="popup">
        <div class="popup-close">x</div>
        <div class="popup-content">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefon</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php foreach ($usuarios as  $value) {
                    ?>
                    <tr>
                        <td><?= $value->usu_nombres ?></td>
                        <td><?= $value->usu_apellidos ?></td>
                        <td><?= $value->usu_correo ?></td>
                        <td><?= $value->usu_telefono ?></td>
                        <td><button>Editar</button></td>
                        <td><button>borrar</button></td>
                        
                    </tr>

                <?php } ?>
                    
                
            </table>

        </div>
    </div>
</div>