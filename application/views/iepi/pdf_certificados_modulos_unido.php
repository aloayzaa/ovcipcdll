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
        #certificado{
            font-size: 38px;
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
             
          
           // margin-left: 100px;
            text-align: justify;
            font-size: 20px;
            line-height: 1.3em;

         }
         #fecha{
             font-size:20px;
            text-align: right; 
         }
         #decano{
             text-align: center;
             font-size: 20px;
           //  margin-top: 1em;
         }
         #docente{
           //  margin-top: 1em;
             text-align: center;
             font-size: 20px;
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

<?php 
       $i=0;
       foreach ($listado as $certificado) {   ?>
<body>
     <?php if($i>=1){  
            echo '<br><br><br><br><br><br><br><br><br>';
            echo'<img style="position:absolute;top:560px;left:120px;" id="firma_dec" src="./uploads/certificados/firma/decano.png"/> ';
                 echo'<img style="position:absolute;top:610px;left:705px;" id="firma_dec" src="./uploads/certificados/firma/iepi.png"/> ';
            }
            else {
            echo '<br><br><br><br><br><br><br>';
                        echo'<img style="position:absolute;top:520px;left:120px;" id="firma_dec" src="./uploads/certificados/firma/decano.png"/> ';
                             echo'<img style="position:absolute;top:570px;left:705px;" id="firma_dec" src="./uploads/certificados/firma/iepi.png"/> ';
     
            } ?>    
  
   
     <p id="certificado"><strong>CERTIFICADO </strong</p>
          <p id="otorgado"> Otorgado a </p>
          
          <?php if(strlen($certificado['nombres'][$i])<=40) {?>
             <p id="persona" style=" font-family: serif;
             text-align: center;
             font-size: 30px;"><strong><?php echo $certificado['nombres'][$i]; ?></strong></p> 
             <?php } else {  ?>
               <p id="persona" style=" font-family: serif;
             text-align: center;
             font-size: 22px;"><strong><?php $certificado['nombres'][$i]; ?></strong></p> 
             <?php }  ?>
              <p id="contenido">Por haber aprobado el <?php echo $certificado['nromodulo'][$i];?>, <strong><?php echo $certificado['nombre_modulo'][$i];?></strong>, del <?php echo $certificado['nombre_curso'][$i];?>, desarrrollado por 
             la Comisión de <strong>IEPI</strong>, del Consejo Departamental de La Libertad <?php echo $certificado['organizadopor'][$i]; ?> del <?php echo $certificado['fecha_inicio'][$i];  ?> al 
        <?php echo $certificado['fecha_fin'][$i];  ?>, con una duración de <?php echo $certificado['horas'][$i]; ?> horas.
        
        </p>
         
        <p id="fecha">Trujillo,<?php echo $fechahoy?></p>
         <?php if(strlen($certificado['organizadopor'][$i])>20){ ?>
              <br>
                <br>
                 <br>
      
        <?php }else { ?>
                <br>
                <br>
                <br>
                <br>
                
        <?php } ?>
 
      <div id="div_decano" > 
          <p id="decano">Ing. MARCO CABRERA HUAMAN<br>
            Decano</p></p>
      </div>  
      <div id="div_docente">
          <p id="docente" >Ing. <?php echo $certificado['docente_curso'][$i]; ?><br>
              <!--Docente-->
              Presidente IEPI
          </p>
           
      </div>   
         
         
       <div id="div_imagen">   
        <center>
          <img style="margin-top: -5em;" width="95" height="85" src="<?php echo './uploads/certificados/qr/iepi/'.$certificado['qr'][$i].".png"  ?>" />
        </center>
      </div>   
     
</body>

<?php $i++; } ?>
</html>
