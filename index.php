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

        body {
            background-color: #272B30;
        }

        .persons {
            padding-top: 30px;
            padding-bottom: 30px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 15px;
            justify-items: center;
        }

        .person1 { 
            grid-area: 1 / 1 / 2 / 2;
            background-color: #1C1E22;
            width: 300px;
            height: 300px;
            border-radius: 5px;
            border: 3px solid #FFEB00;
         }

        .person2 { grid-area: 1 / 2 / 2 / 3; 
            background-color: #1C1E22;
            width: 300px;
            height: 300px;
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        .person3 { grid-area: 1 / 3 / 2 / 4;
            background-color: #1C1E22;
            width: 300px;
            height: 300px;
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        .person4 { grid-area: 2 / 1 / 3 / 2;
            background-color: #1C1E22;
            width: 300px;
            height: 300px;
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        .person5 { grid-area: 2 / 2 / 3 / 3; 
            background-color: #1C1E22;
            width: 300px;
            height: 300px;
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        .person6 { grid-area: 2 / 3 / 3 / 4;
            background-color: #1C1E22;
            width: 300px;
            height: 300px; 
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        .person7 { grid-area: 3 / 1 / 4 / 2; 
            background-color: #1C1E22;
            width: 300px;
            height: 300px;
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        .person8 { grid-area: 3 / 2 / 4 / 3; 
            background-color: #1C1E22;
            width: 300px;
            height: 300px; 
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        .person9 { grid-area: 3 / 3 / 4 / 4;
            background-color: #1C1E22;
            width: 300px;
            height: 300px; 
            border-radius: 5px;
            border: 3px solid #FFEB00;
        }

        h3 {
            text-align: center;
            font-family: 'Star Jedi';
            padding-top: 40%;
            color: #FFEB00;
        }
        
        div a {
            text-decoration: none;
        }

        div a:hover{
            font-size:25px;
            padding-top: 30%;
        }

        .persons div:hover{
            background-image: url('./Assets/images/5R2EL3.webp');
            background-size: contain;
        }

        @media (max-width: 925px){
            .persons {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                grid-column-gap: 30px;
                margin: 5%;
            }
        }

    </style>
</head>
<body>
    <header>
        <img src="./Assets/images/pngfind.com-star-wars-logo-png-3013639.png" width="230px"/>
        <h1>Los personajes</h1>
    </header>
    <section>
        <div class="persons">
    <?php
    $pathBaseAPI = "https://mdimassimo.com/tareasDWES/tarea9/API.php";
        if (isset($_GET["ordered"]) && $_GET["ordered"] == "listadoPersonajes"){
                //Se realiza la peticion a la api que nos devuelve el JSON con la información de los autores
                $app_info = file_get_contents($pathBaseAPI . '?ordered=listadoPersonajes');
                // Se decodifica el fichero JSON y se convierte a array
                $app_info = json_decode($app_info, true);
                $idPersonaje = 1;
                for($i=0; $i < 9; $i++){                    
                    $nombre = $app_info['results'][$i]['name'];
                    echo "<div class='person" . $idPersonaje . "'><a href='https://mdimassimo.com/tareasDWES/tarea9/personPage.php?ordered=obtenerPersonajes&id=" . $idPersonaje . "'><h3>" . $nombre . "</h3></a></div>";
                    $idPersonaje++;
                }
            }
    ?>
        </div>
    </section>
</body>
</html>