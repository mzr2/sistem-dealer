<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Dealer Catur Bahagia</title>
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
                background-repeat: no-repeat;
                background-size: cover;
                /* background-color: #cccccc; */
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
                background-color: rgba(255,255,255,0.80);
                border-radius: 20px;
                margin-top: 5%;
            }
            h1{
                color: gray;
                font-style: italic;
            }
            h2{
                color: gray;
                font-style: italic;
                text-align: center;
            }
    </style>
</head>

<style type="text/css"></style>

<body>
    <ul>
        <li><a class="active" href="<?php echo site_url('awal'); ?>">Home</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="<?php echo base_url(); ?>">Exit</a></li>
    </ul>
    <div style="background: ghostwhite">
        <h1 style="text-align: center">Dealer Catur Bahagia</h1>
    </div>
    <div class="container">
        <div class="col">
            <h2>Selamat Datang</h2>
            <form action="<?php echo site_url('pembeli_c/barang'); ?>">
                <div class="chs">
                    <button type="submit" style="width: 95%; height: 50px; margin: 20px 30px 20px 30px;">Lihat Barang</button>
                </div>
            </form>
            <form action="<?php echo site_url('pembeli_c/lihatPesanan'); ?>">
                <div class="chs">
                    <button type="submit" style="width: 95%; height: 50px; margin: 20px 30px 30px 30px;">Lihat Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>