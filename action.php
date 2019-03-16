<?php
session_start();
include "dbh.php";

if(isset($_POST["profile"])){
	$x="SELECT * FROM mydb";
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
			<div class='card'  style='display:inline-block; position:relative;'display='center'>
  <div class='card-block'>
    <h4 class='card-title' align='center'>$pro_title</h4>
    <h6 align='center' class='card-subtitle text-muted'><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: $pro_rating</strong></h6>
  </div>
  
  <div align='center'><img src='$pro_image' alt='Card image' height='350' width='300' ></a>
  </div>  
</div></div>";
		}
	}
}

if(isset($_POST["top"])){
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
			<div class='card'  style='display:inline-block; position:relative;' display='center'>
  <div class='card-block'>
    <h4 class='card-title' align='center'>$pro_title</h4>
    <h6 align='center' class='card-subtitle text-muted'><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: $pro_rating</strong></h6>
  </div>
  <div align='center'><img src='$pro_image' alt='Card image' height='350' width='300'></a>
  </div>  
</div></div>";
			
		}
	}
}

if(isset($_POST["count"])){
	$x="SELECT * FROM mydb";
	$run_query=mysqli_query($conn,$x);
	$count=mysqli_num_rows($run_query);
     $j=rand(1,$count);
	$q1 = "select * from mydb where id ='$j'";
	$r1=mysqli_query($conn,$q1);
	if(mysqli_num_rows($r1)>0)
	{ 
		while($row=mysqli_fetch_array($r1))
		{
			$pro_id=$row["id"];
			$pro_title=$row["name"];
			$pro_rating=$row["rating"];
			$pro_image=$row["image"];
 echo"
     <div class='card'  style='display:inline-block; position:relative;'display='center'>
  <div class='card-block'>
    <h4 class='card-title' align='center'>$pro_title</h4>
    <h6 align='center' class='card-subtitle text-muted'><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: $pro_rating</strong></h6>
  </div>
  <div align='center'><img class='ab' cid='$pro_id' src='$pro_image' alt='Card image' height='400' width='300'></a>
  </div>  
	</div>
	";}
}
}

if(isset($_POST["ount"])){
	$x="SELECT * FROM mydb";
	$run_query=mysqli_query($conn,$x);
	$count=mysqli_num_rows($run_query);
	$q=rand(1,$count);	
   $q1 = "select * from mydb where id ='$q'";
	$r1=mysqli_query($conn,$q1);
	if(mysqli_num_rows($r1)>0)
	{ 
		while($row=mysqli_fetch_array($r1))
		{
			$pro_id=$row["id"];
			$pro_title=$row["name"];
			$pro_rating=$row["rating"];
			$pro_image=$row["image"];
 echo"
 
     <div class='card'  style='display:inline-block; position:relative;' display='center'>
  <div class='card-block'>
    <h4 class='card-title' align='center'>$pro_title</h4>
    <h6 align='center' class='card-subtitle text-muted'><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: $pro_rating</strong></h6>
  </div>
  <div align='center'><img  class='cd' bid='$pro_id' src='$pro_image' alt='Card image' height='400' width='300'></a>
  </div>  
	</div>
	";}
}
}

 if(isset($_POST["get_rating_one"])){
	$id_o=$_POST["id_one"];
	$sql="update mydb set rating=rating+1 where id ='$id_o'";
	$run_query=mysqli_query($conn,$sql);
	
}
	
	if(isset($_POST["get_rating_two"])){
	$id_t=$_POST["id_two"];
	$sql="update mydb set rating=rating+1 where id ='$id_t'";
	$run_query=mysqli_query($conn,$sql);
	
	}

?>



		
		
		
		
		
		