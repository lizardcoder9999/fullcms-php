<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<main>

    <div class="wrapper-main">

    <section class="section-default">
    <h1>Reset your password</h1>
    <form action="includes/reset-request.inc.php" method="POST">
    <p>An e-mail will be sent to you with instructions on how to reset your password</p>
    <input type="email" name="email" placeholder="Enter Your Email Address">
    <button type="submit" id="reset_request_submit">Reset Password</button>
    </form>
    <?php 
        if(isset($_GET["reset"])){
            if($_GET["reset"]=="success"){
                echo "<p class='.bg-gradient-success'>Success your password reset email has been sent.</p> ";
            }
        }
    
    
    
    
    
    ?>
    </section>



    </div>





</main>