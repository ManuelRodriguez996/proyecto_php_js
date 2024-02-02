<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<?php
include("Conexion.php");

$query = "SELECT id, nombre, apellido, email, pais, motivo_del_contacto FROM CVManuel WHERE estado =1";
$resultado = $base_de_datos->query($query);



while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <!-- <form action="procesar.php" method="post"> -->
    <tr class= "fila_Tabla<?= $fila['id'] ?>">
        <td><input class="fila<?= $fila['id'] ?>" name='id' value="<?= htmlspecialchars($fila['id']) ?>" disabled></td>
        <td><input class="fila<?= $fila['id'] ?>" name='nombre' value="<?= htmlspecialchars($fila['nombre']) ?>" disabled>
        </td>
        <td><input class="fila<?= $fila['id'] ?>" name='apellido' value="<?= htmlspecialchars($fila['apellido']) ?>"
                disabled>
        </td>
        <td><input class="fila<?= $fila['id'] ?>" name='email' value="<?= htmlspecialchars($fila['email']) ?>" disabled>
        </td>
        <td><input class="fila<?= $fila['id'] ?>" name='pais' value="<?= htmlspecialchars($fila['pais']) ?>" disabled>
        </td>
        <td><input class="fila<?= $fila['id'] ?>" name='motivo_del_contacto'
                value="<?= htmlspecialchars($fila['motivo_del_contacto']) ?>" disabled>
        </td>

        <td>
            <input type="hidden" name="actualizar" value="" class="fila<?= $fila['id'] ?>">

            <button class="botones_actualizar botones" data-id="<?= $fila["id"] ?>">Actualizar</button>
            <br>

            <button class="botones_borrar botones" data-id="<?= $fila["id"] ?>">Borrar</button>

            <input type="hidden" name="borrar" value="" class="fila<?= $fila['id'] ?>">


            <button data-id="<?= $fila["id"] ?>" class="fa-solid fa-check checkCross confirmar"
                onclick="actualizar('<?= $fila['id'] ?>')"></button>

            <button data-id="<?= $fila["id"] ?>" class="fa-solid fa-xmark checkCross cancelar"></button>
        </td>
    </tr>
    <!-- </form> -->
    <?php
}

?>

<script>

    

    $(".checkCross").hide();
    $(document).on("click", ".botones", function () {
        var data = $(this).attr("data-id");
        $('.botones[data-id="' + data + '"]').hide();
        $('.checkCross[data-id="' + data + '"]').show();
        $('.fila' + data).prop("disabled", false);
    });

    $(document).on("click", ".checkCross", function () {
        var_id = $(this).attr("data-id");
        $(".checkCross").hide();
        $(".botones").show();
        $(".fila" + var_id).attr("disabled", "true");
    })
    function actualizar(id_Funcion) {
        var nombre_Valor = $(".fila" + id_Funcion + "[name='nombre']").val();
        var apellido_Valor = $(".fila" + id_Funcion + "[name='apellido']").val();
        var email_Valor = $(".fila" + id_Funcion + "[name='email']").val();
        var pais_Valor = $(".fila" + id_Funcion + "[name='pais']").val();
        var motivo_del_contacto_Valor = $(".fila" + id_Funcion + "[name='motivo_del_contacto']").val();
        var borrar_Valor = $(".fila" + id_Funcion + "[name='borrar']").val();
        var actualizar_Valor = $(".fila" + id_Funcion + "[name='actualizar']").val();
        $.ajax({
            url: "procesar.php",
            method: "POST",
            data: { id_Peticion: id_Funcion, nombre: nombre_Valor, apellido: apellido_Valor, email: email_Valor, pais: pais_Valor, motivo_del_contacto: motivo_del_contacto_Valor, borrar: borrar_Valor, actualizar: actualizar_Valor },
            success: function (respuesta) {
                if (respuesta == 1){
                   $(".fila_Tabla" + id_Funcion).html("");
                }
            }


        })

    }
    
    $(document).on("click", ".botones_borrar", function () {
        var id_var = $(this).attr("data-id");
        $(".fila" + id_var + "[name='borrar']").val(2);
        $(".fila" + id_var + "[name='actualizar']").val("");
        $(".fila" + id_var).attr("disabled", "true");
    })
    $(document).on("click", ".botones_actualizar", function () {
        var id_var = $(this).attr("data-id");
        $(".fila" + id_var + "[name='actualizar']").val(1);
        $(".fila" + id_var + "[name='borrar']").val("");
    })
</script>