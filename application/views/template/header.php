<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/hpai.png" /> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.3.1.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery-ui.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js')?>"></script>
    
</head>
<body>
    <div class="container">
<div class="logo">
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/img/hpai.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="<?= base_url('Barang'); ?>">Barang</a>
                <a class="nav-link" href="<?= base_url('Transaksi'); ?>">Transaksi</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="<?= base_url('Login/logout'); ?>" data-bs-toggle="tooltip" title="Log Out"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            </div>
        </div>
        </nav>
    </div>