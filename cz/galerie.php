              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/zahradnickeprace/zm/IMG10.JPG" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/zahradnickeprace/zm/IMG12.JPG" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/zahradnickeprace/zm/IMG13.JPG" ?> />';
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
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/zahradnickeprace/IMG10.JPG" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/zahradnickeprace/IMG12.JPG" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/zahradnickeprace/IMG13.JPG" ?>  alt="ukazka realizace" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
