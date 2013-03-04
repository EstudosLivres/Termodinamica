<?php
	//Efetuando Leitura do arquivo Excel
	//error_reporting(E_ALL ^ E_NOTICE);
	//require_once 'php/excel_reader2.php';
	//$data = new Spreadsheet_Excel_Reader("planilha_termodinamica.xls");
	
	//Montado a lógica do programa
	
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Termodinâmica | Reposta de Consulta</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

	<body>
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
		<div class="container">
            <!-- Example row of columns -->
            <div class="row">
				<!--Renderizando dados solicitados-->
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Tipo de Água</th>
							<th>Temp.</th>
							<th>Press.</th>
							<th>Matrícula</th>
							<th>Matrícula</th>
							<th>Matrícula</th>
							<th>Matrícula</th>
							<th>Matrícula</th>
							<th>Matrícula</th>
							<th>Matrícula</th>
							<th>Matrícula</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Alair P Freire</td>
							<td>10/43251</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Aluno 1</td>
							<td>00/00000</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Aluno 2</td>
							<td>00/00000</td>
						</tr>
						
						<tr>
							<td>4</td>
							<td>Aluno 3</td>
							<td>00/00000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>

<?php ?>