<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<main>

    <div class="wrapper-main">

    <section class="section-default">

    <?php 
    
    $selector = $_GET['selector'];
    $validator = $_GET['validator'];

    if(empty($selector)|| empty($validator)){
        echo "We could not validate your request";
    }else{

        if(ctype_xdigit($selector) != false && ctype_xdigit($validator) != false){
           ?>

            <form class="form_control" action="includes/reset_password.inc.php" method="post">
            <input type="hidden" name="selector" value="<?php echo $selector;?>">
            <input type="hidden" name="validator" value="<?php echo $validator;?>">
            <input type="password" name="" name="pwd" placeholder="Enter your new password">
            <input type="password" name="" name="pwd_repeat" placeholder="Repeat new password">
            <input type="submit" name="reset_password_submit" value="Reset Password">
        </form>





           <?php 

        }

    }
    
    
    ?>



    </section>



    </div>





</main>