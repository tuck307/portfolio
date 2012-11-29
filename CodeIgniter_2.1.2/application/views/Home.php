<script>
    $(document).ready(function() {
         //col1 float in Name and lower nav /
//         $('#col1').css('top','-600px').delay(400);
//        $('#col1').stop().animate({
//            'top': '0px'
//        }, 1300, 'easeOutBack');
        $('#col1').hide().stop().fadeIn(1000);
    });
</script>
<!--col2 start--><div class="col2">

                    <div id="frontPicContainer">
                        <div id="pic_frame_wrapper" class="box-shadow transparent">
                            <div id="pic_frame_resume" style="width: 258px;height: 273px;box-shadow: 0px 0px 2px black;background: #F6F6F6 url(images/ketch.jpg) 50% 200% no-repeat">
                            </div><!-- end pic_frame -->
                        </div>
                    </div>
                     
		     <div id="designTitleContainer">
                        
                            <span class="designTitle">Design,</span> 
                            <br />
                            <span class="developmentTitle">
                                <strong>Development,</strong>
                            </span>
                            <br />
                            <span class="passionTitle"> Passion, Creativity.</span>
                         
                     </div>
     
                         
     <div class="grayBanner" ></div>
                     <div class="greyBannerText">
                         I create usable, accessible and above all beautiful web/mobile sites. But don't take my word for it, check out my <strong style="color: #006699;cursor:pointer;"><a href="#">portfolio.</a></strong>
                     </div>
      <div class="grayBanner"></div>
      
                     <div id="homeProjectsCont">
                        <ul> 
                            <li class="my homeMobile">
                                <?=anchor('portfolio/mobile','
                                    <div class="album" style="width:92%;margin:0;min-height:0px;">
                                        <div class="album_desc green" style="min-height:0px;margin:0;">
                                            <h2 style="box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.15);">Mobile Apps</h2>
                                            <p style="padding:7px;">Here are some of my mobile projects coded in Sencha touch for hybrid, objective-c for iphone and java for android cross browser support.</p>
                                        </div>
                                    </div>
                                ')?>
                            </li>
                        
                            <li class="my homeWeb">
                                <?=anchor('portfolio/web','
                                    <div class="album" style="width:92%;margin:0;min-height:0px;">
                                        <div class="album_desc orange" style="min-height:0px;margin:0;">
                                            <h2 style="box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.15);">Web</h2>
                                            <p style="padding:7px;">Web projects I\'ve done for business, myself and friends. I make use of SEO Techniques, HTML5, CSS3, and Javascript with cross browser support. </p>
                                        </div>
                                    </div>
                                ')?>
                            </li>
                     
                            <li class="my homeWeb" >
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
      
