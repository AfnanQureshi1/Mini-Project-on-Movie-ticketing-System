<?php 
include 'db.php';
if (!session_id()) {
	session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
<style>
body{
                        
			
      margin:0;
      background-image:url("thor.jpg");
      background-size:cover;
      background-position:fixed;
		}
.container{
width:300px;
height:300px;
background-color:#778899;
color:#fff;
top:20%;
left:30%;
position:absolute;
trasform:translate(-50%,-50%);

padding:70px  30px;
}

.btn-group button {

  background-color: #90EE90; 
  border: 1px solid black; 
  color: black; 
   margin-left:20px;
   margin-bottom:10px;
  padding: 10px 24px;
  cursor: pointer; 
  width: 80%;
  display: block; 
  
}
.btn-group button:hover {
  background-color: #98FB98;
}
.con{
      
      width:100%;
      height:100px;
      top:5%;
      
       
}
.con h1{
        
         font-family:Sans-serif;
         font:20px; 
         padding: 5px; 
         color:white;
}
	</style>
	
</head>
  	<div class="con" >
		<h1>ADMIN</h1>
        </div>
		<div class="container" >
			
			<table>
				<div class="btn-group">
                                      <button onclick="window.location.href = 'AddMovie.php';">AddMovie</button>
                                      <button onclick="window.location.href = 'addTimeSlot.php';">Addtime</button>
                                   
                                  </div>
			</div> 

		
	</body>
	
	</html>
