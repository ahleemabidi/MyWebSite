<?php
include 'headerBack.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Bar </title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input  type="submit" name="submit">
	
</form>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=quiz",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `reponse` WHERE etudiant = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>etudiant</th>
				<th>description</th>
			</tr>
			<tr>
				<td><?php echo $row->etudiant; ?></td>
				<td><?php echo $row->description;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Etudiant Does not exist";
		}


}

?>