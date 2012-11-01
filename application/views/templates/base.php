<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Tesco Wine</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="<?=base_url()?>css/theme/jquery-ui-1.9.0.custom.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/base.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/map.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>css/keyboard.css" rel="stylesheet" type="text/css">
</head>

<body>
<input type="hidden" id="baseurl" value="<?= base_url() ?>"/>
<div class="container">
  <div class="content">
    
    <?php if(isset($mainContent)) { $this->load->view($mainContent); } ?>
    
     <div class="selectDisable" id="handPhone">

            <img id="bgImage" src="css/assets/handphone.png"/>
            <div class="phoneSlideshow"style="display:none;">

                <img class="slideImages" src="css/assets/phonePage1.png"/>
                <img class="slideImages" src="css/assets/phonePage2.png"/>
                <img class="slideImages" src="css/assets/phonePage3.png"/>
                <img class="slideImages" src="css/assets/phonePage4.png"/>
            </div>

            <div class="phoneSlideshowSmall" style="display:none;">

                <img class="slideImagesSmall" src="css/assets/phonePage1.png"/>
                <img class="slideImagesSmall" src="css/assets/phonePage2.png"/>
                <img class="slideImagesSmall" src="css/assets/phonePage3.png"/>
                <img class="slideImagesSmall" src="css/assets/phonePage4.png"/>
            </div>

        </div>
    
    <div id="reset" style="width:1080px; height:200px;  position:absolute; bottom:0px;">
    	
    </div>
    
     <!-- end .content --></div>
  <!-- end .container --></div>
  
   <script src="<?=base_url()?>js/jquery.js"></script>
    <script src="<?=base_url()?>js/jqueryui.js"></script>
     <script src="<?=base_url()?>js/cycle.js"></script>
       <script src="<?=base_url()?>js/jquery.keyboard.min.js"></script>
   <script src="<?=base_url()?>js/jquery.keyboard.extension-typing.js"></script>
   <script src="<?=base_url()?>js/jquery.keyboard.extension-autocomplete.js"></script>
     <script src="<?=base_url()?>js/idle.js"></script>
     <script src="<?=base_url()?>js/dragdealer.js"></script>
    <script src="<?=base_url()?>js/scripts.js"></script>
</body>
</html>
