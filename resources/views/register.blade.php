<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <h1>Welcome dear future becodian</h1>
    <h2>Please fill this form to register</h2>
    <form class="" action="#" method="post">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
      <p><label for="name">Name</label></p>
      <p><input type="text" name="name"/>
      <p><label for="first_name">Firstname</label></p>
      <p><input type="text" name="first_name"/></p>
      <p><label for="email">Email</label></p>
      <p><input type="email" name="email"/></p>
      <p><label for="pseudo">Your pseudo</label></p>
      <p><input type="pseudo" name="pseudo"/></p>
      <p><label for="password">Password</label></p>
      <p><input type="password" name="password"/></p>
      <p><input type="submit"/></p>
    </form>
  </body>
</html>
