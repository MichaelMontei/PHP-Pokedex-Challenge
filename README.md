# PHP---Pokemon-Challenge
Change JS to PHP in the previous pokemon challenge 

- [X] Check how to fetch data from an API with PHP
	- https://www.php.net/manual/en/function.json-decode.php
	- Made a variable like in JS for the url then json_decode( file_get_contents($api_url), true);	
	- I see the structured response from Bulbasaur in the browser.

- [X] Check how I can print the ID, Name and Picture of a Pokemon (Bulbasaur)
	- Found following way to print the ID:  $id_pokemon = $pokemon_data['id'];
	- Name: $name_pokemon = $pokemon_data['forms']['0']['name'];
	- Had to make a seperate Url for the picture. Still working on that.
	- Picture: $picture_pokemon = $pokemon_picture['sprites']['front_default'];

- [X] Check how I can use the user input as a value with a button click in PHP
	- Found an interesting topic on: https://stackoverflow.com/questions/42776242/php-html-getting-user-input-and-going-to-another-page
	- Made a form and linked it to the index.php file -> then added  $api_url = "https://pokeapi.co/api/v2/pokemon/" . $_POST["input"];


- [X] Need to Check how I can print the user input on the DOMDocument through PHP
	- https://www.w3schools.com/php/php_xml_dom.asp and https://css-tricks.com/building-a-form-in-php-using-domdocument/
	- Made a new DOMDocument and created elements and afterwards append to the Document. 

