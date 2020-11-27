<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>NatSave</title>
	<link rel="icon" href="images/logo.png">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body id="game" class="is-preload">

	<!-- Header -->
	<header style="height: 100px;" id="header">
		<a href="index.html" class="title">
			<img style="width: 60px;" src="images/logo.png" alt="Logo com nome"></a>
		<nav>
			<ul>
				<li><a href="game.html">Na'tividade</a></li>
				<li><a href="ranking.html" class="active">Rankings</a></li>
				<li><a href="elements.html">Premios</a></li>
			</ul>
		</nav>
	</header><br><br>

	<div vw class="enabled">
		<div vw-access-button class="active"></div>
		<div vw-plugin-wrapper>
			<div class="vw-plugin-top-wrapper"></div>
		</div>
	</div>
	<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
	<script>
		new window.VLibras.Widget('https://vlibras.gov.br/app');
	</script>

	<!-- Wrapper -->
	<div id="wrapper" class="inner">

		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="inner">
				<h1 id="natividade" class="major">Rankings</h1>
			</div>
		</section>

		<section id="main" class="wrapper game-menu row gtr-uniform">

			<?php

			$sql="SELECT * FROM tbl_usuario ORDER BY pontuacao DESC";

			//conexão como o bd
			include('conexao.php');

			//executar comando $sql
			$resultado=mysqli_query($conn, $sql);
			while ($registro=mysqli_fetch_array($resultado))
				{
			?>

			<section id="game" class="card-rank">
				<div class="rank-align">
					<h3>#1</h3>

					<p class="psn-bold"> <?php echo($registro['nome_usuario']);?> </p>

					<p class="psn-black"> <?php echo($registro['pontuacao']);?> </p>
				</div>

			</section>

			<?php
                    }
                    mysqli_close($conn);
                ?>

			<!--  <section id="game" class="card-rank">
				<div class="rank-align">
					<h3>#2</h3>
				
					<p class="psn-bold">Gabriela Cancello</p>
					<p class="psn-black">Pontos: 180</p>
				</div>
			</section>

			<section id="game" class="card-rank">
				<div class="rank-align">
					<h3>#3</h3>
				

					<p class="psn-bold">Gabrielly Jesus</p>
					<p class="psn-black">Pontos: 90</p>
				</div>
			</section>

			<section id="game" class="card-rank">
				<div class="rank-align">
					<h3>#4</h3>

					<p class="psn-bold">Guilherme Mota</p>
					<p class="psn-black">Pontos: 50</p>
				</div>
			</section>

			<section id="game" class="card-rank">
				<div class="rank-align">
					<h3>#5</h3>
				

					<p class="psn-bold">Laura</p>
					<p class="psn-black">Pontos: 20</p>
				</div>
			</section>-->

		</section>

	</div>


	<!-- Footer -->
	<footer id="footer" class="wrapper style1-alt">
		<hr>
		<div class="inner">
			<ul class="menu">
				<li>&copy; NatSave. Todos os direitos reservados.</li>
				<li>Design: Equipe de Design NatSave</li>
			</ul>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>


	<script src="assets/js/game.js"></script>
</body>

</html>