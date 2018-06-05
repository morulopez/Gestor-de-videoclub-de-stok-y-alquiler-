<div class="inner-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary bg-primary">
                            <span class="card-title">COPIA PRODUCTO PARA ALQUILAR</span>
                            <form action=" " method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group m-b">
                                            <input type="text"  name="copia2" class="form-control" placeholder="nombre del producto">
                                                 <span class="input-group-btn">                    
                                                 <button type="submit"  class="btn btn-default rippler rippler-default btn-flat with-border">Buscar</button>
                                                 </span>
                                        </div>
                                    </div>
                                </div>     
                            </form>
                        </div>
                        <div class="card-content">
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID_COPIA</th>
                                        <th>TITULO</th>
                                        <th>ALQUILADO</th>
                                        <th>ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                   foreach($copia as $copia){
                                         if($copia["alquilado"]==0){
                                                $alquilado="NO";
                                            }else{
                                                $alquilado="SI";
                                            }
                                        if($copia["estado"]==0){
                                            $estado="mal estado";
                                        }else{
                                            $estado="buen estado";
                                        }
                                            echo " <tr>
                                                    <td>{$copia['ID']}</td>
                                                    <td>{$copia['titulo']}</td>
                                                    <td>{$alquilado}</td>
                                                    <td>{$estado}</td>
                                                    <td>";
                                                    if($alquilado=="SI"){
                                                       echo "ESTA COPIA DE PRODUCTO NO ESTA LIBRE PARA ALQUILAR";
                                                    }elseif($estado=="mal estado"){
                                                        echo "ESTA COPIA DE PRODUCTO ESTA EN MAL ESTADO POR LO QUE NO SE PUEDE ALQUILAR";
                                                    }
                                                    else{
                                                        echo "<a href='".site_url('Alquiler/copia_alquilar/'.$copia['ID'].'/'.$copia['ID_producto'].'/'.$this->uri->segment(3))."'><button class='btn btn-success btn-oval rippler rippler-default'>ALQUILAR PRODUCTO</button></a><td></tr>";};                   
                                        }
                                       
                                        
                                    
                                
                                    
                                ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- /5. $DEFAULT_TABLES -->
                    </div>
                </div>
            </div>
