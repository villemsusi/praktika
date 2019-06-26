<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rets</title>
    <link rel="stylesheet" href="artsy.css">
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

    <script>
    function menu_open() {
        document.getElementById("menu").style.display = "block";
    }

    function menu_close() {
        document.getElementById("menu").style.display = "none";
    }
    </script>
  </body>
</html>