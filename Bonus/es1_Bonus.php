<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>PHP HOTEL</title>
</head>

<body>

	<form>
		<label for="parcheggio">Disponibilit&agrave; parcheggio? </label>
		<input type="text" name="parcheggio">
		<br>
		<label for="hotel">Voto Hotel: </label>
		<input type="text" name="hotel">
		<br>
		<input type="submit" value="Invia">
	</form>

	<?php

	/*
	1. Aggiungere un form ad inizio pagina che tramite una richiesta `GET` permetta di filtrare gli hotel che hanno un parcheggio
	2. Aggiungere un secondo campo al `form` che permetta di filtrare gli hotel per voto (es. inserisco 3 e ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
	*/

	$hotels = [

		[
			'name' => 'Hotel Belvedere',
			'description' => 'Hotel Belvedere Descrizione',
			'parking' => true,
			'vote' => 4,
			'distance_to_center' => 10.4
		],
		[
			'name' => 'Hotel Futuro',
			'description' => 'Hotel Futuro Descrizione',
			'parking' => true,
			'vote' => 2,
			'distance_to_center' => 2
		],
		[
			'name' => 'Hotel Rivamare',
			'description' => 'Hotel Rivamare Descrizione',
			'parking' => false,
			'vote' => 1,
			'distance_to_center' => 1
		],
		[
			'name' => 'Hotel Bellavista',
			'description' => 'Hotel Bellavista Descrizione',
			'parking' => false,
			'vote' => 5,
			'distance_to_center' => 5.5
		],
		[
			'name' => 'Hotel Milano',
			'description' => 'Hotel Milano Descrizione',
			'parking' => true,
			'vote' => 2,
			'distance_to_center' => 50
		],

	];

	$parcheggio = $_GET['parcheggio'];
	$voto = $_GET['hotel'];

	if ($parcheggio === "si" || 'SI' || 'Si') {
		foreach ($hotels as $hotel) {
			if ($hotel['parking'] === true) {
				echo "$hotel[name]";
			}
		}
	}

	//Ciclo sull'array hotels prendendo i seguenti valori
	// foreach ($hotels as $key => $hotel) {
	// 	echo " 
	// 	<table class='table'> 
	// 		<tbody>
	// 			<tr>
	// 	  			<th scope='row'>$key</th>
	// 	  			<td>$hotel[name]</td>
	// 	  			<td>$hotel[description]</td>
	// 	  			<td>$hotel[parking]</td>
	// 				<td>$hotel[vote]</td>
	// 				<td>$hotel[distance_to_center]</td>
	// 			</tr>
	//   		</tbody>
	// 	</table>";
	// }

	?>

</body>

</html>