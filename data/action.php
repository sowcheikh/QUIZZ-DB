<?php
global $bdd;
if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$statement = $bdd->prepare("INSERT INTO users(name,score) VALUES (:".$_POST["name"].",:".$_POST["score"].")");
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$statement = $bdd->prepare("SELECT * FROM users WHERE id = :".$_POST["id"]."");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['name'] = $row['name'];
			$output['score'] = $row['score'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$statement = $bdd->prepare("UPDATE users SET name = :".$_POST["name"].",score = :".$_POST["score"]." WHERE id = :".$_POST["hidden_id"]."");
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$statement = $bdd->prepare("DELETE FROM users WHERE id = :".$_POST["id"]."");
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>