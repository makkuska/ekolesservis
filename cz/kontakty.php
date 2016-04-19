<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "kontakty" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>LT EkoLesServis | Kontakty</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="kontakty container">
      <?php include_once("header.html") ?>
        <div id="first" class="kontakty">

          <div id="kontakty" class="container container-padding">
            <h1 class="page-header">Kontakty</h1>
            <div id="sidlo" class="container">
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <address>
                  <span>Fakturační údaje</span>
                  <dl class="dl-horizontal">
                    <dt>název firmy</dt>
                    <dd><strong>LT EkoLesServis s.r.o.</strong></dd>
                    <dt></dt>
                    <dd>zastoupená Ing. Liborem Tandlerem - jednatelem</dd>
                    <dt>sídlo</dt>
                    <dd>Příkazy 66, 783 33 Příkazy</dd>
                    <dt>ič</dt>
                    <dd>28647289</dd>
                    <dt>dič</dt>
                    <dd>CZ28647289</dd>
                    <dt></dt>
                    <dd>firma zapsána v OR vedené KS v Ostravě, oddíl C, vložka 45103</dd>
                    <dt><br /></dt>
                    <dd><br /></dd>
                    <dt>bankovní spojení</dt>
                    <dd>Fio Banka, a.s., pobočka Olomouc</dd>
                    <dt>číslo účtu</dt>
                    <dd>2900106918/2010</dd>
                  </dl>
                </address>
              </div><!-- class="container col-md-4">-->
                <?php include_once("mapa.html") ?>
            </div><!-- div sidlo  class="container"-->

            <h2 class="page-header">Kontaktní osoby</h2>
            <div id="osoby" class="container">
              <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Jednatel společnosti</i></dd>
                    <dt></dt>
                    <dd><strong>Ing. Libor TANDLER</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 603 826 724</dd>
                    <dt>e-mail</dt>
                    <dd>tandler@ekolesservis.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Realizační technik</i></dd>
                    <dt></dt>
                    <dd><strong>Mgr. Slavomír DOSTALÍK</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 737 950 802</dd>
                    <dt>e-mail</dt>
                    <dd>dostalik@ekolesservis.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
              </div><!-- div container-->
            </div><!-- div osoby class="container"-->
          </div><!-- div kontakty -->

        <?php include_once("kontakt_nas.html") ?> 
        <?php include_once("footer.html") ?>

      </div> <!-- id="first" -->
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
