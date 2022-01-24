<?php

//function.php

$connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");

function fetch_top_five_data($connect)
{
	$query = "
	SELECT * FROM customer_table 
	ORDER BY customer_id DESC 
	LIMIT 5
	";

	$result = $connect->query($query);

	$output = '';

	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["customer_first_name"].'</td>
			<td>'.$row["customer_last_name"].'</td>
			<td>'.$row["customer_email"].'</td>
			<td>'.$row["customer_gender"].'</td>
		</tr>
		';
	}

	return $output;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM customer_table";

	$statement = $connect->prepare($query);

	$statement->execute();

	return $statement->rowCount();
}

?>