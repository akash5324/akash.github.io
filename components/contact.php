<!DOCTYPE html>
<html>
<head>

  <title>AkashWani || Portfolio</title>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="description" content="portfolio of akash yadav.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Alfa+Slab+One|Allerta|Allerta+Stencil|Anton|Archivo+Black|Bree+Serif|Chewy|Droid+Sans|Kaushan+Script|Kdam+Thmor|Lobster|Luckiest+Guy|Merriweather|Monoton|Orbitron|Oswald|Pacifico|Passion+One|Permanent+Marker|Russo+One|Shrikhand|Ubuntu|Yellowtail" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet"  type="text/css" href="./../stylesheets/styles.css">

</head>
<body>

<nav class="navbar navbar-toggleable-md navbar-light  fixed-top" style="background-color: #fff;" >
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">

 <img src="./public/img/logo.svg" width="50" height="60" class="d-inline-block align-center" alt="">
  Akash<sup>W</sup>ani
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  ml-auto" id="menu">
      <li class="nav-item">
        <a class="nav-link" href="./../index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./../index.html">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="project.html">Project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>



<div class="container-fluid">

<div class="row" id="contact">
    <div class="col-sm-12">
  <h1>Drop Your Line</h1><br>
  <hr width="80%">
</div>
</div>

<?php

function header_injection($str)
{
  return preg_match("/[\r\n]/", $str);
}

if(isset($_POST['submitted']))
{
  

  $name=trim($_POST['name']);
   $email=trim($_POST['email']);
    $msg=$_POST['message'];

    if(header_injection($name) || header_injection($email))
    {
      die();
    }
    if(!$name || !$email || !$msg)
    {
      echo '<div class="jumbotron text-center"><h2 class="error">All fields are required !!</h2>
       <br><a href="contact.php"><button class="btn btn-danger">Try Again</button></a></div>';
      exit();
    }

    $to="akash.yadav5324@gmail.com";
    $subject="$name sent you a message from akashwani";

    $message ="Name : $name\r\n";
     $message .="Email : $email\r\n";
      $message .="Message : \r\n$msg";

      $message=wordwrap($message,60);

      //mailheaders
      $headers="MIME-Version: 1.0";
      $headers .="Content-type: text/plain; charset=iso-8859-1";
      $headers .="From: $name,$email";
      $headers .="X-Priority:1";
      $headers .="X-MSMail-Priority:High";
      $headers .='X-Mailer: PHP/' . phpversion();


      //send mail
      $sent=mail($to, $subject, $message,$headers);
      if(isset($sent))//change
    {
       echo "";
    }
    else
    {
        echo '<div class="jumbotron text-center"><h2>Error:</h2><p>Sorry, some internal error</p>
        <br><p>Please try again later</p></div>';
    }


?>
<div class="jumbotron text-center"><h2>Whoo!! Your Message sent successfully!!</h2><br><h2>Will Reply Back soon</h2>
<br><a href="./../index.html"><button class="btn btn-primary">Go Back to Home page</button></a></div>
<?php }else {?>
<form id="contact_form" method="POST">
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label" >Name<sup>*</sup></label>
  <div class="col-6">
    <input class="form-control" type="text" value="" id="example-text-input" placeholder="Enter your name......." name="name" required="Name is required">
  </div>
</div>

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label" class="form-control">Email<sup>*</sup></label>
  <div class="col-6">
    <input class="form-control" type="email" value="" id="example-email-input" placeholder="Enter your Email Address......" class="form-control" name="email" required="Email is required">
  </div>
</div>

<div class="form-group row">
  <label class="col-2 col-form-label">Message</label>
  <div class="col-6">
    <textarea class="form-control" type="text" value="" id="" placeholder="Enter your Message here........" rows="10" cols="30"
    style="white-space:pre" class="form-control" name="message" required="Message is required">
    </textarea>
  </div>
</div>
  <button type="submit" class="btn btn-primary" id="submit" name="submitted">Submit</button>
  </form>
<?php } ?>
</div>








<footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h2 class="mdl-mega-footer__heading">Features</h2>
      <ul class="mdl-mega-footer__link-list" id="footerlist1">
        <li><a href="about.html"><h6>About</h6></a></li>
        <li><a href="project.html"><h6>Projects</h6></a></li>
        <li><a href="./../index.html"><h6>Home</h6></a></li>
        <li><a href="contact.php"><h6>contact</h6></a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h2 class="mdl-mega-footer__heading">Contact Me</h2>
      <ul class="mdl-mega-footer__link-list" id="footerlist3">
        <li><h6><i class="fa fa-user-o fa-1x" aria-hidden="true"></i>Akash yadav</h6></li>
        <li><h6><i class="fa fa-phone fa-1x" aria-hidden="true"></i>8742917968</h6></li>
        <li><h6><i class="fa fa-envelope-o fa-1x" aria-hidden="true"></i>akash.yadav5324@gmail.com</h6><li>
        <li><h6><i class="fa fa-location-arrow fa-1x" aria-hidden="true"></i>Delhi,India</h6></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h2 class="mdl-mega-footer__heading">Knock Me</h2>
      <ul class="mdl-mega-footer__link-list" id="footerlist4">
        <li><a href="https://www.quora.com/profile/Akash-Yadav-155"><i class="fa fa-quora fa-1x" aria-hidden="true"></i></a></li>
       <li><a href="https://github.com/akash5324"><i class="fa fa-github fa-1x" aria-hidden="true"></i></a></li>
      <li><a href="https://www.linkedin.com/in/akash-yadav-90a087105/"><i class="fa fa-linkedin fa-1x" aria-hidden="true"></i></a></li>
      <li><a href="https://twitter.com/AkashYadav5324"><i class="fa fa-twitter fa-1x" aria-hidden="true"></i></a></li>
      </ul>
    </div>

  </div>


</footer>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.1/vue.min.js"></script>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>