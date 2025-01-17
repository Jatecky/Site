<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/fav.jpg" type="image/jpg">
  <title><?= $title ?></title>
</head>
<body class="page">
  <header class="page-header page-header--mini">
    <div class="container">
      <h1 class="page-title"><?= $title ?></h1>
      <a href="mailto:<?= $email ?>"><?= $email ?></a>
      <button class="theme-button" type="button">Изменить тему</button>
    </div>
  </header>
  <main>
