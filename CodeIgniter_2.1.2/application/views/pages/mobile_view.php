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
        
        $('#ps_close').click(function(){
             $("#dialog-modal").dialog("close");
        });
        
     $(".demo").click(function(index) {
         
      var theTitle = $(this).find('.title').text();
      console.log(theTitle);
            $.ajax({
            type: "POST",
            url: "http://localhost:8080/Portfolio/CodeIgniter_2.1.2/index.php/portfolio/get_images",
            data: { title: theTitle},
            success: function(msg){
                if(msg !== ''){
                     msg = $.parseJSON(msg);
                    $('#dialog-modal').attr('title', msg.title);
                    $('#dialog-modal').html('<p><img src="../../images/'+msg.image+'" /></p>');
                   
                }else{
                    $('#dialog-modal').attr('title', '');
                    $('#dialog-modal').html('');
                }
               setTimeout(function(){ $("#dialog-modal").dialog("open"); }, 100);
                     $("#dialog-modal").dialog({
                            dialogClass: 'dialogWithDropShadow',
                            modal: true,
                            minWidth: 300,
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