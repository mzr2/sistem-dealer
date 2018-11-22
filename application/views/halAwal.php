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
                background-color: #4CAF50;
                padding: 15px 32px;
                font-size: 16px;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                width: 100%
            }
            .button2:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            }
            body {
                background-image: url('<?php echo base_url("background/")?>/1.jpg');
                background-repeat: no-repeat;
                background-size: 100%;
                background-color: #cccccc;
             }
             h1{
                color: gray;
                font-style: italic;
            }
            h2{
                text-align : center;
                margin-top: 30px;
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
                background-color: rgba(255,255,255,0.8);
                border-radius: 50px;
                margin-top: 30px;
            }
            h1{
                color: gray;
                font-style: italic;
            }

            #chs{
                align="center";
                height: 60px;
                width: 90%;
            }
    </style>
</head>

<style type="text/css"></style>

<body>
    <ul>
        <li><a class="active" href="<?php echo site_url('awal'); ?>">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    <div style="background: ghostwhite">
        <h1 style="text-align: center">Dealer Catur Bahagia</h1>
    </div>
    

    <div class="container">
		<div class="col">
            <a href=""></a>
                <div style="padding-top: 20px;">
                    <h2>Masuk Sebagai</h2>
                </div>
                <div class="chs">
                    <button class="button2" type="submit" style="width: 94%; height: 50px; margin: 40px 30px 20px 30px;" data-toggle="modal" data-target="#myModal">Pegawai</button>
                </div>
                <form action="<?php echo site_url('pembeli_c'); ?>">
                <div class="chs">
                    <button class="button2" type="submit" style="width: 94%; height: 50px; margin: 20px 30px 40px 30px;">Pembeli</button>
                </div>
                </form>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
            
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Login</h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('login_c/aksi_login');?>
                                        <input style="text-align: left; padding: 15px 5px; margin-left: 10px; margin-right: 15px; margin-top: 20px; width: 95%;" type="text" placeholder="username" name="username" />
                                        <input style="text-align: left; padding: 15px 5px; margin-left: 10px; margin-right: 15px; margin-top: 20px; margin-bottom: 5px; width: 95%;" type="password" placeholder="Password" name="password" />
                                </div>
                                <div class="modal-footer">
                                <button type="submit">login</button>
                                </form>
                                </div>
                            
                        </div>
                    </div>
                </div>
		</div>
	</div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>
</html>