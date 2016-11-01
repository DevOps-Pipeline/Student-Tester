<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
<title>Gadget Test</title>
<link rel="stylesheet" href="main.css">
</head>

<body>
	<div id="big_wrapper">

	<header id="header">Gadget Inventory</header>
	<nav id="navigation">
		<ul>Home</ul>
                <ul>About</ul>
                <ul>Contact</ul>
                <ul>Gadgets</ul>
	</nav>
<?php

	require_once('databaseConnection.php');
	$dbc = new databaseConnection();
	$dbc->connect();
	if($_GET['pic']!=NULL)
	$G = $dbc->getGadget($_GET['pic']);
	else $G = $dbc->getGadget(1);

?>
        <aside id="left_side">
                <ul><b>Type </b><br/><p><?php echo $G->getName(); ?></p></ul>
                <ul><b>Manufacturer </b><br/><p><?php echo $G->getManufacturer(); ?></p></ul>
                <ul><b>Cost </b><br/><p><?php echo $G->getCost(); ?><p></ul>
                <ul><b>Amazon </b><br/><a href="<?php $G->getLink(); ?>"><?php echo $G->getModel(); ?></a></ul>

        </aside>

        <aside id="right_side">
                <ul>1</ul>
                <ul>2</ul>
                <ul>3</ul>
                <ul>4</ul>
                <ul>5</ul>

        </aside>

	<section id="gadget">
<?php

echo '<img src="./Resources/';
echo $G->getImageName();
echo '">';
?>

	</section>

	<section id="icons">
		<div>
			<a href="index.php?pic=1" id="one"><img src="./Resources/<?php echo $dbc->getGadget(1)->getIcon();?>"></a>
			<a href="index.php?pic=2" id="two"><img src="./Resources/<?php echo $dbc->getGadget(2)->getIcon();?>"></a>
		</div>
	</section>


	</div>





</body>

</html>
