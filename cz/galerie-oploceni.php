              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG4.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG5.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG6.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG8.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG3.jpg" ?> />';
                          case 6:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG7.jpg" ?> />';
                          case 7:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG2.jpg" ?> />';
                          case 8:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG9.jpg" ?> />';
                          case 9:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG10.jpg" ?> />';
                          case 10:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG11.jpg" ?> />';
                          case 11:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG12.jpg" ?> />';
                          case 12:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG13.jpg" ?> />';
                          case 13:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG14.jpg" ?> />';
                          case 14:
                            return '<img src=<?php echo "{$filespath}files/img/galery/oploceni/zm/IMG15.jpg" ?> />';
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
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG1.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG4.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG5.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG6.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG8.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG3.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG7.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG2.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG9.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG10.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG11.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG12.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG13.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG14.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/oploceni/IMG15.jpg" ?>  alt="ukazka realizace" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
