<?
	include 'inc/funcs.php';
?>
<html>
	<head>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/JavaScript"></script>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="inc/style.css">
    <script src="inc/script.js" type="text/JavaScript"></script>
</head>
	</head>
	<body onload="addEvents();">
		<div id="cnt">
      <div id="head">
        <h1 style="margin-top: 15px;">Codej&auml;ger</h1>
      </div>
			<div id="menu">
				<ul id="LinkedList1" class="LinkedList">
				  <?
				  LoadMenu();
				  ?>
				</ul>
			</div>
			<div id="content">
				lala
			</div>
		</div>
	</body>
</html>