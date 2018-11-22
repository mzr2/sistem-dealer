<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Pesanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css" src="css/bootstrap.min.css"></style>
	<style>
			body {
                background-image: url('<?php echo base_url("background/")?>/1.jpg');
                background-repeat: no-repeat;
                background-size: 100%;
                background-color: #cccccc;
             }
             .row{
				 background-color: rgba(255,255,255,0.9);
				 padding-top: 4%;
				 padding-bottom: 25px;
				 padding-left: 45px;
                 padding-right: 45px;
				 margin-top: 5%;
				 border-radius: 20px;
			 }
			 /* .row{
				margin-top: 25px;
				margin-bottom: 25px;
			} */
             .card{
                 width: 50%
             }
             h1{
                 color: gray;
				 font-style: italic;
				 background: ghostwhite;
				 text-align: center;
             }
             ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            
            li {
                float: left;
            }
            
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            
            li a:hover {
                background-color: #111;
            }
			
			input{
				width: 75%;
				margin-left: 10px;
				margin-right: 10px;
			}
			button{
				width: 10%;
			}
            td{
                padding-top: 5%;
            }
            .td{
                padding-left: 5px;
            }
            .info{
                background-color: rgba(255,255,255,0.5);
                padding-top: 2%;
                padding-left: 4%;
                border-radius: 20px;
            }
	</style>
</head>
<body>
	<ul>
		<li><a class="active" href="<?php echo site_url('pembeli_c'); ?>">Home</a></li>
		<li><a href="#news">News</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="#about">About</a></li>
	</ul>
	<div>
		<h1>Pesanan</h1>
	</div>
	<div class="container">
    <?php foreach($hasil as $r) { ?>
        <div class="row">
                <div class="col-md-8">
                    <img class="card-img-top" src="<?php echo base_url('uploads/')?><?php echo $r['gambar']?>">
                </div>
                <div class="col-md-4 info">
                    <h3>Info Pesanan Anda</h3>
                    <br>
                    <table>
                        <tr>
                            <td>Pembeli</td><td>:</td><td class="td"><?php echo $r['nama']?></td>
                        </tr>
                        <tr>
                            <td>Merk</td><td>:</td><td class="td"><?php echo $r['merk']?></td>
                        </tr>
                        <tr>
                            <td>Model</td><td>:</td><td class="td"><?php echo $r['type']?></td>
                        </tr>
                        <tr>
                            <td>Warna</td><td>:</td><td class="td"><?php echo $r['warna']?></td>
                        </tr>
                        <tr>
                            <td>Kode Produk</td><td>:</td><td class="td"><?php echo $r['kdProduk']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td><td>:</td><td class="td"><?php echo $r['tagihan']?></td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td><td>:</td><td class="td"><?php echo $r['metPem']?></td>
                        </tr>
                        <tr>
                            <td>Status</td><td>:</td><td class="td"><?php echo $r['statPes']?></td>
                        </tr>
                    </table>
                </div>
		</div>
    <?php } ?>
	</div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>