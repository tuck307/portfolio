<script>
    $(document).ready(function() {
         //col1 float in Name and lower nav /
         $('.col1').css('top','-600px');
        $('.col1').animate({
            'top': '0px'
        }, 1000, 'easeOutBack');
    });
</script>
<!--col2 start--><div class="col2">
                     <!--<div style="position: relative;top: 250px;color: white;font-size: 24px;text-shadow: 0px 1px 1px black;">
                         I specialize in the development of HTML5, CSS3, Mobile and WordPress using valid and semantic coding practices. I also make apps for fun and write a blog.
                     </div>-->
                    <div style="float:right;">
                        <div id="pic_frame_wrapper" class="box-shadow transparent" style="width: 250px;top:0px;height: 275px;right: 50px;">
                            <div id="pic_frame_resume" style="width: 258px;height: 273px;box-shadow: 0px 0px 2px black;background: #F6F6F6 url(images/sketch.jpg) 50% 200% no-repeat">
                            </div><!-- end pic_frame -->
                        </div>
                    </div>
                     
		     <div style="min-height:300px;color: #909BA0;font-size: 68px;text-shadow: 1px 1px 1px black;font-weight: bold;">
                         <div style="top:30px;font-weight:bold;position:relative;">
                         <span style="position:relative;z-index:1;font-weight: bold;background: #343434;padding: 10px;background-image: -webkit-linear-gradient(280deg, rgba(255, 255, 255, .3) 0%, rgba(0, 0, 0, .1) 50%);text-shadow: 0px -1px 1px rgba(255, 255, 255, 0.9);box-shadow: 1px 1px 3px black;">Design,</span> 
                            <br />
                         <span style="font-weight: bold;background:#006699;padding: 10px ;text-shadow: 0px -1px 1px rgba(255, 255, 255, 0.8), 0px 1px 4px #242424;box-shadow: 1px 1px 3px black;background-image: -webkit-linear-gradient(-88deg, rgba(255, 255, 255, .4) 0%, rgba(0, 0, 0, .1 ) 50%);">
                             <strong style="position: relative;z-index: 1;font-weight: bold;">Development,</strong>
                         </span>
                            <br /><span style="padding:10px;font-weight:bold;"> Passion, Creativity.</span>
                         </div>
                     </div>
     
                         
     <div class="grayBanner" ></div>
                     <div style="min-height: 50px;font-size: 20px;padding:10px;color: white;text-shadow: 0px 1px 1px black;line-height: 1.2;">
                         I create usable, accessible and above all beautiful web/mobile sites. But don't take my word for it, check out my <strong style="color: #006699;cursor:pointer;"><a href="#">portfolio.</a></strong>
                     </div>
      <div class="grayBanner"></div>
      
                     <div style="margin-top:55px;">
                        <ul style="width:98%;margin:auto;text-align:center;overflow:auto;">
 
                            <li style="float:left;width:28%;text-align:left; padding:1%; margin:1%;margin-left:2.8%;min-height: 125px;">
                                <?=anchor('portfolio/mobile','
                                    <div class="album" style="width:92%;margin:0;min-height:0px;">
                                        <div class="album_desc green" style="min-height:0px;margin:0;">
                                            <h2 style="box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.15);">Mobile Apps</h2>
                                            <p style="padding:7px;">Here are some of my mobile projects coded in Sencha touch for hybrid, objective-c for iphone and java for android cross browser support.</p>
                                        </div>
                                    </div>
                                ')?>
                            </li>
                        
                            <li style="float:left;width:28%;text-align:left;padding:1%;margin:1%;min-height: 125px;">
                                <?=anchor('portfolio/web','
                                    <div class="album" style="width:92%;margin:0;min-height:0px;">
                                        <div class="album_desc orange" style="min-height:0px;margin:0;">
                                            <h2 style="box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.15);">Web</h2>
                                            <p style="padding:7px;">Web projects I\'ve done for business, myself and friends. I make use of SEO Techniques, HTML5, CSS3, and Javascript with cross browser support. </p>
                                        </div>
                                    </div>
                                ')?>
                            </li>
                     
                            <li style="float:left;width:28%;text-align:left;padding:1%;margin:1%;min-height: 125px;">
                                <?=anchor('portfolio/projects','
                                    <div class="album" style="width:92%;margin:0;min-height:0px;">
                                        <div class="album_desc purple" style="min-height:0px;margin:0;">
                                            <h2 style="box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.15);">Projects</h2>
                                            <p style="padding:7px;">From School projects while I\'m attending UW, plugins, and random languages and technologies I wanted to learn along the way</p>
                                        </div>
                                    </div>
                                ')?>  
                            </li>
                                                      
                        </ul>
                    </div>

     
<!--col2 end--></div>

<!--main end--></div>
      
