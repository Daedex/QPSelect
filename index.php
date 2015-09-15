<!DOCTYPE html>
<html lang="en">    
<head>
        <title>QUIPS Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="index.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>

<div class="container">
    <div class="row">
        <div class="col-md-offset-6 col-md-3">
            <form class="form-login" method="post" action="login.php">
            <h4>Log in to QUIPS</h4>
            <input name="user_name" class="form-control input-sm chat-input" placeholder="username" autocomplete="off"></input>
            </br>
            <input type="password" name="password" class="form-control input-sm chat-input" placeholder="password" autocomplete="off"></input>
            </br>
            <div class="wrapper">
           <span class="group-btn"> 
                <input type="submit" class="btn btn-primary btn-md" value="login"></input><i class="fa fa-sign-in"></i>               
                <!--<a href="quips.php" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a>-->
            </span>
            </div>
            </form>
        
        </div>
    </div>
</div>