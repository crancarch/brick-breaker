<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled1</title>
<link href="signup.css" rel="stylesheet" type="text/css" />
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
		
		var user1=document.myform.firstname.value;
		var user=document.myform.lastname.value;
		var pass=document.myform.password.value;
		var cpass=document.myform.cpass.value;
		var email=document.myform.email.value;
		var username= document.myform.username.value;
		
		
		var user1check=/^[a-zA-Z]{3,30}$/;
		var usercheck=/^[A-Za-z]{3,30}$/;
		var usernamecheck=/^[A-Za-z]{3,30}$/;
		var passcheck=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
		var emailcheck=/^[A-Za-z0-9_.]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;


		if(user1check.test(user1))
		{
			document.getElementById("user1error").innerHTML=" ";
		}
		else
		{
			document.getElementById("user1error").innerHTML="** First name is Invalid";
			document.myform.user1.focus();
			return false;
		}
		if(usercheck.test(user))
		{
			document.getElementById("usererror").innerHTML=" ";
		}
		else
		{
			document.getElementById("usererror").innerHTML="** Last nameis Invalid";
			document.myform.user.focus();		
			return false;
		}
		if(usernamecheck.test(user1))
		{
			document.getElementById("usernameerror").innerHTML=" ";
		}
		else
		{
			document.getElementById("usernameerror").innerHTML="** First name is Invalid";
			document.myform.user1.focus();
			return false;
		}
		if(passcheck.test(pass))
		{
			document.getElementById("passerror").innerHTML=" ";
		}
		else
		{
			document.getElementById("passerror").innerHTML="** Password is Invalid";
			document.myform.pass.focus();		
			return false;
		}
		if(pass.match(cpass))
		{
			document.getElementById("cpasserror").innerHTML=" ";
		}
		else
		{
			document.getElementById("cpasserror").innerHTML="** Password is not matching";
			document.myform.cpass.focus();
			return false;
		}
		if(emailcheck.test(email))
		{
			document.getElementById("emailerror").innerHTML=" ";
		}
		else
		{
			document.getElementById("emailerror").innerHTML="** Email is Invalid";
			document.myform.email.focus();
			return false;
		}
	}	
</script>
</head>
<body>
<div class="signup">
	<form onsubmit="return validate()" action="https://localhost/seller.php"  name="myform" method="POST">
		<h2 style="color:white;">Sign Up</h2>
		<input type="text" name="firstname" placeholder="First name"><br><br><span id="user1error" style="color:red;"></span>
		<input type="text" name="lastname" placeholder="Last name"><br><br><span id="usererror" style="color:red;"></span>
		<input type="text" name="username" placeholder="Username"><br><br><span id="usernameerror" style="color:red;"></span>
		<input type="password" name="password" placeholder="password"><br><br><span id="passerror" style="color:red;"></span>
		<input type="password" name="cpass" placeholder="Confirm Password"><br><br><span id="cpasserror" style="color:red;"></span>
		<input type="text" name="email" placeholder="Email address"><br><br><span id="emailerror" style="color:red;"></span>
		<input type="number" name="phoneno" placeholder="phone number"><br><br><span id="numbererror" style="color:red;"></span>
		<input type="Submit" value="Sign up"><br><br>
			<div id="msg">Congratulations you sign up successfully!!!</div>
			<script>
				function myfunction()
				{
					var x=document.getElementById("msg");
					x.className="show";
					setTimeout(function(){x.className=x.className.replace("show", "");},3000);
				}
			</script>
					Already have account?<a href="login1.html" style="text-decoration:none; font-family: 'Play', sans-serif; color:yellow;">&nbsp;Log In</a>
					
					
					
	</form>
</div>
</body>
</html>