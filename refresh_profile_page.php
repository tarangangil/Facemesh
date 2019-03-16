<?php
session_start();
include 'dbh.php';

$x="SELECT * FROM mydb order by rating desc limit 0,5";
	$run_query=mysqli_query($conn,$x);
	if(mysqli_num_rows($run_query)>0)
	{ 
		while($row=mysqli_fetch_array($run_query))
		{
			$pro_id=$row["id"];
			$pro_title=$row["name"];
			$pro_rating=$row["rating"];
			$pro_image=$row["image"];
			echo"
			<div class='col-md-2'>
			<div class='card'  style='display:inline-block'; position:'relative';display='center'>
  <div class='card-block'>
    <h4 class='card-title' align='center'>$pro_title</h4>
    <h6 align='center' class='card-subtitle text-muted'><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: $pro_rating</strong></h6>
  </div>
  <div align='center'><img src='$pro_image' alt='Card image' height='350' width='300'></a>
  </div>  
</div></div>";
			
		}
	}

?>