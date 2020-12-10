<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style_index.css">
</head>

<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username dan Password tidak sesuai !');</script>";
		}
	}
	?>
    <div class="login">
        <div class="form">
        <h2>Log in</h2>
        <form class="login-form" action="login.php" method="post">
            <input type="text" name="username" placeholder="username" required/>
            <input type="password" name="password" placeholder="password" required/>
            <button>login</button>
        </form>
      </div>
</body>
</html>