<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Tesco Good Food</title>
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

    
     <div class="top-spaced">
            <div id="slideshow" class="dragdealer">
                <div class="handle" style="left: 0px;">
                    <div class="slide img1"></div>
                    <div class="slide img2"></div>
                    <div class="slide img3"></div>
                    <div class="slide img4"></div>
                    <div class="slide img5"></div>
                </div>
            </div>
        </div>
    
     <div class="selectDisable" id="previousButton"
             style="display:none;">
            &nbsp;
        </div>

        <div class="selectDisable" id="nextButton"
             style="">
            &nbsp;
        </div>
    
     <div class="selectDisable" id="handPhone">

            <img id="bgImage" src="<?=base_url()?>css/assets/handphone.png"/>
            <div class="phoneSlideshow"style="display:none;">

                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage1.png"/>
                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage2.png"/>
                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage3.png"/>
                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage4.png"/>
            </div>




            <div class="phoneSlideshowSmall" style="display:none;">

                <img class="slideImagesSmall" src="<?=base_url()?>css/assets/phonePage1.png"/>
                <img class="slideImagesSmall" src="<?=base_url()?>css/assets/phonePage2.png"/>
                <img class="slideImagesSmall" src="<?=base_url()?>css/assets/phonePage3.png"/>
                <img class="slideImagesSmall" src="<?=base_url()?>css/assets/phonePage4.png"/>
            </div>

        </div>
    
   
        
        
        <div id="tescoLogo" onclick="reset()">
        </div>
        
         <div id="legal" >
        </div>
        <div id="finishedShopping" >
            <img  src="<?=base_url()?>css/assets/finished-shopping.png"/>


            <div class="yesnocontainer">
                <div onclick="finished()" class="selectDisable yesButton yesno">&nbsp;</div>
                <div onclick="notFinished()" class="selectDisable noButton yesno">&nbsp;</div>
                
            </div>
            
           
        </div>

<div id="niceflight">
 <img id="goodflight"  src="<?=base_url()?>css/assets/have-a-good-flight.png"/>
</div>
    

  
   <script src="<?=base_url()?>js/jquery.js"></script>
   <script src="<?=base_url()?>js/dragdealer.js"></script>
     <script src="<?=base_url()?>js/cycle.js"></script>

     <script src="<?=base_url()?>js/idle.js"></script>
    
    <script src="<?=base_url()?>js/scripts.js"></script>
</body>
</html>
