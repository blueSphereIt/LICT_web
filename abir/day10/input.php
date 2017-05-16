
<html>
<head>
	<title>User input</title>
	<link rel="stylesheet" type="text/css" href="input.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script>
		//alert("shit");
		window.onload = function () {
			var userElem= document.getElementById("userName");
			var passElem= document.getElementById("pass");
			var repassElem= document.getElementById("repass");
			//alert("window");
			
			userElem.onkeydown = function (event) {
				//alert(event.key);
				var userCurrent=userElem;
				checkValid(event.key,userCurrent);
				event.preventDefault();
				// body...
			};
			passElem.onkeydown = function (event) {
				//alert(event.key);
				var passCurrent=passElem;
				checkValid(event.key,passCurrent);
				
				// body...
			};
			repassElem.onkeydown=function (event) {
			var matchVal=document.getElementById("pass").value;
			checkMatch(event.key,repassElem,matchVal);
			// body...
			};
			// body...
		};
		function checkValid(input,value) {
			//alert(value);
			var n= input.search(/[a-z0-9]/);

			//alert(n);
			if (n>=0) {
				//alert("accept");
				
				//alert(value.value);

			}else{
				alert("Only letters and numbers are allowed");
				event.preventDefault();
				
			}
			// body...
		};
		
		function checkMatch(input,value,matchVal) {
			value=value.value+input;
			var re = new RegExp(value,"g");
			var n= matchVal.search(re);
			if (n>=0) {
				alert("Password Matched");
			}
			// body...
		};
	</script>
</head>
<body>
	<div class="col-md-12">
		<H2>New User Registration</H2>
		<br>
	</div>
	<div class="col-md-5">
		
	</div>
	<div class="col-md-4">
		<div>
			
		</div>
		<div>
		<form>
			<h3 class="h3-user">User Name</h3>
			<input type="text" name="userName" id="userName">
			<h3>Password</h3>
			<input type="text" name="pass" id="pass">
			<h3>Repeat Password</h3>
			<input type="text" name="pass" id="repass">
		</form>
		</div>
	</div>
	<div class="col-md-3">
		
	</div>

</body>
</html>