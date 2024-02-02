<?php
session_start();
// session_destroy();

// if (isset($_SESSION['last_action']) && time() - $_SESSION['last_action'] > 10) { // 
//     session_unset();
//     session_destroy();
//     header("Location: index.php");
//     exit();
// }
// $_SESSION['last_action'] = time();

?>




<style>
    .titulo-prin {
        background-color: black;
        padding: 10px;
        margin: 0;
        color: #92a4ff;
    }

    .active {
        background-color: #111;
        font-size: 17px;
        color: #00fdcb;
    }

    li a:hover:not(.active) {
        background-color: #11111159;
        font-size: 17px;
        color: #68c7b5;
        text-decoration: underline;
    }

    #formLogin {
        position: absolute;
        right: 50px;
        width: 290px;
        height: 290px;
        background: white;
        border: 1px solid;
        border-radius: 20px;
        margin-top: 10px;
        display: none;
    }

    #formRegistro {
        position: absolute;
        right: 0px;
        width: 290px;
        height: 290px;
        background: white;
        border: 1px solid;
        border-radius: 20px;
        margin-top: 10px;
        display: none;
    }

    .flechita-log {
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-bottom: 20px solid white;
        position: relative;
        top: 19px;
        right: 39px;
        display: none;
    }

    .flechita-reg {
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-bottom: 20px solid white;
        position: relative;
        top: 19px;
        right: -59px;
        display: none;
    }

    .login {
        float: right;
    }

    .login #boton-log {
        text-decoration: none;
        font-size: 15px;
        color: white;
        font-weight: bold;
        position: relative;
        right: 60px;
        top: 15px;
        transition: .5s;
        padding: 14px 16px;
        transition: 0.5s;
    }

    .login #boton-reg {
        text-decoration: none;
        font-size: 15px;
        color: white;
        font-weight: bold;
        position: relative;
        right: 60px;
        top: 15px;
        transition: .5s;
        padding: 14px 16px;
        transition: 0.5s;
    }

    #boton-log:hover {
        background-color: #11111159;
        font-size: 17px;
        color: #68c7b5;
        text-decoration: underline;
    }

    #boton-reg:hover {
        background-color: #11111159;
        font-size: 17px;
        color: #68c7b5;
        text-decoration: underline;
    }

    .login div h1 {
        height: 20px;
        margin-top: 35px;
    }

    .login div input {
        padding: 5px 0px;
        padding-right: 70px;
        margin: 6px;
        border-radius: 10px;
    }

    .login div button {
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 5px;
    }

    .login div p {
        line-height: 15px;
        margin-top: 20px;
    }

    .login div p a {
        text-decoration: none;

    }

    .registrarse {
        line-height: 15px;
        margin-top: 40px;
    }
</style>





<script src="https://kit.fontawesome.com/d78302bb95.js" crossorigin="anonymous"></script>
<header>
    <h1 class="titulo-prin">Manuel Rodriguez</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Habilidades.php">Habilidades</a></li>
            <li><a href="Experiencia_laboral.php">Experiencia laboral</a></li>
            <li><a href="Contacto.php">Contacto</a></li>
            <?php
            if (isset($_SESSION["sesion_creada"])) {


                ?>
                <li><a href="InformacionBDD.php">Base de Datos</a></li>
            <?php }
            ?>
            <div class="login">
                <a href="" id="boton-log"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                <a href="" id="boton-reg"><i class="fa-solid fa-user"></i> Registro</a>

                <div class="flechita-log flechita"></div>

                <div id="formLogin" class="login-form">
                    <h1>Iniciar Sesion</h1>
                    <hr>
                    <input type="text" placeholder=" Nombre de Usuario" class="input-login" name="usuario_login"><br>
                    <input type="password" placeholder=" Contraseña" class="input-login" name="contraseña_login"><br>
                    <button class="button-login" onclick="login()">Login</button><br>
                    <p><a href="" class="registrarse">¿Quieres registrarte?</a><br>
                        <br>
                        <a href="" class="recovery">¿Olvidaste tu contraseña?</a>
                    </p>
                </div>

                <div class="flechita-reg flechita"></div>

                <div id="formRegistro" class="login-form" action="">
                    <h1>Registrarme</h1>
                    <hr>
                    <input type="text" placeholder=" Nombre de Usuario" name="usuario_registro">
                    <input type="password" placeholder=" Ingrese su contraseña" name="contraseña_registro">
                    <input type="password" placeholder=" Confirme su contraseña">
                    <input type="email" placeholder=" Ingrese su Email" name="email_registro">
                    <button onclick="registro()">Registrarse</button>
                </div>

            </div>
        </ul>
    </nav>

</header>




<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

    var intervalo = "";


    $(document).ready(function () {
        // Función para mostrar/ocultar el formulario correspondiente y la flechita
        function toggleForm(formId, flechitaClass) {
            // Si el formulario ya está visible, lo oculta
            if ($('#' + formId).is(':visible')) {
                $('#' + formId).hide();
                $('.' + flechitaClass).hide();
            } else {
                // Oculta todos los formularios y las flechitas
                $('#formLogin, #formRegistro, .flechita-log,.flechita-reg').hide();

                // Muestra el formulario específico y la flechita correspondiente
                $('#' + formId).show();
                $('.' + flechitaClass).show();
            }
        }

        // Agregar eventos de clic a los enlaces
        $('#boton-log').click(function (event) {
            toggleForm('formLogin', 'flechita-log');
            event.preventDefault(); // Evitar el comportamiento predeterminado de navegación
        });

        $('#boton-reg').click(function (event) {
            toggleForm('formRegistro', 'flechita-reg');
            event.preventDefault(); // Evitar el comportamiento predeterminado de navegación
        });

        // Ocultar ambos formularios y flechitas al hacer clic en cualquier parte del documento
        $(document).click(function (event) {
            if (!$(event.target).closest('.login, .login-form, .flechita').length) {
                $('.login-form, .flechita').hide();
            }
        });
    });

    $(document).ready(function () {
        var urlDelaPagina = window.location.href;
        var urlarray = urlDelaPagina.split('/');
        var elUltimoElementoArray = urlarray[urlarray.length - 1];
        // console.log(elUltimoElementoArray);
        switch (elUltimoElementoArray) {
            case "index.php": $("a[href='index.php']").addClass("active");
                break
            case "Habilidades.php": $("a[href='Habilidades.php']").addClass("active");
                break
            case "Experiencia_laboral.php": $("a[href='Experiencia_laboral.php']").addClass("active");
                break
            case "Contacto.php": $("a[href='Contacto.php']").addClass("active");
                break
            case "InformacionBDD.php": $("a[href='InformacionBDD.php']").addClass("active");
                break
        }
    })

    function registro() {
        var usuario_Valor = $("input[name= 'usuario_registro']").val();
        var contraseña_Valor = $("input[name= 'contraseña_registro']").val();
        var email_Valor = $("input[name= 'email_registro']").val();

        $.ajax({
            url: "procesar_registro.php",
            method: "POST",
            data: { usuario_peticion: usuario_Valor, contraseña_peticion: contraseña_Valor, email_peticion: email_Valor },
            success: function (respuesta) {
                if (respuesta == 1) {
                    alert("Te Registraste Correctamente");
                }
            }
        })
    }

    function login() {
        var usuario_Valor = $("input[name= usuario_login]").val();
        var contraseña_Valor = $("input[name=contraseña_login]").val();
        $.ajax({
            url: "procesar_login.php",
            method: "POST",
            data: { usuario_peticion: usuario_Valor, contraseña_peticion: contraseña_Valor },
            success: function (respuesta) {
                if (respuesta == 1) {
                    intervalo = setInterval(checkSession, 11000);
                    $(document).on('click keypress', checkSession);
                    alert("Iniciaste Sesion");
                    location.reload();
                } else if (respuesta == 2) {
                    alert("Usuario o Contraseña Incorrecta");
                }
            }
        })
    }

    function checkSession() {
        $.ajax({
            url: 'session_viva.php',
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                if (response.expired) {
                    clearInterval(intervalo);
                    $(document).off('click keypress', checkSession);
                    alert('¡La sesión ha expirado!');
                    window.location.href = 'index.php';
                }
            }
        });
    }


</script>


<?php
if (isset($_SESSION["sesion_creada"])) {
    ?>
    <script>
        intervalo = setInterval(checkSession, 11000);
        $(document).on('click keypress', checkSession);
    </script>
    <?php
}
?>