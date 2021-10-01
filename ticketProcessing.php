<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	
	<style type="text/css">
body{
   padding-right: 20px;
  
  padding-left: 100px;

   }
* {
  box-sizing: border-box;
}

		.boxStyle{width: 90%;
			border: 1px solid #ccc;
			background: #FFF;
			margin: 0 0 5px;
			padding: 10px;
			font-style: normal;
			font-variant-ligatures: normal;
			font-variant-caps: normal;
			font-variant-numeric: normal;
			font-weight: 400;
			font-stretch: normal;
			font-size: 12px;
			line-height: 16px;
			font-family: Roboto, Helvetica, Arial, sans-serif;
			
		}
h1{    
   margin-top:10px;
  font-size: 17px;
  font-family: Arial;
   }
 
       .image img {
                           width: 30vw;
                           height: 35vw;
                           float:left;

                   
                  }
.container{
width:1100px;
align:center;
height:630px;
border:1px solid #9dd6ee;
position:relative;

}
.panel-heading{
               background-color:#9dd6ee;
               width:100%;
               height:50px;

}
.row{
width:1100px;
align:center;
height:500px;
margin-top:20px;  
 padding-left: 20px;


}
a{  
     background-color:#9dd6ee;
     padding:5px  5px;
     cursor:pointer;
     width:50%;
     color:black;

}
.btn{
      background-color:#9dd6ee;
      padding:5px  5px;
      cursor:pointer;
   
      

}
table { 
                
                
border-collapse: separate;
border-spacing: 1em;
                
             

}
td    {padding: 6px;}


	</style>

</head>
<body>
	
	                            <div class="container">
		                   
					<div class="panel-heading">
						<h1 class="panel-title">
							<?php 

							//$timeSlot=$conn->query("select time from timeslot");	
							$movieId=$_POST['movieId'];	
							$_SESSION['movieId']=$movieId;
							$res=$conn->query("select * from movielist where movieId=$movieId;");
							$row=$res->fetch_object();

							echo "".$row->Name;?>
						</h1>
					</div>
					
						<div class="row">
							<div class="image">
								<img alt="User Pic" src=<?php echo '"uploadimages/'.$row->image.'"';?> class=" img-responsive"> 
							</div>
							<div class="table-user-information">
								<table >
									<tbody>
										<tr>
											<td><strong>Movie Name </strong></td>
											<td><?php echo "".$row->Name;?> </td>
										</tr>
										<tr >
											<td><strong>Genre</strong></td>
											<td> <?php echo "".$row->Genre;?> </td>
										</tr>
										<tr align="left">
											<td><strong>Director</strong></td>
											<td><?php echo "".$row->Director;?> </td>
										</tr>
										
											<tr align="left">
												<td><strong>IMDB</strong></td>
												<td><?php echo "".$row->imdb;?> </td>
											</tr>
											<tr align="left">>
												<td><strong>Description</strong></td>
												<td><?php echo "".$row->Description;	?> </td>
											</tr>

												<form action="ticketConfirmation.php" method="post" >

												<tr>
													<td><strong>Date</strong></td>
													<td><input class="boxStyle" type="date" name="date"></td>
												</tr>
												<tr>

													<td><strong>Show Time</strong></td>
													<td>  <select name="timeSlot" class="boxStyle"> 
														<?php $timeSlot=$conn->query("select time from timeslot"); 
														while ($showTime=$timeSlot->fetch_object()) {

															echo " <option value='".$showTime->time."'>". $showTime->time."</option>
															";
														} ?> 
													</select></td>
												</tr>
													
													<tr  align="center">									
														<td colspan="2" width="100%">
															<input class="btn" type="submit" name="submit" value="Request For Ticket">
                                                                                                                      </td>
                                                                                                               
													</tr>
                                                                                           
                                                                                              </form>
												



											</tbody>
										</table>

									     </div>
                                                                             
                                                                       </div>
								</div>

							
					
		</body>

		</html>