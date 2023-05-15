<!DOCTYPE html>
<html>
<head>
	<title>Accept Payment</title>
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
	<h3>Accept Payment</h3>
	<br/>
	<br/>

	<form action="/returnpayment/store" method="post">
		{{ csrf_field() }}
		Payment Methods <input type="text" name="bank_id" required="required"> <br/>
		Bank Account <input type="int" name="bank_account" required="required"> <br/>
        Amount <input type="int" name="amount" required="required"> <br/>
        Order <input type="text" name="order_id" required="required"> <br/>
		<input type="Submit" value="Simpan Data">
	</form>

</body>
</html>
