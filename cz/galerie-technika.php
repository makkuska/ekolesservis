              <?php include_once("galerie_upcontent.php") ?>

                <div id="technika" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/technika/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/technika/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/technika/zm/IMG3.jpg" ?> />';
                        }
                      },
                      adaptiveHeight: true,
                      controls: true,
                      autoControls: true,
                      captions: true,
                    });
                    });
                  </script>
                  <ul class="foto">
                    <li><img title="Pegeot boxer" src=<?php echo "{$filespath}files/img/galery/technika/IMG1.jpg" ?>  alt="Pegeot boxer" /></li>
                    <li><img title="Štěpkovač Jensen A 530 xl" src=<?php echo "{$filespath}files/img/galery/technika/IMG2.jpg" ?>  alt="Štěpkovač Jensen A 530 xl" /></li>
                    <li><img title="Pařezová fréza" src=<?php echo "{$filespath}files/img/galery/technika/IMG3.jpg" ?>  alt="Pařezová fréza" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
