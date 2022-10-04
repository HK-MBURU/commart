<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electronics</title>
    <link rel="stylesheet" href="sellerstylesheet.css" />
    <link rel="stylesheet" href="buyer.css">
  </head>
  <body style="border: 1px solid black;">
    <div class="container">
      <div class="navbar">
          <div class="header">
              <h1>COMMART WEB</h1>
              
          </div>
          <nav>
              <ul id="MenuItems">
                  <li><a href="homepage.php">Home</a></li>
                  <li><a href="food.php">Food</a></li>
                  <li><a href="furniture.php">Furniture</a></li>
                  <li><a href="household.php">HouseHolds</a></li>
                  <li><a href="other.php">Others</a></li>
                  <li><a href="about.php">About</a></li>
              </ul>
          </nav>
          <img src="images/cart.png" width="30px" height="30px" alt="">
          <img src="images/menu.jpg" width="125px" alt="" class="menu-icon" onclick="menutoggle()">
      </div>

    <form action="successful upload.php">
      <h1>Please select the details of the electronic you plan to sell here</h1>
      <br /><br />
      <label for="name">Name:</label><br /><br />
      <div>
        <input type="radio" name="electronic" id="phone" />
        <label for="phone">Phone</label><br />
        <input type="radio" name="electronic" id="laptop" />
        <label for="laptop">Laptop</label><br />
        <input type="radio" name="electronic" id="system/woofer" />
        <label for="system/woofer">System/Woofer</label><br />
        <input type="radio" name="electronic" id="other" />
        <label for="other">Other</label>
      </div>
      <br /><br /><br />
      <label for="price">Price (in Kshs):</label><br />
      <input type="number" name="price" id="price" required /><br /><br /><br />
      <label for="price_nature">Price Nature:</label><br />
      <div>
        <input type="radio" name="price_nature" id="fixed" />
        <label for="fixed">Fixed</label><br />
        <input type="radio" name="price_nature" id="negotiable" />
        <label for="negotiable">Negotiable</label>
      </div>
      <br /><br /><br />
      <label for="description">Brief item description:</label><br />
      <input
        type="text"
        name="description"
        id="description"
      /><br /><br /><br />
      <label for="payment_method">Method of payment:</label><br />
      <select name="" id="">
        <option value="m-pesa">M-Pesa</option>
        <option value="cash">Cash</option>
        <option value="bank">Bank Payment</option></select
      ><br /><br /><br />
      <h3>Please upload at least two of your product's image here:</h3>
      <br />
      <input type="file"name="product_image"id="product_image"accept="image/*"required>
      <br /><br /><br />
      <input type="file" name="product_image" id="product_image" accept="image/*" required>
      <br /><br /><br />
      <input type="file" name="product_image" id="product_image" accept="image/*">
      <br /><br /><br />
      <input type="submit" value="Upload" />
    </form>
  </body>
</php>
