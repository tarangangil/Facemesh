<html lang="en">
<head>
  <title> TARAN||FACEMASH</title>
   
<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="main.js"></script>
<script>
</script>

<style>
.jumbotron{
background-color:#3CC;
}
.card{
box-shadow: 0px 2px 20px #6f6f6f;
}

@media only screen and(max-width: 768px) {
  .card {
    
    display: block;
  }
  .vs{
  width:50%}
}



</style>
</head>

   <body>

<div class="jumbotron" style="box-shadow:6px 6px 12px #888888;">
 <div class="container">

<h1 align="center"><b><i>FACEMASH</i></b></h1>
    <p align="right"><i>Handcrafted by Taran Gangil</i></p>
  <h2 align="center"><i>who's<b> hotter</b>??</br>(CLICK TO VOTE)</i></h2></div>
    </div>
	
	</br></br>
	
	
	
  
 <div class="container">
    <div class="row">
	
	
	<div align=center>
	
	
	 <div class="col-md-1"></div>
   
    <div class="col-md-4">
 <div id="one_profile" ></div>
<!-- <div class="card"  style="display:inline-block; position:relative;"display="center">
  <div class="card-block">
    <h4 class="card-title" display="center"></h4>
    <h6 display="center" class="card-subtitle text-muted"><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: 66</strong></h6>
  </div>
  <div align="center"><img src="img/taran.jpg" alt="Card image" height="400" width="300"></a>
  </div>  </a>
</div> -->
</div>

    
    <div width=100% align=center class="col-md-2">

<img align=center  class="vs" width="100%" src="download.png" style="margin-top:150px">
</div>

 <div class="col-md-5">
 <div id="two_profile" ></div>
    <!--<div class="card"  style="display:inline-block; position:relative;" display="center">
  <div class="card-block">
    <h4 class="card-title" display="center"></h4>
    <h6 display="center" class="card-subtitle text-muted"><strong><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: 66</strong></h6>
  </div>
  <div align="center"><img src="img/IMG_20170110_234153.jpg" alt="Card image" height="400" width="300"></a>
  </div> </a> 
</div> --> 
</div>


</div>
</div>
    </div>
         
</br></br>
 

 <div class="jumbotron" style="box-shadow:6px 6px 12px #888888;">
  <center>
<h2 align="center"><b>ADD YOUR PROFILE</b></h2></br></br>
 
 <form action="upload.php" method="post" enctype="multipart/form-data" class="form-inline">
 
<b>NAME</b> : <input type="text" name="name" id="name" placeholder="taran gangil" required></br></br>
<b>UPLOAD YOUR IMAGE</b>: :<input display="inline-block" type="file" name="file" accept="image/gif, image/jpeg, image/png" required></br>
<input class="btn btn-primary btn-lng" type="submit" value="UPLOAD" >
</br>
</center>
</div>

<hr width="100%"><i><h1 align="center">TOP <b>5</b> PROFILES<h1></i><hr width="100%">

       
	   
 <div class="col-md-1"></div>
	  <div id="top_profile" ></div>
	  <!--
	<div class="card"  style="display:inline-block; position:relative;"display="center">
  <div class="card-block">
    <h4 class="card-title" align="center">Taran</h4>
    <h6 align="center" class="card-subtitle text-muted"><span style='font-size:1.4em; color:red;' class='glyphicon glyphicon-heart'></span><span> </span><strong style='font-size:1.2em;'>RATING: 66</strong></h6>
  </div>
  <div align="center"><img src="img/taran.jpg" alt="Card image" height="400" width="300"></a>
  </div>  
</div>-->
<div class="col-md-1"></div>
	 </br></br>
	
	 <div class="col-md-12 center-block"><a href="profile.php"><button class="btn-btn-primary">SEE ALL PROFILE!</button></a></div></br></br>
           
</br></br>
</body>
</html>