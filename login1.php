<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="login1.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<style>
#msg{
	visibility:hidden;
	min-width:250px;
	background-color:yellow;
	color:black;
	text-align:center;
	border-radius:2px;
	padding:16px;
	position:fixed;
	z-index:1;
	right:30%;
	top:30px;
	font-size;17px;
	margin-right:140px;
}
#msg.show{
	visibility:visible;
	-webkit-animation:fadein 0.5s,fadeout 0.5s 2.5s;
	animation:fadein 0.5s,fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein{
	from {top:0; opacity:0;}
	to {top:30px; opacity:1;}
}
@keyframes fadein{
	from {top:0; opacity:0;}
	to {top:30px;opacity:1;}
}
@-webkit-keyframes fadeout{
	from {top:30px; opacity:1;}
	to {top:0;opacity:0;}
}
@keyframes fadeout{
	from {top:30px; opacity:1;}
	to {top:0; opacity:0;}
}
</style>
<script>
	function validate()
	{
		var email=document.myform.email.value;
		var pass=document.myform.password.value;
		
		var emailcheck=/^[A-Za-z0-9_.]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
		var passcheck=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
		
		if(emailcheck.test(email))
		{
			document.getElementById("emailerror").innerHTML=" ";
		}
		else
		{
			document.getElementById("emailerror").innerHTML="** Email is Invalid";
			document.myform.password.focus();
			return false;
		}
		if(passcheck.test(pass))
		{
			document.getElementById("passworderror").innerHTML=" ";
		}
		else
		{
			document.getElementById("passworderror").innerHTML="** Password is Invalid";
			document.myform.pass.focus();
			return false;
		}
		
	}	
</script>
</head>

<body>
	<div class="signin">
	<form method= "POST" action="http://localhost/seller1.php" name="myform" onsubmit="return validate()">
	<h2 style="color:white">Log In</h2>
	<input type="text" name="username" placeholder="username"><span id="emailerror"></span>
	<input type="password" name="password" placeholder="Password"><br><br><span id="passworderror"></span>
	<input type="Submit" value="LogIn" ><br>
	<div id="msg">Congratulations you Log In successfully!!!</div>
	<script>
				function myfunction()
				{
					var x=document.getElementById("msg");
					x.className="show";
					setTimeout(function(){x.className=x.className.replace("show", "");},3000);
				}
	</script>
	
	<br>
	<div id="container">
		<a href="reset.html" style="margin-right:0px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">Reset Password</a>
		<a href="forgot.html" style="margin-right:0px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp; Forgot Password</a>
	</div><br><br><br><br><br><br>
	Don't have account?<a href="signup.html" style="font-family:'Play',sans-serif;">  Sign Up</a>
	</form>
	</div>
</body>
</html>