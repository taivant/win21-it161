<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Cat Mews</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/navfp.css" />
  <link rel="stylesheet" href="css/fp.css" />
  <link rel="stylesheet" href="css/login-signup.css" />
     
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <script src="js/script.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     
     
 </head>
 <body> 
  <main>
     <header>
         <div class='header'>
         <a class="catlogo" href="index.html"><img src="images/logo.png" class="logo" id="Logo"></a>
         <a class="login-signup" href="login-signup.php">Log In/ Sign Up</a>
         </div>
         
         
          <nav id="cssmenu">
          <ul>
                <li><a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a></li>
                <li><a href="about.html"><i class="fa fa-fw fa-info"></i> About Us</a></li>
                <li><a href="facts.html"><i class="fa fa-fw fa-heart"></i> Cat Facts</a></li>
                <li><a href="forums.html"><i class="fa fa-fw fa-comments"></i> Forums</a></li>
                <li><a href="gallery.html"><i class="fa fa-fw fa-camera"></i> Cat Gallery</a></li>
                <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a></li>
                <li><a href="search.html"><i class="fa fa-fw fa-search"></i> Search Bar</a></li>
          </ul>
          </nav> 

        
     </header>
       
      <!-- START LEFT COLUMN -->
      <section>
      <h2 class="subheader">Log in or Sign Up</h2>
         <div class="secondary">
            <form action="action_page.php" style="border:1px solid #ccc">
              <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                  <button type="button" class="cancelbtn">Cancel</button>
                  <button type="submit" class="signupbtn">Sign Up</button>
                </div>
              </div>
            </form>
         </div>
          
      </section>
      <!-- END LEFT COLUMN -->

      <!-- START RIGHT COLUMN -->
      <aside>
          <div class="side">
          <h3>Top posts</h3>
          <iframe class="topposts" title="TopPosts"></iframe>
          <h4>Members Online</h4>
          <iframe class="members" title="MembersOnline"></iframe>
          <h4>Advertisements</h4>
          <iframe class="ads" title="Advertisement"></iframe>
          </div>
      </aside>
      <!-- END RIGHT COLUMN -->

     
     <footer>
         <p><small>&copy; 2021 by <a href="contact.php">Contact Taivan Tiisurenkhuu</a>, All Rights Reserved ~<a href='disclaimer.html'>Disclaimer</a>~<a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p> 
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>