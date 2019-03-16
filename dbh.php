<?php
$conn=mysqli_connect("localhost", "root", "", "profile");
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}