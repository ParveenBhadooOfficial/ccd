<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-5435553179213419",
          enable_page_level_ads: true
     });
</script>
</head>
<body>
	<div class="login-block"></div>
<div class="login-content">
	<div class="loginform">
<form action="login.php" method="POST" id="loginform">
  <div class="container1">
    <label for="uname" class="loginlabel"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

    <label for="psw" class="loginlabel"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>	
    <button type="submit" name="signin" value="signin" id="buttonlogin">Login</button>
    <button type="button" class="cancelbtn" id="loginclose">Cancel</button>
    <p style="color: #fff;">No Account, <a href="signup.php" style="color: #fff;">Sign Up</a> here.</p>
  </div>
</form>
</table>
</div>
</div>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="Café Coffee Day"></a>
			</div>
