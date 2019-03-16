$(document).ready(function(){
tar();
	function tar(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {top:1},
			success:function(data){
			$("#top_profile").html(data);}
		})
	}
	
	taran();
	function taran(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {profile:1},
			success:function(data){
			$("#get_profile").html(data);}
		})
	}
	
	
	tara();
	function tara(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {count:1},
			success:function(data){
			$("#one_profile").html(data);;}
		})
	}
	
		ta();
	function ta(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {ount:1},
			success:function(data){
			$("#two_profile").html(data);;}
		})
	}
	
	
	$("body").delegate(".ab","click",function(event){
		event.preventDefault();
	var cid=$(this).attr('cid');
	$.ajax({
			url: "action.php",
			method: "POST",
			data : {get_rating_one:1,id_one:cid },
			success:function(data){
				tara();
				ta();
			}
		})
	})
	
	$("body").delegate(".cd","click",function(event){
			event.preventDefault();
	var bid=$(this).attr('bid');
	$.ajax({
			url: "action.php",
			method: "POST",
			data : {get_rating_two:1,id_two:bid},
			success:function(data){
				ta();
				tara();
			}
		})
	})
	
	$(document).ready(function(){
$("#top_profile").load('refresh_profile_page.php');
refresh();	
});
function refresh()
{
	setTimeout(function(){
	$("#top_profile").load('refresh_profile_page.php');
	refresh();
	},1000);
}
	
		})