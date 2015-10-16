<?php 
include('connect2.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
      
    <title>Phi Mu Delta at Penn College | Connect</title>

    <!-- Bootstrap core CSS -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
<div id="#"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img alt="Phi Mu Delta Mu Xi Chapter" src="images/pmdHead-01.png"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="why.html">Why Us</a></li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="about/brotherhood.php">The Brotherhood</a></li>
                    <li><a href="#">Fast Facts</a></li>
                  </ul>
            </li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumni<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="alumni/newsletter.html">Newsletter</a></li>
                    <li><a href="#">Resources</a></li>
                  </ul>
            </li>
            <li class="active"><a href="connect.php">Connect</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      
<!-- Page Header -->      
<section id="titleBar">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Connect With Us</h1>
            </div>
        </div>
        </div>
      </section>
      <div class="container connect">
            <div class="row">
            <div class="col-sm-8">
                <h2>Location</h2>
                <div class="contactInfo">
                    <div class="row location">
<!-- Block 1 -->
              <div class="col-sm-4">
                <div class="thumbnail">
                  <a class="image-popup-zoom" href="images/house2.jpg" >
                      <img class="img-rounded" src="images/house2.jpg">
                  </a>      
                    
                  <div class="caption">
                    <h3>Our House</h3>
                        <div class="address">
                        <a href="https://www.google.com/maps/place/833+W+3rd+St,+Williamsport,+PA+17701" target="_blank">
                                    <p>Phi Mu Delta Fraternity<br>833 West 3rd St. Apt 1<br>Williamsport, Pa 17701</p></a>
                                </div>                  </div>
                </div>
              </div>
<!-- Block 2 -->
              <div class="col-sm-4">
                <div class="thumbnail">
                <a class="image-popup-zoom" href="images/hq.jpg" >
                  <img class="img-rounded" src="images/hq.jpg" alt="...">
                </a>
                  <div class="caption">
                    <h3>National Headquarters</h3>
                    <div class="address">
        <a href="https://www.google.com/maps/place/216+Haddon+Ave+%23602,+Westmont,+NJ+08108" target="_blank">
                                    <p>Phi Mu Delta National Fraternity<br>Sentry Office Plaza<br>216 Haddon Ave., Suite 602<br>Haddon Twp., NJ 08108</p></a>
                                </div>
                  </div>
                </div>
              </div>
<!-- Block 3 -->
              <div class="col-sm-4">
                <div class="thumbnail">
                <a class="image-popup-zoom" href="images/Penn-College.jpg" >
                  <img class="img-rounded" src="images/Penn-College.jpg" alt="...">
                </a>
                  <div class="caption">
                    <h3>Collegiate Affiliation</h3>
                    <div class="address">
        <a href="https://www.google.com/maps/place/1+College+Ave,+Williamsport,+PA+17701" target="_blank">
                                    <p>Pennsylvania College of Technology<br>1 College Ave<br>Williamsport, Pa 17701</p></a>
                                </div>
                  </div>
                </div>
              </div>
            </div>
                        <div class="container">
                            <h2>Contact</h2>
                        </div>
                        <div class="col-sm-6 contact">
                            <p><b>Our Chapter</b></p>
                            <div class="contactBox">
                                <p>President</p>
                                <p>Anthony Gobbi</p>
                                <p><a href="tel:703-314-5679">703-314-5679</a></p>
                                <p><a href="mailto:adg8@pct.edu">adg8@pct.edu</a></p>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal" data-whatever="phimudelta@gmail.com">Email Us</button>
                        </div>
                        
                        <div class="col-sm-6 contact">
                            <p><b>National Headquarters</b></p>
                            <div class="contactBox">
                                <p>Executive Director</p>
                                <p>Thomas Murphy</p>
                                <p><a href="tel:609-220-4975">609-220-4975</a></p>
                                <p><a href="mailto:ed@phimudelta.org">ed@phimudelta.org</a></p>
                            </div>
<!-- EMAIL MODALS -->
                            
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal" data-whatever="hq@phimudelta.org">Email Headquarters</button>

<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" data-async data-target="#emailModal" action="connect.php" method="POST">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>"> <?php echo "<p class='text-danger'>$errorName</p>"?>
            </div>
          </div>
            <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>"> <?php echo "<p class='text-danger'>$errorEmail</p>"?>
            </div>
          </div>
            <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="message" id="message" placeholder="Enter your message" rows="4" value="<?php echo htmlspecialchars($_POST['message']); ?>"></textarea> <?php echo "<p class='text-danger'>$errorMessage</p>"?>
            </div>
          </div>
            <div class="form-group">
            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="human" id="human" placeholder="Enter your answer" value="<?php echo htmlspecialchars($_POST['human']); ?>"> <?php echo "<p class='text-danger'>$errorHuman</p>"?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" class="btn btn-default">Send</button>
            </div>
          </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <!-- This area will be used to display alert message -->
                <?php echo "$result"; ?>
            </div>
          </div>
        </form>
            </div>
                                            
                                                               
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                            
<!-- END EMAIL MODALS -->
                                                    </div>
                                            </div>
                
                
            </div>
            <div class="col-sm-4">
                <div>
<div class="smwidget">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab">Facebook</a></li>
    <li role="presentation"><a href="#twitter" aria-controls="twitter" role="tab" data-toggle="tab">Twitter</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="facebook">
        
                <div class="fb-page" data-href="https://www.facebook.com/PCTphimudelta" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/PCTphimudelta"><a href="https://www.facebook.com/PCTphimudelta">Phi Mu Delta Mu Xi Chapter (Penn College)</a></blockquote></div></div>
            </div>
    <div role="tabpanel" class="tab-pane fade" id="twitter">
                <a class="twitter-timeline" href="https://twitter.com/PhiMuDeltaPCT" data-widget-id="652663623613988865">Tweets by @PhiMuDeltaPCT</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
    
  </div>

</div>
        </div>
        </div>    
      </div>
      </div>
<!-- Footer -->
<section>
<div class="footer">
    <div class="container">
        <div class="row">
                <div class="col-xs-4">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Back to Top</a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <p>Copyright &copy; 2015</p>
                    <p>Phi Mu Delta Mu Xi Chapter</p>
                </div>
            <div class="col-xs-4">
                <ul>
                    <li><a href="http://www.facebook.com/PCTphimudelta" target="_blank"><i class="fa fa-facebook-official fa-3x"></i></a></li>
                    <li><a href="http://twitter.com/PhiMuDeltaPCT" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                    <li><a href="http://instagram.com/phimudeltapct" target="_blank"><i class="fa fa-instagram fa-3x"></i></a></li>
                    <li><a href="mailto:phimudeltamuxi@gmail.com"><i class="fa fa-envelope fa-3x"></i></a></li>
                </ul>
            </div>
            </div>
    </div>
</div>
</section>
<div id="fb-root"></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/socialmedia.js"></script>
    <script src="js/lightbox/jquery.magnific-popup.js"></script>
    <script src="js/lightbox/lightbox.js"></script>
    <script src="js/googleanalytics.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>
