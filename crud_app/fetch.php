<?php

//fetch.php

include('function.php');

/*This $_GET variable received in Ajax Request Url*/

//"start"			-	the data offset
$startGET = filter_input(INPUT_GET, "start", FILTER_SANITIZE_NUMBER_INT);
$start = $startGET ? intval($startGET) : 0;

//"length"			-	the length of the returning data
$lengthGET = filter_input(INPUT_GET, "length", FILTER_SANITIZE_NUMBER_INT);
$length = $lengthGET ? intval($lengthGET) : 10;

//"searchQuery"		- 	the search text
$searchQuery = filter_input(INPUT_GET, "searchQuery", FILTER_SANITIZE_STRING);
$search = empty($searchQuery) || $searchQuery === "null" ? "" : $searchQuery;

//"sortColumn"  	-	the index of the to sorted column
$sortColumnIndex = filter_input(INPUT_GET, "sortColumn", FILTER_SANITIZE_NUMBER_INT);

//"sortDirection"	-	the sorting direction (asc or desc)
$sortDirection = filter_input(INPUT_GET, "sortDirection", FILTER_SANITIZE_STRING);

$column = array("customer_first_name", "customer_last_name", "customer_email", "customer_gender");

$query = "SELECT * FROM customer_table ";

$query .= '
	WHERE customer_id LIKE "%'.$search.'%" 
	OR customer_first_name LIKE "%'.$search.'%" 
	OR customer_last_name LIKE "%'.$search.'%" 
	OR customer_email LIKE "%'.$search.'%" 
	OR customer_gender LIKE "%'.$search.'%" 
';

if($sortColumnIndex != '')
{
	$query .= 'ORDER BY ' . $column[$sortColumnIndex].' '.$sortDirection . ' ';
}
else
{
	$query .= 'ORDER BY customer_id DESC ';
}

$query1 = '';

if($length != -1)
{
	$query1 = 'LIMIT ' . $start . ', ' . $length;
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();

	$sub_array[] = $row['customer_first_name'];

	$sub_array[] = $row['customer_last_name'];

	$sub_array[] = $row['customer_email'];

	$sub_array[] = $row['customer_gender'];

	$data[] = $sub_array;
}

$output = array(
	'recordsTotal'			=>	count_all_data($connect),
	'recordsFiltered'		=>	$number_filter_row,
	'data'					=>	$data
);

echo json_encode($output);

?>