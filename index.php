<?
	include 'inc/funcs.php';
?>
<html>
	<head>
		<title>Codej&auml;ger</title>
	    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/JavaScript"></script>
	    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet/less" type="text/css" href="inc/style.css?ts=<?=filemtime('inc/style.css')?>">
	    <script src="inc/script.js" type="text/JavaScript"></script>
		<script src="inc/less-1.3.1.min.js" type="text/javascript"></script>
	</head>
	<body onload="addEvents();">
		<div id="cnt">
      <div id="head">
        <a href="/Codejaeger"><h1 style="font-family : 'Ubuntu', sans-serif;">Codej&auml;ger</h1></a>
      </div>
			<div id="menu">
				<ul id="LinkedList1" class="LinkedList">
				  <?
				  LoadMenu();
				  ?>
				</ul>
			</div>
			<div id="content">
				Willkommen in der Snippet-Datenbank von 3FX-Media
			</div>
		</div>
	</body>
</html>