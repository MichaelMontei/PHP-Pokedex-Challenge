<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Tapestry&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Life+Savers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Gruesa+Libre&family=Life+Savers&display=swap"
          rel="stylesheet">
    <title>Pokedex</title>
</head>
<body>

<?php
if(isset($_POST['btn1'])) {
// API + JSON_decode to get the files and print it out on console
    $api_url = "https://pokeapi.co/api/v2/pokemon/" . $_POST["input"];

//    $api_url2 = "https://pokeapi.co/api/v2/pokemon-form/1/";
    $pokemon_data = json_decode(file_get_contents($api_url), true);
    $name_pokemon = "Name of the pokemon: " .$pokemon_data['forms']['0']['name'];
    $name_pokemon2 = $pokemon_data['forms']['0']['name'];
    $id_pokemon = " ID: " .$pokemon_data['id'];
    $pokemon_picture = $pokemon_data['sprites']['front_default'];
    $pokemon_abilities1 = "Abilities: " .$pokemon_data['abilities']['0']['ability']['name'];
    $pokemon_abilities2 = "Abilities: " .$pokemon_data['abilities']['1']['ability']['name'];
    $pokemon_moves = "Moves: " .$pokemon_data['moves']['0']['move']['name'];
    //$test = $pokemon_data['moves'][$i]['move']['name'];
    //echo "<pre>";
    //print_r($pokemon_data);
}
?>




<div id="container">
    <h1>Pokedex</h1>


    <div id="search-container">
        <form action="index.php" method="post">
            <input type="text" method="post" name="input">
            <button name="btn1">search</button>
        </form>
    </div>

    <div id="stats-container">
        <div class="stats">
            <h2 class="name">
                <?php
                if (isset($_POST['input'])) {
                    echo "Name: " .$name_pokemon2;
                }
                ?>
            </h2>
            <br>
            <h2 class="id">
                <?php
                if (isset($_POST['input'])) {
                    echo $id_pokemon;
                }
                ?>
            </h2>
            <div class="sprites">
                <img src="<?php
                if (isset($_POST['input'])) {
                    echo $pokemon_picture;
                }
                ?>">
            </div>
            <p class="abilities">
                <?php
                if (isset($_POST['input'])) {
                    echo $pokemon_abilities1;
                    echo "<br>";
                    echo $pokemon_abilities2;
                }
                ?>
            </p>
            <p class="moves">
                <?php
                if (isset($_POST['input'])) {

                    if (count($pokemon_data['moves']) > 1 ){
                        for ($i=0; $i<=4;$i++){
                            print_r("Moves: " .$pokemon_data['moves'][$i]['move']['name']);
                        }
                    } else if (count($pokemon_data['moves']) === 1){
                        print_r($pokemon_moves);
                    }
                }
                ?>
            </p>
            <p class="types"></p>
            <p class="evolution"></p>
            <div class="evoSprites1"></div>
            <div class="evoSprites2"></div>
        </div>
    </div>

    <p class="evolution"></p>

    <div class="card-two">
        <div id="evolution-container">
            <p class="evolution"></p>
            <div class="evoImageOne"></div>
            <div class="evoSprites1"></div>
            <div class="evoSprites2"></div>
        </div>
    </div>

</div>

</body>
</html>