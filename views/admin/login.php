<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/views/styles/login.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
    <script src="/views/scripts/jquery.js" charset="utf-8"></script>
  </head>
  <body>

     <form action="/admin/login" method="post" class="login-form">
        <h1>Login</h1>

        <div class="text_input">
          <input type="text" name="login">
          <span data-placeholder="Username"></span>
        </div>

        <div class="text_input">
          <input type="password" name="password">
          <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="button" value="Login">

      </form>

      <script type="text/javascript">
      $(".text_input input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".text_input input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
