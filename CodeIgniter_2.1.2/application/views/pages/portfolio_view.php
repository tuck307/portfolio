<!--col2 start--><div class="col2">

			<div id="albums">
                             <?=anchor('portfolio/mobile','   
			     <div class="album" >
                                    
                                       
					<div class="album_desc green">
						<h2>Mobile Apps</h2>
						<span>Here are some of my mobile projects coded in Sencha touch for hybrid, objective-c for iphone and java for android</span>
                                             <img  src="../images/android_apple_main.png" />
                                        </div>
				</div>
                             ');?> 
                            <?=anchor('portfolio/web','   
                            <div class="album" >
					
					<div class="album_desc orange">
						<h2>Web</h2>
						<span>Web projects I\'ve done for business, myself and friends. I make use of SEO Techniques, HTML5, CSS3, and Javascript with cross browser support. </span>
                                            <img  src="../images/standard5.png" />
                                        </div>
				</div>
                             ');?>
                            <?=anchor('portfolio/projects','
                            <div class="album">
					
					<div class="album_desc purple">
						<h2>School Projects</h2>
						<span>From School projects while I\'m attending UW, plugins, and random languages and technologies I wanted to learn along the way.</span>
					<img  src="../images/uw_logo_main.png" />
                                        </div>
				</div>
                                
                            ');?>
                            
                             <?=anchor('portfolio/projects','
                            <div class="album">
					
					<div class="album_desc yellow">
						<h2>Open Source Projects</h2>
						<span>From School projects while I\'m attending UW, plugins, and random languages and technologies I wanted to learn along the way.</span>
					
                                        </div>
				</div>
                            ');?>
                            
                                                        
                             <?=anchor('portfolio/projects','
                            <div class="album">
					
					<div class="album_desc blue">
						<h2>Non-profit/Volunteer Projects</h2>
						<span>From School projects while I\'m attending UW, plugins, and random languages and technologies I wanted to learn along the way.</span>
					<img  src="../images/standard6.png" />
                                        </div>
				</div>
                            ');?>
                            
                            <?=anchor('portfolio/projects','
                            <div class="album">
					
					<div class="album_desc orange">
						<h2>Other Projects</h2>
						<span>From School projects while I\'m attending UW, plugins, and random languages and technologies I wanted to learn along the way.</span>
					<img  src="../images/standard6.png" />
                                        </div>
				</div>
                            ');?>
			</div>
            


    

                    <!--<div id="newsContainer">

                                <div class="news">
                                    <h2>Recent Events</h2>
                                    <a href="#" id="newsBack" style="text-align:center;display:block; margin:5px 0px 5px 0px;"><img class="imgUp" style="width:10%;height:2%;" src="../images/nextBtnUp.png" /></a>
                                    <div id="recentNews">
                                          
                                        <div class="newFeed">
                                                 
                                                <p style="line-height:1.3em;padding:19px 0px;">End</p>
                                        </div>
                                        
                                         <div class="newFeed">
                                                <h3>03/03/2012</h3>
                                                <p>here is some information1 about this date.... <a href="#">View More</a></p>
                                        </div>
                                         <div class="newFeed">
                                                <h3>04/03/2012</h3>
                                                <p>here is some information1 about this date.... <a href="#">View More</a></p>
                                        </div> 
                                        <div class="newFeed">
                                                <h3 >05/03/2012</h3>
                                                <p>here is some information1 about this date.... <a href="#">View More</a></p>
                                        </div>
                                        
                                        <div class="newFeed">
                                                <h3>06/01/2012</h3>
                                                <p>here is some information1 about this date.... <a href="#">View More</a></p>
                                        </div>
                                        <div class="newFeed">
                                                <h3>06/03/2012</h3>
                                                <p>here is some information1 about this date.... <a href="#">View More</a></p>
                                        </div>
                                         <div class="newFeed">
                                                <h3>06/03/2012</h3>
                                                <p>here is some information1 about this date.... <a href="#">View More</a></p>
                                        </div>
                                        <div class="newFeed">
                                                 
                                                <p style="line-height:1.3em;padding:0px 0px;">End</p>
                                        </div>

                                    </div>  
                                     <a href="#" id="newsUp" style="text-align:center;display:block;"><img class="imgUp" style="width:10%;height:2%;padding:3px;" src="../images/nextBtnDown.png" /></a>
                                   
                                </div>
                        
                        
                               
                    </div>-->
     
<!--col2 end--></div>

<!--main end--></div>
      
      <script>
          $(document).ready(function(){
              
              
              


             // $('#mainInfo').delay(1200).slideDown(800);
        $('.newFeed:lt(2),.upcomingFeed:lt(4)').hide();
        $('.newFeed:gt(6),.upcomingFeed:gt(6)').hide();
        
        $('#upcomingUp').hide();
        $('#newsUp').hide();
        
             $('#newsBack').click(function(){
                    if($('#recentNews div:visible:first p').html() === "End"){
                        return false;}
                    
                    $('#recentNews div:visible:first').prev().fadeIn('slow');
                    $('#recentNews div:visible:last').hide();
                      $('#newsUp').show();
             });
             
             $('#newsUp').click(function(){
                 if($('#recentNews div:visible:last p').html() === "End"){
                        return false;}
                    
                    $('#recentNews div:visible:first').hide();
                    $('#recentNews div:visible:last').next().fadeIn();
             });
             
             $('#upcomingBack').click(function(){
                    if($('#upcomingNews div:visible:first p').html() === "End"){
                        return false;}
                    
                    $('#upcomingNews div:visible:first').prev().fadeIn('slow');
                    $('#upcomingNews div:visible:last').hide();
                      $('#upcomingUp').show();
             });
             
             $('#upcomingUp').click(function(){
                 if($('#upcomingNews div:visible:last p').html() === "End"){  $('#upcomingUp').hide();
                        return false;}
                    
                    $('#upcomingNews div:visible:first').hide();
                    $('#upcomingNews div:visible:last').next().fadeIn();
             });

        var info = '<div class="newFeed"><h3 style="text-decoration:underline">03/22/2012</h3><p style="line-height:1.3em;">here is some information1 about this date.... <a href="#">View More</a></p></div>';
          });    
  </script>