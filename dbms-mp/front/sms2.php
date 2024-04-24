<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VIIT SPORTS MANAGEMENT SYSTEM</title>
        <link rel="stylesheet" href="styles123.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="sms2.html"><img src="logosports.jpg" alt="Accenture Logo" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="sms2.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
                <img src="menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
          <div class="row">
            <div class="col-2">
                <h1>"VIIT, <br> SPORTS<br>COUNCIL!"</h1>
                <p>"welcome to VIIT Sports Council!!<br>Explore matches, teams, and more.<br> Join us in by participating in this iconic event of games!"</p>
                <a href="register_event.php" class="btn">Register Now! &#8594;</a>
            </div>
            <div class="col-2">
                <img src="sportsuse.jpg" alt="Picture">
            </div>
          </div>  
        </div>
    </div>

    <!----------- featured categories ---------->
    <div class="categories">
        <div class="small-c">
        <div class="row">
            <div class="col-3">
                <img src="firstsport.jpg" alt="describe">
            </div>
            <div class="col-3">
                <img src="secondsport.jpg" alt="describe2">
            </div>
            <div class="col-3">
                <img src="thirdsport.jpg" alt="describe3">
            </div>
        </div>

            </div>
        </div>
    </div>

    
    <!----------offer---------->
    <div class="dhoni">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
               <a> <img src="dhoni.jpg" class="dhoni-img"  ></a>
                </div>
                <div class="col-2">
                    
                    <h1>MS DHONI</h1>
                    <p>"There are no shortcuts.<br> Only hardwork , <br> train hard and be patient. <br> It will pay off!"</p>
                    <a href="register_event.php" class="btn"> Register Now! &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-----------brands------------>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="sportsuse.jpg">
                </div>
            </div>
        </div>
    </div>

    <!----------footer----------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <p>Follow VIIT For more such events.</p>
                </div>
                <div class="footer-col-2">
                    <img src="">
                    <p>Best Events in VIIT college.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Usefull links</h3>
                    <ul>
                        <li>Register</li>
                        <li>Blog Post</li>
                        <li>Policy</li>
                        <li>Join us</li>
                    </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Youtube</li>
                                    <li>Instagram</a></li>
                                    <!-- Other list items here -->
                                </ul>
                        
                    </div>
                      </div>
                      <hr>
                      <p class="copyright">Copyright 2024 - Sports Council</p>
            </div>
        </div>

        <!------js for toggle menu------>
        <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    </body>
</html>