<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dwayne Tucker</title>

        <!--Main Style sheets-->
        <link rel="stylesheet" type="text/css" href="<?=$url?>css/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?=$url?>css/main.css" media="screen" />
        

      
        <!--for all custom ui componets, check for their dependencies-->
        <script>
if (typeof jQuery == 'undefined') {

   

}
</script>
        <!--jquery custom theme style -->
        <link rel="stylesheet" type="text/css" href="<?=$url?>js/themes/custom-theme/jquery-ui-1.8.23.custom.css" media="screen" />
        
        <!--resume pie chart needs to be before jquery -->
        <script src="<?=$url?>js/raphael.js"></script>
        

        <!--jquery main-->
        <script src="<?=$url?>js/jquery-1.8.0.js"></script>
        
              <!--jquery waypoints-->
        <script src="<?=$url?>js/waypoints.min.js"></script>
    
        
        <!-- jquery cores ui and effects-->
        <script src="<?=$url?>js/ui/jquery.effects.core.js"></script>
        <script src="<?=$url?>js/ui/jquery.ui.core.js"></script>

        <!--jquery effects-->
        <script src="<?=$url?>js/ui/jquery.effects.explode.js"></script>

        <!--jquery dailog-->
        <script src="<?=$url?>js/ui/jquery.ui.widget.js"></script>
        <script src="<?=$url?>js/ui/jquery.ui.position.js"></script>
        <script src="<?=$url?>js/ui/jquery.ui.dialog.js"></script>
        <script src="<?=$url?>js/ui/jquery.effects.fade.js"></script>

        <!--jquery plugins-->    
</head>
<body>
        <div id="container">

<!--header start--><div id="header">
                        <ul id="topNav">
                            <li><a href="#"><span>Blog</span></a></li>
                            <li><?=anchor('Contact','<span>Contact</span>');?></li>
                            <li><?=anchor('aboutMe','<span>About</span>');?></li>
                            <li><?=anchor('Resume','<span>Resume</span>');?></li>
                            <li><?=anchor('portfolio','<span>Portfolio</span>');?></li>
                        </ul>
                        <div id="grayBanner">&nbsp;</div>
<!--header end--> </div>


<!--main start--><div id="main">
    <!--col1 start--><div class="col1">
                             <?=anchor('','<h1 id="name" style="color:black;">Dwayne Tucker</h1>');?>
                             <?=$myBread?>
<!--                            <ul id="navigation">
                                <li>
                                    <?=anchor('/','<span>HOME</span>');?>                          
                                    <span class="slash">/</span>
                                </li>
                                <li>
                                    <?=anchor('/web','WEB');?>                          
                                    <span class="slash">/</span>
                                </li>
                              
                            </ul>-->
        
      <!--col1 end--></div>
    
    
    
 
