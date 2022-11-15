<?php 
        include 'Source/SampQueryAPI.php';
        $server = new SampQueryAPI('51.68.204.178', '7777');


    if ($server->isOnline())
    {
      $info = $server->getInfo();
    }
 ?>
 <!DOCTYPE html>
 <html>
 <body>
 </body>
 </html>
 <!DOCTYPE html>
<html>
<head>
  <title>Tu Servidor RolePlay</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
  <!----About section start---->
  <section class="about">
    <div class="main">
      <div class="about-text">
        <h2>Tu Server</h2>
        <h5>RolePlay <span>en Español</span></h5>
        <span style="color:#E6E6E6;font-family:Arial;font-size:23px;"><strong><em>Hay <?php echo $info['players']?> Jugadores Conectados</em></strong></span></div>
      </div>
    </div>
  </section>
</html>