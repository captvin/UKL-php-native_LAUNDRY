<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>login</title>
    <style>body {
   background-image: url("bg2.gif");
   background-repeat: no-repeat;
   background-size:cover
                }
</style>
    </head>
    <body>
        

        <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md"></div>
            <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:10px; ">
            
            <form action="proses_login.php" method="post">
                <h3 align="center">LOGIN</h3>
                
                Username :
                <input type="text" name="username" value="" class="form-control" placeholder="Username" required="required">
                Password :
                <input type="password" name="password" class="form-control" placeholder="Password" required="required"><br>
                <center><input type="submit" name="login"  class="btn btn-success" value="LOGIN"></center>
            </form>
        </div>
        <div class="col-md"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>