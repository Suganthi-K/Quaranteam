

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html	p{background-position:left;
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
	color:#FFFFFF;
	
	text-align:center;
	}
	h2{font-style:italic;
	font-size:36px;
	color:#Tomato;
	text-align:center;
	}

h1{
font-size:50px;
color:#FFFFFF;
padding-top:60px;
}
img 
{ float: left;
width: 77px;
}

body {margin:0;
padding:0;
font-family:"Bahnschrift Light", "Bernard MT Condensed", "Berlin Sans FB Demi", "Bell MT";
width:100%;
height:100vh;
background-color:#333333;
}
</style>
</style>
<body>


<!-- Header with image -->

<header class="bgimg w3-display-container  w3-grayscale-min" id="myPage" >
</header>


<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->

<style>
body {
  background-image: url('pic/i.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:900px">
  <div class="w3-card-4 w3-margin w3-white">
  
  
    <div class="w3-container "><center><center><h1 style="color:SlateBlue;"><strong><u><b>HERE THE CURRENT UPDTAES!!!</strong></u></center></center></h1></b>
	
	  <p><h1 style ="color:MediumSeaGreen;"><strong><u>HERE ARE THE SOME  OFFICIAL LINKS....!!!</h1></strong></u>
      <a href="https://www.mygov.in/covid-19/"><h2 style="color:Tomato;">1.VISIT OUR GOVT.LINK-www.mygov.in</h2></a>
	 <a href="https://www.mohfw.gov.in/"> <h2 style="color:Tomato;">2.VISIT OUR MOHW LINK-www.mohfw.gov.in</h2></a>
	 <a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu&hl=en_IN"><center><h2 style="color:Tomato;">3.GOVT OFFICIAL -Aaarogya setu app</h2></a>

	  
      
    </div>

   
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
