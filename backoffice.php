<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Autenticazione non riuscita';
    exit;
} elseif($_SERVER['PHP_AUTH_USER']=='romagnami' && $_SERVER['PHP_AUTH_PW']=='igea') {
?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
</head>
<body>
<div class="container">

<?php 

include('lib/utility.php');

$prodotti_json = carica_file('prodotti/prodotti.json');
$prodotti = json_decode($prodotti_json);


if($_GET != null){
	//se prendiamo dei parametri in get li salviamo nel json
	
	if($_GET['del']!=null){

		$deletekey = $_GET['del'];
		array_splice($prodotti, $deletekey, 1);


	}elseif($_GET['add']!=null){
		$addkey = $_GET['add'];


		$newprd->img = $addkey+1;
		$newprd->title = '';
		$newprd->subtitle = '';
		$newprd->htmlContent = '';

		array_push($prodotti, $newprd);;

	}else{

		$editkey = $_GET['key'];
		$prodotti[$editkey]->img = $_GET['img'];
		$prodotti[$editkey]->title = $_GET['title'];
		$prodotti[$editkey]->subtitle = $_GET['subtitle'];
		$prodotti[$editkey]->htmlContent = $_GET['htmlContent'];	
	
	}
	

	$jsonProduct = json_encode($prodotti);

	$newfile = fopen('prodotti/prodotti.json', "r+");//r+ era a
	fwrite($newfile, $jsonProduct, 1048576);
	fclose($newfile);


}


//$prodotti_json = carica_file('prodotti/prodotti.json');

//$prodotti = json_decode($prodotti_json);

?>
<h1>Backoffice</h1>

<?php
foreach ($prodotti as $key => $p) {
	?>
	<h2><?php echo ($p->title)?></h2>
	<a href="?del=<?php echo ($key)?>">Cancella</a>
	<form action="backoffice.php" >
		<input type="hidden" name="key" value="<?php echo ($key) ?>"/>
		<input type="hidden" name="img" value="<?php echo ($p->img) ?>"/>
		<div class="row">
			<div class="form-group row has-feedback">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6">
					<input class="form-control input-lg" type = "text" name="title" value="<?php echo ($p->title)?>" />
				</div>
			</div>
			<div class="form-group row has-feedback">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6">
					<textarea class="form-control input-lg" type = "text" name="subtitle" ><?php echo ($p->subtitle)?></textarea>
				</div>
			</div>
	
			<div class="form-group row has-feedback">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6">
					<textarea name="htmlContent" class="form-control input-lg"><?php echo ($p->htmlContent)?></textarea>
				</div>
			</div>
			<div class="form-group row has-feedback">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6">
					<input type="submit" value="Salva" class="btn btn-danger form-control input-lg"/>
				</div>
			</div>

		</div>
	</form>


	<?php

$nextkey=$key+1;
}
?>
	<a href="?add=<?php echo ($nextkey)?>">Aggiungi</a>

</div>
</body>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</html>
<?php
}else{
	header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Autenticazione errata';
}

