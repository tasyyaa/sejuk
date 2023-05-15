<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apply For Return</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
             body {
                font-family: 'Nunito', sans-serif;
                background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
            }
        </style>
</head>
<body>
	<h3>Apply For Return</h3>

	<a href="/ordersummary"> < </a>

	<br/>
	<br/>

	<form action="/applyforreturn/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		Shipping Methods <input type="text" name="shipping_methods" required="required"> <br/>
		Courrier Name <input type="text" name="name_kurir" required="required"> <br/>
        No. Resi <input type="text" name="no_resi" required="required"> <br/>
		Address <input type="text" name="vendor_storeaddress" required="required"><br/>
        Reason <input type="text" name="reason" required="required"><br/>
        <div class="mb-3">
            <label for="productimage" class="form-label">Product Image</label>
            <input class="form-control" type="file" id="productimage" name="productimage">
        </div>
        Order <input type="text" name="order_id" required="required"> <br/>
		<input type="Submit" value="Simpan Data">
	</form>

</body>
</html>




