<script>
$(document).ready(function(){
    var dataTable = {
        tabla           : "BuzonReclamos",
        ordenaPor       : new Array([0, "asc" ])
    };
    paginaDataTable(dataTable);
})  

</script>
<h3> Buzon de Reclamos </h3>
 <div id="ContenedorGeneralPendientes">
     
     <div class="form" style="width: 75%">
       <?php if ($buzon > 0) { ?>
     <table id="BuzonReclamos"  class="display" cellpadding="0" cellspacing="0" border="0">
      <thead>
      <tr>
      <!--<th>Id</th>-->
      <th>Emisor</th>
      <th>Asunto</th>
      <th>Fecha</th>  
      <!--<th>Estado</th>-->  
      <th>Opciones</th>
      </tr>
       </thead>
           <tbody>
         <?php foreach ($buzon as $buzon) {//1 ?>
                   <tr>                                  
            <!--<td style="width: 380px;text-align: center;"><?php echo $buzon ["id"]; ?></td>-->
    <td style="width: 380px;text-align: center;"><?php echo $buzon ["emisor"]; ?></td>
 <td style="width: 180px;text-align: center;"><?php echo $buzon ["asunto"]; ?></td>
  <td style="width: 380px;text-align: center;"><?php echo $buzon ["fecha"]; ?></td>
  <!--<td style="width: 380px;text-align: center;"><?php echo $buzon ["estado"]; ?></td>-->

            <?php echo
                            "<td 
      style='text-align:center;vertical-align: middle;cursor:pointer;' 
      style='width:50px;text-align:center;vertical-align: middle;'>
      
   <img title='Visualizar Mensaje' src='" . base_url() . "img/icon_email.png' 
       
       width='20' height='20' onclick=MensajePopup(" . $buzon["id"] . ")>

   </td>";
                            ?>
                        </tr>
    <?php } ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "No se encontraron registros";
        }
        ?>

    </div>  
</div>
</div>