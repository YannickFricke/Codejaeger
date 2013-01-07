<?
require 'funcs.php';
?>
<html>
	<head>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="jqui.js"></script>
		<!-- <script src="../inc/admin.js"></script> -->
		<script type="text/javascript">
			function var_dump(obj)
			{
				var out = '';
				for (var i in obj)
				{
				    out += i + ": " + obj[i] + "\n";
				}
				console.log(out);
			}
		    $( sort );
		    function sort() {
		    $('ol').sortable({
		      placeholder: "ui-sortable-placeholder",
		      connectWith: "ol, li",
		      revert: true,
		      cursor: 'move',
		      visible: "overflow",
		      opacity: 0.8
		    });
		    $("ol, li").disableSelection();
		    }
		</script>
		<style type="text/css">
			ol { overflow: visible;}
			.ui-sortable-placeholder { cursor: move; border: 1px dotted black; visibility: visible !important; height: 50px !important; }
   			.ui-sortable-placeholder * { visibility: hidden; }
		</style>
	</head>
	<body>
		<? LoadMenu(); ?>
	</body>
</html>