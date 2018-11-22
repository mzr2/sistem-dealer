<!DOCTYPE html>
<html>
<head>
	<title>Pegawai Gudang</title>
	<style type="text/css" src="css/bootstrap.min.css"></style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
            button {
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            body {
                background-image: url('<?php echo base_url("background/")?>/1.jpg');
                background-size: 100%;
                background-color: #cccccc;
             }
             h1{
                color: gray;
                font-style: italic;
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
            .col{
				background-color: rgba(255,255,255,0.7);
				border-radius: 10px;
                margin-top: 5%;
            }
            h1{
                color: gray;
                font-style: italic;
            }
    </style>
</head>
<body>
	<ul>
		<li><a class="active" href="#home">Home</a></li>
        <li><a class="a" href="<?php echo site_url('adm'); ?>">Selamat Bekerja <?php echo $this->session->userdata("nama"); ?></a></li>
	</ul>
	<div style="background: ghostwhite">
		<h1 style="text-align: center">Pegawai Gudang</h1>
	</div>
	<div class="container">
		<div class="col">
			<a href=""></a>
                <form action="<?php echo site_url('gudang_c/inpDat'); ?>">
                    <div class="chs">
                        <button type="submit" style="width: 95%; height: 50px; margin: 20px 30px 20px 30px;">Input Data Mobil</button>
                    </div>
                </form>
				<form action="<?php echo site_url('gudang_c/sts'); ?>">
                    <div class="chs">
                        <button type="submit" style="width: 95%; height: 50px; margin: 20px 30px 20px 30px;">Status Mobil</button>
                    </div>
                </form>
                <form action="<?php echo site_url('gudang_c/edt'); ?>">
                    <div class="chs">
                        <button type="submit" style="width: 95%; height: 50px; margin: 20px 30px 20px 30px;">Edit Data</button>
                    </div>
                </form>
                <form action="<?php echo site_url('gudang_c/logout'); ?>">
                    <div class="chs">
                        <button type="submit" style="width: 95%; height: 50px; margin: 20px 30px 20px 30px;">Logout</button>
                    </div>
                </form>
		</div>
	</div>
	

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>