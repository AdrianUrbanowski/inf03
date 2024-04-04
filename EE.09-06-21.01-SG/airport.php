<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Odloty samolotów</title>
	<link rel="stylesheet" type="text/css" href="styl6.css">
</head>
<body>
	<section id="banner-left">
		<h2>Odloty z lotniska</h2>
	</section>
	<section id="banner-right">
		<img src="zad6.png" alt="logotyp">
	</section>
	<section id="main">
		<h4>tabela odlotów</h4>
		<table>
			<tr>
				<th>lp.</th>
				<th>numer rejsu</th>
				<th>czas</th>
				<th>kierunek</th>
				<th>status</th>
			</tr>
			<!-- Efekt działania skryptu 1 -->
			<?php
			// Połączenie z bazą danych
			$id_polaczenia = mysqli_connect("localhost", "root", "", "egzamin");
			// wysłanie zapytania
			$zapytanie1 = 'SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC';
			$wynik_zapytania1 = mysqli_query($id_polaczenia, $zapytanie1);
			//  

			while ($row = mysqli_fetch_assoc($wynik_zapytania1)) {
				echo "<tr>";
				echo "<td>" , $row["id"] , "</td>";
				echo "<td>" , $row["nr_rejsu"] , "</td>";
				echo "<td>" , $row["czas"] , "</td>";
				echo "<td>" , $row["kierunek"] , "</td>";
				echo "<td>" , $row["status_lotu"] , "</td>";
				echo "</tr>"; 
			}

			mysqli_close($id_polaczenia)
			?>
		</table>
	</section>
	<section id="footer-left">
		<a target="_blank" href="kw1.jpg">Pobierz obraz</a>
	</section>
	<section id="footer-middle">
		<!-- Efekt działania skryptu 2 -->
	</section>
	<section id="footer-right">
		Autor: 345345345345
	</section>
</body>
</html>