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

        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 33vw;
            height: 380px;
            overflow: hidden;
        }

        div.gallery:hover {
            border: 5px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        .centrado {
            display: flex;
            justify-content: center;
        }

        .footer {
            background-color: #333;
            color: #FFF;
            padding: 10px;
            text-align: center;
            clear: both;
        }

        #h2-sec {
            margin: 15px;
            text-align: center;
        }

        img {
            width: 600px;
            height: auto;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <?php include("navbar.php");?>

    <h2 id="h2-sec">Mi Experiencia Laboral</h2>
    <hr>
    <div class="desc">
        <p>2018-2020 Melona venta de helado al por mayor (emprendimiento propio)</p>
    </div>

    <div class="centrado"><video
            src="http://localhost/CVMANUEL/assets/video/258481917_2007833592716472_1404926596800831721_n.mp4" autoplay
            controls></video>
    </div>

    <section class="centrado">

        <div class="gallery">
            <div class="desc">Barrio chino 1</div>
            <a href="http://localhost/CVMANUEL/assets/img/maxresdefault (1).jpg" target="_blank"><img
                    src="http://localhost/CVMANUEL/assets/img/maxresdefault (1).jpg" alt="Barrio chino"></a>
        </div>
        <div class="gallery">
            <div class="desc">Barrio chino 2</div>
            <a href="http://localhost/CVMANUEL/assets/img/argentina-buenos-aires-barrio-chino-chinese.jpg"
                target="_blank"> <img
                    src="http://localhost/CVMANUEL/assets/img/argentina-buenos-aires-barrio-chino-chinese.jpg"
                    alt="Barrio chino"></a>
        </div class=" gallery">
        <div class="gallery">
            <div class="desc">Barrio chino 3</div>
            <a href="http://localhost/CVMANUEL/assets/img/descarga (5).jpg" target="_blank"><img
                    src="http://localhost/CVMANUEL/assets/img/descarga (5).jpg" alt="Barrio chino"></a>
        </div>

    </section>


    <footer class=" footer">
        <p>Derechos reservados &copy;2023</p>
    </footer>
</body>

</html>