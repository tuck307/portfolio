<!--col2 start--><div class="col2" >
                            
                            <div class="demos">

                                <?php foreach($query->result() as $row): ?>

                                    <div class="demo">
                                            <a href="#">
                                                <img style="" src="../../images/<?=$row->small_image?>" alt="Standard" />
                                                <div class="title"><?=$row->title?></div>
                                            </a>
                                    </div>

                                <?php endforeach; ?>
                                                              
                            </div>
  <!--col2 end--></div>
 
<!--main end--></div>

<script>
    $(document).ready(function() {
        
        $("#photoSlide").children().hide();
        $("#photoSlide li:first-child").show();
        
        
        $("#left").click(function(){
         var curPhoto = $("#photoSlide li:visible");
         curPhoto.hide();
             if(curPhoto.prev().length === 0){
                 $("#photoSlide li:last-child").stop().show();
                 $('.ui-dialog').stop().hide().fadeIn(500);
            }
            else{
                $('.ui-dialog').stop().hide().fadeIn(500);
                  curPhoto.prev().stop().show();
            }
        });
        
        $("#right").click(function(){
             var curPhoto = $("#photoSlide li:visible");
             curPhoto.hide();
            if(curPhoto.next().length === 0){
                $('.ui-dialog').stop().hide().fadeIn(500);
                 $("#photoSlide li:first-child").stop().show();
            }
            else{
                $('.ui-dialog').stop().hide().fadeIn(500);
                  curPhoto.next().stop().show();
            }
        });
        
        
        
        
        $('#ps_close').click(function(){
             $("#dialog-modal").dialog("close");
        });
        
     $(".demo").click(function(index) {
         
      var theTitle = $(this).find('.title').text();
      console.log(theTitle);
            $.ajax({
            type: "POST",
            url: "http://localhost:8080/Portfolio/CodeIgniter_2.1.2/index.php/mobile/get_images",
            data: { title: theTitle},
            success: function(msg){
                if(msg !== ''){
                     msg = $.parseJSON(msg);

                     var mobileContent = '<ul id="photoSlide">';
                      $(msg.mobile_items).each(function(){
                        
                            mobileContent += '<li><div style="min-height:350px;text-align:center;"><img src="../../images/'+ this.image+ '" /></div><div style="min-width:300px;max-width:600px;margin:auto;padding: 10px;border: 1px solid #DDD;background: #DDD;font-family: deja vu;text-shadow: 0px -1px 1px rgba(255, 255, 255, 0.75), 0px 1px 1px rgba(36, 36, 36, 0.1);">'+ this.desc + '</div></li>';
        
                      });
                      mobileContent += '</ul>'
                    $('#dialog-modal').attr('title', msg.mobile_items.title);
                    $('#dialog-modal').html(mobileContent);
                    $("#photoSlide").children().hide();
                    $("#photoSlide li:first-child").show();
                   
                }else{
                    $('#dialog-modal').attr('title', '');
                    $('#dialog-modal').html('No photo');
                }
                
               setTimeout(function(){ $("#dialog-modal").dialog("open"); }, 100);
               
                     $("#dialog-modal").dialog({
                            dialogClass: 'dialogWithDropShadow',
                            modal: true,
                            minWidth: 300,
                            minHeight: 400,
                            width:'auto',
                            autoOpen: false,
                            show: {
                                effect: 'fade',
                                duration: 700
                            },
                            hide: {
                                effect: 'fade',
                                duration: 400
                            },
                            open: function(event, ui){
                                $('body').css('overflow','hidden');
                                $('.ui-widget-overlay').css('width','100%'); 
                                $('.ui-widget-overlay').hide().fadeTo(700, 0.5);  
                                 $('.ps_show').show(700);
                            },
                            beforeClose: function(event, ui){
                                $('body').css('overflow','auto');
                                $('.ps_show').hide();
                            }
                        });
                        
                       }
            });
         });
    });
</script>