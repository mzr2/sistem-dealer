<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>DetilPesanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css" src="css/bootstrap.min.css"></style>
	<style>
			body {
                background-image: url('<?php echo base_url("background/")?>/1.jpg');
                background-size: 100%;
                
             }
             .row{
				background-color: rgba(255,255,255,0.7);
				 padding-top: 25px;
                 padding-bottom: 25px;
                 border-radius: 10px;
			 }
			 .colo{
				/* margin-top: 25px;
				margin-bottom: 25px; */
				padding: 25px 25px 25px 25px;
				background-color: rgba(255,255,255,0.5);
				border-radius: 20px;
			}
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
	</style>
</head>
<body>
	<ul>
		<li><a class="active" href="<?php echo site_url('adm'); ?>">Home</a></li>
		<li><a class="a" href="<?php echo site_url('adm'); ?>">Selamat Bekerja <?php echo $this->session->userdata("nama"); ?></a></li>
	</ul>
	<div>
		<h1>Detil Pesanan</h1>
	</div>
	<div class="container">
		<div class="row">
				<?php foreach($hasil as $r) { ?>
				<div class="col-md-8"><img src="<?php echo base_url('uploads/')?><?php echo $r['gambar']?>" style="width: 100%; height: 100%">
				</div>
				<div class="col-md-4">
					<div class="colo">
							<br>
							<p><?php echo $r['merk'] ?> <?php echo $r['type'] ?></p>
							<p>Saudara <?php echo $r['nama']?></p>
							<p>No KTP <?php echo $r['ktp']?></p>
							<p>Kode <?php echo $r['kdProduk']?></p>
							<p>Harga Rp<?php echo $r['tagihan']?></p>
                            <p>Warna <?php echo $r['warna']?></p>
                            <p><?php echo $r['metPem']?></p>
                            <br>
							<?php echo form_open_multipart('adm/datPrs');?>
                            <button type="submit" class="btn btn-info btn-lg" onclick="window.location='halAdm.html'">Proses</button>
							</form>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>