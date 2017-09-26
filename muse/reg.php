
<!DOCTYPE HTML> 
<html>
 <head>
  <title>Sign-Up</title> 
  <style type="text/css">#body-color{ background-color:#6699CC; } #Sign-In{ margin-top:150px; margin-bottom:150px; margin-right:150px; margin-left:450px; border:3px solid #a1a1a1; padding:9px 35px; background:#8000CC; width:400px; border-radius:20px; box-shadow: 7px 7px 6px; } #button{ border-radius:10px; width:100px; height:40px; background:#FF00FF; font-weight:bold; font-size:20px }</style>
</head> 
<body id="body-color"> 
	<div id="Sign-Up"> 
		<fieldset style="width:30%"><legend>Registration Form</legend> 
			<table border="0"> 
				<tr>
				 <form method="POST" action="connectivity-sign-up.php"> <td>Name</td><td> <input type="text" name="name" required></td> </tr> <tr> <td>Email</td><td> <input type="email" name="email" required></td> </tr> <tr> <td>UserName</td><td> <input type="text" name="user" required ></td> </tr> <tr> <td>Password</td><td> <input type="password" name="pass" required minlength="8"></td> </tr> <tr> <td>Confirm Password </td><td><input type="password" name="cpass"></td> </tr> <tr> <td><input id="button" type="submit" name="submit" value="Sign-Up"></td> </tr> </form> </table> </fieldset> </div> </body> </html>
