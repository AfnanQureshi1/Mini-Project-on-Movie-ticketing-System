<?php 
if (!session_id()) {
# code...
	session_start();
} 
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>book your ticket</title>
<style>
*{
    box_sizing:border-box;
}
 
body{
      margin:0;
      background:#000000;
        padding-right: 20px;
        padding-left: 20px;
     }

h1{
   margin-top:5px;
   margin-bottom:-10px;
   color: white;
   text-font: Azedo;
   text-align: center;
   font-size:70px;
   
}
nav{
    background:green;
    width:100%;
    height:60px;
    overflow:auto;
    }

 ul{
   margin:0;
   padding:0;
   list-style:none;
   line-height:50px;
  }
 li{
   float:left;
  }

nav a{
      width:120px;
      display:block;
      text-decoration:none;
      text-align:center;
      font-size:15px;
      color:white;
      padding:5px 20px;
      font family:Arial;
     }
nav a:hover {
  background-color: #006400;
  color: white;
}

 

form{ 
  margin-top:18px;
  margin-right:10px;
  float: right;
  }
 input[type=text]{ 
  padding: 7px;
  font-size: 17px;
  font-family: Arial;
  border: none;  
}
  input[type=submit] {
  float: right;
  padding: 7px;
  background: #2196F3;
  color: white;
  border: none;
  font-size: 17px;
  font-family: Arial;
  cursor: pointer;
  position:relative;
  border: none;
}
.card{
  padding-right: 30px;
  
  padding-left: 80px;
 
 

}

.card-container{
   margin: 1em 0;
   border: double green;
   height:170px;

  
  
}
.cover img {
 width: 7vw;
  height: 10vw;
  float:left;
position: absolute;
  
}
.main{
  color: white;
  float:bottom;
  font-size: 14px;
  font-family: Arial;
  text-align:left;
  padding-left:10%;
  
   
}
.buy_ticket{
    height:10px; 
    width:30px; 
    position:relative;
    bottom:80px; 
    left:94%;
}
.buy_ticket .btn{
   background-color: green; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  cursor: pointer;
}
.buy_ticket .btn:hover {
  background-color: #006400;
  color: white;
}

</style>
</head>
<body>
<h1>i CINEMA</h1>;

<nav>
<ul>
<li><a href="sami.php">HOME</a></li>
<li><a href="movielist.php">ALL MOVIES</a></li> 
<li><a href="list.php">WATCH TRAILER</a></li>
<li><a href="contact us.php">CONTACT US</a></li>
<li><a href="about us.php">ABOUT US</a></li>
     </ul>
<form action="sami.php" method="GET">
<input type="text" placeholder="Type the name here" name="search">;
<input type="submit" value="Search" name="btn" class="btn-primary">
</form>
</nav>
   <?php 
           $count=0;
           $res=$conn->query("select * from movielist;");
          while ($row=$res->fetch_object()) {
            $_SESSION['movie']=$row->movieId;

            echo " 
              <div class='card'>
              <div class='card-container'>
              <div class='cover'>
                      <img src='uploadimages/".$row->image."'/> 
                      </div>
                    
                      <div class='main'>
                        <h3 class='name'>".$row->Name ."</h3>

                        <p><b>IMDB: </b>".$row->imdb."</p>

                        <p class='profession'><b>Genre: </b>".$row->Genre ."</p>

                        <p class='profession'><b>Director: </b> " .$row->Director ."</p>
                          </div>
                      </div>
                       <div class='buy_ticket'>

                       <form action='ticketProcessing.php' method='post' >
                        <input type='hidden' name='movieId' value='".$row->movieId."' >
                        <input type='submit'  class='btn' type='submit' value='Showtime and Details' name='submit'>
                      </form>
                      
                </div>
           </div>";
        $count++;
          }

  ?> 
         
</body>
</html>

