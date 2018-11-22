<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>input data mobil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://devpreview.tiny.cloud/demo/tinymce.min.js'></script>
    <script>tinymce.init({ selector:'textarea' });</script>
	<style>
        body {
            background-image: url('<?php echo base_url("background/")?>/1.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            background-color: #cccccc;
        }
        .col{
            background-color: rgba(255,255,255,0.7);
			border-radius: 10px;
			padding-bottom: 10px;
        }
        .card{
            width: 50%
        }
        h1{
            color: gray;
            font-style: italic;
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
		container{
			border-radius: 5px;
		}
		.judul{
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
		}
		.row{
			margin-top: 3%;
		}
		table{
			width: 90%;
		}
    </style>
	</style>
</head>
<body>
	<ul>
		<li><a class="active" href="<?php echo site_url('gudang_c'); ?>">Home</a></li>
		<li><a class="a" href="<?php echo site_url('adm'); ?>">Selamat Bekerja <?php echo $this->session->userdata("nama"); ?></a></li>
	</ul>
	<div class="judul" style="background: ghostwhite">
		<h1>Input Data Mobil</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 col">
				
				<table >
				<?php echo form_open_multipart('gudang_c/do_upload');?>
					<tr >
						<td style="width: 150px; height: 20px;"></td>
					</tr>
					<tr style="height: 35px;">
						<td>Merk</td>
						<td><input type="text" style="width: 100%;" name="merk"></input></td>
					</tr>
					<tr style="height: 35px;">
						<td>Type</td>
						<td><input type="text" style="width: 100%;" name="type"></input></td>
					</tr>
					<tr style="height: 35px;">
						<td>Jenis Body</td>
						<td><input type="text" style="width: 100%;" name="jBody"></input></td>
					</tr>
					<!-- <tr style="height: 35px;">
						<td>Kode Produk</td>
						<td><input type="text" style="width: 300px;"></input></td>
					</tr> -->
					<tr style="height: 35;">
						<td>Harga</td>
						<td><input type="text" style="width: 100%;" name="harga"></input></td>
					</tr>
					<tr style="height: 35;">
						<td>Stok</td>
						<td><input type="text" style="width: 100%;" name="stok"></input></td>
					</tr>
					<tr style="height: 35px;">
						<td>Deskripsi</td>
						<!-- <td><textarea name="deskripsi" id="" rows="5" style="width: 100%;"></textarea></td> -->
						<td><textarea id="mytextarea" name="deskripsi">Hello, World!</textarea></td>
					</tr>
					<tr style="height: 35px;">
						<td>Gambar</td>
						<td><input type="file" name="userfile" size="20"></td>
					</tr>
					<tr>
						<td>
						<input type="text" name="gdg" id="" value="<?php echo $this->session->userdata("nama"); ?>" hidden>
						</td>
						<td style="text-align: right;"><button type='submit'>Submit</button></td>
					</tr>
					</form>
				</table>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>