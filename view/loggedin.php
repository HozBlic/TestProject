<?php

if(!isset($_SESSION['email'])){
   	header('location: index');
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Magebit</title>
		<link rel="stylesheet" href="view/css/reset.css">
		<link rel="stylesheet" href="view/css/home-style.css">
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
						<h1>Want to add new data?</h1>
						<img class="childimage2" src="../resources/login/blueside/lineunder.png" alt="line">
						<div class="paragraph">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="buttonparent">
						<input type="image" alt="" class="image1" src="../resources/login/blueside/button/Buttondef/bg1.png" onclick="changeActiveContent('signup')">
						<input type="image" alt="Add data" class="image2" src="" onclick="changeActiveContent('signup')">
					
					</div>
				</div>
				<div class="right">
					<div class="imageparent">
						<h1>Want to see exsisting data?</h1>
						<img class="childimage2" src="../resources/login/blueside/lineunder.png" alt="line">
						<div class="paragraph">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="buttonparent2">
						<input type="image" alt="" class="image3" src="../resources/signup/blueside/button/Buttondef/bg1.png" onclick="changeActiveContent('login')">
						<input type="image" alt="See data" class="image2" src="" onclick="changeActiveContent('login')">
					</div>
				</div>
			</div>

			<div class="whitepart">
				<div class="active-left invisible hidden" id="signup">
					<div class="bannerparent">
						<h1>New Data</h1>
						<img src="../resources/signup/whiteside/banner/logo.png" alt="logo">
					</div>
					<img class="lineunder" src="../resources/signup/whiteside/banner/lineunder1.png" alt="line">
					<div>
						<form id="productForm" action="../index.php?controller=loggedin&action=insertdata" method="POST">
							<div id="custom-box">
								<div class="divform">
									<div>
										<p style="width: 80px; float: left;">Name</p>
										<p style="width: 70px float: right;;" >Value</p>
									</div>
									<div id="custom-input-container">
										<div class="input-row">
											<input type="text" class="custom-input-field" name="custom_name[]" /> 
											<input type="text" class="custom-input-field float-right" name="custom_value[]" />
										</div>
									</div>
									<input type="button" class="btn-add-more float-right" value="Add More" onClick="addMore()" />
								</div>
							</div>
							<div class="login-button-wrapper buttonparent2 switch">
								<input type="image"  value="Login" name="btn-login" alt="" class="image3" src="../resources/login/whiteside/button/Buttondef/bg.png" >
								<input type="image"  value="Login" name="btn-login" alt="" class="image3 hovered" src="../resources/login/whiteside/button/Buttonhover/bg.png" >
								<input type="image"  value="Login" name="btn-login" alt="Add data" class="image2" src="" >
								
							</div>
						</form>
					</div>
				</div>


				<div class="active-right" id="login">
					<div class="bannerparent">
						<h1>Exsisting Data</h1>
						<img src="../resources/login/whiteside/banner/logo.png" alt="logo">
					</div>
					<img class="lineunder" src="../resources/login/whiteside/banner/lineunder1.png" alt="line">
					<div class="exsistingvalues">
						<?php 
						if (!empty($result)) {
							echo '<table>';
							foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
								foreach($row as $key  => $value) {
									if($key!='id'){
										echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
									}	 
								}
							}
							echo '</table>';
							echo '<br>';
						} 
						if (!empty($result2)) {
							echo '<table>';
							echo '<tr>
									<th>Attribute</th>
									<th>Value</th> 
								  </tr>';
							foreach($result2->fetch_all(MYSQLI_ASSOC) as $row) {
								foreach($row as $key  => $value) {
									if ($key=="attribute"){
										echo '<tr><td>' . $value . '</td>';
									} else if ($key=="value") {
										echo '<td>' . $value . '</td></tr>';
									} 
								}
							}
							echo '</table>';
						}
						?>
					</div>

					<form id="productForm" action="../index.php?controller=login&action=logout" method="POST">
						<div class="login-button-wrapper buttonparent2 switch">
							<input type="image"  value="Login" name="btn-login" alt="" class="image3" src="../resources/login/whiteside/button/Buttondef/bg.png" >
							<input type="image"  value="Login" name="btn-login" alt="" class="image3 hovered" src="../resources/login/whiteside/button/Buttonhover/bg.png" >
							<input type="image"  value="Login" name="btn-login" alt="Log Out" class="image2" src="" >
							
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