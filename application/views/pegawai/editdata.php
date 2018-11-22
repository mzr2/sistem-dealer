<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Edit Data</title>
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
            #desc{
                height: 100px;
                width: 400px;
            }
            .sty{
                padding-left: 10%;
            }
            #in{
                width: 400px;
            }
            td{
                padding-bottom: 2%;
            }
            .crd{
                padding-left: 10%;
            }
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="<?php echo site_url('gudang_c'); ?>">Home</a></li>
        <li><a class="a" href="<?php echo site_url('adm'); ?>">Selamat Bekerja <?php echo $this->session->userdata("nama"); ?></a></li>
    </ul>
    <div style="background: ghostwhite">
        <h1>Edit Data</h1>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($hasil as $r) { ?>
            
            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('uploads/')?><?php echo $r['gambar']?>" alt="Card image cap">
                    <div class="card-body crd">
                    <!-- <h5 class="card-title">Tersedia</h5> -->
                    <table>
                        <tr>
                            <td>Merk</td><td>:</td><td><?php echo $r['merk']?></td>
                        </tr>
                        <tr>
                            <td>Model</td><td>:</td><td><?php echo $r['type']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td><td>:</td><td><?php echo $r['harga']?></td>
                        </tr>
                        <tr>
                            <td>Status</td><td>:</td><td><?php echo $r['status']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td><td>:</td><td><?php echo $r['deskripsi']?></td>
                        </tr>
                    </table>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal<?php echo $r['kdProduk'] ?>">Edit</button>
                    </div>
                </div>
            </div>
                
            <div id="modal<?php echo $r['kdProduk'] ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- konten modal-->
                    <div class="modal-content">
                        <!-- heading modal -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data Mobil</h4>
                        </div>
                        <!-- body modal -->
                        <?php echo form_open_multipart('gudang_c/update');?>
                            <div class="modal-body sty">
                                <input type="text" name='kdProduk' hidden value='<?php echo $r['kdProduk']?>'>
                                <label for="">Merk</label><br>
                                <input type="text" name="merk" id="in" value='<?php echo $r['merk']?>'><br>
                                <label for="">Type</label><br>
                                <input type="text" name="type" id="in" value='<?php echo $r['type']?>'><br>
                                <label for="">Harga</label><br>
                                <input type="text" name="harga" id="in" value='<?php echo $r['harga']?>'><br>
                                <label for="">Stok</label><br>
                                <input type="text" name="stok" id="in" value='<?php echo $r['stok']?>'><br>
                                <label for="">Status</label><br>
                                <input type="text" name="status" id="in" value='<?php echo $r['status']?>'><br>
                                <label for="">Deskripsi</label><br>
                                <input type="text" name="deskripsi" id="desc" value='<?php echo $r['deskripsi']?>'><br>
                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Selesai</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        </div>
    </div>
    </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>