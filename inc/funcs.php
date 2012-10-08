<?
error_reporting(E_ALL);
ini_set('display_errors', '1');
$connection = mysql_connect("localhost", "root", "root");
mysql_select_db("codejaeger");
	function LoadMenu()
	{
		$sql   = "SELECT * FROM menu WHERE pid = 0;";
		$query = mysql_query($sql);
		while ($row = mysql_fetch_object($query))
		{
			echo "<li>".$row->name;
			echo '<ul>'.LoadSubmenus($row->id).'</ul>';
			echo "</li>";
		}
	}

	function LoadSubmenus($parentid)
	{
		$temp = "";
		$sql3   = "SELECT * FROM menu WHERE pid = ".$parentid.";";
		$query3 = mysql_query($sql3);
		while ($row2 = mysql_fetch_object($query3))
		{
			$temp .= "<li>";
			$temp .= $row2->name;
			$temp2 = LoadSubmenus($row2->id);
			if ($temp2!='') $temp .= '<ul>'.$temp2.'</ul>';
			$temp .= "</li>";
		}
		return $temp;
	}
?>