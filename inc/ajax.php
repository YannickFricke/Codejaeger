<?
include_once '../highliter/geshi.php';
require 'config.php';
$sql   = "SELECT * FROM `snippets` WHERE `menuid`='".mysql_real_escape_string($_GET["id"])."';";
$query = mysql_query($sql);
$data  = mysql_fetch_assoc($query);
$geshi = new GeSHi($data["snippet"], $data["lang"]);
echo sprintf("<h1>Ich bin ein Snippet Vol. I</h1>
<hr />
<br />
%s
<br />
%s", $data["desc"],$geshi->parse_code());
?>