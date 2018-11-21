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
    <script>
      $(function(){
          $('#form').submit(function(event){
             event.preventDefault()

             var password1 = $('#password1').val()
             var password2 = $('#password2').val()

             if (password1 !== password2) {
                $('.password-error').html('Passwords must be the same.')
             } else {
                $(this).get(0).submit()
                return true
             }
             $('#password1, #password2').keyup(function(){
                $('.password-error').html('&nbsp;')
             })
          })
      })
    </script>       
</head>
<body style="overflow-x: hidden;">
      <br>
      <div class="">
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
                             <h2>&nbsp;&nbsp;Password reset :: <?php print @explode(' ', $user['fullname'])[0] ?> </h2> 
                             <br> 
                             <form action="<?php print ROOT ?>controller/form-submit.php" method="post" class="container" id="form">
                                 <input type="hidden" name="action" value="reset-password">
                                 <input type="hidden" name="reset" value="<?php print $_GET['reset'] ?>">
                                 <input type="hidden" name="email" value="<?php print $user['email'] ?>">
                                 <div class="form-group">
                                     <p class="text-primary">
                                       <?php print isset($_GET['msg']) ? '' : 
                                           "Please make it difficult to guest and remember a password should always be kept confindential."; 
                                       ?>
                                     </p>
                                     <p class="text-success">
                                        <?php print @$_GET['msg'] ?>
                                     </p>
                                 </div>
                                 <div class="form-group">
                                     <label for="password1">Create you new awesome password</label>
                                     <input class="form-control" type="password" name="password1" id="password1" required autocomplete="off" autofocus minlength="6">
                                 </div> 
                                 <div class="form-group">
                                     <label for="password2">Please, confirm it</label>
                                     <input class="form-control" type="password" name="password2" id="password2" required autocomplete="off" autofocus minlength="6">
                                 </div> 
                                 <div class="form-group"> 
                                     <p class="text-danger password-error">&nbsp;</p> 
                                     <button class="btn btn-primary btn-l btn-block bg-primary" >Change now</button>
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