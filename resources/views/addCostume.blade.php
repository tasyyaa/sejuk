<!DOCTYPE html>
<html>
<head>
	<title>Add Costume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <style>
        body{
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(252, 226, 226);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #605d5d;
            display: block;
            transition: 0.2s;
        }

        .sidenav a:hover {
            color: #ffffff;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }


        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

</head>
    <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="leftitem" style="display: flex; justify-content: center;">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
                </a>
                <a href="#Home">Home</a>
                <a href="#Promotion">Promotion</a>
                <a href="#Our Service">Our Services</a>
                <a href="#Contact">Contact</a>
            </div>
                <div id="main" style="margin:0px 20px 0px 0px">
                    <span style="font-size:20px;cursor:pointer" onclick="openNav()"> &#9776;
                    </span>
                </div>

                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/buatapp/sejuk1.png') }}" width="24" height="30"
                        class="d-inline-block align-text-">
                </a>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search Catalog</button>
            </form>

            <div class="sideitem" style="display: flex; justify-content: center;margin-left: 10px;">
                <a class="navbar-brand" href="#" >
                    <img src="{{ asset('storage/buatapp/Cart owner.png') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="#" style="margin:0px 0px 0px 10px;">
                    <img src="{{ asset('storage/buatapp/Notifications owner.png') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="#" style="margin:0px 0px 0px 10px;">
                    <img src="{{ asset('storage/buatapp/3.png') }}" width="30" height="24">
                </a>
            </div>
        </div>
    </nav>

    <!-- Title -->
	<h3>Add New Catalog</h3>

	<a href="/vendorCatalog"> < </a>

	<br/>
	<br/>
    <!-- Form  -->
	<form action="/vendorCatalog/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
        <div class="col-sm-6">
        <div class = "form-group row">
            <label for="item_name" class="form-label">Costume Name</label>
            <div class = "col-sm-6">
                <input type="text" id="item_name" class="form-control" aria-labelledby="required" name="item_name">
            </div>
        </div>
        <div class = "form-group row">
        <div class= "col-sm-6">
        Categories
        <select class="form-select" aria-label="Default select example" for="category_id" id="category_id" name="category_id" >
            <option value="CST">Costume</option>
            <option value="ACS">Accessories</option>
        </select>
        </div>
        </div>
        <div class = "form-group row">
            <label for="item_price" class="form-label">Price</label>
            <div class = "col-sm-6">
                <input type="number" id="item_price" class="form-control" aria-labelledby="required" name="item_price">
            </div>
        </div>
        <div class = "form-group row">
        <div class= "col-sm-6">
        Available Size
        <select class="form-select" aria-label="Default select example" for="size" id="size" name="size" >
            <option value="XXS">XXS</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="All Size">All Size</option>
        </select>
        </div>
        </div>
        <div class = "form-group row">
            <label for="stock" class="form-label">Stock</label>
            <div class = "col-sm-6">
                <input type="number" id="stock" class="form-control" aria-labelledby="required" name="stock">
            </div>
        </div>
        <div class = "form-group row">
            <label for="store" class="form-label">Store</label>
            <div class = "col-sm-6">
                <input type="text" id="store" class="form-control" aria-labelledby="required" name="store">
            </div>
        </div>
        <div class="row">
			<!-- <div class="col-md-6 col-md-offset-3 center">
				<div class="btn-container">
					<h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
					<h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
					<h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
					<p id="namefile">Only pics allowed! (jpg,jpeg,bmp,png)</p>
					<button type="button" id="btnup" class="btn btn-primary btn-lg">Browse for your pic!</button>
					<input type="file" value="" name="fileup" id="fileup">
                </div>
        </div> -->
         </div>
        </div>
        <div class="col-md-6 justify-content:right margin-right: 10px">
            <label for="catalogimage" class="form-label">Add Your Photos Here</label>
            <input class="form-control" type="file" id="catalogimage" name="catalogimage">
        </div>
		<input type="Submit" value="Simpan Data">
	</form>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>
</html>











