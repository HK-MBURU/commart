<?php
	
		include('upload-code.php'); // Include upload code Script page.
		
	?>


<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<title>Commart web Seller page</title>
	<link rel="stylesheet" href="buyer.css">
	<style>
	
		html, body{background: #ececec; height: 100%; margin: 0; font-family: Arial;}
		.main{height: 100%; display: flex; justify-content: center;}
		.main .image-box{width:300px; margin-top: 30px;}
		.main h2{text-align: center; color: #4D4D4D;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px; margin-bottom: 10px;}
		.main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7;}
		.main .msg{color: red; text-align: center;}
	
	</style>
	</head>

	<body>
	<div class="header">
        
    
        <div class="container">
            <div class="navbar">
                <div class="header">
                    <h1>COMMART WEB</h1>
                    
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="show.php">View on the buyers Page</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </nav>
                <img src="images/cart.png" width="30px" height="30px" alt="">
                <img src="images/menu.jpg" width="125px" alt="" class="menu-icon" onclick="menutoggle()">
            </div>


            <div class="small-container">
                <div class="title"><h2 style="font-size:30px; background-color:white">Welcome to the seller Dashboad. </h2>
                </div>
            </div>
            
    
	<!-------------------Main Content------------------------------>
	<div class="container main" >
		<div class="image-box">
			<h2>Upload image of your Products here</h2>
			<form method="POST" name="upfrm" action="" enctype="multipart/form-data">
				<div>
				<input type="file" name="fileImg" class="file_input" />
					
					<textarea name="img-name" rows="10" cols="30" placeholder="Enter the description of your product price and your phone number " style="width: 100%; margin-bottom: 10px;"></textarea>

					
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>
			<div class="msg">
            <strong>
		<?php if(isset($error)){echo $error;}?>
	</strong>
	
	
	<div class="msg">
		You have not uploaded anything yet.
	</div>


			</div>
		</div>
	</div>
	</body>
	</html>
