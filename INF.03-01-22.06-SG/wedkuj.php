<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wędkowanie</title>
	<link rel="stylesheet" type="text/css" href="styl_1.css">
</head>
<body>
	<section id="banner">
		<h1>Portal dla wędkarzy</h1>
	</section>
	<section id="content-left">
		<section id="left-one">
			<h3>Ryby zamieszkujące rzeki</h3>
			<ol>
				<!-- Efekt działania skryptu 1 -->
					<?php
					$id_polaczenia = mysqli_connect("localhost", "root", "", "wedkowanie");
					$zapytanie3 = 'SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3';
					$wynik_zapytania3 = mysqli_query($id_polaczenia, $zapytanie3);
					while($rekord = mysqli_fetch_array($wynik_zapytania3)) {
						echo '<li>';
						echo $rekord['nazwa'].' pływa w rzece '. $rekord['akwen']. ', '. $rekord['wojewodztwo'];
						echo '</li>';
					}
					?>
			</ol>
		</section>
		<section id="left-two">
			<h3>Ryby drapieżne naszych wód</h3>
			<table>
				<tr>
					<th>L.p.</th>
					<th>Gatunek</th>
					<th>Występowanie</th>
				</tr>
				<!-- Efekt działania skryptu 2 -->
				<?php
					$zapytanie1 = 'SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1';
					$wynik_zapytania1 = mysqli_query($id_polaczenia, $zapytanie1);
					while ($rekord = mysqli_fetch_array($wynik_zapytania1)) {
						echo '<tr>';
						echo '<td>' . $rekord['id'] . '</td>';
						echo '<td>' . $rekord['nazwa'] . '</td>';
						echo '<td>' . $rekord['wystepowanie'] . '</td>';
						echo '</tr>';
					}
					mysqli_close($id_polaczenia);
					?>
			</table>
		</section>
	</section>
	<section id="content-right">
		<img src="ryba1.jpg" alt="Sum">
		<a href="kwerendy.txt">Pobierz kwerendy</a>
	</section>
	<section id="footer">
		<p>Stronę wykonał: 238787456</p>
	</section>
</body>
</html>