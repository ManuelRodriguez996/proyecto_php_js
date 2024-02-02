<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Manuel Rodriguez">
    <meta name="description" content="página web CV">
    <link rel="shortcut icon" href="http://localhost/CVMANUEL/assets/favicon/icons8-cv-80.png" type="image/x-icon">
    <title>CV Manuel Rodriguez</title>

    <style>
        body {
            font-family: "Lucida Console", "Courier New", monospace;
            background: linear-gradient(to right, rgb(189, 189, 255), rgb(255, 233, 236));
            padding: 0;
            margin: 0;
        }

        header {
            text-align: center;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            transition: .5s;
            text-decoration: none;
        }

        .input_text{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .submit_contacto[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit_contacto[type=submit]:hover {
            background-color: #45a049;
        }

        div.contenedor-formulario {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            min-height: calc(100vh - 260px);
        }

        .footer {
            background-color: #333;
            color: #FFF;
            padding: 10px;
            text-align: center;
            clear: both;
        }
    </style>

</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="contenedor-formulario">
        <form action="Validaciones.php" method="post">
            <label for="nombre">Nombre:</label>
            <input class="input_text" type="text" id="nombre" name="Nombre" placeholder="Escribe tu nombre aqui">
            <label for="apellido">Apellido:</label>
            <input class="input_text" type="text" id="apellido" name="Apellido" placeholder="Escribe tu apellido aqui">
            <label for="Email">Email:</label>
            <input class="input_text" type="text" name="Email" id="mail" placeholder="Escribe tu email aqui">
            <label for="pais">País</label>
            <select class="input_text" name="Pais" id="pais">
                <option value="Argentina">Argentina</option>
                <option value="Chile">Chile</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Brasil">Brasil</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Peru">Peru</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Ecuador">Ecuador</option>
            </select>
            <label for="comentario">Comentario:</label>
            <textarea class="input_text" name="Comentario" id="comentario" placeholder="Escribe tu comentario aqui"></textarea>
            <label for="motivo">Motivo de contacto:</label>
            <input type="radio" name="Motivo" id="motivo1" value="Para seguir aprendiendo"><i>Para seguir
                aprendiendo</i>
            <input type="radio" name="Motivo" id="motivo2" value="Por consulta"><i>Por consulta</i>
            <input type="radio" name="Motivo" id="motivo3" value="Por trabajo"><i>Por trabajo</i>
            <input type="radio" name="Motivo" id="motivo4" value="Otros"><i>Otros</i>

            <input class="submit_contacto" type="submit" value="Enviar">


        </form>
    </div>





    <footer class="footer">
        <p>Derechos reservados &copy;2023</p>
    </footer>
</body>

</html>