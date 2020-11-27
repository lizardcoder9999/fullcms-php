<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Contact Us</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.contact-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.contact-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.contact-form h2:before, .contact-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.contact-form h2:before{
		left: 0;
	}
	.contact-form h2:after{
		right: 0;
	}
    .contact-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .contact-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.contact-form .form-group{
		margin-bottom: 20px;
	}
	.contact-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.contact-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.contact-form .row div:first-child{
		padding-right: 10px;
	}
	.contact-form .row div:last-child{
		padding-left: 10px;
	}    	
    .contact-form a{
		color: #fff;
		text-decoration: underline;
	}
    .contact-form a:hover{
		text-decoration: none;
	}
	.contact-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.contact-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<div class="contact-form">
    <form action="./includes/contact_process.php" method="POST">
		<h2>Contact Us</h2>
		<p class="hint-text">Hello if you would like to send us a message please fill out this form.</p>
        <div class="form-group">
     


        <div class="form-group">
        	<input type="text" class="form-control" name="contact_name" placeholder="Enter your name" required="required">
        </div>


        <div class="form-group">
        	<input type="email" class="form-control" name="contact_email" placeholder="Email" required="required">
        </div>


        <div class="form-group">
        	<input type="text" class="form-control" name="contact_subject" placeholder="Subject" required="required">
        </div>

        <div class="form-group">
            <textarea name="body" id = "contact_body" cols="30" rows="10" class="form-control" placeholder="Enter Message Here"></textarea>
        </div>

		<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name = 'contact_us' value="Send Message">
        </div>


    </form>
	
</div>
</body>
</html>

