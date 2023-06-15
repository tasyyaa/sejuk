<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>FAQ</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <style>
            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Plus Jakarta Sans', sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: #FFFFFF;
            }
            .container{
                margin: 0 40px;
                max-width: 600px;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
            .container h1{
                color: #333;
            }
            .container .tab{
                position: relative;
                background: #FFFFFF;
                padding: 0 20px 20px;
                box-shadow: 0 15px 25px rgba(0,0,0,0.05);
                border-radius:5px;
                overflow: hidden;
            }
            .container .tab input{
                appearance: none;
            }
            .container .tab label{
                display: flex;
                align-items: center;
                cursor: pointer;
            }
            .container .tab label::after{
                content: '+';
                position: absolute;
                right: 20px;
                font-size: 2em;
                color: rgba(0,0,0,0.1);
                transition: transform 1s;
            }
            .container .tab:hover label::after{
                color: #333;
            }
            .container .tab input:checked ~ label::after{
                transform :rotate(135deg);
            }
        </style>

        <div class="contrainer">
            <h1>Frequently Asked Question?</h1>
            <div class="tab">
                <input type="radio" name="acc" id="acc1">
                <label for= "acc1">
                    <h2>01</h2>
                    <h3>General</h3>
                </label>
                <div class="content">
                    <p><b>What is SEJUK</b> <br> SEJUK is a web application software that offers a clothing rental  feature. The Sejuk application provides a platform for vendors to list their rental products such as clothes, costumes, and other types of clothing. For  application users, they can use the SEJUK application as a medium to search for clothing rental and various types of clothing they want.</p>
                </div>
            </div>

            <div class="tab">
                <input type="radio" name="acc" id="acc2">
                <label for= "acc2">
                    <h2>02</h2>
                    <h3>Shipping</h3>
                </label>
                <div class="content">
                    <p><b>1. How to use free delivery feature? </b> <br><br> Free delivery can be obtained by entering a free shipping voucher code in the voucher column with a maximum discount of Rp30,000.00.
                        <br><br> <b>2.  What are the shipping options that SEJUK provide?</b><br><br>SEJUK provides 4 regular and economical shipping options, as well as two instant shipping options. Regular and economical shipping can be done using JNE, J&T, SiCepat, and Anteraja. For instant shipping we provide  GoSend  and GrabExpress
                        <br><br><b>3.  Can the shipping option be changed?</b> <br><br>Shipping options cannot be changed once the order has been placed. Therefore, pay close attention to the chosen shipping option.</p>
                </div>
            </div>


            <div class="tab">
                <input type="radio" name="acc" id="acc3">
                <label for= "acc3">
                    <h2>03</h2>
                    <h3>Payment</h3>
                </label>
                <div class="content">
                    <p><b>1. What payment methods are supported by SEJUK? </b> <br><br> SEJUK supports 4 types of payment methods, namely COD, Bank Transfer (Virtual Machine Account), Credit Card, and Alfamarat/Indomaret.
                        <br><br> <b>2. Can the payment method be changed?</b><br><br>The payment method can be changed at any time before the payment is successfully processed by SEJUK. To make the change, you can go to the payment options and choose the payment method to be used.
                        <br><br><b>3. What happens if payment is not made by the end of the  payment deadline?</b> <br><br>The payment deadline for each payment method is 24 hours after the order is placed. If the buyer has not paid the order beyond that time, the order will be automatically canceled by the system and the buyer must repeat the ordering process from the beginning.</p>
                </div>
            </div>


            <div class="tab">
                <input type="radio" name="acc" id="acc3">
                <label for= "acc3">
                    <h2>04</h2>
                    <h3>Return</h3>
                </label>
                <div class="content">
                    <p><b>1. How to submit a product/money return request? </b> <br><br> Product/money return requests can be made in the order status section by selecting the "submit a return request" option, where you can fill out the return form with reasons and photos of the product. Returns can be processed once the seller has confirmed your return request form. Your payment will be returned after the returned product is received by the seller.
                        <br><br> <b>2. How to send a package for product return?</b><br><br>You can send the package using the shipping option that will appear if the return form has been approved. Return shipping can only be done using JNE, J&T, SiCepat, and Anteraja, it must be done within 5 days after the approval form is received.</p>
                </div>
            </div>


        </div>
    </body>
</html>



