<?php
$connect = mysqli_connect("localhost","root","root","builds");

if(isset($_POST["query"]))
{
	
	$output = '';
	
	$query = "SELECT * FROM " . $_POST["component"] ."_builds where Build_Name LIKE '%".$_POST["query"]."%'";
	
	//$query = "SELECT * FROM alerts_builds where Build_Name LIKE '%".$_POST["query"]."%'";
	$result = mysqli_query($connect,$query);
	$output = '<ul class="list-unstyled">';
        if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$output .= '<li>'.$row["Build_Name"].'</li>';
		}
	}
	else
	{
		$output .= '<li>Build Not Found</li>';
	}
	$output .= '</ul>';
        echo $output;

}

?>
