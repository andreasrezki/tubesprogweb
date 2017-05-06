<style>
button {
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    padding : 14px 40px;
    border : 2px solid #4CAF50;
    color : white;
    background-color : #4CAF50;
    font-size: 16px;
    border-radius : 7px;
}

button:hover {
    background-color: #fff;
    color: #4CAF50;
}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('files/css/headerfooter.css'); ?>">

<div class=header>
    <a href="<?php echo base_url('crud'); ?>"><h1>Indosehat</h1></a>
    <p>Merupakan website tempat untuk memesan nomor antrian pada sebuah puskesmas secara online.</p>
    <a href="<?php echo base_url('crud'); ?>"><img src="<?php echo base_url('files/images/logo.png'); ?>"/></a>
</div>

<center>
    <a href="<?php echo base_url('crud/daftar'); ?>"><button type='button'>Daftar Antrian</button></a></br></br>
    <a href="<?php echo base_url('crud/cari'); ?>"><button type='Button'>Cari Antrian</button></a>
</center>

<div class=footer>
    <center><p>© Copyright 2017 Indosehat</p>
</div>