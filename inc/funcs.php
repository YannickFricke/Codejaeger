<?
error_reporting(E_ALL);
ini_set('display_errors', '1');
$connection = mysql_connect("localhost", "root", "root");
mysql_select_db("codejaeger");
function LoadMenu()
{
	$sql   = "SELECT * FROM menu WHERE pid = 0;";
	$query = mysql_query($sql);
	echo '<ul id="sitemap">';
	while ($row = mysql_fetch_object($query))
	{
		echo "<li id=\"".$row->id."\">".$row->name;
		echo '<ul>'.LoadSubmenus($row->id).'</ul>';
		echo "</li>";
	}
	echo "</ul>";
}

function LoadSubmenus($parentid)
{
	$temp = "";
	$sql3   = "SELECT * FROM menu WHERE pid = ".$parentid.";";
	$query3 = mysql_query($sql3);
	while ($row2 = mysql_fetch_object($query3))
	{
		$temp .= "<li id=\"".$row2->id."\">";
		$temp .= $row2->name;
		$temp2 = LoadSubmenus($row2->id);
		if ($temp2!='') $temp .= '<ul>'.$temp2.'</ul>';
		$temp .= "</li>";
	}
	return $temp;
}

function LoadSitemap()
{
	$sql   = "SELECT * FROM menu WHERE pid = 0;";
	$query = mysql_query($sql);
	echo '<ul id="sitemap">';
	while ($row = mysql_fetch_object($query))
	{
		echo "<li id=\"".$row->id."\"><dl><dt><a href=\"#\">".$row->name."</a></dt><dd>Text Page</dd><dd>Published</dd><dd><a href=\"#\">delete</a></dd></dl><ul>".LoadSitemapSubmenus($row->id)."</ul></li>";
	}
	echo "</ul></ul>";
}

function LoadSitemapSubmenus($parentid)
{
	$temp = "";
	$sql3   = "SELECT * FROM menu WHERE pid = ".$parentid.";";
	$query3 = mysql_query($sql3);
	while ($row2 = mysql_fetch_object($query3))
	{
		$temp = "<li id=\"".$row2->id."\"><dl><dt><a href=\"#\">".$row2->name."</a></dt><dd>Text Page</dd><dd>Published</dd><dd><a href=\"#\">delete</a></dd></dl><ul>";
		$temp2 = LoadSitemapSubmenus($row2->id);
		if ($temp2!='') $temp .= $temp2.'</ul></li></ul>';
	}
	return $temp;
}
?>