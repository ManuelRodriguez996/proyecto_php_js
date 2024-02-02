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

        h2 {
            font-size: 24px;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
            text-align: center;
        }

        .image {
            display: flex;
            flex-direction: column;
            float: center;
            margin: 0 0 20px 20px;
            max-width: 25%;
            height: auto;
        }


        .article {
            float: left;
            width: 70%;
            background-color: #FFF;
            padding: 10px;
            margin: 10px;
            border: 1px solid #CCC;
        }

        .footer {
            background-color: #333;
            color: #FFF;
            padding: 10px;
            text-align: center;
            clear: both;
        }

        #imagen-div {
            display: flex;
            justify-content: center;
        }

        #titulo-sec {
            margin: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>

    <h2 id="titulo-sec">Sobre Mi</h2>
    <hr>

    <article class="container">
        <div id="imagen-div">
            <img class="image"
                src="http://localhost/CVMANUEL/assets/img/15672999_10210951839649227_5313103061670439891_n.jpg"
                alt="Manuel Rodriguez" width="300">
        </div>
        <div>
            <p>Soy un apasionado programador junior especializado en desarrollo web con experiencia en <strong>HTML, CSS
                    y JavaScript</strong>. <br>
                Me encanta crear soluciones interactivas y cautivadoras que mejoren la experiencia del usuario. <br>
                Siempre estoy buscando oportunidades para aprender y crecer profesionalmente en el campo de la
                programación.
            </p>
        </div>
        <div>
            Adquirí una base sólida en los fundamentos de la programación y desarrollé habilidades en el diseño
            responsivo y adaptativo. <br>
            Me considero una persona creativa y detallista, lo que me permite abordar los desafíos con una
            mentalidad orientada a soluciones.
        </div>
        <h3>Mi Sueño: Ser un Innovador Tecnológico</h3>
        <hr>
        <div>
            <p>Mi sueño ha sido convertirme en un innovador tecnológico. <br>
                Anhelo tener la oportunidad de crear soluciones innovadoras que impacten positivamente en la vida
                de las personas y en el avance de la tecnología.
            </p>
        </div>
        <div>
            <p>Mi sueño es trabajar en un entorno colaborativo y dinámico, donde pueda aprender de otros profesionales
                talentosos y aportar mis ideas y perspectivas únicas. <br>
                Sueño con contribuir en el desarrollo de software de vanguardia, explorar nuevas tecnologías y
                estar a la vanguardia de la innovación.
            </p>
        </div>
    </article>


    <footer class="footer">
        <p>Derechos reservados &copy;2023</p>
    </footer>
</body>

</html>