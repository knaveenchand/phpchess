<?
	$sqlquery = "SELECT * FROM c4m_tipoftheday ORDER BY RAND() LIMIT 1";
	$result = mysql_query($sqlquery) or die("Unable to execute query: ".mysql_error());

	if (!mysql_numrows($result))
	{
		header("var_tip_of_the_day: There is no tip of the day.");
	} else
	{
		$tip = mysql_fetch_array($result);
		header("var_tip_of_the_day: ".$tip["tip_tiptext"]);
	}
?>