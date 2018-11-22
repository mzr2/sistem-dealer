<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Status Barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
            body {
                background-image: url('<?php echo base_url("background/")?>/1.jpg');
                background-size: 100%;
                background-color: #cccccc;
             }
             .row{
                 background-color: rgba(255,255,255,0.7);
                 border-radius: 20px;
             }
             .card{
                 border-radius: 20px;
                 margin-top: 1%;
                 margin-bottom: 1%;
                 background-color: rgba(255,255,255,0.7);
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
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="<?php echo site_url('gudang_c'); ?>">Home</a></li>
        <li><a class="a" href="<?php echo site_url('adm'); ?>">Selamat Bekerja <?php echo $this->session->userdata("nama"); ?></a></li>
    </ul>
    <div style="background: ghostwhite">
        <h1>Status Barang</h1>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($hasil as $r){ ?>
            <div class="col-md-6 ">
                <div class="card">
                        <img class="card-img-top" src="<?php echo base_url('uploads/')?><?php echo $r['gambar']?>" alt="Card image cap">
                        <div class="card-body">
                        <!-- <h5 class="card-title">Tersedia</h5> -->
                        <H2 class="card-text" style="font-weight: bold">Merk          :<?php echo $r['merk']?></H2>
                        <br>
                        <p class="card-text">Tipe         :<?php echo $r['type']?></p>
                        <p class="card-text">Harga         :<?php echo $r['harga']?></p>
                        <p class="card-text">Status barang :<?php echo $r['status']?></p>
                        <p class="card-text">Stok          :<?php echo $r['stok']?></p>
                        </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>