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

        }
 
        a {
         color: #003399;
         background-color: transparent;
         font-weight: normal;
        }
        #certificado{
            font-size: 35px;
            font-family: "Arial Black",Gadget,sans-serif;
            text-align: center;
            
        }
        #otorgado{
                text-align: center;
                font-weight: bold;
                font-size: 26px;
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
            font-size: 22px;
            line-height: 1.3em;

         }
         #contenido1{
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
<body>
    <br><br><br><br><br><br><br><br><br>
    <p id="certificado"><strong>CERTIFICADO </strong></p>
          <p id="otorgado"> Otorgado a </p>
          
          <?php if(strlen($datos[2])<=40) {?>
             <p id="persona" style=" font-family: serif;
             text-align: center;
             font-size: 29px;"><strong>Ing. <?php echo $datos[2]; ?></strong></p> 
             <?php } else {  ?>
               <p id="persona" style=" font-family: serif;
             text-align: center;
             font-size: 21px;"><strong>Ing. <?php echo $datos[2]; ?></strong></p> 
             <?php }  ?>
             
         
          
        <?php if(strlen($datos[3])<=60){ ?>       
               
        <p id="contenido">Por haber asistido al <strong><?php echo  $datos[3];?></strong> desarrollado por la
             <strong>Comisión del Instituto de Estudios Profesionales de Ingeniería - IEPI</strong> del Consejo Departamental de La Libertad <?php echo $datos[10];?> del <?php echo $datos[4];  ?> al 
        <?php echo $datos[5];  ?>, con una duración de <?php echo $datos[7];  ?> horas.
        
        </p>
        <?php } else { ?>
         <p id="contenido1">Por haber asistido al <strong><?php echo  $datos[3];?></strong> desarrollado por la
             <strong>Comisión del Instituto de Estudios Profesionales de Ingeniería - IEPI</strong> del Consejo Departamental de La Libertad <?php echo $datos[10];?> del <?php echo $datos[4];  ?> al 
        <?php echo $datos[5];  ?>, con una duración de <?php echo $datos[7];  ?> horas.
        
        </p>
        
        
         <?php }  ?>
        
        
        
        <p id="fecha">Trujillo,<?php echo $fechahoy?></p>
         <?php if(strlen($datos[3])<=60){ ?>    
         <br>
         <br> <br>
         <?php } else { ?>
         <br> <br>
  
         
          <?php }  ?>
   
         
      <!--<div id="div_decano" > 
          <p id="decano">Ing. MARCO CABRERA HUAMAN<br>
            Decano</p>
      </div>  
      <div id="div_docente">
          <p id="docente" >Ing. <?php echo $datos[6]; ?><br>
              Docente
          </p>
           
      </div> --> 
            <div id="div_decano" style="position:absolute;top:620px;left:20px;"> 
          <p id="decano">Ing. Luis Mesones Odar<br>
            Decano</p></p>
      </div>
       <div id="div_decano" style="position:absolute;top:620px;left:360px;"> 
                   <p id="docente">Ing. Aldo Torres López<br>
            Director Académico IPC Perú S.A.C</p>
      </div>    
    <div id="div_docente" style="position:absolute;top:620px;left:460px;">
         <p id="decano">Ing. Roger León Díaz<br>
            Presidente IEPI</p>
      </div> 
 
          <br>
         <br>
         <br>
         <br>
         <br>
         
          <br>
           <br>
            <br>
                  <br>
            <br>  
              <br>       
     
      <center><p style="font-size:18px"><strong>PARTICIPANTE: Ing. <?php echo $datos[2]; ?></strong></p></center> 
      <br>
      <br>
      
      <p style="width:50%;margin: 0 auto;  text-align:center;font-weight: bold; font-size:20px"><?php echo  $datos[3];?> </p>
          <br>
           <br>     
        <!--<br>-->    
       <table border="1" style="margin: 0 auto;">
           <tr >
               <td >
                   <center><p style="padding-right:1em;padding-left:1em;text-align: center;font-weight: bold; font-size:17px"> Promedio Final </p> </center>
               </td>
               <td  >
                   <center><p style="padding-right:2em;padding-left:2em;font-weight: bold; font-size:16px"> <?php echo $datos[8]; ?><p></center>
               </td>
           </tr>
      </table>
        
      <br>
      <br>
         
      <div id="div_imagen">   
    
        <center>
          <img  width="130" height="130" src="<?php echo './uploads/certificados/qr/iepi/'.$datos[9].".png";  ?>" >
          </center>
      </div>
      
        
               
       
        
     
        
       
    
     
</body>
</html>