<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Magebit</title>
		<link rel="stylesheet" href="view/css/reset.css">
		<link rel="stylesheet" href="view/css/styles.css">
	</head>
	<body>
	<!--
		<div class="background-wrapper">
			<div class="page-background"></div>
		</div>
	-->
		<div class="page">
			<div class="bluepart">
				<div class="left">
					<div class="imageparent">
						<img class="childimage1" src="../resources/login/blueside/dont.png" alt="text">
						<img class="childimage2" src="../resources/login/blueside/lineunder.png" alt="line">
					</div>
					<div class="buttonparent">
						<input type="image" alt="signup" class="image1" src="../resources/login/blueside/button/Buttondef/bg1.png" onclick="changeActiveContent('signup')">
						<input type="image" alt="signup" class="image2" src="../resources/login/blueside/button/Buttondef/SIGNUP.png" onclick="changeActiveContent('signup')">
					</div>
				</div>
				<div class="right">
					<div class="imageparent">
						<img class="childimage1" src="../resources/signup/blueside/have.png" alt="text">
						<img class="childimage2" src="../resources/signup/blueside/lineunder.png" alt="line">
					</div>
					<div class="buttonparent2">
						<input type="image" alt="signup" class="image3" src="../resources/signup/blueside/button/Buttondef/bg1.png" onclick="changeActiveContent('login')">
						<input type="image" alt="signup" class="image4" src="../resources/signup/blueside/button/Buttondef/LOGIN.png" onclick="changeActiveContent('login')">
					</div>
				</div>
			</div>
			<div class="whitepart">
				<div class="active-left invisible hidden" id="signup">
					<div class="bannerparent">
						<img src="../resources/signup/whiteside/banner/Signup.png" alt="Signup">
						<img src="../resources/signup/whiteside/banner/logo.png" alt="logo">
					</div>
					<img class="lineunder" src="../resources/signup/whiteside/banner/lineunder1.png" alt="line">
					<form id="productForm" action="index.php?controller=register&action=signup" method="POST">
						<div class="input-label switchicon">
							<label id="JSnamelabel" >Name:<span>*</span></label>
							<img class="icon" alt="icon" src="../resources/signup/whiteside/Inputs/Icons/iconsdef/ic_user.png">
							<img class="icon iconactivated"  id="JSnameicon" alt="icon" src="../resources/signup/whiteside/Inputs/Icons/iconsactive/ic_user.png">
						</div>
						<input  onfocus="lightup()" onblur="lightdown(this.value, this.id)"  id="JSname"  class="text-input signupname" type="text" name="txt_name" value="" pattern="^[A-Z][a-z]+\s[A-Z][a-z]+$" title="Name Surname" required>
						<img class="line" alt="line" src="../resources/signup/whiteside/Inputs/underline.png">
						<div class="input-label switchicon">
							<label  id="JSemail1label" >Email:<span>*</span></label>
							<img class="icon" alt="icon" src="../resources/signup/whiteside/Inputs/Icons/iconsdef/ic_mail.png">
							<img class="icon iconactivated" id="JSemail1icon" alt="icon" src="../resources/signup/whiteside/Inputs/Icons/iconsactive/ic_mail.png">
						</div>
						<input onfocus="lightup()" onblur="lightdown(this.value, this.id)" id="JSemail1" class="text-input" type="email" name="txt_email" title="test@example.com" value="" required>
						<img class="line" alt="line" src="../resources/signup/whiteside/Inputs/underline.png">				
						<div class="input-label switchicon">
							<label id="JSpassword1label">Password:<span>*</span></label>
							<img class="icon" alt="icon" src="../resources/signup/whiteside/Inputs/Icons/iconsdef/ic_lock.png">
							<img class="icon iconactivated" id="JSpassword1icon" alt="icon" src="../resources/signup/whiteside/Inputs/Icons/iconsactive/ic_lock.png">
						</div>
						<input onfocus="lightup()" onblur="lightdown(this.value, this.id)"  id="JSpassword1 txt_email" class="text-input"  type="password" name="txt_password" value="" required>
						<img class="line" alt="line" src="../resources/signup/whiteside/Inputs/underline.png">
						<div class="signup-button-wrapper buttonparent switch">
							<input type="image"  value="Submit" name="btn-signup" alt="signup" class="image1" src="../resources/signup/whiteside/button/Buttondef/bg.png" >
							<input type="image"  value="Submit" name="btn-signup" alt="signup" class="image1 hovered" src="../resources/signup/whiteside/button/Buttonhover/bg.png" >
							<input type="image"  value="Submit" name="btn-signup" alt="signup" class="image2" src="../resources/signup/whiteside/button/Buttondef/SIGNUP.png" >
						</div>
					</form>
				</div>
				<div class="active-right" id="login">
					<div class="bannerparent">
						<img src="../resources/login/whiteside/banner/Login.png" alt="Login">
						<img src="../resources/login/whiteside/banner/logo.png" alt="logo">
					</div>
					<img class="lineunder" src="../resources/login/whiteside/banner/lineunder1.png" alt="line">
					<form method="POST"  name="myForm" id="theform" action="index.php?controller=login&action=run">
						<div class="input-label switchicon">
							<label  id="JSemaillabel" >Email:<span>*</span></label>
							<img class="icon notactivated "  alt="icon" src="../resources/login/whiteside/Inputs/Icons/iconsdef/ic_mail.png">
							<img class="icon iconactivated"  id="JSemailicon" alt="icon" src="../resources/login/whiteside/Inputs/Icons/iconsactive/ic_mail.png">
						</div>
						<input onfocus="lightup()" onblur="lightdown(this.value, this.id)" class="text-input" type="email" name="txt_email" id="JSemail txt_email" 	value="" required>
						<img class="line" alt="line" src="../resources/login/whiteside/Inputs/underline.png">
						<div class="input-label switchicon">
							<label id="JSpasswordlabel">Password:<span>*</span></label>
							<img class="icon notactivated" alt="icon" src="../resources/login/whiteside/Inputs/Icons/iconsdef/ic_lock.png">
							<img class="icon iconactivated" id="JSpasswordicon" alt="icon" src="../resources/login/whiteside/Inputs/Icons/iconsactive/ic_lock.png">	
						</div>
						<input onfocus="lightup()" onblur="lightdown(this.value, this.id)"class="text-input" type="password" name="txt_password" id="JSpassword txt_password" value="" required>
						<img class="line" alt="line" src="../resources/login/whiteside/Inputs/underline.png">
						<div class="login-button-wrapper buttonparent2 switch">
							<input type="image"  value="Login" name="btn-login" alt="signup" class="image3" src="../resources/login/whiteside/button/Buttondef/bg.png" >
							<input type="image"  value="Login" name="btn-login" alt="signup" class="image3 hovered" src="../resources/login/whiteside/button/Buttonhover/bg.png" >
							<input type="image"  value="Login" name="btn-login" alt="signup" class="image4" src="../resources/login/whiteside/button/Buttondef/LOGIN.png" >	
							<img type="image"  value="Forget" name="btn-forget" alt="forget" class="forget" src="../resources/login/whiteside/button/Forgot.png" >
						</div>
					</form>
				</div>
			</div>
			<div class="footer">
				<img class="footerimg" alt="All rights reserved "Magebit" 2016" src="../resources/common/footer.png">
			</div>
		</div>
		<script src="view/js/main.js"></script>
	</body>
</html>