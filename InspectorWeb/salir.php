<?
  session_start();
  unset($_SESSION["usuario"]);

  session_destroy();

  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Saliendo...</title>
  	<meta charset="utf-8">
  </head>
  <body>
  <script language="javascript">location.href = "index.php";</script>
  </body>
  </html>