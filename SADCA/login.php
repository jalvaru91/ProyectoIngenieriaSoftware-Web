<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Bootstrap Snippet: Login Form</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

        <link rel="stylesheet" href="css_login/style.css">

    
    
    
  </head>

  <body>

      <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Inicie Sesión</h2>
      <input type="text" class="form-control" name="username" placeholder="Email" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="login_controller.php;">Entrar</button>   
    </form>
  </div>
    
  
    
    
    
  </body>
</html>