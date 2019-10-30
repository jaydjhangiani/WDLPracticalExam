<?php
	session_start();
	unset($_SESSION['quan']);
	unset($_SESSION['price']);
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$item = $_POST['product'];
		$quan = $_POST['quan'];
		$price =$_POST[$item];
		$_SESSION['quan'] = $quan;
		$_SESSION['price']=$price;
		header("Location: q24bill.php");
		
	}
?>



<html>
    <head>
        <title>Product Form</title>
        <style>
        </style>
    </head>

    <body>
        <form method="POST" action="">
            <table border="1px">
                 <tr>
                    <th>Product</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Oil</td>
                    <td><input type="hidden" name="oil" value="30">30</td>
                </tr>
                <tr>
                    <td>Soap</td>
                    <td><input type="hidden" name="soap" value="50">50</td>
                </tr>
                <tr>
                    <td>Shampoo</td>
                    <td><input type="hidden" name="shampoo" value="100">100</td>
                </tr>
            </table>
            <br><br>
            <select name="product" id="product">
                <option value="oil">Oil</option>
                <option value="soap">Soap</option>
                <option value="shampoo">Shampoo</option>
            </select>    
            <label for="quan">Quantity</label>
            <input type="number" name="quan" id="quan">
            <input type="submit" value="SUBMIT">
        </form>
    </body>
</html>
