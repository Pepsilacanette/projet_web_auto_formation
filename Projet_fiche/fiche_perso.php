<?php session_start(); ?>

<! DOCTYPE HTML>

<!-- Réalisé par Thomas Lardé, Commencé le 29 septembre 2022, Fiche de personnage interactive. Version 1.0 terminé le 26 / 10 / 2022 -->

<!-- Note à soi même : -->

<!-- Commentaire / Bug à corriger : -->

<html>

	<head>

		<meta charset="utf-8">
		<title>Fiche Perso Pathfinder</title>
		<link href="style/fp.css" rel="stylesheet" type="text/css">
		<script src="script/js.js"></script>

	</head>

	<body> 
		
		<?php
		
// Section initialisation

			if (isset($_POST['nom'])) {
				$produits = [
					'nom' => $_POST['nom'],
					'alignement' => $_POST['alignement'],
					'joueur' => $_POST['joueur'],
					'classe' => $_POST['classe'],
					'dieu' => $_POST['dieu'],
					'org' => $_POST['org'],
					'race' => $_POST['race'],
					'taille' => $_POST['taille'],
					'sexe' => $_POST['sexe'],
					'age' => $_POST['age'],
					'taille2' => $_POST['taille2'],
					'poids' => $_POST['poids'],
					'cheveux' => $_POST['cheveux'],
					'yeux' => $_POST['yeux'],
					'pva' => $_POST['pva'],
					'pvt' => $_POST['pvt'],
					'rdeg' => $_POST['rdeg'],
					'dbm' => $_POST['dbm'],
					'dbc' => $_POST['dbc'],
					'dam' => $_POST['dam'],
					'dac' => $_POST['dac'],
					'dt' => $_POST['dt'],
					'FOVA' => $_POST['FOVA'],
					'FOTE' => $_POST['FOTE'],
					'bless' => $_POST['bless'],
					'DEVA' => $_POST['DEVA'],
					'DETE' => $_POST['DETE'],
					'COVA' => $_POST['COVA'],
					'COTE' => $_POST['COTE'],
					'INVA' => $_POST['INVA'],
					'INTE' => $_POST['INTE'],
					'SAVA' => $_POST['SAVA'],
					'SATE' => $_POST['SATE'],
					'CAVA' => $_POST['CAVA'],
					'CATE' => $_POST['CATE'],
					'CATE' => $_POST['CATE'],
					'inid' => $_POST['inid'],
					'cla' => $_POST['cla'],
					'bou' => $_POST['bou'],
					'mta' => $_POST['mta'],
					'nat' => $_POST['nat'],
					'par' => $_POST['par'],
					'mdiv' => $_POST['mdiv'],
					'catemp' => $_POST['catemp'],
					'rbase' => $_POST['rbase'],
					'rmag' => $_POST['rmag'],
					'rdiv' => $_POST['rdiv'],
					'rtemp' => $_POST['rtemp'],
					'vibase' => $_POST['vibase'],
					'vimag' => $_POST['vimag'],
					'vidiv' => $_POST['vidiv'],
					'vitemp' => $_POST['vitemp'],
					'vobase' => $_POST['vobase'],
					'vomag' => $_POST['vomag'],
					'vodiv' => $_POST['vodiv'],
					'votemp' => $_POST['votemp'],
					'satemp' => $_POST['satemp'],
					'bba' => $_POST['bba'],
					'rm' => $_POST['rm'],
					'degnl' => $_POST['degnl'],
					'bmodmd' => $_POST['bmodmd'],
					'arme1' => $_POST['arme1'],
					'attaque1' => $_POST['attaque1'],
					'crit1' => $_POST['crit1'],
					'type1' => $_POST['type1'],
					'portee1' => $_POST['portee1'],
					'munition1' => $_POST['munition1'],
					'degat1' => $_POST['degat1'],
					'arme2' => $_POST['arme2'],
					'attaque2' => $_POST['attaque2'],
					'crit2' => $_POST['crit2'],
					'type2' => $_POST['type2'],
					'portee2' => $_POST['portee2'],
					'munition2' => $_POST['munition2'],
					'degat2' => $_POST['degat2'],
					'arme3' => $_POST['arme3'],
					'attaque3' => $_POST['attaque3'],
					'crit3' => $_POST['crit3'],
					'type3' => $_POST['type3'],
					'portee3' => $_POST['portee3'],
					'munition3' => $_POST['munition3'],
					'degat3' => $_POST['degat3'],
					'modpartic' => $_POST['modpartic'],
					'langues' => $_POST['langues'],
					'1' => $_POST['1'],
					'2' => $_POST['2'],
					'3' => $_POST['3'],
					'4' => $_POST['4'],
					'5' => $_POST['5'],
					'6' => $_POST['6'],
					'7' => $_POST['7'],
					'8' => $_POST['8'],
					'9' => $_POST['9'],
					'10' => $_POST['10'],
					'11' => $_POST['11'],
					'12' => $_POST['12'],
					'13' => $_POST['13'],
					'14' => $_POST['14'],
					'15' => $_POST['15'],
					'16' => $_POST['16'],
					'17' => $_POST['17'],
					'18' => $_POST['18'],
					'19' => $_POST['19'],
					'20' => $_POST['20'],
					'21' => $_POST['21'],
					'22' => $_POST['22'],
					'23' => $_POST['23'],
					'24' => $_POST['24'],
					'25' => $_POST['25'],
					'26' => $_POST['26'],
					'27' => $_POST['27'],
					'28' => $_POST['28'],
					'29' => $_POST['29'],
					'30' => $_POST['30'],
					'31' => $_POST['31'],
					'32' => $_POST['32'],
					'33' => $_POST['33'],
					'34' => $_POST['34'],
					'35' => $_POST['35'],
					'36' => $_POST['36'],
					'37' => $_POST['37'],
					'38' => $_POST['38'],
					'39' => $_POST['39'],
					'r1' => $_POST['r1'],
					'r2' => $_POST['r2'],
					'r3' => $_POST['r3'],
					'r4' => $_POST['r4'],
					'r5' => $_POST['r5'],
					'r6' => $_POST['r6'],
					'r7' => $_POST['r7'],
					'r8' => $_POST['r8'],
					'r9' => $_POST['r9'],
					'r10' => $_POST['r10'],
					'r11' => $_POST['r11'],
					'r12' => $_POST['r12'],
					'r13' => $_POST['r13'],
					'r14' => $_POST['r14'],
					'r15' => $_POST['r15'],
					'r16' => $_POST['r16'],
					'r17' => $_POST['r17'],
					'r18' => $_POST['r18'],
					'r19' => $_POST['r19'],
					'r20' => $_POST['r20'],
					'r21' => $_POST['r21'],
					'r22' => $_POST['r22'],
					'r23' => $_POST['r23'],
					'r24' => $_POST['r24'],
					'r25' => $_POST['r25'],
					'r26' => $_POST['r26'],
					'r27' => $_POST['r27'],
					'r28' => $_POST['r28'],
					'r29' => $_POST['r29'],
					'r30' => $_POST['r30'],
					'r31' => $_POST['r31'],
					'r32' => $_POST['r32'],
					'r33' => $_POST['r33'],
					'r34' => $_POST['r34'],
					'r35' => $_POST['r35'],
					'r36' => $_POST['r36'],
					'r37' => $_POST['r37'],
					'r38' => $_POST['r38'],
					'r39' => $_POST['r39'],
					'd1' => $_POST['d1'],
					'd2' => $_POST['d2'],
					'd3' => $_POST['d3'],
					'd4' => $_POST['d4'],
					'd5' => $_POST['d5'],
					'd6' => $_POST['d6'],
					'd7' => $_POST['d7'],
					'd8' => $_POST['d8'],
					'd9' => $_POST['d9'],
					'd10' => $_POST['d10'],
					'd11' => $_POST['d11'],
					'd12' => $_POST['d12'],
					'd13' => $_POST['d13'],
					'd14' => $_POST['d14'],
					'd15' => $_POST['d15'],
					'd16' => $_POST['d16'],
					'd17' => $_POST['d17'],
					'd18' => $_POST['d18'],
					'd19' => $_POST['d19'],
					'd20' => $_POST['d20'],
					'd21' => $_POST['d21'],
					'd22' => $_POST['d22'],
					'd23' => $_POST['d23'],
					'd24' => $_POST['d24'],
					'd25' => $_POST['d25'],
					'd26' => $_POST['d26'],
					'd27' => $_POST['d27'],
					'd28' => $_POST['d28'],
					'd29' => $_POST['d29'],
					'd30' => $_POST['d30'],
					'd31' => $_POST['d31'],
					'd32' => $_POST['d32'],
					'd33' => $_POST['d33'],
					'd34' => $_POST['d34'],
					'd35' => $_POST['d35'],
					'd36' => $_POST['d36'],
					'd37' => $_POST['d37'],
					'd38' => $_POST['d38'],
					'd39' => $_POST['d39'],
					'cchx1' => $_POST['cchx1'],
					'cchx2' => $_POST['cchx2'],
					'cchx3' => $_POST['cchx3'],
					'cchx4' => $_POST['cchx4'],
					'cchx5' => $_POST['cchx5'],
					'cchx6' => $_POST['cchx6'],
					'cchx7' => $_POST['cchx7'],
				];
				
				file_put_contents('script/donnee.json', json_encode($produits));
				
			}
			
			// Section récupération
			
			$tbl = file_get_contents('script/donnee.json');
			
			$json = json_decode($tbl, true);
		
				//Force
				
			if ((isset($_POST['FOVA'])) && ($_POST['FOVA'] == true)) {
			
				if (($_POST['FOVA'] == true) && (isset($_POST['FOVA']))){

				$calc = $_POST['FOVA'];
				$brut = $_POST['FOVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mfo = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mfo = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mfo = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mfo = -5 + (($brut) / 2);
				}
				else {
					$mfo = -5;
				}
				}
				
			}
			else if ((isset($json['FOVA'])) && ($json['FOVA'] == true)) {
				
				if (($json['FOVA'] == true) && (isset($json['FOVA']))){

				$calc = $json['FOVA'];
				$brut = $json['FOVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mfo = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mfo = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mfo = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mfo = -5 + (($brut) / 2);
				}
				else {
					$mfo = -5;
				}
				}
			}	
				
			if ((isset($_POST['FOTE'])) && ($_POST['FOTE'] == true) && ($_POST['FOVA'] == true)) {
				
				if (($_POST['FOVA'] == true) && ($_POST['FOTE'] == true)){

				$calc = $_POST['FOTE'];
				$brut = $_POST['FOTE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mfoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mfoo = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mfoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mfoo = ($brut) / 2;
				}
				else {
					$mfoo = 0;
				}
				$mfoo += $mfo;
				}
				
			}
			else if ((isset($json['FOTE'])) && ($json['FOTE'] == true) && ($json['FOVA'] == true)) {
				
				if (($json['FOVA'] == true) && ($json['FOTE'] == true)){

				$calc = $json['FOTE'];
				$brut = $json['FOTE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mfoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mfoo = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mfoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mfoo = ($brut) / 2;
				}
				else {
					$mfoo = 0;
				}
				$mfoo += $mfo;
				}
				
			}
			
			//Dexterité
			
			if ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)) {
				
				if ($_POST['DEVA'] == true){

				$calc = $_POST['DEVA'];
				$brut = $_POST['DEVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mde = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mde = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mde = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mde = -5 + (($brut) / 2);
				}
				else {
					$mde = -5;
				}
				}
				
			}
			else if ((isset($json['DEVA'])) && ($json['DEVA'] == true)) {
				
				if (($json['DEVA'] == true) && (isset($json['DEVA']))){

				$calc = $json['DEVA'];
				$brut = $json['DEVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mde = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mde = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mde = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mde = -5 + (($brut) / 2);
				}
				else {
					$mde = -5;
				}
				}
			}	
			
			if ((isset($_POST['DETE'])) && ($_POST['DETE'] == true) && ($_POST['DEVA'] == true)) {
				
				if (($_POST['DEVA'] == true) && ($_POST['DETE'] == true)){

				$calc = $_POST['DETE'];
				$brut = $_POST['DETE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mdee = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mdee = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mdee = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mdee = ($brut) / 2;
				}
				else {
					$mdee = 0;
				}
				$mdee += $mde;
				}
			}
			
			else if ((isset($json['DETE'])) && ($json['DETE'] == true) && ($json['DEVA'] == true)) {
				
				if (($json['DEVA'] == true) && ($json['DETE'] == true)){

				$calc = $json['DETE'];
				$brut = $json['DETE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mdee = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mdee = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mdee = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mdee = ($brut) / 2;
				}
				else {
					$mdee = 0;
				}
				$mdee += $mde;
				}
				
			}
				
				//Constitutions
				
			if ((isset($_POST['COVA'])) && ($_POST['COVA'] == true)) {
				
				if ($_POST['COVA'] == true){

				$calc = $_POST['COVA'];
				$brut = $_POST['COVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mco = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mco = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mco = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mco = -5 + (($brut) / 2);
				}
				else {
					$mco = -5;
				}
				}
				
			}
			else if ((isset($json['COVA'])) && ($json['COVA'] == true)) {
				
				if (($json['COVA'] == true) && (isset($json['COVA']))){

				$calc = $json['COVA'];
				$brut = $json['COVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mco = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mco = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mco = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mco = -5 + (($brut) / 2);
				}
				else {
					$mco = -5;
				}
				}
			}	
			
			if ((isset($_POST['COTE'])) && ($_POST['COTE'] == true) && ($_POST['COVA'] == true)) {
				
				if (($_POST['COVA'] == true) && ($_POST['COTE'] == true)){

				$calc = $_POST['COTE'];
				$brut = $_POST['COTE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mcoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mcoo = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mcoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mcoo = ($brut) / 2;
				}
				else {
					$mcoo = 0;
				}
				$mcoo += $mco;
				}
				
			}
			
			else if ((isset($json['COTE'])) && ($json['COTE'] == true) && ($json['COVA'] == true)) {
				
				if (($json['COVA'] == true) && ($json['COTE'] == true)){

				$calc = $json['COTE'];
				$brut = $json['COTE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mcoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mcoo = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mcoo = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mcoo = ($brut) / 2;
				}
				else {
					$mcoo = 0;
				}
				$mcoo += $mco;
				}
				
			}
				
				//Intelligence
				
			if ((isset($_POST['INVA'])) && ($_POST['INVA'] == true)) {
				
				if ($_POST['INVA'] == true){

				$calc = $_POST['INVA'];
				$brut = $_POST['INVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$min = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$min = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$min = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$min = -5 + (($brut) / 2);
				}
				else {
					$min = -5;
				}
				}
				
			}
			else if ((isset($json['INVA'])) && ($json['INVA'] == true)) {
				
				if (($json['INVA'] == true) && (isset($json['INVA']))){

				$calc = $json['INVA'];
				$brut = $json['INVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$min = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$min = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$min = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$min = -5 + (($brut) / 2);
				}
				else {
					$min = -5;
				}
				}
			}	
			
			if ((isset($_POST['INTE'])) && ($_POST['INTE'] == true) && ($_POST['INVA'] == true)) {
				
				if (($_POST['INVA'] == true) && ($_POST['INTE'] == true)){

				$calc = $_POST['INTE'];
				$brut = $_POST['INTE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$minn = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$minn = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$minn = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$minn = ($brut) / 2;
				}
				else {
					$minn = 0;
				}
				$minn += $min;
				}
			}
			
			else if ((isset($json['INTE'])) && ($json['INTE'] == true) && ($json['INVA'] == true)) {
				
				if (($json['INVA'] == true) && ($json['INTE'] == true)){

				$calc = $json['INTE'];
				$brut = $json['INTE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$minn = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$minn = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$minn = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$minn = ($brut) / 2;
				}
				else {
					$minn = 0;
				}
				$minn += $min;
				}
				
			}
				
				//Sagesse
				
			if ((isset($_POST['SAVA'])) && ($_POST['SAVA'] == true)) {
				
				if ($_POST['SAVA'] == true){

				$calc = $_POST['SAVA'];
				$brut = $_POST['SAVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$msa = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$msa = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$msa = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$msa = -5 + (($brut) / 2);
				}
				else {
					$msa = -5;
				}
				}
				
			}
			else if ((isset($json['SAVA'])) && ($json['SAVA'] == true)) {
				
				if (($json['SAVA'] == true) && (isset($json['SAVA']))){

				$calc = $json['SAVA'];
				$brut = $json['SAVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$msa = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$msa = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$msa = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$msa = -5 + (($brut) / 2);
				}
				else {
					$msa = -5;
				}
				}
			}	
			
			if ((isset($_POST['SATE'])) && ($_POST['SATE'] == true) && ($_POST['SAVA'] == true)) {
				
				if (($_POST['SAVA'] == true) && ($_POST['SATE'] == true)){

				$calc = $_POST['SATE'];
				$brut = $_POST['SATE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$msaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$msaa = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$msaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$msaa = ($brut) / 2;
				}
				else {
					$msaa = 0;
				}
				$msaa += $msa;
				}
				
			}
				
			else if ((isset($json['SATE'])) && ($json['SATE'] == true) && ($json['SAVA'] == true)) {
				
				if (($json['SAVA'] == true) && ($json['SATE'] == true)){

				$calc = $json['SATE'];
				$brut = $json['SATE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$msaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$msaa = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$msaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$msaa = ($brut) / 2;
				}
				else {
					$msaa = 0;
				}
				$msaa += $msa;
				}
				
			}
				
				//Charisme
				
			if ((isset($_POST['CAVA'])) && ($_POST['CAVA'] == true)) {
				
				if ($_POST['CAVA'] == true){

				$calc = $_POST['CAVA'];
				$brut = $_POST['CAVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mca = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mca = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mca = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mca = -5 + (($brut) / 2);
				}
				else {
					$mca = -5;
				}
				}
				
			}
			else if ((isset($json['CAVA'])) && ($json['CAVA'] == true)) {
				
				if (($json['CAVA'] == true) && (isset($json['CAVA']))){

				$calc = $json['CAVA'];
				$brut = $json['CAVA'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut >= 10)){
					$mca = ($brut - 10 - 1) / 2;
				}
				else if (($calc == 0) && ($brut >= 10)){
					$mca = ($brut - 10) / 2;
				}
				else if (($calc == 1) && ($brut <= 9)){
					$mca = -5 + (($brut - 1) / 2);
				}
				else if (($calc == 0) && ($brut <= 9)){
					$mca = -5 + (($brut) / 2);
				}
				else {
					$mca = -5;
				}
				}
			}	
			
			if ((isset($_POST['CATE'])) && ($_POST['CATE'] == true) && ($_POST['CAVA'] == true)) {
				
				if (($_POST['CAVA'] == true) && ($_POST['CATE'] == true)){

				$calc = $_POST['CATE'];
				$brut = $_POST['CATE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mcaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mcaa = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mcaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mcaa = ($brut) / 2;
				}
				else {
					$mcaa = 0;
				}
				$mcaa += $mca;
				}
				
			}
			
			else if ((isset($json['CATE'])) && ($json['CATE'] == true) && ($json['CAVA'] == true)) {
				
				if (($json['CAVA'] == true) && ($json['CATE'] == true)){

				$calc = $json['CATE'];
				$brut = $json['CATE'];
				
				while ($calc >= 2) {
					$calc -= 2;
				}
				if (($calc == 1) && ($brut > 0)){
					$mcaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut > 0)){
					$mcaa = ($brut) / 2;
				}
				else if (($calc == 1) && ($brut < 0)){
					$mcaa = ($brut - 1) / 2;
				}
				else if (($calc == 0) && ($brut < 0)){
					$mcaa = ($brut) / 2;
				}
				else {
					$mcaa = 0;
				}
				$mcaa += $mca;
				}
				
			}
				
				//Initiative
				
				if ((isset($_POST['DETE'])) && ($_POST['DETE'] == true) && ($_POST['DEVA'] == true)){
					
					if ((isset($_POST['inid'])) && ($_POST['inid'] == true)){
					
						$initiative = $mdee + $_POST['inid'];
						
					}
					
				}
				
				else if ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)){
				
					if ($_POST['inid'] == true){
						
						if ((isset($_POST['inid'])) && ($_POST['inid'] == true)){
					
							$initiative = $mde + $_POST['inid'];
							
						}
					
					}
					
				}
				
				else if ((isset($_POST['DETE'])) && ($_POST['DETE'] == true) && ($_POST['DEVA'] == true)){
					
					$initiative = $mdee;
				
				}
				
				else if ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)){
					
					$initiative = $mde;
				
				}
				else {
					$initiative = 0;
				}
			
			// CA
			
			if ((((isset($_POST['cla'])) && ($_POST['cla'] == true)) || ((isset($_POST['bou'])) && ($_POST['bou'] == true)) || ((isset($_POST['mta'])) && ($_POST['mta'] == true)) ||
			((isset($_POST['nat'])) && ($_POST['nat'] == true)) || ((isset($_POST['par'])) && ($_POST['par'] == true)) || ((isset($_POST['mdiv'])) && ($_POST['mdiv'] == true))) &&
			(((isset($_POST['DETE'])) && ($_POST['DETE'] == true)) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)))){
				
				
			
				$ca = 10 + $_POST['cla'] + $_POST['bou'] + $_POST['mta'] + $_POST['nat'] + $_POST['par'] + $_POST['mdiv'] + $mdee;
				$cca = 10 +  $_POST['mta'] + $_POST['par'] + $_POST['mdiv'] + $mdee;
				$pad = 10 + $_POST['cla'] + $_POST['bou'] + $_POST['mta'] + $_POST['nat'] + $_POST['mdiv'];
			
			
			
			}
			
			else if ((((isset($_POST['cla'])) && ($_POST['cla'] == true)) || ((isset($_POST['bou'])) && ($_POST['bou'] == true)) || ((isset($_POST['mta'])) && ($_POST['mta'] == true)) ||
			((isset($_POST['nat'])) && ($_POST['nat'] == true)) || ((isset($_POST['par'])) && ($_POST['par'] == true)) || ((isset($_POST['mdiv'])) && ($_POST['mdiv'] == true))) &&
			((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true))){
				
				
			
				$ca = 10 + $_POST['cla'] + $_POST['bou'] + $_POST['mta'] + $_POST['nat'] + $_POST['par'] + $_POST['mdiv'] + $mde;
				$cca = 10 +  $_POST['mta'] + $_POST['par'] + $_POST['mdiv']+ $mde;
				$pad = 10 + $_POST['cla'] + $_POST['bou'] + $_POST['mta'] + $_POST['nat'] + $_POST['mdiv'];
				
			
			
			}
			
			else if (((isset($_POST['DETE'])) && ($_POST['DETE'] == true)) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true))){
				
				$ca = 10 + $mdee;
				$cca = 10 + $mdee;
				$pad = 10;
				
			}
			
			else if ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)){
				
				$ca = 10 + $mde;
				$cca = 10 + $mde;
				$pad = 10;
				
			}
			
			//Sauvegarde reflexe
			
						if ((((isset($_POST['rbase'])) && ($_POST['rbase'] == true)) || ((isset($_POST['rmag'])) && ($_POST['rmag'] == true)) || ((isset($_POST['rdiv'])) && ($_POST['rdiv'] == true)) ||
			((isset($_POST['rtemp'])) && ($_POST['rtemp'] == true))) && (((isset($_POST['DETE'])) && ($_POST['DETE'] == true)) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)))){
				
				
			
				$ref = $_POST['rbase'] + $_POST['rmag'] + $_POST['rdiv'] + $_POST['rtemp'] + $mdee;
			
			
			
			}
			
			else if ((((isset($_POST['rbase'])) && ($_POST['rbase'] == true)) || ((isset($_POST['rmag'])) && ($_POST['rmag'] == true)) || ((isset($_POST['rdiv'])) && ($_POST['rdiv'] == true)) ||
			((isset($_POST['rtemp'])) && ($_POST['rtemp'] == true)) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)))){
				
				
			
				$ref = $_POST['rbase'] + $_POST['rmag'] + $_POST['rdiv'] + $_POST['rtemp'] + $mde;
				
			
			
			}
			
			else if (((isset($_POST['DETE'])) && ($_POST['DETE'] == true)) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true))){
				
				$ref = $mdee;
				
			}
			
			else if ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)){
				
				$ref = $mde;
				
			}
			
			//Sauvegarde Vigueur
			
			if ((((isset($_POST['vibase'])) && ($_POST['vibase'] == true)) || ((isset($_POST['vimag'])) && ($_POST['vimag'] == true)) || ((isset($_POST['vidiv'])) && ($_POST['vidiv'] == true)) ||
			((isset($_POST['vitemp'])) && ($_POST['vitemp'] == true))) && (((isset($_POST['COTE'])) && ($_POST['COTE'] == true)) && ((isset($_POST['COVA'])) && ($_POST['COVA'] == true)))){
				
				
			
				$vig = $_POST['vibase'] + $_POST['vimag'] + $_POST['vidiv'] + $_POST['vitemp'] + $mcoo;
			
			
			
			}
			
			else if ((((isset($_POST['vibase'])) && ($_POST['vibase'] == true)) || ((isset($_POST['vimag'])) && ($_POST['vimag'] == true)) || ((isset($_POST['vidiv'])) && ($_POST['vidiv'] == true)) ||
			((isset($_POST['vitemp'])) && ($_POST['vitemp'] == true)) && ((isset($_POST['COVA'])) && ($_POST['COVA'] == true)))){
				
				
			
				$vig = $_POST['vibase'] + $_POST['vimag'] + $_POST['vidiv'] + $_POST['vitemp'] + $mco;
				
			
			
			}
			
			else if (((isset($_POST['COTE'])) && ($_POST['COTE'] == true)) && ((isset($_POST['COVA'])) && ($_POST['COVA'] == true))){
				
				$vig = $mcoo;
				
			}
			
			else if ((isset($_POST['COVA'])) && ($_POST['COVA'] == true)){
				
				$vig = $mco;
				
			}
			
			//Sauvegarde Volonté
			
			if ((((isset($_POST['vobase'])) && ($_POST['vobase'] == true)) || ((isset($_POST['vomag'])) && ($_POST['vomag'] == true)) || ((isset($_POST['vodiv'])) && ($_POST['vodiv'] == true)) ||
			((isset($_POST['votemp'])) && ($_POST['votemp'] == true))) && (((isset($_POST['SATE'])) && ($_POST['SATE'] == true)) && ((isset($_POST['SAVA'])) && ($_POST['SAVA'] == true)))){
				
				
			
				$vol = $_POST['vobase'] + $_POST['vomag'] + $_POST['vodiv'] + $_POST['votemp'] + $msaa;
			
			
			
			}
			
			else if ((((isset($_POST['vobase'])) && ($_POST['vobase'] == true)) || ((isset($_POST['vomag'])) && ($_POST['vomag'] == true)) || ((isset($_POST['vodiv'])) && ($_POST['vodiv'] == true)) ||
			((isset($_POST['votemp'])) && ($_POST['votemp'] == true)) && ((isset($_POST['SAVA'])) && ($_POST['SAVA'] == true)))){
				
				
			
				$vol = $_POST['vobase'] + $_POST['vomag'] + $_POST['vodiv'] + $_POST['votemp'] + $msa;
				
			
			
			}
			
			else if (((isset($_POST['SATE'])) && ($_POST['SATE'] == true)) && ((isset($_POST['SAVA'])) && ($_POST['SAVA'] == true))){
				
				$vol = $msaa;
				
			}
			
			else if ((isset($_POST['SAVA'])) && ($_POST['SAVA'] == true)){
				
				$vol = $msa;
				
			}
			
			//BMO
			
			if ((((isset($_POST['bba'])) && ($_POST['bba'] == true)) || ((isset($_POST['mta'])) && ($_POST['mta'] == true))) && (((isset($_POST['FOTE'])) && ($_POST['FOTE'] == true)) && ((isset($_POST['FOVA'])) && ($_POST['FOVA'] == true)))){
				
				
			
				$bmo = $_POST['bba'] + $_POST['mta'] + $mfoo;
			
			
			
			}
			
			if ((((isset($_POST['bba'])) && ($_POST['bba'] == true)) || ((isset($_POST['mta'])) && ($_POST['mta'] == true))) && (((isset($_POST['FOVA'])) && ($_POST['FOVA'] == true)))){
					
					
				
					$bmo = $_POST['bba'] + $_POST['mta'] + $mfo;
				
				
				
				}
			
			else if (((isset($_POST['FOTE'])) && ($_POST['FOTE'] == true)) && ((isset($_POST['FAVA'])) && ($_POST['FAVA'] == true))){
				
				$bmo = $mfoo;
				
			}
			
			else if ((isset($_POST['FOVA'])) && ($_POST['FOVA'] == true)){
				
				$bmo = $mfo;
				
			}
			
			//DMD
			
			if ((((((isset($_POST['bba'])) && ($_POST['bba'] == true)) || ((isset($_POST['mta'])) && ($_POST['mta'] == true))) && ((isset($_POST['FOVA'])) && ($_POST['FOVA'] == true))) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)))){
				
				$dmd = $_POST['bba'] + $_POST['mta'] + $mfo + $mde + 10;
			
			}
			
			else if ((((isset($_POST['bba'])) && ($_POST['bba'] == true)) || ((isset($_POST['mta'])) && ($_POST['mta'] == true))) && ((isset($_POST['FOVA'])) && ($_POST['FOVA'] == true))){
				
				$dmd = $_POST['bba'] + $_POST['mta'] + $mfo + 10 ;
			
			}
			
			else if ((((isset($_POST['bba'])) && ($_POST['bba'] == true)) || ((isset($_POST['mta'])) && ($_POST['mta'] == true))) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true))){
				
				$dmd = $_POST['bba'] + $_POST['mta'] + $mde + 10 ;
			
			}
			
			else if (((isset($_POST['FOVA'])) && ($_POST['FOVA'] == true)) && ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true))){
				
				$dmd = $mfo + $mde + 10;
				
			}
			
			else if ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)){
				
				$dmd = $mde + 10;
				
			}
			
			else if ((isset($_POST['DEVA'])) && ($_POST['DEVA'] == true)){
				
				$dmd = $mfo + 10;
				
			}
			
			if ((isset($_POST['FOTE'])) && ($_POST['FOTE'] == true)){
				
				$dmd +=  $mfoo - $mfo;
			
			}
			
			if ((isset($_POST['DETE'])) && ($_POST['DETE'] == true)){
				
				$dmd +=  $mdee - $mde;
			
			}
			
			// Compétences
			
			if ((isset($mde)) && (isset($mdee)) && ($mde == true) && ($mdee == true) ){$compD = $mdee;}
			else if ((isset($mde)) && ($mde == true)){$compD = $mde;}
			else {$compD = '0';}
			
			if ((isset($mfo)) && (isset($mfoo)) && ($mfo == true) && ($mfoo == true) ){$compF = $mfoo;}
			else if ((isset($mfo)) && ($mfo == true)){$compF = $mfo;}
			else {$compF = '0';}
			
			if ((isset($mco)) && (isset($mcoo)) && ($mco == true) && ($mcoo == true) ){$compC = $mcoo;}
			else if ((isset($mco)) && ($mco == true)){$compC = $mco;}
			else {$compC = '0';}
			
			if ((isset($min)) && (isset($minn)) && ($min == true) && ($minn == true) ){$compI = $minn;}
			else if ((isset($min)) && ($min == true)){$compI = $min;}
			else {$compI = '0';}
			
			if ((isset($msa)) && (isset($msaa)) && ($msa == true) && ($msaa == true) ){$compS = $msaa;}
			else if ((isset($msa)) && ($msa == true)){$compS = $msa;}
			else {$compS = '0';}
			
			if ((isset($mca)) && (isset($mcaa)) && ($mca == true) && ($mcaa == true) ){$compS = $mcaa;}
			else if ((isset($mca)) && ($mca == true)){$compC = $mca;}
			else {$compC = '0';}
			
		?>
		
		<!--  Partie 1 -->
		
		<form method="post">
	
			<div class="p">
		
				<img src="style/pathfinder.jpg" class="e">

				<div class="e bnom"><input class="e inom" name="nom" id="nom" value="<?php echo $json['nom']; ?>"><p class='nom'>Nom du personnage</p></div>
				
				<div class="e bal"><input class="e ial" name="alignement" id="alignement" value="<?php echo $json['alignement']; ?>"><p class='al'>Alignement</p></div>
				
				<div class="e bpj"><input class="e ipj" name="joueur" id="joueur" value="<?php echo $json['joueur']; ?>"><p class='pj'>Nom du joueur</p></div>
				
				<br> 
				
				<div class="e bcn"><input class="e icn" name="classe" id="classe" value="<?php echo $json['classe']; ?>"><p class='cn'>Classe et niveau</p></div>
				
				<div class="e bdi"><input class="e idi" name="dieu" id="dieu" value="<?php echo $json['dieu']; ?>"><p class='di'>Divinité</p></div>
				
				<div class="e bor"><input class="e ior" name="org" id="org" value="<?php echo $json['org']; ?>"><p class='or'>Origine</p></div>
				
				<br>
				
				<div class="e"><h1><b><u>FEUILLE DE PERSONNAGE</u></b></h1></div>
				
				<div class="lesbuttons">

					<button class="buu" type="submit" action="fiche_perso.php">Enregistrer ma fiche</button>
					
					<button class="buu" onClick="window.location.reload()">Reload</button>				
				
				</div>
				
				<div class="e brc"><input class="e irc" name="race" id="race" value="<?php echo $json['race']; ?>"><p class='rc'>Race</p></div>
				
				<div class="e bctl"><select class="e ictl" name="taille" id="taille" >
				
				<option value="" <?php if ((isset($json['taille'])) && ($json['taille']== true)){if (($json['taille']== '')){echo 'selected';}}?> ></option>
				
				<option value="Infime" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Infime'){echo 'selected';}} ?> >Infime</option>
				
				<option value="Minuscule" <?php if ((isset($json['taille'])) && ($json['taille']== true)){ if ($json['taille']== 'Minuscule'){echo 'selected';}} ?> >Minuscule</option>
				
				<option value="Très petit" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Très petit'){echo 'selected';}} ?> >Très petit</option>
				
				<option value="Petit" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Petit'){echo 'selected';}} ?> >Petit</option>
				
				<option value="Moyen" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Moyen'){echo 'selected';}} ?> >Moyen</option>
				
				<option value="Grande" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Grande'){echo 'selected';}} ?> >Grande</option>
				
				<option value="Très grande" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Très grande'){echo 'selected';}} ?> >Très grande</option>
				
				<option value="Gigantesque" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Gigantesque'){echo 'selected';}} ?> >Gigantesque</option>
				
				<option value="Colossale" <?php  if ((isset($json['taille'])) && ($json['taille']== true)){if ($json['taille']== 'Colossale'){echo 'selected';}} ?> >Colossale</option>
				
				</select><p class='ctl'>Catégorie</p></div>
				
				<div class="e bsx"><input class="e isx" name="sexe" id="sexe" value="<?php echo $json['sexe']; ?>"><p class='sx'>Sexe</p></div>
				
				<div class="e bag"><input class="e iag"name="age" id="age" value="<?php echo $json['age']; ?>"><p class='ag'>Age</p></div>
				
				<div class="e btl"><input class="e itl" name="taille2" id="taille2" value="<?php echo $json['taille2']; ?>"><p class='tl'>Taille</p></div>
				
				<div class="e bpo"><input class="e ipo" name="poids" id="poids" value="<?php echo $json['poids']; ?>"><p class='po'>Poids</p></div>
				
				<div class="e bch"><input class="e ich" name="cheveux" id="cheveux" value="<?php echo $json['cheveux']; ?>"><p class='ch'>Cheveux</p></div>
				
				<div class="e bye"><input class="e iye" name="yeux" id="yeux" value="<?php echo $json['yeux']; ?>"><p class='ye'>Yeux</p></div>
				
				<p> &nbsp </p> 
				
				<!-- Section Carac PV MV -->
				
				<div class="blocp">
				
					<div class="e bde"><p class='de'><br>Caracteristiques</p></div>
					
					<div class="e bde" style="margin-left: 8px"><p class='de'><br>Valeur</p></div>
					
					<div class="e bde" style="margin-left: 24px"><p class='de'><br>Mod</p></div>
					
					<div class="e bde" style="margin-left: 23px"><p class='de'>Valeur<br>.temp</p></div>
					
					<div class="e bde" style="margin-left: 18px"><p class='de'>Mod<br>.temp</p></div>
					
					<div class="e bpvv"><p class='pvv'>Points<br>de vie</p></div>
					
					<div class="e bpv"><p class="e pv">Reste | Total<br><input class="e ipv" type="number" name="pva" id="pva" value="<?php echo $json['pva']; ?>">  /  <input class="e ipv" type="number" name="pvt" id="pvt" value="<?php echo $json['pvt']; ?>"></p></div>
					
					<div class="e bpv"><p class="e pv">R. Dégats <br> <input class="e ipv" name="rdeg" id="rdeg" value="<?php echo $json['rdeg']; ?>"></p></div>
					
					<div class="e bpvv"><p class='pvv'>Vitesse de déplacement</p></div>
					
					<div class="e bmv"><p class="e mv" >De base<br><input class="e imv" type="number" name="dbm" id="dbm" value="<?php echo $json['dbm']; ?>"> M <input class="e imv" type="number" name="dbc" id="dbc" value="<?php echo $json['dbc']; ?>"> C</p></div>
					
					<div class="e bmv"><p class="e mv">En armure<br><input class="e imv" type="number" name="dam" id="dam" value="<?php echo $json['dam']; ?>"> M <input class="e imv" type="number" name="dac" id="dac" value="<?php echo $json['dac']; ?>"> C</p></div>
					
					<div class="e btem"><p class="e tem"><span style="position: absolute">Temp.</span><textarea class="e item" rows="2" cols="20" name="dt" id="dt"><?php echo $json['dt']; ?></textarea></p></div>
					
					<br>
					
					<!--  Fin de Partie 1 -->
					
					<!--  Compétences -->
					
						<div class="debutcomp">
						
							<p class="titrec">Compétences</p>
							
							<br>
							
							<div class="e compt" style="margin-left: 25px"><p class='bcompt'>Nom de la compétence</p></div>
							
							<div class="e compt" style="margin-left: 35px"><p class='bcompt'>Total</p></div>
							
							<div class="e compt" style="margin-left: 50px"><p class='bcompt'>Mod.Caract</p></div>
							
							<div class="e compt" style="margin-left: 28px"><p class='bcompt'>Rang</p></div>
							
							<div class="e compt" style="margin-left: 30px"><p class='bcompt'>Mod.Divers</p></div>
							
							<br>
							
							<input type="hidden" name="1" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="1" value="1" <?php if ($json['1'] == 1){echo 'checked';} ?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Acrobaties</p></div>
							
							<div class="e compt2" style="margin-left: 82px"><input class="icomp2" value=" <?php if ((($compD == true) || ($compD == '0')) && (($json['r1'] == true) || ($json['r1'] == '0')) && (($json['d1'] == true)|| ($json['d1'] == '0'))){if ($json['1'] == 1){echo $compD + $json['r1'] + $json['d1'] + 3;}else {echo $compD + $json['r1'] + $json['d1'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= DEX</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r1" type="number" value="<?php if (isset($_POST['r1']) && ($_POST['r1'] == true)){echo $_POST['r1'];} else if (isset($json['r1']) && ($json['r1'] == true)){echo $json['r1'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d1" type="number" value="<?php if (isset($_POST['d1']) && ($_POST['d1'] == true)){echo $_POST['d1'];} else if (isset($json['d1']) && ($json['d1'] == true)){echo $json['d1'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="2" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="2" value="1" <?php if ($json['2'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Artisanat</p></div>
							
							<div class="e compt2" style="margin-left: 5px"><input class="icomp3" name="cchx1" value="<?php echo $json['cchx1']; ?>"></div>
							
							<div class="e compt2" style="margin-left: 9px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r2'] == true) || ($json['r2'] == '0')) && (($json['d2'] == true)|| ($json['d2'] == '0'))){if ($json['2'] == 1){echo $compI + $json['r2'] + $json['d2'] + 3;}else {echo $compI + $json['r2'] + $json['d2'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r2" type="number" value="<?php if (isset($_POST['r2']) && ($_POST['r2'] == true)){echo $_POST['r2'];} else if (isset($json['r2']) && ($json['r2'] == true)){echo $json['r2'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d2" type="number" value="<?php if (isset($_POST['d2']) && ($_POST['d2'] == true)){echo $_POST['d2'];} else if (isset($json['d2']) && ($json['d2'] == true)){echo $json['d2'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="3" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="3" value="1" <?php if ($json['3'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Artisanat</p></div>
							
							<div class="e compt2" style="margin-left: 5px"><input class="icomp3" name="cchx2" value="<?php echo $json['cchx2']; ?>"></div>
							
							<div class="e compt2" style="margin-left: 9px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r3'] == true) || ($json['r3'] == '0')) && (($json['d3'] == true)|| ($json['d3'] == '0'))){if ($json['3'] == 1){echo $compI + $json['r3'] + $json['d3'] + 3;}else {echo $compI + $json['r3'] + $json['d3'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r3" type="number" value="<?php if (isset($_POST['r3']) && ($_POST['r3'] == true)){echo $_POST['r3'];} else if (isset($json['r3']) && ($json['r3'] == true)){echo $json['r3'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d3" type="number" value="<?php if (isset($_POST['d3']) && ($_POST['d3'] == true)){echo $_POST['d3'];} else if (isset($json['d3']) && ($json['d3'] == true)){echo $json['d3'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="4" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="4" value="1" <?php if ($json['4'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Artisanat</p></div>
							
							<div class="e compt2" style="margin-left: 5px"><input class="icomp3" name="cchx3" value="<?php echo $json['cchx3']; ?>"></div>
							
							<div class="e compt2" style="margin-left: 9px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r4'] == true) || ($json['r4'] == '0')) && (($json['d4'] == true)|| ($json['d4'] == '0'))){if ($json['4'] == 1){echo $compI + $json['r4'] + $json['d4'] + 3;}else {echo $compI + $json['r4'] + $json['d4'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r4" type="number" value="<?php if (isset($_POST['r4']) && ($_POST['r4'] == true)){echo $_POST['r4'];} else if (isset($json['r4']) && ($json['r4'] == true)){echo $json['r4'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d4" type="number" value="<?php if (isset($_POST['d4']) && ($_POST['d4'] == true)){echo $_POST['d4'];} else if (isset($json['d4']) && ($json['d4'] == true)){echo $json['d4'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="5" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="5" value="1" <?php if ($json['5'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Art de la magie*</p></div>
							
							<div class="e compt2" style="margin-left: 44px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r5'] == true) || ($json['r5'] == '0')) && (($json['d5'] == true)|| ($json['d5'] == '0'))){if ($json['5'] == 1){echo $compI + $json['r5'] + $json['d5'] + 3;}else {echo $compI + $json['r5'] + $json['d5'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r5" type="number" value="<?php if (isset($_POST['r5']) && ($_POST['r5'] == true)){echo $_POST['r5'];} else if (isset($json['r5']) && ($json['r5'] == true)){echo $json['r5'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d5" type="number" value="<?php if (isset($_POST['d5']) && ($_POST['d5'] == true)){echo $_POST['d5'];} else if (isset($json['d5']) && ($json['d5'] == true)){echo $json['d5'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="6" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="6" value="1" <?php if ($json['6'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Bluff</p></div>
							
							<div class="e compt2" style="margin-left: 111px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r6'] == true) || ($json['r6'] == '0')) && (($json['d6'] == true)|| ($json['d6'] == '0'))){if ($json['6'] == 1){echo $compC + $json['r6'] + $json['d6'] + 3;}else {echo $compC + $json['r6'] + $json['d6'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r6" type="number" value="<?php if (isset($_POST['r6']) && ($_POST['r6'] == true)){echo $_POST['r6'];} else if (isset($json['r6']) && ($json['r6'] == true)){echo $json['r6'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d6" type="number" value="<?php if (isset($_POST['d6']) && ($_POST['d6'] == true)){echo $_POST['d6'];} else if (isset($json['d6']) && ($json['d6'] == true)){echo $json['d6'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="7" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="7" value="1" <?php if ($json['7'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Exploration)*</p></div>
							
							<div class="e compt2" style="margin-left: 27px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r7'] == true) || ($json['r7'] == '0')) && (($json['d7'] == true)|| ($json['d7'] == '0'))){if ($json['7'] == 1){echo $compI + $json['r7'] + $json['d7'] + 3;}else {echo $compI + $json['r7'] + $json['d7'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r7" type="number" value="<?php if (isset($_POST['r7']) && ($_POST['r7'] == true)){echo $_POST['r7'];} else if (isset($json['r7']) && ($json['r7'] == true)){echo $json['r7'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d7" type="number" value="<?php if (isset($_POST['d7']) && ($_POST['d7'] == true)){echo $_POST['d7'];} else if (isset($json['d7']) && ($json['d7'] == true)){echo $json['d7'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="8" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="8" value="1" <?php if ($json['8'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Folklore)*</p></div>
							
							<div class="e compt2" style="margin-left: 44px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r8'] == true) || ($json['r8'] == '0')) && (($json['d8'] == true)|| ($json['d8'] == '0'))){if ($json['8'] == 1){echo $compI + $json['r8'] + $json['d8'] + 3;}else {echo $compI + $json['r8'] + $json['d8'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r8" type="number" value="<?php if (isset($_POST['r8']) && ($_POST['r8'] == true)){echo $_POST['r8'];} else if (isset($json['r8']) && ($json['r8'] == true)){echo $json['r8'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d8" type="number" value="<?php if (isset($_POST['d8']) && ($_POST['d8'] == true)){echo $_POST['d8'];} else if (isset($json['d8']) && ($json['d8'] == true)){echo $json['d8'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="9" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="9" value="1" <?php if ($json['9'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Géographie)*</p></div>
							
							<div class="e compt2" style="margin-left: 32px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r9'] == true) || ($json['r9'] == '0')) && (($json['d9'] == true)|| ($json['d9'] == '0'))){if ($json['9'] == 1){echo $compI + $json['r9'] + $json['d9'] + 3;}else {echo $compI + $json['r9'] + $json['d9'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r9" type="number" value="<?php if (isset($_POST['r9']) && ($_POST['r9'] == true)){echo $_POST['r9'];} else if (isset($json['r9']) && ($json['r9'] == true)){echo $json['r9'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d9" type="number" value="<?php if (isset($_POST['d9']) && ($_POST['d9'] == true)){echo $_POST['d9'];} else if (isset($json['d9']) && ($json['d9'] == true)){echo $json['d9'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="10" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="10" value="1" <?php if ($json['10'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Histoire)*</p></div>
							
							<div class="e compt2" style="margin-left: 44px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r10'] == true) || ($json['r10'] == '0')) && (($json['d10'] == true)|| ($json['d10'] == '0'))){if ($json['10'] == 1){echo $compI + $json['r10'] + $json['d10'] + 3;}else {echo $compI + $json['r10'] + $json['d10'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r10" type="number" value="<?php if (isset($_POST['r10']) && ($_POST['r10'] == true)){echo $_POST['r10'];} else if (isset($json['r10']) && ($json['r10'] == true)){echo $json['r10'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d10" type="number" value="<?php if (isset($_POST['d10']) && ($_POST['d10'] == true)){echo $_POST['d10'];} else if (isset($json['d10']) && ($json['d10'] == true)){echo $json['d10'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="11" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="11" value="1" <?php if ($json['11'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Ingénierie)*</p></div>
							
							<div class="e compt2" style="margin-left: 32px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r11'] == true) || ($json['r11'] == '0')) && (($json['d11'] == true)|| ($json['d11'] == '0'))){if ($json['11'] == 1){echo $compI + $json['r11'] + $json['d11'] + 3;}else {echo $compI + $json['r11'] + $json['d11'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r11" type="number" value="<?php if (isset($_POST['r11']) && ($_POST['r11'] == true)){echo $_POST['r11'];} else if (isset($json['r11']) && ($json['r11'] == true)){echo $json['r11'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d11" type="number" value="<?php if (isset($_POST['d11']) && ($_POST['d11'] == true)){echo $_POST['d11'];} else if (isset($json['d11']) && ($json['d11'] == true)){echo $json['d11'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="12" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="12" value="1" <?php if ($json['12'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Mystère)*</p></div>
							
							<div class="e compt2" style="margin-left: 49px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r12'] == true) || ($json['r12'] == '0')) && (($json['d12'] == true)|| ($json['d12'] == '0'))){if ($json['12'] == 1){echo $compI + $json['r12'] + $json['d12'] + 3;}else {echo $compI + $json['r12'] + $json['d12'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r12" type="number" value="<?php if (isset($_POST['r12']) && ($_POST['r12'] == true)){echo $_POST['r12'];} else if (isset($json['r12']) && ($json['r12'] == true)){echo $json['r12'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d12" type="number" value="<?php if (isset($_POST['d12']) && ($_POST['d12'] == true)){echo $_POST['d12'];} else if (isset($json['d12']) && ($json['d12'] == true)){echo $json['d12'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="13" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="13" value="1" <?php if ($json['13'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Nature)*</p></div>
							
							<div class="e compt2" style="margin-left: 55px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r13'] == true) || ($json['r13'] == '0')) && (($json['d13'] == true)|| ($json['d13'] == '0'))){if ($json['13'] == 1){echo $compI + $json['r13'] + $json['d13'] + 3;}else {echo $compI + $json['r13'] + $json['d13'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r13" type="number" value="<?php if (isset($_POST['r13']) && ($_POST['r13'] == true)){echo $_POST['r13'];} else if (isset($json['r13']) && ($json['r13'] == true)){echo $json['r13'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d13" type="number" value="<?php if (isset($_POST['d13']) && ($_POST['d13'] == true)){echo $_POST['d13'];} else if (isset($json['d13']) && ($json['d13'] == true)){echo $json['d13'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="14" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="14" value="1" <?php if ($json['14'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Noblesse)*</p></div>
							
							<div class="e compt2" style="margin-left: 42px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r14'] == true) || ($json['r14'] == '0')) && (($json['d14'] == true)|| ($json['d14'] == '0'))){if ($json['14'] == 1){echo $compI + $json['r14'] + $json['d14'] + 3;}else {echo $compI + $json['r14'] + $json['d14'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r14" type="number" value="<?php if (isset($_POST['r14']) && ($_POST['r14'] == true)){echo $_POST['r14'];} else if (isset($json['r14']) && ($json['r14'] == true)){echo $json['r14'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d14" type="number" value="<?php if (isset($_POST['d14']) && ($_POST['d14'] == true)){echo $_POST['d14'];} else if (isset($json['d14']) && ($json['d14'] == true)){echo $json['d14'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="15" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="15" value="1" <?php if ($json['15'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Plans)*</p></div>
							
							<div class="e compt2" style="margin-left: 59px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r15'] == true) || ($json['r15'] == '0')) && (($json['d15'] == true)|| ($json['d15'] == '0'))){if ($json['15'] == 1){echo $compI + $json['r15'] + $json['d15'] + 3;}else {echo $compI + $json['r15'] + $json['d15'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r15" type="number" value="<?php if (isset($_POST['r15']) && ($_POST['r15'] == true)){echo $_POST['r15'];} else if (isset($json['r15']) && ($json['r15'] == true)){echo $json['r15'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d15" type="number" value="<?php if (isset($_POST['d15']) && ($_POST['d15'] == true)){echo $_POST['d15'];} else if (isset($json['d15']) && ($json['d15'] == true)){echo $json['d15'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="16" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="16" value="1" <?php if ($json['16'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Conn (Religion)*</p></div>
							
							<div class="e compt2" style="margin-left: 40px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r16'] == true) || ($json['r16'] == '0')) && (($json['d16'] == true)|| ($json['d16'] == '0'))){if ($json['16'] == 1){echo $compI + $json['r16'] + $json['d16'] + 3;}else {echo $compI + $json['r16'] + $json['d16'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r16" type="number" value="<?php if (isset($_POST['r16']) && ($_POST['r16'] == true)){echo $_POST['r16'];} else if (isset($json['r16']) && ($json['r16'] == true)){echo $json['r16'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d16" type="number" value="<?php if (isset($_POST['d16']) && ($_POST['d16'] == true)){echo $_POST['d16'];} else if (isset($json['d16']) && ($json['d16'] == true)){echo $json['d16'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="17" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="17" value="1" <?php if ($json['17'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Déguisement</p></div>
							
							<div class="e compt2" style="margin-left: 70px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r17'] == true) || ($json['r17'] == '0')) && (($json['d17'] == true)|| ($json['d17'] == '0'))){if ($json['17'] == 1){echo $compC + $json['r17'] + $json['d17'] + 3;}else {echo $compC + $json['r17'] + $json['d17'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r17" type="number" value="<?php if (isset($_POST['r17']) && ($_POST['r17'] == true)){echo $_POST['r17'];} else if (isset($json['r17']) && ($json['r17'] == true)){echo $json['r17'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d17" type="number" value="<?php if (isset($_POST['d17']) && ($_POST['d17'] == true)){echo $_POST['d17'];} else if (isset($json['d17']) && ($json['d17'] == true)){echo $json['d17'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="18" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="18" value="1" <?php if ($json['18'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Diplomatie</p></div>
							
							<div class="e compt2" style="margin-left: 76px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r18'] == true) || ($json['r18'] == '0')) && (($json['d18'] == true)|| ($json['d18'] == '0'))){if ($json['18'] == 1){echo $compC + $json['r18'] + $json['d18'] + 3;}else {echo $compC + $json['r18'] + $json['d18'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r18" type="number" value="<?php if (isset($_POST['r18']) && ($_POST['r18'] == true)){echo $_POST['r18'];} else if (isset($json['r18']) && ($json['r18'] == true)){echo $json['r18'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d18" type="number" value="<?php if (isset($_POST['d18']) && ($_POST['d18'] == true)){echo $_POST['d18'];} else if (isset($json['d18']) && ($json['d18'] == true)){echo $json['d18'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="19" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="19" value="1" <?php if ($json['19'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Discrétion</p></div>
							
							<div class="e compt2" style="margin-left: 76px"><input class="icomp2" value=" <?php if ((($compD == true) || ($compD == '0')) && (($json['r19'] == true) || ($json['r19'] == '0')) && (($json['d19'] == true)|| ($json['d19'] == '0'))){if ($json['19'] == 1){echo $compD + $json['r19'] + $json['d19'] + 3;}else {echo $compD + $json['r19'] + $json['d19'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= DEX</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r19" type="number" value="<?php if (isset($_POST['r19']) && ($_POST['r19'] == true)){echo $_POST['r19'];} else if (isset($json['r19']) && ($json['r19'] == true)){echo $json['r19'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d19" type="number" value="<?php if (isset($_POST['d19']) && ($_POST['d19'] == true)){echo $_POST['d19'];} else if (isset($json['d19']) && ($json['d19'] == true)){echo $json['d19'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="20" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="20" value="1" <?php if ($json['20'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Dressage*</p></div>
							
							<div class="e compt2" style="margin-left: 82px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r20'] == true) || ($json['r20'] == '0')) && (($json['d20'] == true)|| ($json['d20'] == '0'))){if ($json['20'] == 1){echo $compC + $json['r20'] + $json['d20'] + 3;}else {echo $compC + $json['r20'] + $json['d20'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r20" type="number" value="<?php if (isset($_POST['r20']) && ($_POST['r20'] == true)){echo $_POST['r20'];} else if (isset($json['r20']) && ($json['r20'] == true)){echo $json['r20'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d20" type="number" value="<?php if (isset($_POST['d20']) && ($_POST['d20'] == true)){echo $_POST['d20'];} else if (isset($json['d20']) && ($json['d20'] == true)){echo $json['d20'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="21" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="21" value="1" <?php if ($json['21'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Equitation</p></div>
							
							<div class="e compt2" style="margin-left: 76px"><input class="icomp2" value=" <?php if ((($compD == true) || ($compD == '0')) && (($json['r21'] == true) || ($json['r21'] == '0')) && (($json['d21'] == true)|| ($json['d21'] == '0'))){if ($json['21'] == 1){echo $compD + $json['r21'] + $json['d21'] + 3;}else {echo $compD + $json['r21'] + $json['d21'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= DEX</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r21" type="number" value="<?php if (isset($_POST['r21']) && ($_POST['r21'] == true)){echo $_POST['r21'];} else if (isset($json['r21']) && ($json['r21'] == true)){echo $json['r21'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d21" type="number" value="<?php if (isset($_POST['d21']) && ($_POST['d21'] == true)){echo $_POST['d21'];} else if (isset($json['d21']) && ($json['d21'] == true)){echo $json['d21'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="22" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="1" value="22" <?php if ($json['22'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Escalade</p></div>
							
							<div class="e compt2" style="margin-left: 88px"><input class="icomp2" value=" <?php if ((($compF == true) || ($compF == '0')) && (($json['r22'] == true) || ($json['r22'] == '0')) && (($json['d22'] == true)|| ($json['d22'] == '0'))){if ($json['22'] == 1){echo $compF + $json['r22'] + $json['d22'] + 3;}else {echo $compF + $json['r22'] + $json['d22'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= FOR</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['FOTE'])) && ($_POST['FOTE']== true) && (isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfoo == true){echo $mfoo;}} else if ((isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfo == true){echo $mfo;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r22" type="number" value="<?php if (isset($_POST['r22']) && ($_POST['r22'] == true)){echo $_POST['r22'];} else if (isset($json['r22']) && ($json['r22'] == true)){echo $json['r22'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d22" type="number" value="<?php if (isset($_POST['d22']) && ($_POST['d22'] == true)){echo $_POST['d22'];} else if (isset($json['d22']) && ($json['d22'] == true)){echo $json['d22'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="23" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="23" value="1" <?php if ($json['23'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Escamotage*</p></div>
							
							<div class="e compt2" style="margin-left: 70px"><input class="icomp2" value=" <?php if ((($compD == true) || ($compD == '0')) && (($json['r23'] == true) || ($json['r23'] == '0')) && (($json['d23'] == true)|| ($json['d23'] == '0'))){if ($json['23'] == 1){echo $compD + $json['r23'] + $json['d23'] + 3;}else {echo $compD + $json['r23'] + $json['d23'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= DEX</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r23" type="number" value="<?php if (isset($_POST['r23']) && ($_POST['r23'] == true)){echo $_POST['r23'];} else if (isset($json['r23']) && ($json['r23'] == true)){echo $json['r23'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d23" type="number" value="<?php if (isset($_POST['d23']) && ($_POST['d23'] == true)){echo $_POST['d23'];} else if (isset($json['d23']) && ($json['d23'] == true)){echo $json['d23'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="24" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="24" value="1" <?php if ($json['24'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Estimation</p></div>
							
							<div class="e compt2" style="margin-left: 76px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r24'] == true) || ($json['r24'] == '0')) && (($json['d24'] == true)|| ($json['d24'] == '0'))){if ($json['24'] == 1){echo $compI + $json['r24'] + $json['d24'] + 3;}else {echo $compI + $json['r24'] + $json['d24'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r24" type="number" value="<?php if (isset($_POST['r24']) && ($_POST['r24'] == true)){echo $_POST['r24'];} else if (isset($json['r24']) && ($json['r24'] == true)){echo $json['r24'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d24" type="number" value="<?php if (isset($_POST['d24']) && ($_POST['d24'] == true)){echo $_POST['d24'];} else if (isset($json['d24']) && ($json['d24'] == true)){echo $json['d24'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="25" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="25" value="1" <?php if ($json['25'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Evasion</p></div>
							
							<div class="e compt2" style="margin-left: 94px"><input class="icomp2" value=" <?php if ((($compD == true) || ($compD == '0')) && (($json['r25'] == true) || ($json['r25'] == '0')) && (($json['d25'] == true)|| ($json['d25'] == '0'))){if ($json['25'] == 1){echo $compD + $json['r25'] + $json['d25'] + 3;}else {echo $compD + $json['r25'] + $json['d25'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= DEX</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r25" type="number" value="<?php if (isset($_POST['r25']) && ($_POST['r25'] == true)){echo $_POST['r25'];} else if (isset($json['r25']) && ($json['r25'] == true)){echo $json['r25'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d25" type="number" value="<?php if (isset($_POST['d25']) && ($_POST['d25'] == true)){echo $_POST['d25'];} else if (isset($json['d25']) && ($json['d25'] == true)){echo $json['d25'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="26" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="26" value="1" <?php if ($json['26'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Intimidation</p></div>
							
							<div class="e compt2" style="margin-left: 64px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r26'] == true) || ($json['r26'] == '0')) && (($json['d26'] == true)|| ($json['d26'] == '0'))){if ($json['26'] == 1){echo $compC + $json['r26'] + $json['d26'] + 3;}else {echo $compC + $json['r26'] + $json['d26'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r26" type="number" value="<?php if (isset($_POST['r26']) && ($_POST['r26'] == true)){echo $_POST['r26'];} else if (isset($json['r26']) && ($json['r26'] == true)){echo $json['r26'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d26" type="number" value="<?php if (isset($_POST['d26']) && ($_POST['d26'] == true)){echo $_POST['d26'];} else if (isset($json['d26']) && ($json['d26'] == true)){echo $json['d26'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="27" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="27" value="1" <?php if ($json['27'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Linguistique*</p></div>
							
							<div class="e compt2" style="margin-left: 58px"><input class="icomp2" value=" <?php if ((($compI == true) || ($compI == '0')) && (($json['r27'] == true) || ($json['r27'] == '0')) && (($json['d27'] == true)|| ($json['d27'] == '0'))){if ($json['27'] == 1){echo $compI + $json['r27'] + $json['d27'] + 3;}else {echo $compI + $json['r27'] + $json['d27'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= INT</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($minn == true){echo $minn;}} else if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){if ($min == true){echo $min;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r27" type="number" value="<?php if (isset($_POST['r27']) && ($_POST['r27'] == true)){echo $_POST['r27'];} else if (isset($json['r27']) && ($json['r27'] == true)){echo $json['r27'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d27" type="number" value="<?php if (isset($_POST['d27']) && ($_POST['d27'] == true)){echo $_POST['d27'];} else if (isset($json['d27']) && ($json['d27'] == true)){echo $json['d27'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="28" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="28" value="1" <?php if ($json['28'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Natation</p></div>
							
							<div class="e compt2" style="margin-left: 88px"><input class="icomp2" value=" <?php if ((($compF == true) || ($compF == '0')) && (($json['r28'] == true) || ($json['r28'] == '0')) && (($json['d28'] == true)|| ($json['d28'] == '0'))){if ($json['28'] == 1){echo $compF + $json['r28'] + $json['d28'] + 3;}else {echo $compF + $json['r28'] + $json['d28'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= FOR</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['FOTE'])) && ($_POST['FOTE']== true) && (isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfoo == true){echo $mfoo;}} else if ((isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfo == true){echo $mfo;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r28" type="number" value="<?php if (isset($_POST['r28']) && ($_POST['r28'] == true)){echo $_POST['r28'];} else if (isset($json['r28']) && ($json['r28'] == true)){echo $json['r28'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d28" type="number" value="<?php if (isset($_POST['d28']) && ($_POST['d28'] == true)){echo $_POST['d28'];} else if (isset($json['d28']) && ($json['d28'] == true)){echo $json['d28'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="29" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="29" value="1" <?php if ($json['29'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Perception</p></div>
							
							<div class="e compt2" style="margin-left: 76px"><input class="icomp2" value=" <?php if ((($compS == true) || ($compS == '0')) && (($json['r29'] == true) || ($json['r29'] == '0')) && (($json['d29'] == true)|| ($json['d29'] == '0'))){if ($json['29'] == 1){echo $compS + $json['r29'] + $json['d29'] + 3;}else {echo $compS + $json['r29'] + $json['d29'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= SAG</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msaa == true){echo $msaa;}} else if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msa == true){echo $msa;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r29" type="number" value="<?php if (isset($_POST['r29']) && ($_POST['r29'] == true)){echo $_POST['r29'];} else if (isset($json['r29']) && ($json['r29'] == true)){echo $json['r29'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d29" type="number" value="<?php if (isset($_POST['d29']) && ($_POST['d29'] == true)){echo $_POST['d29'];} else if (isset($json['d29']) && ($json['d29'] == true)){echo $json['d29'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="30" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="30" value="1" <?php if ($json['30'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Premiers secours</p></div>
							
							<div class="e compt2" style="margin-left: 38px"><input class="icomp2" value=" <?php if ((($compS == true) || ($compS == '0')) && (($json['r30'] == true) || ($json['r30'] == '0')) && (($json['d30'] == true)|| ($json['d30'] == '0'))){if ($json['30'] == 1){echo $compS + $json['r30'] + $json['d30'] + 3;}else {echo $compS + $json['r30'] + $json['d30'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= SAG</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msaa == true){echo $msaa;}} else if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msa == true){echo $msa;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r30" type="number" value="<?php if (isset($_POST['r30']) && ($_POST['r30'] == true)){echo $_POST['r30'];} else if (isset($json['r30']) && ($json['r30'] == true)){echo $json['r30'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d30" type="number" value="<?php if (isset($_POST['d30']) && ($_POST['d30'] == true)){echo $_POST['d30'];} else if (isset($json['d30']) && ($json['d30'] == true)){echo $json['d30'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="31" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="31" value="1" <?php if ($json['31'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Profession*</p></div>
							
							<div class="e compt2" style="margin-left: 15px"><input class="icomp4" name="cchx4" value="<?php echo $json['cchx4']; ?>"></div>
							
							<div class="e compt2" style="margin-left: 9px"><input class="icomp2" value=" <?php if ((($compS == true) || ($compS == '0')) && (($json['r31'] == true) || ($json['r31'] == '0')) && (($json['d31'] == true)|| ($json['d31'] == '0'))){if ($json['31'] == 1){echo $compS + $json['r31'] + $json['d31'] + 3;}else {echo $compS + $json['r31'] + $json['d31'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= SAG</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msaa == true){echo $msaa;}} else if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msa == true){echo $msa;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r31" type="number" value="<?php if (isset($_POST['r31']) && ($_POST['r31'] == true)){echo $_POST['r31'];} else if (isset($json['r31']) && ($json['r31'] == true)){echo $json['r31'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d31" type="number" value="<?php if (isset($_POST['d31']) && ($_POST['d31'] == true)){echo $_POST['d31'];} else if (isset($json['d31']) && ($json['d31'] == true)){echo $json['d31'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="32" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="32" value="1" <?php if ($json['32'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Profession*</p></div>
							
							<div class="e compt2" style="margin-left: 15px"><input class="icomp4" name="cchx5" value="<?php echo $json['cchx5']; ?>"></div>
							
							<div class="e compt2" style="margin-left: 9px"><input class="icomp2" value=" <?php if ((($compS == true) || ($compS == '0')) && (($json['r32'] == true) || ($json['r32'] == '0')) && (($json['d32'] == true)|| ($json['d32'] == '0'))){if ($json['32'] == 1){echo $compS + $json['r32'] + $json['d32'] + 3;}else {echo $compS + $json['r32'] + $json['d32'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= SAG</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msaa == true){echo $msaa;}} else if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msa == true){echo $msa;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r32" type="number" value="<?php if (isset($_POST['r32']) && ($_POST['r32'] == true)){echo $_POST['r32'];} else if (isset($json['r32']) && ($json['r32'] == true)){echo $json['r32'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d32" type="number" value="<?php if (isset($_POST['d32']) && ($_POST['d32'] == true)){echo $_POST['d32'];} else if (isset($json['d32']) && ($json['d32'] == true)){echo $json['d32'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="33" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="33" value="1" <?php if ($json['33'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Psychologie</p></div>
							
							<div class="e compt2" style="margin-left: 70px"><input class="icomp2" value=" <?php if ((($compS == true) || ($compS == '0')) && (($json['r33'] == true) || ($json['r33'] == '0')) && (($json['d33'] == true)|| ($json['d33'] == '0'))){if ($json['33'] == 1){echo $compS + $json['r33'] + $json['d33'] + 3;}else {echo $compS + $json['r33'] + $json['d33'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= SAG</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msaa == true){echo $msaa;}} else if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msa == true){echo $msa;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r33" type="number" value="<?php if (isset($_POST['r33']) && ($_POST['r33'] == true)){echo $_POST['r33'];} else if (isset($json['r33']) && ($json['r33'] == true)){echo $json['r33'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d33" type="number" value="<?php if (isset($_POST['d33']) && ($_POST['d33'] == true)){echo $_POST['d33'];} else if (isset($json['d33']) && ($json['d33'] == true)){echo $json['d33'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="34" value="0">							
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="34" value="1" <?php if ($json['34'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Représent.</p></div>
							
							<div class="e compt2" style="margin-left: 14px"><input class="icomp5" name="cchx6" value="<?php echo $json['cchx6']; ?>"></div>
							
							<div class="e compt2" style="margin-left: 9px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r34'] == true) || ($json['r34'] == '0')) && (($json['d34'] == true)|| ($json['d34'] == '0'))){if ($json['34'] == 1){echo $compC + $json['r34'] + $json['d34'] + 3;}else {echo $compC + $json['r34'] + $json['d34'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 16px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r34" type="number" value="<?php if (isset($_POST['r34']) && ($_POST['r34'] == true)){echo $_POST['r34'];} else if (isset($json['r34']) && ($json['r34'] == true)){echo $json['r34'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d34" type="number" value="<?php if (isset($_POST['d34']) && ($_POST['d34'] == true)){echo $_POST['d34'];} else if (isset($json['d34']) && ($json['d34'] == true)){echo $json['d34'];}else{echo 0;} ?>"></div>
							
							<br>
							
							<input type="hidden" name="35" value="0">							
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="35" value="1" <?php if ($json['35'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Représent.</p></div>
							
							<div class="e compt2" style="margin-left: 14px"><input class="icomp5" name="cchx7" value="<?php echo $json['cchx7']; ?>"></div>
							
							<div class="e compt2" style="margin-left: 9px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r35'] == true) || ($json['r35'] == '0')) && (($json['d35'] == true)|| ($json['d35'] == '0'))){if ($json['35'] == 1){echo $compC + $json['r35'] + $json['d35'] + 3;}else {echo $compC + $json['r35'] + $json['d35'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r35" type="number" value="<?php if (isset($_POST['r35']) && ($_POST['r35'] == true)){echo $_POST['r35'];} else if (isset($json['r35']) && ($json['r35'] == true)){echo $json['r35'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d35" type="number" value="<?php if (isset($_POST['d35']) && ($_POST['d35'] == true)){echo $_POST['d35'];} else if (isset($json['d35']) && ($json['d35'] == true)){echo $json['d35'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="36" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="36" value="1" <?php if ($json['36'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Sabotage*</p></div>
							
							<div class="e compt2" style="margin-left: 82px"><input class="icomp2" value=" <?php if ((($compD == true) || ($compD == '0')) && (($json['r36'] == true) || ($json['r36'] == '0')) && (($json['d36'] == true)|| ($json['d36'] == '0'))){if ($json['36'] == 1){echo $compD + $json['r36'] + $json['d36'] + 3;}else {echo $compD + $json['r36'] + $json['d36'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= DEX</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r36" type="number" value="<?php if (isset($_POST['r36']) && ($_POST['r36'] == true)){echo $_POST['r36'];} else if (isset($json['r36']) && ($json['r36'] == true)){echo $json['r36'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d36" type="number" value="<?php if (isset($_POST['d36']) && ($_POST['d36'] == true)){echo $_POST['d36'];} else if (isset($json['d36']) && ($json['d36'] == true)){echo $json['d36'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="37" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="37" value="1" <?php if ($json['37'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Survie</p></div>
							
							<div class="e compt2" style="margin-left: 100px"><input class="icomp2" value=" <?php if ((($compS == true) || ($compS == '0')) && (($json['r37'] == true) || ($json['r37'] == '0')) && (($json['d37'] == true)|| ($json['d37'] == '0'))){if ($json['37'] == 1){echo $compS + $json['r37'] + $json['d37'] + 3;}else {echo $compS + $json['r37'] + $json['d37'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= SAG</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msaa == true){echo $msaa;}} else if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msa == true){echo $msa;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r37" type="number" value="<?php if (isset($_POST['r37']) && ($_POST['r37'] == true)){echo $_POST['r37'];} else if (isset($json['r37']) && ($json['r37'] == true)){echo $json['r37'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d37" type="number" value="<?php if (isset($_POST['d37']) && ($_POST['d37'] == true)){echo $_POST['d37'];} else if (isset($json['d37']) && ($json['d37'] == true)){echo $json['d37'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="38" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="38" value="1" <?php if ($json['38'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Util. d'obj. mag*</p></div>
							
							<div class="e compt2" style="margin-left: 32px"><input class="icomp2" value=" <?php if ((($compC == true) || ($compC == '0')) && (($json['r38'] == true) || ($json['r38'] == '0')) && (($json['d38'] == true)|| ($json['d38'] == '0'))){if ($json['38'] == 1){echo $compC + $json['r38'] + $json['d38'] + 3;}else {echo $compC + $json['r38'] + $json['d38'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= CHA</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mcaa == true){echo $mcaa;}} else if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){if ($mca == true){echo $mca;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r38" type="number" value="<?php if (isset($_POST['r38']) && ($_POST['r38'] == true)){echo $_POST['r38'];} else if (isset($json['r38']) && ($json['r38'] == true)){echo $json['r38'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d38" type="number" value="<?php if (isset($_POST['d38']) && ($_POST['d38'] == true)){echo $_POST['d38'];} else if (isset($json['d38']) && ($json['d38'] == true)){echo $json['d38'];}else{echo 0;} ?>"></div>
							
							<br>

							<input type="hidden" name="39" value="0">
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" name="39" value="1" <?php if ($json['39'] == 1){echo 'checked';}?>></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Vol</p></div>
							
							<div class="e compt2" style="margin-left: 116px"><input class="icomp2" value=" <?php if ((($compD == true) || ($compD == '0')) && (($json['r39'] == true) || ($json['r39'] == '0')) && (($json['d39'] == true)|| ($json['d39'] == '0'))){if ($json['39'] == 1){echo $compD + $json['r39'] + $json['d39'] + 3;}else {echo $compD + $json['r39'] + $json['d39'];}} ?> " readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>= DEX</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="r39" type="number" value="<?php if (isset($_POST['r39']) && ($_POST['r39'] == true)){echo $_POST['r39'];} else if (isset($json['r39']) && ($json['r39'] == true)){echo $json['r39'];}else{echo 0;} ?>"></div>
							
							<div class="e compt2" style="margin-left: 15px"><p class='bcompt3'>+</p></div>
							
							<div class="e compt2" style="margin-left: 20px"><input class="icomp2" name="d39" type="number" value="<?php if (isset($_POST['d39']) && ($_POST['d39'] == true)){echo $_POST['d39'];} else if (isset($json['d39']) && ($json['d39'] == true)){echo $json['d39'];}else{echo 0;} ?>"></div>
							
							<br><br>
							
							<div class="e compt2" style="margin-left: 10px"><input type="checkbox" checked></div>
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>Compétences de classe</p></div>
							
							&nbsp &nbsp &nbsp &nbsp
							
							<div class="e compt2" style="margin-left: 5px"><p class='bcompt2'>*  Formation Nécessaire</p></div>
							
							<br><br>
							
							<div class="e compt6"><p class='bcompt2'>Modificateurs Particuliers</p>
							
							<textarea rows="3" cols="60" name="modpartic" id="modpartic"><?php echo $json['modpartic']; ?></textarea></div>
							
							<br>
							
							<div class="e compt6"><p class='bcompt2'>Langues</p>
							
							<textarea rows="3" cols="60" name="langues" id="langues"><?php echo $json['langues']; ?></textarea></div>
							
							<br>
							
						</div>
					
					<!--  Fin des Compétences -->
					
					<!--  Partie 2 -->
					
					<!-- Suite Carac -->
					
					<div class="e bcar"><p class='car'>Force</p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="FOVA" id="FOVA" value="<?php if ($json['FOVA'] == true){echo $json['FOVA'];}else{echo 10;} ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){echo $mfo;} else if ((isset($json['FOVA'])) && ($json['FOVA']== true)){echo $mfo;}else{echo 0;} ?>" readonly></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="FOTE" id="FOTE" value="<?php echo $json['FOTE']; ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['FOTE'])) && ($_POST['FOTE']== true) && (isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){echo $mfoo;} else if ((isset($json['FOTE'])) && ($json['FOTE']== true) && (isset($json['FOVA'])) && ($json['FOVA']== true)){echo $mfoo;}?>" readonly></p></div>
					
					<div class="bl e"><p class="bll">Blessures / Points de vie actuels</p><textarea rows="5" cols="37" name="bless" id="bless"><?php echo $json['bless']; ?></textarea>
					
					<br><br><br><br>
					
					<p class="bll">Dégats non létaux</p><textarea rows="3" cols="37" name="degnl" id="degnl"><?php echo $json['degnl']; ?></textarea></div>
					
					<br><br>
					
					<div class="e bcar"><p class='car'>Dexterité</p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="DEVA" id="DEVA" value="<?php if ($json['DEVA'] == true){echo $json['DEVA'];}else{echo 10;} ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){echo $mde;} else if ((isset($json['DEVA'])) && ($json['DEVA']== true)){echo $mde;}else{echo 0;} ?>" readonly></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="DETE" id="DETE" value="<?php echo $json['DETE']; ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){echo $mdee;} else if ((isset($json['DETE'])) && ($json['DETE']== true) && (isset($json['DEVA'])) && ($json['DEVA']== true)){echo $mdee;}?>" readonly></p></div>
					
					<br><br>
					
					<div class="e bcar"><p class='car'>Constitution</p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="COVA" id="COVA" value="<?php if ($json['COVA'] == true){echo $json['COVA'];}else{echo 10;} ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['COVA'])) && ($_POST['COVA']== true)){echo $mco;} else if ((isset($json['COVA'])) && ($json['COVA']== true)){echo $mco;}else{echo 0;} ?>" readonly></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="COTE" id="COTE" value="<?php echo $json['COTE']; ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['COTE'])) && ($_POST['COTE']== true) && (isset($_POST['COVA'])) && ($_POST['COVA']== true)){echo $mcoo;} else if ((isset($json['COTE'])) && ($json['COTE']== true) && (isset($json['COVA'])) && ($json['COVA']== true)){echo $mcoo;}?>" readonly></p></div>
					
					<br><br>
					
					<div class="e bcar"><p class='car'>Intelligence</p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="INVA" id="INVA" value="<?php if ($json['INVA'] == true){echo $json['INVA'];}else{echo 10;} ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['INVA'])) && ($_POST['INVA']== true)){echo $min;} else if ((isset($json['INVA'])) && ($json['INVA']== true)){echo $min;}else{echo 0;} ?>" readonly></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="INTE" id="INTE" value="<?php echo $json['INTE']; ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['INTE'])) && ($_POST['INTE']== true) && (isset($_POST['INVA'])) && ($_POST['INVA']== true)){echo $minn;} else if ((isset($json['INTE'])) && ($json['INTE']== true) && (isset($json['INVA'])) && ($json['INVA']== true)){echo $minn;}?>" readonly></p></div>
					
					<br><br>
					
					<div class="e bcar"><p class='car'>Sagesse</p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="SAVA" id="SAVA" value="<?php if ($json['SAVA'] == true){echo $json['SAVA'];}else{echo 10;} ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){echo $msa;} else if ((isset($json['SAVA'])) && ($json['SAVA']== true)){echo $msa;}else{echo 0;} ?>" readonly></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="SATE" id="SATE" value="<?php echo $json['SATE']; ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){echo $msaa;} else if ((isset($json['SATE'])) && ($json['SATE']== true) && (isset($json['SAVA'])) && ($json['SAVA']== true)){echo $msaa;} ?>" readonly></p></div>
					
					<br><br>
					
					<div class="e bcar"><p class='car'>Charisme</p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="CAVA" id="CAVA" value="<?php if ($json['CAVA'] == true){echo $json['CAVA'];}else{echo 10;} ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){echo $mca;} else if ((isset($json['CAVA'])) && ($json['CAVA']== true)){echo $mca;}else{echo 0;} ?>" readonly></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" type="number" name="CATE" id="CATE" value="<?php echo $json['CATE']; ?>"></p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php if ((isset($_POST['CATE'])) && ($_POST['CATE']== true) && (isset($_POST['CAVA'])) && ($_POST['CAVA']== true)){echo $mcaa;} else if ((isset($json['CATE'])) && ($json['CATE']== true) && (isset($json['CAVA'])) && ($json['CAVA']== true)){echo $mcaa;} ?>"></p></div>
					
					<div class="e bini"><p class='ini'>Initiative</p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" value="<?php 
					if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true) && (isset($_POST['inid']) && ($_POST['inid']== true))){echo $mdee + $json['inid'];}
					else if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){echo $mdee;}
					else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true) && (isset($_POST['inid']) && ($_POST['inid']== true))){echo $mde + $json['inid'];}
					else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){echo $mde;} 
					?>" readonly></p><p class="e min">Total</p></div>
					
					<div class="e bin"><p class="e in"> = </p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel"  value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></p><p class="e min">Mod dex</p></div>
					
					<div class="e bin"><p class="e in"> + </p></div>
					
					<div class="e bcel"><p class="e cel"><input class="e icel" name="inid" id="inid" type="number" value="<?php if ($json['inid'] == true){ echo $json['inid'];}else{echo 0;} ?>"></p><p class="e min">Mod divers</p></div>
					
					<br>
					
					<!-- Section CA -->
					
					<div class="e bca"><p class='ca'>CA<br>Classe d'armure</p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" value="<?php if ((isset($ca)) && ($ca == true)){ echo $ca;}else{echo 10;}; ?>" readonly></p></div>
					
					<div class="e bcel3"><p class="e cel3"> = 10 + </p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" name="cla" id="cla" type="number" value="<?php if ($json['cla'] == true){ echo $json['cla'];}else{echo 0;}; ?>"></p><p class="e bcel4 cel4">Classe d'Armure</p></div>
					
					<div class="e bcel3"><p class="e cel3"> + </p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" name="bou" id="bou" type="number" value="<?php if ($json['bou'] == true){ echo $json['bou'];}else{echo 0;} ?>"></p><p class="e bcel4 cel4">Bonus de bouclier</p></div>
					
					<div class="e bcel3"><p class="e cel3"> + </p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} else if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){echo $mdee;} else if ((isset($json['DETE'])) && ($json['DETE']== true) && (isset($json['DEVA'])) && ($json['DEVA']== true)){echo $mdee;} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){echo $mde;} else if ((isset($json['DEVA'])) && ($json['DEVA']== true)){echo $mde;}else{echo 0;} ?>" readonly></p><p class="e bcel4 cel4" >Mod de dex</p></div>
					
					<div class="e bcel3"><p class="e cel3"> + </p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" name="mta" id="mta" type="number" value="<?php if ($json['mta'] == true){ echo $json['mta'];}else{echo 0;} ?>"></p><p class="e bcel4 cel4">Mod de taille</p></div>
					
					<div class="e bcel3"><p class="e cel3"> + </p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" name="nat" id="nat" type="number" value="<?php if ($json['nat'] == true){ echo $json['nat'];}else{echo 0;} ?>"></p><p class="e bcel4 cel4">Armure naturelle</p></div>
					
					<div class="e bcel3"><p class="e cel3"> + </p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" name="par" id="par" type="number" value="<?php if ($json['par'] == true){ echo $json['par'];}else{echo 0;} ?>"></p><p class="e bcel4 cel4">Mod de parade</p></div>
					
					<div class="e bcel3"><p class="e cel3"> + </p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" name="mdiv" id="mdiv" type="number" value="<?php if ($json['mdiv'] == true){ echo $json['mdiv'];}else{echo 0;} ?>"></p><p class="e bcel4 cel4">Mod divers</p></div>
					
					<br>
					
					<div class="e bca"><p class='ca'>Contact<br>Classe d'armure</p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" value="<?php if ((isset($cca)) && ($cca == true)){ echo $cca;}else{echo 10;}; ?>" readonly></p></div>
					
					<div class="e bca"><p class='ca'>Pris au dépourvu<br>Classe d'armure</p></div>
					
					<div class="e bcel2"><p class="e cel2"><input class="e icel2" value="<?php if ((isset($pad)) && ($pad == true)){ echo $pad;}else{echo 10;}; ?>" readonly></p></div>
					
					<div class="bl2 e"><p class="bll2">Temp.</p><textarea rows="2" cols="26" class="ibll2" name="catemp" id="catemp" ><?php echo $json['catemp']; ?></textarea></div>
					
					<br><br>
					
					<!-- Section Jet de sauvegarde -->
					
					<div class="e sauv"><p class='bsauv'><br>Jet de sauvegarde</p></div>
					
					<div class="e sauv" style="margin-left: 8px"><p class='bsauv'><br>Total</p></div>
					
					<div class="e sauv" style="margin-left: 27px"><p class='bsauv'>Bonus de<br>base</p></div>
					
					<div class="e sauv"><p class='bsauv'>Mod. de<br>Caract.</p></div>
					
					<div class="e sauv" style="margin-left: 25px"><p class='bsauv'>Mod.<br>Magique</p></div>
					
					<div class="e sauv" style="margin-left: 25px"><p class='bsauv'>Mod.<br>divers</p></div>
					
					<div class="e sauv"><p class='bsauv'>Mod.<br>Temporaire</p></div>
					
					<div class="blsav e"><p class="bllsav">Mod.</p><textarea rows="14" cols="11" name="satemp" id="satemp" ><?php echo $json['satemp']; ?></textarea></div>
					
					<br>
					
					<br>
					
					<div class="e sav"><p class='bsav'>REFLEXE<br><span class="bbsav">(Dexterité)</span></p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($ref)) && ($ref == true)){ echo $ref;}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> = </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="rbase" id="rbase" type="number" value="<?php if ($json['rbase'] == true){ echo $json['rbase'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}} ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="rmag" id="rmag" type="number" value="<?php if ($json['rmag'] == true){ echo $json['rmag'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="rdiv" id="rdiv" type="number" value="<?php if ($json['rdiv'] == true){ echo $json['rdiv'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="rtemp" id="rtemp" type="number" value="<?php if ($json['rtemp'] == true){ echo $json['rtemp'];}else{echo 0;}; ?>"></p></div>
					
					<br>
					
					<div class="e sav"><p class='bsav'>VIGUEUR<br><span class="bbsav">(constitution)</span></p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($vig)) && ($vig == true)){ echo $vig;}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> = </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="vibase" id="vibase" type="number" value="<?php if ($json['vibase'] == true){ echo $json['vibase'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($_POST['COTE'])) && ($_POST['COTE']== true) && (isset($_POST['COVA'])) && ($_POST['COVA']== true)){if ($mcoo == true){echo $mcoo;}} else if ((isset($_POST['COVA'])) && ($_POST['COVA']== true)){if ($mco == true){echo $mco;}} ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="vimag" id="vimag" type="number" value="<?php if ($json['vimag'] == true){ echo $json['vimag'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="vidiv" id="vidiv" type="number" value="<?php if ($json['vidiv'] == true){ echo $json['vidiv'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="vitemp" id="vitemp" type="number" value="<?php if ($json['vitemp'] == true){ echo $json['vitemp'];}else{echo 0;}; ?>"></p></div>
					
					<br>
					
					<div class="e sav"><p class='bsav'>VOLONTE<br><span class="bbsav">(Sagesse)</span></p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($vol)) && ($vol == true)){ echo $vol;}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> = </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="vobase" id="vobase" type="number" value="<?php if ($json['vobase'] == true){ echo $json['vobase'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($_POST['SATE'])) && ($_POST['SATE']== true) && (isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msaa == true){echo $msaa;}} else if ((isset($_POST['SAVA'])) && ($_POST['SAVA']== true)){if ($msa == true){echo $msa;}} ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="vomag" id="vomag" type="number" value="<?php if ($json['vomag'] == true){ echo $json['vomag'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="vodiv" id="vodiv" type="number" value="<?php if ($json['vodiv'] == true){ echo $json['vodiv'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" name="votemp" id="votemp" type="number" value="<?php if ($json['votemp'] == true){ echo $json['votemp'];}else{echo 0;}; ?>"></p></div>
					
					<br>
					
					<!-- Section BBA DMO DMD RM -->
					
					<br>
					
					<div class="e bba"><p class='bbba'>BBA<br><span class="bbbba">Bonus de base à l'attaque</span></p></div>
					
					<div class="e bbaby"><p class="e baby"><input class="e ibaby" name="bba" id="bba" type="number" value="<?php if ($json['bba'] == true){ echo $json['bba'];}else{echo 0;}; ?>"></p></div>
					
					<div class="e mag"><p class='bmag'>RM<br><span class="bbmag">Resistance magique</span></p></div>
					
					<div class="e bmagy"><p class="e magy"><input class="e imagy" name="rm" id="rm" type="number" value="<?php if ($json['rm'] == true){ echo $json['rm'];}else{echo 0;}; ?>"></p></div>
					
					<br><br>
					
					<div class="e bba"><p class='bbba'>BMO<br><span class="bbbba">Bonus de manoeuvre offensive</span></p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($bmo)) && ($bmo == true)){ echo $bmo;}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> = </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ($json['bba'] == true){ echo $json['bba'];}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($_POST['FOTE'])) && ($_POST['FOTE']== true) && (isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfoo == true){echo $mfoo;}} else if ((isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfo == true){echo $mfo;}}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ($json['mta'] == true){ echo $json['mta'];}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="bdmd e"><p class="bldmd">Mod.</p><textarea rows="5" cols="15" name="bmodmd" id="bmodmd"><?php echo $json['bmodmd']; ?></textarea></div>
					
					<br>
					
					<div class="e dmd" style="margin-left: 228px"><p class='bdmd'>Total</p></div>
					
					<div class="e dmd" style="margin-left: 75px"><p class='bdmd'>BBA</p></div>
					
					<div class="e dmd" style="margin-left: 45px"><p class='bdmd'>Mod.Force</p></div>
					
					<div class="e dmd" style="margin-left: 65px"><p class='bdmd'>Mod.Taille</p></div>
					
					<br><br><br>
					
					<div class="e bba"><p class='bbba'>DMD<br><span class="bbbba">Degré de manoeuvre défensive</span></p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($dmd)) && ($dmd == true)){ echo $dmd;}else{echo 10;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> = </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ($json['bba'] == true){ echo $json['bba'];}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($_POST['FOTE'])) && ($_POST['FOTE']== true) && (isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfoo == true){echo $mfoo;}} else if ((isset($_POST['FOVA'])) && ($_POST['FOVA']== true)){if ($mfo == true){echo $mfo;}}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ((isset($_POST['DETE'])) && ($_POST['DETE']== true) && (isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mdee == true){echo $mdee;}} else if ((isset($_POST['DEVA'])) && ($_POST['DEVA']== true)){if ($mde == true){echo $mde;}}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + </p></div>
					
					<div class="e bsavc"><p class="e savc"><input class="e isavc" value="<?php if ($json['mta'] == true){ echo $json['mta'];}else{echo 0;}; ?>" readonly></p></div>
					
					<div class="e bsa"><p class="e csa"> + 10</p></div>
					
					<br>
					
					<div class="e dmd" style="margin-left: 228px"><p class='bdmd'>Total</p></div>
					
					<div class="e dmd" style="margin-left: 75px"><p class='bdmd'>BBA</p></div>
					
					<div class="e dmd" style="margin-left: 45px"><p class='bdmd'>Mod.Force</p></div>
					
					<div class="e dmd" style="margin-left: 70px"><p class='bdmd'>Mod.Dext</p></div>
					
					<div class="e dmd" style="margin-left: 65px"><p class='bdmd'>Mod.Taille</p></div>
					
					<br>
					
					<!--  Fin Partie 2 -->
					
					
					<!--  Armes -->
					
					<div class="e weap"><p class='bweap'>ARMES</p></div>
					
					<div class="e weap2"><p class='bweap2'>BONUS A L'ATTAQUE</p></div>
					
					<div class="e weap2"><p class='bweap2'>CRITIQUE</p></div>
					
					<br>
					
					<div class="e bweap3"><span class="e weap3"><textarea rows="2" cols="27" name="arme1" id="arme1"><?php echo $json['arme1']; ?></textarea></span></div>
					
					<div class="e bweap4"><span class="e weap4"><textarea rows="2" cols="24" name="attaque1" id="attaque1"><?php echo $json['attaque1']; ?></textarea></span></div>
					
					<div class="e bweap4"><span class="e weap4"><textarea rows="2" cols="25" name="crit1" id="crit1"><?php echo $json['crit1']; ?></textarea></span></div>
					
					<br>
					
					<div class="e weap5"><p class='bweap5'>TYPE</p></div>
					
					<div class="e weap6"><p class='bweap6'>PORTEE</p></div>
					
					<div class="e weap6"><p class='bweap6'>MUNITION</p></div>
					
					<div class="e weap6"><p class='bweap6'>DEGAT</p></div>
					
					<br>
					
					<div class="e bweap7"><span class="e weap7"><textarea rows="2" cols="20" name="type1" id="type1"><?php echo $json['type1']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="17" name="portee1" id="portee1"><?php echo $json['portee1']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="18" name="munition1" id="munition1"><?php echo $json['munition1']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="18" name="degat1" id="degat1"><?php echo $json['degat1']; ?></textarea></span></div>	

					<br>	

					<div class="e weap"><p class='bweap'>ARMES</p></div>
					
					<div class="e weap2"><p class='bweap2'>BONUS A L'ATTAQUE</p></div>
					
					<div class="e weap2"><p class='bweap2'>CRITIQUE</p></div>
					
					<br>
					
					<div class="e bweap3"><span class="e weap3"><textarea rows="2" cols="27" name="arme2" id="arme2"><?php echo $json['arme2']; ?></textarea></span></div>
					
					<div class="e bweap4"><span class="e weap4"><textarea rows="2" cols="24" name="attaque2" id="attaque2"><?php echo $json['attaque2']; ?></textarea></span></div>
					
					<div class="e bweap4"><span class="e weap4"><textarea rows="2" cols="25" name="crit2" id="crit2"><?php echo $json['crit2']; ?></textarea></span></div>
					
					<br>
					
					<div class="e weap5"><p class='bweap5'>TYPE</p></div>
					
					<div class="e weap6"><p class='bweap6'>PORTEE</p></div>
					
					<div class="e weap6"><p class='bweap6'>MUNITION</p></div>
					
					<div class="e weap6"><p class='bweap6'>DEGAT</p></div>
					
					<br>
					
					<div class="e bweap7"><span class="e weap7"><textarea rows="2" cols="20" name="type2" id="type2"><?php echo $json['type2']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="17" name="portee2" id="portee2"><?php echo $json['portee2']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="18" name="munition2" id="munition2"><?php echo $json['munition2']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="18" name="degat2" id="degat2"><?php echo $json['degat2']; ?></textarea></span></div>	

					<br>				
					
					<div class="e weap"><p class='bweap'>ARMES</p></div>
					
					<div class="e weap2"><p class='bweap2'>BONUS A L'ATTAQUE</p></div>
					
					<div class="e weap2"><p class='bweap2'>CRITIQUE</p></div>
					
					<br>
					
					<div class="e bweap3"><span class="e weap3"><textarea rows="2" cols="27" name="arme3" id="arme3"><?php echo $json['arme3']; ?></textarea></span></div>
					
					<div class="e bweap4"><span class="e weap4"><textarea rows="2" cols="24" name="attaque3" id="attaque3"><?php echo $json['attaque3']; ?></textarea></span></div>
					
					<div class="e bweap4"><span class="e weap4"><textarea rows="2" cols="25" name="crit3" id="crit3"><?php echo $json['crit3']; ?></textarea></span></div>
					
					<br>
					
					<div class="e weap5"><p class='bweap5'>TYPE</p></div>
					
					<div class="e weap6"><p class='bweap6'>PORTEE</p></div>
					
					<div class="e weap6"><p class='bweap6'>MUNITION</p></div>
					
					<div class="e weap6"><p class='bweap6'>DEGAT</p></div>
					
					<br>
					
					<div class="e bweap7"><span class="e weap7"><textarea rows="2" cols="20" name="type3" id="type3"><?php echo $json['type3']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="17" name="portee3" id="portee3"><?php echo $json['portee3']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="18" name="munition3" id="munition3"><?php echo $json['munition3']; ?></textarea></span></div>
					
					<div class="e bweap8"><span class="e weap8"><textarea rows="2" cols="18" name="degat3" id="degat3"><?php echo $json['degat3']; ?></textarea></span></div>	

					<br>				
					
					<br><br>
					
					<p class="cop" >©2009 Black Book éditions et Paizo publishing, LLC. Photocopies et Impressions autorisées pour usage personnel uniquement. Format web : Réalisé par Thomas Lardé, Commencé le 29 septembre 2022, Fiche de personnage interactive</p>
		
				</div>
			
			</div>
		
		</form>

	</body>

</html>