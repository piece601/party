<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="描述">
  <meta name="keywords"content="關鍵字,關鍵字">
  <meta name="author" content="趙承瑋 Piece">
  <title>Framework for Piece.</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animate.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/menu.css')?>">
  <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
  <script>
  $(function () {
      $('#menuToggle, .menu-close').on('click', function(){
        $('#menuToggle').toggleClass('active');
        $('body').toggleClass('body-push-toleft');
        $('#theMenu').toggleClass('menu-open');
      });
  });
  </script>
  <style>
  body {
    background-image: url(<?=$_background?>);
  }
  </style>
</head>
<body>
<header class="container">
  <a href="<?=base_url()?>"><img src="<?=base_url($_logo)?>" alt="" class="img-responsive" style="margin:0 auto;"></a>
</header>
<div class="clearfix"></div><br>
<nav class="menu" id="theMenu">
  <div class="menu-wrap">
    <h1 class="logo"><a href="#">後台管理模組</a></h1>
    <i class="icon-remove menu-close">X</i>
    <a href="<?= base_url('welcome/admin')?>" class="smoothScroll">首頁管理</a>
    <a href="<?= base_url('company/')?>" class="smoothScroll">固定項目(1)</a>
    <a href="<?= base_url('qanda/')?>" class="smoothScroll">固定項目(2)</a>
    <a href="<?= base_url('contact/')?>" class="smoothScroll">固定項目(3)</a>
    <a href="<?= base_url('basic/')?>" class="smoothScroll">基礎設定</a>
  </div>
  <div id="menuToggle"><span class="glyphicon glyphicon-th"></span></div>
</nav>
<?php if (isset($navlists)): ?>
  <nav class="container">
    <ol class="breadcrumb">
    <?php foreach ($navlists as $key => $value): ?>
      <?php if (end($navlists) == $value): //active ?>
        <li class="active"><?=$value;?></li>
      <?php else: ?>
        <li><a href="<?=base_url($key)?>"><?=$value?></a></li>
      <?php endif ?>
    <?php endforeach ?>
    </ol>
  </nav>
<?php endif ?>