
<!--foot Start--><div id="footer">
                        <a href="#" id="credits">Dwayne Tucker</a>
                        <div class="section">
                                   <!--social network plugins-->
                            <div class="addthis_toolbox addthis_default_style">
                                <a href="#">fb</a>
                                <a href='#'>tweet</a>
                                <a href='#'>google</a>
                                <a href='#'>del</a>
                                <a href='#'>at</a>
                            </div>
                            
                        </div>
                        <div id="back-footer"></div>
<!--foot end--></div>

                <div id="dialog-modal" title="Basic modal dialog">
                    <p>Adding the modal overlay screen makes the dialog look more prominent because it dims out the page content.</p>
                </div>

<!--end of container--></div>
    </body>
</html>
<script>
	
    $(document).ready(function() {
         //col1 float in Name and lower nav /
        $('.col1').animate({
            'top': '0px'
        }, 1000, 'easeOutBack');
        //onlice dialog blue modal for demos
        $(".boxee").click(function(index) {	
            //$(this).hide('explode', {}, 600);
            $("#dialog-modal").dialog({
                dialogClass: 'dialogWithDropShadow',
                height: 140,
                modal: true,
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
                },
                beforeClose: function(event, ui){
                    $('body').css('overflow','auto');
                }
            });
        });
			
    });
  
</script>