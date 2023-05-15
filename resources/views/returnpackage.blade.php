<!DOCTYPE html>
<html>
<head>
	<title>Return Package</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Return Package</title>

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
	<h3>Return Package</h3>

	<a href="/ordersummary"> < </a>

	<br/>
	<br/>

	<form action="/returnpackage/store" method="post">
		{{ csrf_field() }}
		Shipping Methods <input type="text" name="shipping_methods" required="required"> <br/>
		Courrier Name <input type="text" name="name_kurir" required="required"> <br/>
        No. Resi <input type="text" name="no_resi" required="required"> <br/>
		Address <input type="text" name="vendor_storeaddress" required="required"><br/>
        Order <input type="text" name="order_id" required="required"> <br/>
		<input type="Submit" value="Simpan Data">
	</form>

</body>
</html>




