<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pesan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
body{
    background-image: url('<?php echo base_url("background/")?>/1.jpg');
    background-size: 100%;
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
form{
    margin: 10px 20px 10px 20px;
}
.row{
    padding: 5px 40px 5px 40px;
}
input{
    width: 100%;
}
table{
    width: 100%;
}
td{
    text-align: left;
    padding-top: 2%;
}
container{
    height: 90%;
}
.pes{
    background-color: rgba(255,255,255,0.7);
    padding-top: 2%;
    padding-left: 4%;
    border-radius: 20px;
}
.pict{
    padding-top: 9%;
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
        <div style="background: ghostwhite">
            <h1 style="text-align: center">Pesan</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img class="card-img-top pict" src="<?php echo base_url('uploads/')?><?php echo $data6?>">
                </div>
                <div class="col-md-5 pes">
                    <?php echo form_open_multipart('pembeli_c/pesan');?>
                        <table>
                            <tr>
                                <td>Nama:</td><td><input type="text" name="nama" required></td>
                            </tr>
                            <tr>
                                <td>No.KTP:</td><td><input type="text" name="noktp" required></td>
                            </tr>
                            <tr>
                                <td>No.HP:</td><td><input type="text" name="hp" required></td>
                            </tr>
                            <tr>
                                <td>Alamat:</td><td><input type="text" name="alamat" required></td>
                            </tr>
                            <tr>
                                <td>Kode Mobil:</td><td><input type="text" name="kodemobil" value="<?php echo $data1 ?>"></td>                                    
                                <input type="text" name="gambar" value="<?php echo $data3 ?>" hidden>
                                <input type="text" name="harga" value="<?php echo $data4 ?>" hidden>
                            </tr>
                            <tr>
                                <td>Merk:</td><td><input type="text" name="merk" value="<?php echo $data2 ?>"></td>
                            </tr>
                            <tr>
                                <td>Model:</td><td><input type="text" name="type" value="<?php echo $data5 ?>"></td>
                            </tr>
                            <tr>
                                <td>Warna :</td>
                                    <td><select size="1" name="warna" id="warna">
                                        <option value="hitam">Hitam</option>
                                        <option value="putih">Putih</option>
                                        <option value="abu-abu">Abu-Abu</option>
                                        <option value="merah">Merah</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Metode Pembayaran :</td>
                                <td style="text-align: center;"><input type="radio" name="metodepembayaran" id="Cash" value="Cash"> Cash</td>
                                <td style="text-align: center;"><input type="radio" name="metodepembayaran" id="Credit" value="Credit"> Credit</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="submit" name="submit" id="submit" value="Submit">Pesan</button></td>
                            </tr>
                        </table>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>