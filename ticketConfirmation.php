<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	

	<style type="text/css">
body{
   padding-right: 100px;
  
  padding-left: 400px;

   }

		
h1{    
   margin-top:10px;
  font-size: 17px;
  font-family: Arial;
   }
 
       .image img {
                           width: 10vw;
                           height: 10vw;
                           float:left;

                   
                  }
.container{
width:600px;
align:center;
height:400px;
border:1px solid #9dd6ee;
position:relative;

}
.panel-heading{
               background-color:#9dd6ee;
               width:100%;
               height:50px;

}
.row{
width:400px;
align:center;
height:300px;
margin-top:20px;  
 padding-left: 20px;


}
.btn{
      background-color:#9dd6ee;
      padding:5px  5px;
      cursor:pointer;
      

}
table { 
                
                

border-spacing: 0.5em;
                
             

}
td    {padding: 6px;}


	</style>

</head>
<body>

	<?php 
	$movieId=$_SESSION['movieId'];

	$movieIdentity=$conn->query("select * from movielist where movieId=$movieId;");
	$row=$movieIdentity->fetch_object();

	$movieName=$row->Name;
	$date=$_POST['date'];
	$time=$_POST['timeSlot'];
	
	
	$showOrder="";//id of reducing seat
	$seatCount="";//seat counting
	

// database e date time theater sob e ase , ekhon movie ase kina check korbo.

			$resourse=$conn->query("select movieName from showOrder where date='".$date."' and timeslot='".$time."';");
			$movieExist=false;
			while ($rw=$resourse->fetch_object()){

				if ($rw->movieName===$movieName) {
					$movieExist=true;
					break;
				}
			
		}
			if (!$movieExist) {
				$sql="INSERT INTO showOrder(showOrderId,date,timeslot,movieName,seat)  VALUES ('','".$date."','". $time. "','".$movieName."',".'50'.");";


				if ($conn->query($sql) === TRUE) {
					$result=$conn->query("select showOrderId from showOrder where date='".$date."' and timeslot='".$time."' and movieName='".$movieName ."' ;");

					$r=$result->fetch_object();

				$showOrder=$r->showOrderId;//we will use this id to reduce seat

				$result=$conn->query("select seat from showOrder where showOrderId='".$showOrder."';");

				$r=$result->fetch_object();

				$seatCount=$r->seat;
			}
		}

		else{

//sob kichur input dewa ase,ekhon seat shudhu kombe
			$result=$conn->query("select showOrderId from showOrder where date='".$date."' and timeslot='".$time."';");

			$r=$result->fetch_object();

				$showOrder=$r->showOrderId;//we will use this id to reduce seat

				$result=$conn->query("select seat from showOrder where showOrderId='".$showOrder."';");

				$r=$result->fetch_object();

				$seatCount=$r->seat;
			//echo "seat kombe";
			}		
	
?>

<div class="container">
	
		
				<div class="panel-heading">
					<h1 class="panel-title">
						<?php 


							//$_SESSION['movieId']="";

						echo "".$movieName;
						?>

					</h1>
				</div>
				
					<div class="row">
					<div class="image">
							<img alt="User Pic" src=<?php echo '"uploadimages/'.$row->image.'"';?> class=" img-responsive"> 
						</div>
						 <div class="table-user-information">
							<table>
								<tbody>

									<tr>
										<td><strong>Date </strong></td>
										<td><?php echo "".$date ?> </td>
									</tr>
									<tr>
										<td><strong>Movie Name </strong></td>
										<td><?php echo "".$row->Name;?> </td>
									</tr>
									<tr>
										
										<td><strong>Time </strong></td>
										<td><?php echo "". $_POST['timeSlot']?></td>
									</tr>
								           <tr>
										<td><strong>Seat Available </strong></td>
										<td><?php echo $seatCount;?> </td>
									</tr>
									
									<tr>
										<td><strong>Ticket Price </strong></td>
										<td> 300 </td>
									</tr>
									<form action="seatReducing.php" method="post">
										<input type="hidden" name="showOrderId" value=<?php echo '"'.$showOrder.'"'; ?>>

										<input type="hidden" name="date" value=<?php echo '"'.$date.'"'; ?>>

										<input type="hidden" name="time" value=<?php echo '"'.$time.'"'; ?>>

										<input type="hidden" name="seat" value=<?php echo '"'.$seatCount.'"'; ?>>

										<tr>
											<td colspan="2" width="100%">
												<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Confirm Ticket">
											</td>
										</td>
									</form>
								</tbody>
							</table>
					
					 </div>
                                                                             
                                     </di>
                            </div>



</body>

</html>
