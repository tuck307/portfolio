<!--col2 start--><div class="col2" >
                            
                            <div class="demos">

                                <?php foreach($query->result() as $row): ?>

                                    <div class="demo">
                                            <a href="#">
                                                <img style="" src="../images/<?=$row->small_image?>" alt="Standard" />
                                                <div class="title"><?=$row->title?></div>
                                            </a>
                                    </div>

                                <?php endforeach; ?>

                            </div>
  <!--col2 end--></div>
 
<!--main end--></div>
