<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Praktika</title>
    <link rel="stylesheet" href="artsy.css">
    <script type="text/javascript" src="menu.js"></script>
  </head>
  <body>
    <div id="wrapper">
        <div id="menu" class="menu menu-block" style="display:none">
            <button onclick="menu_close()">&times;</button><br>
            <a href="#">Home</a><br>
            <a href="#">Tasks</a><br>
            <a href="#">Gallery</a><br>
        </div>
        <div id="content">
            <button onclick="menu_open()">☰</button>
        </div>
    </div>
  </body>
</html>