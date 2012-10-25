<?
require 'config.php';
include_once '../highliter/geshi.php';
$sql   = "SELECT * FROM `snippets` WHERE `menuid`='".mysql_real_escape_string($_GET["id"])."';";
$query = mysql_query($sql);
$data = mysql_fetch_assoc($query);
if(mysql_num_rows($query) == 0)
{
	echo "Keine Snippets gefunden...";
	return;
}
echo "<h1>".$data["headline"]."</h1><hr /><br />".$data["desc"]."<br /><h2>Snippets</h2><br />";
$query = mysql_query($sql);
while ($row = mysql_fetch_object($query))
{
	$geshi = new GeSHi($row->snippet, $row->lang);
	echo $geshi->parse_code();
}
?>