<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <style>
      .judul{
        margin-bottom: 51px;
        font-size: 50px;
        margin-top: 35px;
        text-align: center;

      }

    </style>
  </head>
  <body>
    <p class="judul"><b>Peliharaan Kami</b> </p>
    <div class="container">
 <input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
 <input type="radio" name="slide" class="radio-nav" id="nav-2"/>
 <input type="radio" name="slide" class="radio-nav" id="nav-3"/>

 <ul class="slide">
  <li class="slide-1">
   <img src="<?=base_url()?>assets/img/1.png"/>
   <div class="caption">Kucing Anggora</div>
  </li>
  <li class="slide-2">
   <img src="<?=base_url()?>assets/img/2.png"/>
   <div class="caption">Anjing Mini Pom</div>
  </li>
  <li class="slide-3">
   <img src="<?=base_url()?>assets/img/3.png"/>
   <div class="caption">Kelinci European</div>
  </li>
 </ul>

 <div class="nav-arrow nav-next">
  <label class="nav-1" for="nav-1">></label>
  <label class="nav-2" for="nav-2">></label>
  <label class="nav-3" for="nav-3">></label>
 </div>
 <div class="nav-arrow nav-prev">
  <label class="nav-1" for="nav-1"><</label>
  <label class="nav-2" for="nav-2"><</label>
  <label class="nav-3" for="nav-3"><</label>
 </div>
</div>
  </body>
</html>
