
<div class="inner-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary bg-primary">
                            <span class="card-title">COPIAS</span>
                        </div>
                        <div class="card-content">
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID_COPIA</th>
                                        <th>TIPO</th>
                                        <th>TITULO DE COPIA</th>
                                        <th>COPIA CREADA EN LA FECHA</th>
                                        <th>ALQUIADO</th>
                                         <th>ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($copia_peli as $copia) {
                                            if($copia["ID"]==NULL){
                                                echo "<strong>NO HAY COPIAS DEL PRODUCTO {$copia['titulo']}</strong><br>";
                                            }else{
                                            if($copia["alquilado"]==0){
                                                $alquilado="NO";
                                            }else{
                                                $alquilado="SI";
                                            }
                                            if($copia["estado"]==1){
                                                $estado="buen estado";
                                            }else{
                                                $estado="mal estado";
                                            }
                                               echo "<tr>
                                                    <td>{$copia['ID']}</td>
                                                    <td>{$copia['tipo']}</td>
                                                    <td>{$copia['titulo']}</td>
                                                    <td>{$copia['fecha']}</td>
                                                    <td>{$alquilado}</td>
                                                    <td>{$estado}</td>
                                                    <td><form action='' method='POST'><button name='{$copia['ID']}' type='submit' class='btn btn-danger btn-flat rippler rippler-default'>BORRAR COPIA</button></form>
                                                    ";
                                                    if(isset($_POST[$copia['ID']])){
                                                        if($alquilado=="SI"){
                                                            echo "debe de devolver antes el producto para poder borrarlo";
                                                            header("Refresh:1; url=");
                                                        }else{
                                                        echo "¿SEGURO QUE QUIERE BORRAR ESTA COPIA?
                                                        <form action='' method='POST'><button name='si' value='{$copia['ID']}' type='submit' class='btn btn-danger btn-flat rippler rippler-default'>SI</button> <button name='no'  type='submit' class='btn btn-danger btn-flat rippler rippler-default'>NO</button></form>";
                                                        }
                                                    }
                                                    if($estado=="mal estado"){
                                                        echo"<td><a href='".site_url('Alquiler/actualizar_estado_copia/'.$copia['ID'].'/'.$this->uri->segment(3).'/'.'buen_estado')."'><button  class='btn btn-info btn-oval rippler rippler-default'>CAMBIAR A BUEN ESTADO</button></form><td></tr>";
                                                    }elseif($estado=="buen estado"){
                                                        if($alquilado=="SI"){
                                                            echo "<td>NO PUEDE CAMBIAR EL ESTADO HASTA QUE DEVUELVA EL PRODUCTO</td></tr>";
                                                        }else{
                                                        echo"<td><a href='".site_url('Alquiler/actualizar_estado_copia/'.$copia['ID'].'/'.$this->uri->segment(3).'/'.'mal_estado')."'><button  class='btn btn-warning btn-oval rippler rippler-default'>CAMBIAR A MAL ESTADO</button></form><td></tr>";
                                                        }
                                                    }

                                                
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /5. $DEFAULT_TABLES -->
                    </div>
                </div>
            </div>
