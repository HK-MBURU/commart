<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAY</title>
    <link rel="stylesheet" href="buyer.css">
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
                        <li><a href="buyer.php">Products Page</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="seller_homepage.php">Sell Your Goods</a></li>
                    </ul>
                </nav>
                <img src="images/cart.png" width="30px" height="30px" alt="">
                <img src="images/menu.jpg" width="125px" alt="" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="small-container">
                <div class="title"> <h1>Pay Your Goods</h1></div>
                <div style="font-size: 30px; width: 300px;">
                    <form action="">
                        <label for="payment_method">Method of payment:</label><br />
                         <select name="" id="" style="width: 300px; height: 30px; font-size: 20px;">
                             <option value="m-pesa">M-Pesa</option>
                             <option value="cash">Cash</option>
                             <option value="bank">Bank Payment</option>
                         </select>
                    </form>
                </div>
            </div>
        </div>
    </div>        
</body>
</html>