<script>
    $(document).ready(function() {
        var dataTable = {
            tabla: "BuzonSugerencia",
            ordenaPor: new Array([0, "asc"])
        };
        paginaDataTable(dataTable);
    })

</script>
<h3> Buzon de Sugerencias </h3>
</script>
 <div class="control-group">                 
        <div class = "controls">
            <legend></legend> 
            <label for="tipos" class="control-label">Seleccione:</label>
            <select name="tipos" id="tipos" onchange="filtroTipo(this)"  class="input-medium tip" style="width:260px;" required="required" data-original-title="Selecione el Area" data-placement="right">           
                         <option value="">Selecciones el Area</option>
                    <?php
                    foreach($Areas as $Areas) {
                    ?>
                         <option value="<?=$Area -> nTNotCodigo ?>"><?=$Area -> nTNotDescripcion ?></option>
                    <?php } ?>
            </select>
        </div>
    </div>
<div id="ContenedorGeneralPendientes">

    <div class="form" style="width: 75%">
        <?php if ($buzonsug > 0) { ?>
            <table id="BuzonSugerencia"  class="display" cellpadding="0" cellspacing="0" border="0">
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
                    <?php foreach ($buzonsug as $buzonsug) {//1 ?>
                        <tr>                                  
                            <!--<td style="width: 380px;text-align: center;"><?php echo $buzonsug["id"]; ?></td>-->
                            <td style="width: 380px;text-align: center;"><?php echo $buzonsug["emisor"]; ?></td>
                            <td style="width: 180px;text-align: center;"><?php echo $buzonsug["asunto"]; ?></td>
                            <td style="width: 380px;text-align: center;"><?php echo $buzonsug["fecha"]; ?></td>
                            <!--<td style="width: 380px;text-align: center;"><?php echo $buzonsug["estado"]; ?></td>-->

                                    <?php echo
                            "<td 
      style='text-align:center;vertical-align: middle;cursor:pointer;' 
      style='width:50px;text-align:center;vertical-align: middle;'>
      
   <img title='Responder Mensaje' src='" . base_url() . "img/icon_email.png' 
       
       width='20' height='20' onclick=MensajePopup(" . $buzonsug["id"] . ")>

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