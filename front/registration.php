<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<form action="./includes/registration_proccess.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Name" name="user_full_name">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email Address</label>
        <input type="email" class="form-control" name="user_email" placeholder="Enter Your Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control"  placeholder="Password" name="user_password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter Your Username">
    </div>
    <input type="submit" class="form-control" name="register_user" value="Sign Up">

</form>

