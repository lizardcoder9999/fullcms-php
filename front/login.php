<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login</title>

  <style>
      html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}

  </style>

    <style>
        @font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(http://themes.googleusercontent.com/static/fonts/lato/v7/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
}

body {
	background: #808080 ;
	font-family: "Lato" ;
}
.wrap {
	width:250px;
	height: auto;
	margin: auto;
	margin-top: 10%;
}
.avatar {
	width: 100%;
	margin: auto;
	width: 65px;
	border-radius: 100px;
	height: 65px;
	background: #808080 ;
	position: relative;
	bottom: -15px;
}
.avatar img {
	width: 55px;
	height: 55px;
	border-radius: 100px;
	margin: auto;
	border:3px solid #fff;
	display: block;
}
.wrap input {
	border: none;
	background: #fff;
  font-family:Lato ;
  font-weight:700 ;
	display: block;
	height: 40px;
	outline: none;
	width: calc(100% - 24px) ;
	margin: auto;
	padding: 6px 12px 6px 12px;
}
.bar {
	width: 100%;
	height: 1px;
	background: #fff ;
}
.bar i {
	width: 95%;
	margin: auto;
	height: 1px ;
	display: block;
	background: #d1d1d1;
}
.wrap input[type="text"] {
	border-radius: 7px 7px 0px 0px ;
}
.wrap input[type="password"] {
	border-radius: 0px 0px 7px 7px ;
}
.forgot_link {
	color: #83afdf ;
	color: #83afdf;
	text-decoration: none;
	font-size: 11px;
	position: relative;
	left: 193px;
	top: -36px;
}
.wrap button {
	width: 100%;
	border-radius: 7px;
	background: #b6ee65;
	text-decoration: center;
	border: none;
	color: #51771a;
  margin-top:-5px;
	padding-top: 14px;
	padding-bottom: 14px;
	outline: none;
	font-size: 13px;	
	border-bottom: 3px solid #307d63;
	cursor: pointer;
}
    </style>

</head>

<body>
<form action="./includes/login_proccess.php" method="POST">
  <div class="wrap">
		<div class="avatar">
      <img src="https://usersinsights.com/wp/wp-content/uploads/2018/03/image6.png">
		</div>
		<input type="email" placeholder="email"  name="email">
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password"  name="password">
		<a href="" class="forgot_link">forgot ?</a>
		<input name="login" value="Log In" type="submit">
	</div>
	</form>

  <script src="js/index.js"></script>

</body>

</html>