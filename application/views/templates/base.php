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
                	
                	
                    <div class="slide img1">
                    	
                    
                    </div>
                    
                    
                    <div class="slide img2"></div>
                    
                    	<img id="recipe01" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton01" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton01" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    		
                    	<img id="recipe02" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton02" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton02" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<img id="recipe03" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton03" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton03" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<div id="handPhone">
                    	<img id="" src="<?=base_url()?>css/assets/handphone.png"/>
                    	 <div class="phoneSlideshow" style="display:none;">

			                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage1.png"/>
			                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage3.png"/>
			                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage2.png"/>
			                <img class="slideImages" src="<?=base_url()?>css/assets/phonePage3.png"/>
			            </div>
            			</div>
                    	
                    <div class="slide img3">
                    	<img id="recipe04" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton04" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton04" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<img id="recipe05" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton05" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton05" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<img id="recipe06" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton06" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton06" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	
                    </div>
                    <div class="slide img4">
                    	<img id="recipe07" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton07" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton07" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<img id="recipe08" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton08" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton08" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<img id="recipe09" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton09" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton09" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    </div>
                    <div class="slide img5">
                    	<img id="recipe10" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton10" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton10" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<img id="recipe11" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton11" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton11" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    	<img id="recipe12" src="<?=base_url()?>css/fridge/recipe1.jpg"/>
                    	<img class="showIngredients" id="ingredientButton12" src="<?=base_url()?>css/assets/buttonIngredients.jpg"/>
                    	<img class="showImages" id="imageButton12" src="<?=base_url()?>css/assets/buttonImage.jpg"/>
                    	
                    </div>
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
    
   
    
   
        
        
        <div id="tescoLogo" onclick="reset()">
        </div>
        
         <div id="legal" style="display:none;" >
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
