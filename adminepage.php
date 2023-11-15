<?php 
   session_start();
   session_destroy();
   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }

   ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Admin Panel</title>
  <style>
    body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}
/* Add these styles to your existing styles.css */

#addProductForm {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#addProductForm h3 {
  color: #333;
}

#productForm {
  display: flex;
  flex-direction: column;
  max-width: 300px;
  margin: auto;
}

label {
  margin-top: 10px;
  font-weight: bold;
}

input {
  padding: 8px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #4caf50;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

.sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  padding-top: 20px;
  color: white;
}

.sidebar a {
  padding: 15px;
  text-decoration: none;
  font-size: 18px;
  color: white;
  display: block;
}

.sidebar h2 {
  text-align: center;
  margin-bottom: 30px;
}

.content {
  margin-left: 250px;
  padding: 20px;
}
/* Add these styles to your existing styles.css */

#generateStockForm {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#generateStockForm h3 {
  color: #333;
}

#stockForm {
  display: flex;
  flex-direction: column;
  max-width: 300px;
  margin: auto;
}

label {
  margin-top: 10px;
  font-weight: bold;
}

select,
input {
  padding: 8px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #3498db;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #2980b9;
}


  </style>
</head>
<body>  
    
  

</main>
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
      <li><a href="#addProductForm" onclick="showAddProduct()">Add Product</a></li>
      <li><a href="#generateStockForm" onclick="generateStock()">Generate Stock</a></li>
      <li><a href="clientpage.php">Client Page</a></li>
      <li><a href="login.php" onclick="logout()">Log Out</a></li>
    </ul>
  </div>

  


  <div class="content">
    <div id="addProductForm" style="display:none;">
  <h3>Add Product</h3>
  <form id="productForm">
    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName" required>

    <label for="productthumbnail">Product thumbnail:</label>
    <input type="file" id="producthumbnail" name="producthumbnail" required>

    <label for="producdescription">Product description:</label>
    <input type="text" id="productdescription" name="productdescription" required>

    <label for="productPrice">Product Price:</label>
    <input type="number" id="productPrice" name="productPrice" required>

    <label for="productQuantity">Product Quantity:</label>
    <input type="number" id="productQuantity" name="productQuantity" required>

    <button type="button" onclick="addProduct()">Add Product</button>
  </form>
</div>

    </div>
    
    <!-- Inside the generateStockForm div in index.html -->
<div id="generateStockForm" style="display:none;">
  <h3>Generate Stock</h3>
  <form id="stockForm">
    <label for="stockProduct">Select Product:</label>
    <select id="stockProduct" name="stockProduct" required>
      <!-- Populate this dropdown with product options dynamically from your database -->
      <option value="product1">Product 1</option>
      <option value="product2">Product 2</option>
      <!-- Add more options as needed -->
    </select>

    <label for="stockQuantity">Stock Quantity:</label>
    <input type="number" id="stockQuantity" name="stockQuantity" required>

    <button type="button" onclick="generateStock()">Generate Stock</button>
  </form>
</div>


  <script>
// Inside scripts.js
function addProduct() {
  // Get form values
  const productName = document.getElementById('productName').value;
  const productPrice = document.getElementById('productPrice').value;
  const productQuantity = document.getElementById('productQuantity').value;

  // Validate form fields (add your validation logic here)

  // Create a data object to send to the server
  const productData = {
    name: productName,
    price: productPrice,
    quantity: productQuantity
  };

  // Assuming you have an API endpoint to handle product addition, make a POST request
  // Replace 'your-api-endpoint' with the actual endpoint
  fetch('your-api-endpoint', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
      // Add any additional headers as needed
    },
    body: JSON.stringify(productData)
  })
  .then(response => response.json())
  .then(data => {
    // Handle the response from the server (success or error)
    alert('Product added successfully!');
    // Optionally, you can reset the form or perform other actions
    document.getElementById('productForm').reset();
  })
  .catch(error => {
    // Handle errors (e.g., display an error message)
    console.error('Error adding product:', error);
  });
}


    function showAddProduct() {
  document.getElementById('addProductForm').style.display = 'block';
  document.getElementById('generateStockForm').style.display = 'none';
}

function generateStock() {
  document.getElementById('addProductForm').style.display = 'none';
  document.getElementById('generateStockForm').style.display = 'block';
}

function logout() {
  // Implement logout logic (e.g., redirect to login page)
  alert('Logged out!');
}

  </script>
</body>
</html>

