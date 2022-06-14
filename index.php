<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    $id_pokemon = " ID: " .$pokemon_data['id'];
    $pokemon_picture = $pokemon_data['sprites']['front_default'];
    $pokemon_abilities1 = "Abilities: " .$pokemon_data['abilities']['0']['ability']['name'];
    $pokemon_abilities2 = $pokemon_data['abilities']['1']['ability']['name'];

//echo "<pre>";
//print_r($pokemon_data);

////Get the ID of Bulbasaur and print it out
//    $id_pokemon = $pokemon_data['id'];
//    echo "The ID of the pokemon: " . $id_pokemon;
////
//    echo "<br>";
////
//////Get the name of Bulbasaur and print it out
//    $name_pokemon = $pokemon_data['forms']['0']['name'];
//    echo "The name is: " . $name_pokemon;
//
//    echo "<br>";
//
////Get the picture of the Bulbasaur and print it out
//    echo "<img src= $pokemon_picture' >";

//append all the items to the DOMDocument
//name
$document = new DOMDocument('1.0', 'utf-8');
$name = $document->createElement('h1', $name_pokemon);
$document->appendChild($name);

$id_pokemon = $document->createElement('h2', $id_pokemon);
$document->appendChild($id_pokemon);

$pokemon_abilities1 = $document->createElement('h3', $pokemon_abilities1);
$document->appendChild($pokemon_abilities1);
    echo "<br>";

$pokemon_abilities2 = $document->createElement('h3', $pokemon_abilities2);
$document->appendChild($pokemon_abilities2);


$img = $document->createElement('img', "");
$attr = $document->createAttribute("src");
$tnode = $document->createTextNode($pokemon_picture);
$attr->appendChild($tnode);
$img->appendChild($attr);
$document->appendChild($img);

echo $document->saveXML();
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

    <div class="card">
        <div id="test-container">
            <div id="name-container">
                <h2 class="name"></h2>
                <h2 class="id"></h2>
                <div class="sprites"></div>
            </div>
            <div id="abilities-container">
                <p class="abilities"></p>
                <p class="moves"></p>
                <p class="types"></p>
            </div>
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
