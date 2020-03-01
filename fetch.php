<?php
include("dbConnect.php");
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db_connect, $_POST["query"]);
	$query = "
	SELECT * FROM sbi
	WHERE Name LIKE '%".$search."%'
	OR Ingradients LIKE '%".$search."%' 
	OR HowToMake LIKE '%".$search."%' 
	OR TimeToMake LIKE '%".$search."%' 
	OR UploadedBy LIKE '%".$search."%'
	";
}
else
{
	$query = "SELECT * FROM sbi ORDER BY Ingradients";
}
//echo($query);
$result = mysqli_query($db_connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output = '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
							<th>Ingradients</th>
							<th>How to make</th>
							<th>Time to make</th>
							<th>Uploaded by</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Name"].'</td>
				<td>'.$row["Ingradients"].'</td>
				<td>'.$row["HowToMake"].'</td>
				<td>'.$row["TimeToMake"].'</td>
				<td>'.$row["UploadedBy"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>