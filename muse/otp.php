<html>
<head>
<title>OTP Confirmation</title>
</title>
<body>
	<center>
	<h1><span style='padding:10px; margin:20px;'>OTP Confirmation</span></h1>
	<form method='GET' action="final.php">
		<label for="Number"><span style="margin-right:20px;">OTP</label>
		<input id='otp' type='integer' required placeholder="Otp sent to phone"/>
		<p>(OTP remains valid for 5mins)</p>
		<div><a href="#">Resend OTP</a><input type="submit" value="Confirm Payment" style="margin-left:10px; margin-top:10px;"></div>
</center>
</form>
</body>
</html>
