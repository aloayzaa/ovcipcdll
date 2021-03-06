<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            body {
                margin-top:50px;
                margin-right: 50px;
                margin-left: 50px;
                margin-bottom: -100px;  
                color: black;
                position:absolute; 
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }
            #constancia{
                font-size: 55px;
                font-family: "Arial Black",Gadget,sans-serif;
                text-align: center;

            }
            #otorgado{
                text-align: center;
                font-weight: bold;
                font-size: 30px;
                margin: 0;

            }
            #persona{
                /*font-family: serif;
                text-align: center;
                font-size: 32px;*/

            }
            #contenido{
                font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
                text-align: justify;
                font-size: 23px;
                line-height: 1.2em;
                /*     margin: 0 auto; */


            }
            #contenido1{
                font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
                text-align: justify;
                font-size: 21px;
                line-height: 1.2em;
                /*     margin: 0 auto; */
            }
            #fecha{
                font-size:18px;
                text-align: right; 
                padding-top: 5px;  
            }
            #decano{
                text-align: center;
                font-size: 18px;
            }
            #docente{
             text-align: center;
             font-size: 18px;
            }
            #div_decano{
                width: 45%;
                padding-left: -2.5em;
            }
            #div_docente{
                      width: 45%;
            padding-left: 10.5em;
            }

            #div_decano,#div_docente{
                display:inline-block;
            }
            #div_imagen{

            }


        </style>
    </head>
    <?php $i = 0;
    foreach ($listado as $certificado) { ?> 
        <body>
            <?php
            $sub = substr($certificado['titulo_evento'][$i], 0, 4);
            if ($certificado['tipocertificado'][$i] == 'Asistente') {
                if ($sub == 'Cert' || $sub == 'Conf' || $sub == 'Capa' || $sub == 'Expo' || $sub == 'Pone') {
                    $conjuntor = "a la";
                } else {
                    $conjuntor = "del";
                }
            } else {
                if ($sub == 'Cert' || $sub == 'Conf' || $sub == 'Capa' || $sub == 'Expo' || $sub == 'Pone') {
                    $conjuntor = "de la";
                } else {
                    $conjuntor = "del";
                }
            }
            ?>
            <?php
            if ($certificado['firma'][$i] == 'civiles.png') {
                $cantidad = '700px';
            } else if ($certificado['firma'][$i] == 'sistemas.png') {
                $cantidad = '690px';
            } else if ($certificado['firma'][$i] == 'secretario.png') {
                $cantidad = '735px';
            } else if ($certificado['firma'][$i] == 'agronomica.png') {
                $cantidad = '700px';
            } else if ($certificado['firma'][$i] == 'zootecnia.png') {
                $cantidad = '690px';
            } else if ($certificado['firma'][$i] == 'agricola.png') {
                $cantidad = '670px';
            } else if ($certificado['firma'][$i] == 'electronica.png') {
                $cantidad = '720px';
            } else if ($certificado['firma'][$i] == 'industrial.png') {
                $cantidad = '670px';
            } else if ($certificado['firma'][$i] == 'quimica.png') {
                $cantidad = '670px';
            } else if ($certificado['firma'][$i] == 'minas.png') {
                $cantidad = '700px';
            } else {
                $cantidad = '650px';
            }
            ?>
            <?php if ($i >= 1) { ?>
                         <!--<img style="position:absolute;top:577px;left:120px;" id="firma_dec" src="./uploads/certificados/firma/decano.png"/>
                      <img style="position:absolute;top:593px;left:<?php echo $cantidad; ?>;" id="firma_cap" src="./uploads/certificados/firma/<?php echo $certificado['firma'][$i]; ?>"/>-->
                <div id="div_decano" style="position:absolute;top:890px;left:-20px;"> 
                          <p id="decano">Ing. Luis Mesones Odar<br>
                             Decano</p>
            </div>  
                                   <div id="div_docente" style="position:absolute;top:890px;left:8px;">
                            <p id="docente" >Ing. Julio Kuroiwa Horiuchi</p><br>
            <center>Expositor</center>
            </div>
            <div id="div_docente" style="position:absolute;top:890px;left:240px;">
                              <p id="docente" >Ing. <?php echo $certificado['presidente'][$i]; ?></p><br>
              <center><?php echo $certificado['cargo'][$i]; ?></center>
            </div>
            <div id="div_imagen">   
                <center>
                    <img style="position:absolute;top:370px;left:450px;" width="100" height="105" src="<?php echo './uploads/certificados/qr/eventos/' . $certificado['image'][$i] . '.png'; ?>" />
                </center>
            </div> 
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php } else { ?>
        <!-- <img style="position:absolute;top:539px;left:120px;" id="firma_dec" src="./uploads/certificados/firma/decano.png"/>
        <img style="position:absolute;top:555px;left:<?php echo $cantidad; ?>;" id="firma_cap" src="./uploads/certificados/firma/<?php echo $certificado['firma'][$i]; ?>"/>-->
            <div id="div_decano" style="position:absolute;top:840px;left:-20px;"> 
                        <p id="decano">Ing. Luis Mesones Odar<br>
            Decano</p>
        </div> 
                      <div id="div_docente" style="position:absolute;top:840px;left:8px;">
                      <p id="docente" >Ing. Julio Kuroiwa Horiuchi</p><br>
            <center>Expositor</center>
        </div> 
           <div id="div_docente" style="position:absolute;top:840px;left:240px;">
                 <p id="docente" >Ing. <?php echo $certificado['presidente'][$i]; ?></p><br>
            <center><?php echo $certificado['cargo'][$i]; ?></center>

        </div>

        <div id="div_imagen">   
            <center>
                <img style="position:absolute;top:340px;left:450px;" width="100" height="105" src="<?php echo './uploads/certificados/qr/eventos/' . $certificado['image'][$i] . '.png'; ?>" />
            </center>
        </div> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php } ?>

    <p id="constancia" style="line-height:12px;">
            <strong>CONSTANCIA</strong>
    </p>
     <center><img src="./uploads/certificados/lineas.png" /></center>
    <p id="otorgado"> Otorgado a </p>
        <?php if (strlen($certificado['nombres'][$i]) <= 40) { ?>
        <p id="persona" style="  font-family: 'Arial Black',Gadget,sans-serif;
           text-align: center;
           font-size: 25px;"><strong><?php echo $certificado['nombres'][$i]; ?></strong></p> 
     <hr size="1px" noshade="noshade" color="black" />
    <?php } else { ?>
        <p id="persona" style="  font-family: 'Arial Black',Gadget,sans-serif;
           text-align: center;
           font-size: 22px;"><strong><?php echo $certificado['nombres'][$i]; ?></strong></p> 
         <hr size="1px" noshade="noshade" color="black" />
       <?php } ?>

    <?php if (strlen($certificado['titulo_evento'][$i]) <= 40 || $certificado['horas'][$i] != 0) { ?>
        <p id="contenido">Por su participación como <strong><?php echo $certificado['tipocertificado'][$i] ?></strong> <?php echo $conjuntor; ?> <strong><?php echo $certificado['titulo_evento'][$i]; ?></strong>, organizado por 
           <?php echo $certificado['tipoevento'][$i] ?>,  
           <?php if ($certificado['horas'][$i] != 0) { ?>
                con una duración de <?php echo $certificado['horas'][$i] ?> horas académicas.

            <?php }
        } else {
            ?>
        <p id="contenido1">Por su participación como <strong><?php echo $certificado['tipocertificado'][$i] ?></strong> <?php echo $conjuntor; ?> <strong><?php echo $certificado['titulo_evento'][$i]; ?></strong>, organizado por 
            <?php echo $certificado['tipoevento'][$i] ?>,  
            <?php if ($certificado['horas'][$i] != 0) { ?>
                con una duración de <?php echo $certificado['horas'][$i] ?> horas académicas.
            <?php }
        } ?>

    </p>
    <p id="fecha">Trujillo, <?php echo $certificado['fecha_evento'][$i] ?></p>
    <?php if (strlen($certificado['titulo_evento'][$i]) <= 40) { ?>
        <br>
        <br>
    <?php } else { ?>
        <br>
        <br>
    <?php } ?>

    </body>


    <?php $i++;
} ?>
</html>
