<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Proses Pemesanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
            body {
                background-image: url('<?php echo base_url("background/")?>/1.jpg');
                background-repeat: no-repeat;
                background-size: 100%;
                background-color: #cccccc;
             }
             .col{
                 background-color: aliceblue;
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
            .a{
                text-align: right;
            }
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="<?php echo site_url('adm'); ?>">Home</a></li>
        <li><a class="a" href="<?php echo site_url('adm'); ?>">Selamat Bekerja <?php echo $this->session->userdata("nama"); ?></a></li>
    </ul>
    <div style="background: ghostwhite">
        <h1>Proses Pemesanan</h1>
    </div>
    <div class="container">
        
        <div class="col">
    
                <table id="mytable" class="table table-bordred table-striped">
                   
                        <thead>
                        
                        <!-- <th><input type="checkbox" id="checkall" /></th> -->
                            <th>No</th>
                            <th>Nama</th>
                            <th>Merk</th>
                            <th>Model</th>
                            <th>No.KTP</th>
                            <th>Kode Barang</th>
                            <th>Tagihan</th>
                            <th>Warna</th>
                            <th>Jenis Pembayaran</th>
                            <th>Aksi</th>
                        </thead>
         <tbody>
         <?php $n = 1; ?>
         <?php foreach($hasil as $r) { ?>
         <tr>
         
         <!-- <td><input type="checkbox" class="checkthis" /></td> -->
         <td><?php echo $n++ ?></td>
         <td><?php echo $r['nama'] ?></td>
         <td><?php echo $r['merk'] ?></td>
         <td><?php echo $r['type'] ?></td>
         <td><?php echo $r['ktp'] ?></td>
         <td><?php echo $r['kdProduk'] ?></td>
         <td><?php echo $r['tagihan'] ?></td>
         <td><?php echo $r['warna'] ?></td>
         <td><?php echo $r['metPem'] ?></td>
         <td>
         <?php echo form_open_multipart('adm/proses');?>
                <input type="text" name="nama" id="" value="<?php echo $r['nama'] ?>" hidden>
                <input type="text" name="merk" id="" value="<?php echo $r['merk'] ?>" hidden>
                <input type="text" name="alamat" id="" value="<?php echo $r['alamat'] ?>" hidden>
                <input type="text" name="hp" id="" value="<?php echo $r['hp'] ?>" hidden>
                <input type="text" name="type" id="" value="<?php echo $r['type'] ?>" hidden>
                <input type="text" name="kdProduk" id="" value="<?php echo $r['kdProduk'] ?>" hidden>
                <input type="text" name="tagihan" id="" value="<?php echo $r['tagihan'] ?>" hidden>
                <input type="text" name="warna" id="" value="<?php echo $r['warna'] ?>" hidden>
                <input type="text" name="metPem" id="" value="<?php echo $r['metPem'] ?>" hidden>
                <input type="text" name="gambar" id="" value="<?php echo $r['gambar'] ?>" hidden>
                <input type="text" name="ktp" id="" value="<?php echo $r['ktp'] ?>" hidden>
                <input type="text" name="kdProduk" id="" value="<?php echo $r['kdProduk'] ?>" hidden>
                <input type="text" name="idPes" id="" value="<?php echo $r['idPes'] ?>" hidden>
                <input type="text" name="adm" id="" value="<?php echo $this->session->userdata("nama"); ?>" hidden>
             <button type="submit">Proses</button>
         </td>
         </form>
         </tr>
         <?php } ?>
         </tbody>
    
    
    
    
    
    
    
    
    
        </div>
    </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>