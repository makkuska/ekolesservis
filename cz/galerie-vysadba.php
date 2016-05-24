              <?php include_once("galerie_upcontent.php") ?>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <script type="text/javascript" >
                    $(document).ready(function(){
                    $('.foto').bxSlider({
                      buildPager: function(slideIndex){
                        switch(slideIndex){
                          case 0:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG1.jpg" ?> />';
                          case 1:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG2.jpg" ?> />';
                          case 2:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG3.jpg" ?> />';
                          case 3:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG4.jpg" ?> />';
                          case 4:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG5.jpg" ?> />';
                          case 5:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG6.jpg" ?> />';
                          case 6:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG7.jpg" ?> />';
                          case 7:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG8.jpg" ?> />';
                          case 8:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG9.jpg" ?> />';
                          case 9:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG10.jpg" ?> />';
                          case 10:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG11.jpg" ?> />';
                          case 11:
                            return '<img src=<?php echo "{$filespath}files/img/galery/vysadba/zm/IMG12.jpg" ?> />';
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
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG1.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG2.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG3.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG4.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG5.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG6.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG7.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG8.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG9.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG10.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG11.jpg" ?>  alt="ukazka realizace" /></li>
                    <li><img title="Ukázka realizace" src=<?php echo "{$filespath}files/img/galery/vysadba/IMG12.jpg" ?>  alt="ukazka realizace" /></li>
                  </ul>      
                </div><!-- div -->

              <?php include_once("galerie_downcontent.php") ?>
