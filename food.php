<!DOCTYPE html>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food</title>
    <link rel="stylesheet" href="sellerstylesheet.css" />
    <link rel="stylesheet" href="buyer.css">
  </head>
  <body>
    <div class="container">
      <div class="navbar">
          <div class="header">
              <h1>COMMART WEB</h1>
              
          </div>
          <nav>
              <ul id="MenuItems">
                  <li><a href="homepage.php">Home</a></li>
                  <li><a href="electronics.php">Electronics</a></li>
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
      <h1>Please select the details of the food you plan to sell here</h1>
      <br /><br />
      <label for="name">Food Name:</label><br />
      <input type="text" name="food" id="food_name" required /><br /><br />
      <label for="price">Price (in Kshs):</label><br />
      <input type="number" name="price" id="food_price" required /><br /><br />
      <label for="description">Product Description:</label><br />
      <input
        type="text"
        name="description"
        id="description"
        required
      /><br /><br />
      <label for="price_nature">Price Nature:</label><br />
      <div>
        <input type="radio" name="price_nature" id="fixed" />
        <label for="fixed">Fixed</label><br /><br />
        <input type="radio" name="price_nature" id="negotiable" />
        <label for="negotiable">Negotiable</label>
      </div>
      <br /><br />
      <label for="payment_method">Method of payment:</label><br />
      <select name="" id="">
        <option value="m-pesa">M-Pesa</option>
        <option value="cash">Cash</option>
        <option value="bank">Bank Payment</option></select
      ><br /><br /><br />
      <h3>Please upload at least two images of your product below:</h3>
      <br />
      <input
        type="file"
        name="product_image"
        id="product_image"
        accept="image/*"
        required
      /><br /><br />
      <input
        type="file"
        name="product_image"
        id="product_image"
        accept="image/*"
        required
      /><br /><br />
      <input
        type="file"
        name="product_image"
        id="product_image"
        accept="image/*"
      />
      <br /><br /><br />
      <input type="submit" value="Upload product" />
    </form>
  </body>
</html>
