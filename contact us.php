<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
<h1>i CINEMA</h1>

<nav>
<ul>
<li><a href="sami.php">HOME</a></li>
<li><a href="list.php">ALL MOVIES</a></li> 
<li><a href="list.php">WATCH TRAILER</a></li>
<li><a href="contact us.php">CONTACT US</a></li>
<li><a href="about us.php">ABOUT US</a></li>
     </ul>
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form" >
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit"  class="button-blue">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    
                    </div>
                 
                     
                
            </div>
        </div>
    </body>
</html>