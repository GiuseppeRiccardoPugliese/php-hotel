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

	<?php

	/*
	Stampare tutti i nostri hotel con tutti i dati disponibili.

	Iniziate in modo graduale.
	Prima stampate in pagina i dati, senza preoccuparvi dello stile.
	Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
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

	//Prima parte di tabella con thead
	echo '
	<table class="table"> 
			<thead>
    			<tr>
      				<th scope="col">#</th>
      				<th scope="col">Name</th>
      				<th scope="col">Description</th>
      				<th scope="col">Parking</th>
	  				<th scope="col">Vote</th>
	  				<th scope="col">Distance to center</th>
    			</tr>
  			</thead>
		<tbody>';

	//Ciclo sull'array hotels prendendo i seguenti valori
	foreach ($hotels as $key => $hotel) {
		echo " 
			<tr>
				<th scope='row'>$key</th>
	  			<td>$hotel[name]</td>
	  			<td>$hotel[description]</td>
	  			<td>$hotel[parking]</td>
				<td>$hotel[vote]</td>
				<td>$hotel[distance_to_center]</td>
			</tr>
	  		";
	}

	//Seconda parte di tabella con chiusura del body e della table

	echo "
		</tbody>
	</table>";

	?>

</body>

</html>