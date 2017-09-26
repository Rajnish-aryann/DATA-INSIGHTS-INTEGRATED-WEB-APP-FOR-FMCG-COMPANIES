<html>
<head>
	<title>Payment Gateway</title>
</head><style="margin"></style>
<body>
	<center>
		<h1>Payment Gateway</h1>
		<form method="GET" action="otp.php">
			<div><label for="Number"><span style="margin-right:70px; margin-bottom:20px;">Enter Card No.</span></label>
			<input id="cno" maxlength="16" type="variable" name="card" style="margin-bottom:20px;" required placeholder="16-digit Card No."/></div>
			<div><label for="Name" style="margin-bottom:20px;" >Enter Card Holder Name.</label>
			<input id="name" name="cname" type="text" style="margin-bottom:20px;" placeholder="Name on the Card" required/></div>
			<div><label for="cvv" style="margin-right: 70px; margin-bottom: 20px;">Enter CVV No.</label>
			<input id="cvv" name="cvv" maxlength="3" type="variable" style="margin-bottom:20px;" required placeholder="3-digit no. on the back"/></div>
			<div><label for="cvv" style="margin-right: 70px; margin-bottom: 20px;">Enter expiry date</label>
			<input id="exp" name="exp" type="variable" style="margin-bottom:20px;" placeholder="mm-yy" required/></div>
		    <input type="submit" value="Next">
		   </form>
		</center>
	</body>
	</html>