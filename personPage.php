<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9 DWES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        @font-face {
                font-family: 'Star Jedi';
                src: url('./Assets/fonts/StarJedi-DGRW.ttf') format('truetype');
            }      
            
        header {
            background-color: #1C1E22;
            -webkit-box-shadow: -2px 10px 9px -4px #191700; 
            box-shadow: -2px 10px 9px -4px #191700;
            width: 100%;
            height: 230px;
            padding: 3%;
            text-align: center;
        }

        h1 {
            color: white;
            font-family: 'Pacifico', cursive;
            rotate: -6deg;
        }

        h2{
            font-family: 'Star Jedi';
            color: #FFEB00;
        }

        p {
            color: white;
            font-family: sans-serif;
            font-size: 20px;            
        }

        body {
            background-color: #272B30;
        }

        section{
            margin: 2%;
            text-align: center;
        }

        section img{
            border: 3px solid #FFEB00;
            border-radius: 5px;
        }

        h3{
            text-align: left;
            color: white;
            font-family: sans-serif;
        }

        .back_home{
            text-decoration: none;
            cursor: pointer;
            width: 100%;
        }

        .link_container{
            width: 200px;
            padding-left: 10px;
        }

        
    </style>
</head>
<body>
    <header>
        <img src="./Assets/images/pngfind.com-star-wars-logo-png-3013639.png" width="230px"/>
        <h1>Los personajes</h1>
    </header>
    <section>
        <div class="link_container">
        <a class="back_home" href="https://mdimassimo.com/tareasDWES/tarea9/index.php?ordered=listadoPersonajes">
            <h3> ⬅️Volver al inicio </h3>
        </a>
        </div>
        <?php
        echo "<img src='./Assets/images/" . $_GET["id"] . ".jpg' height='300px'>";
        ?>
        <?php
        $pathBaseAPI = "https://mdimassimo.com/tareasDWES/tarea9/API.php";
            if (isset($_GET["ordered"]) && isset($_GET["id"]) && $_GET["ordered"] == "obtenerPersonajes"){
                    //Se obtiene todo el contenido en bruto de la consulta a la API
                    $app_info = file_get_contents($pathBaseAPI . '?ordered=obtenerPersonajes&id=' . $_GET["id"]);
                    //Se decodifica el fichero JSON y se convierte a array
                    $app_info = json_decode($app_info, true);
                    //Se accede a la información correspondiente
                        echo "<h2>" . $app_info["name"]. "</h2><br>";
                        echo "<p>Cumpleaños: " . $app_info["birth_year"]. "</p><br>";
                        echo "<p>Altura (cm): " . $app_info["height"]. "</p><br>";            
                        echo "<p>Peso (kg): " . $app_info["mass"]. "</p><br>";  
                }
            ?>
    </section>

</body>
</html>