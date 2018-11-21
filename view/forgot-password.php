<!DOCTYPE html>
<html>
<head>
    <title> <?php print APP_NAME  ?> :: Password Forgotten.</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <!-- get boostrap from cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
           integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="overflow-x: hidden;">
      <br>
      <div class="">
           <!--<nav class="navbar bg-primary">
               <a class="navbar-brand" href="">
                   <img src="/logo.svg" width="50" alt="logo">
               </a>
           </nav>-->
           <div class="row">
                <div class="col-sm-0 col-m-1 col-lg-2 col-xl-4">
                    <!-- nothing here -->
                </div>
                <div class="col-sm-12 col-m-10 col-lg-8 col-xl-4">
                     <br>
                     <br>
                     <div class="form-wrapper">
                         <br> 
                         <br>
                         <div class="card ">
                          <div class="card-header">
                            <br>
                            <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                <a class="nav-link " href="<?php print ROOT ?>login">Login</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="<?php print ROOT ?>register">Register</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="<?php print ROOT ?>forgot-password">Forgot password</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                             <br>
                             <h2>&nbsp;&nbsp;Forgot your password?</h2> 
                             <br> 
                             <form action="<?php print ROOT ?>controller/form-submit.php" method="post" class="container">
                                 <input type="hidden" name="action" value="forgot-password">
                                 <div class="form-group">
                                     <p class="text-primary">
                                       <?php print isset($_GET['msg']) ? '' : 
                                           "No worries, simply provide your account email address.
                                           We will send you a link to click on and reset your password."; 
                                       ?>
                                     </p>
                                     <p class="text-success">
                                        <?php print @$_GET['msg'] ?>
                                     </p>
                                 </div>
                                 <div class="form-group">
                                     <label for="email">Account email</label>
                                     <input class="form-control" <?php print $disabled ?> type="email" name="email" id="email" required autocomplete="off" autofocus minlength="5">
                                 </div> 
                                 <div class="form-group">  
                                     <button class="btn btn-primary btn-l btn-block bg-primary" <?php print $disabled ?> >Send reset link</button>
                                 </div> 
                             </form>
                          </div> 
                          <center>
                              <small class="text-muted">
                                <i>&copy; <?php print date('Y') .' - '. APP_NAME ?></i>
                              </small>
                          </center>
                          <br>
                         </div>  
                     </div>
                </div>
                <div class="col-sm-0 col-m-1 col-lg-2 col-xl-4">
                    <!-- nothing here -->
                </div>
           </div>
      </div>
</body>
</html>