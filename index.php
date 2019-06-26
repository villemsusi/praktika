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
            <button onclick="slide();menu_close()">&times;</button><br>
            <a href="index.php" onclick="menu_close()">Home</a><br>
            <a href="#" onclick="slide();menu_close()">Tasks</a><br>
            <a href="requests.php" onclick="menu_close()">Requests</a><br>
        </div>
        <div id="content">
            <button onclick="slide();menu_open();" id="slide">☰</button>
        </div>
    </div>
  </body>
</html>