              <?php include_once("galerie_upcontent.php") ?>

                <div id="bagr" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/stezska/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/stezska/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/stezska/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/stezska/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/stezska/zm/IMG5.jpg" ?> />';
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
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/stezska/IMG1.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/stezska/IMG2.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/stezska/IMG3.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/stezska/IMG4.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/stezska/IMG5.jpg" ?>  alt="ukazka realizace" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
