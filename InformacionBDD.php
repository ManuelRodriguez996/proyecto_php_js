<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Manuel Rodriguez">
    <meta name="description" content="página web CV">
    <link rel="shortcut icon" href="http://localhost/CVMANUEL/assets/favicon/icons8-cv-80.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d78302bb95.js" crossorigin="anonymous"></script>
    <title>CV Manuel Rodriguez</title>
</head>

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

    .container {
        display: flex;
        justify-content: center;
        min-height: calc(100vh - 260px);
    }

    table {
        border-collapse: collapse;
        border: 6px solid rgb(200, 200, 200);
        letter-spacing: 1px;
        font-size: 1.5rem;
        background-color: #FFF;
    }

    td {
        border: 2px solid rgb(190, 190, 190);
        padding: 10px 20px;
    }

    th {
        border: 2px solid rgb(190, 190, 190);
        padding: 10px 20px;
        background-color: rgb(162, 162, 162);

    }

    .footer {
        background-color: #333;
        color: #FFF;
        padding: 10px;
        text-align: center;
        clear: both;

    }

    #h2-text {
        margin: 15px;
        text-align: center;
    }
</style>

<body>
    <?php include("navbar.php"); ?>

    <h2 id="h2-text">Base de Datos</h2>
    <hr>

    <div class="container">
        <table>

            <colgroup>
                <col style="background-color: rgb(104, 32, 32)">
                <col>
                <col>
                <col>
                <col>
                <col>
            </colgroup>
            <thead> <!-- thead sirve para incluir todo relacionado a los encabezados  -->
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Pais</th>
                    <th>Motivo de Contacto</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("infoBaseDeDatos.php");
                ?>
            </tbody>

        </table>

    </div>


    <footer class="footer">
        <p>Derechos reservados &copy;2023</p>
    </footer>
</body>

</html>