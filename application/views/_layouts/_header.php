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
</head>
<body>
<header class="container text-center">
  <h1 class="well">Logo in here.</h1>
</header>
<nav class="menu" id="theMenu">
  <div class="menu-wrap">
    <h1 class="logo"><a href="#">後台管理模組</a></h1>
    <i class="icon-remove menu-close">X</i>
    <a href="<?= base_url('welcome/admin')?>" class="smoothScroll">首頁管理</a>
    <a href="<?= base_url('carousel/')?>" class="smoothScroll">滾輪廣告管理</a>
    <a href="<?= base_url('welcome/link')?>" class="smoothScroll">首頁連結管理</a>
    <a href="<?= base_url('media')?>" class="smoothScroll">首頁媒體管理</a>
    <a href="<?= base_url('welcome/descript')?>" class="smoothScroll">首頁介紹管理</a>
    <a href="<?= base_url('news')?>" class="smoothScroll">新聞管理</a>
  </div>
  <div id="menuToggle"><span class="glyphicon glyphicon-th"></span></div>
</nav>