<div class="inner-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">CLIENTES</span>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">    
                         </div>
                            <br>
                            <br>
                            <table id="user" class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td style ="width:35% ;">NOMBRE</td>
                                        <td style ="width:65% ;"><?php echo $ver_clie["nombre"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>APELLIDOS</td>
                                        <td><?php echo $ver_clie["apellidos"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>NACIMIENTO</td>
                                        <td><?php echo $ver_clie["nacimiento"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>SEXO</td>
                                        <td><?php echo $ver_clie["sexo"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>DNI</td>
                                        <td><?php echo $ver_clie["documento"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>DIRECCION</td>
                                        <td><?php echo $ver_clie["direccion"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>CODIGO POSTAL</td>
                                        <td><?php echo $ver_clie["codigo_postal"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>TELEFONO1</td>
                                        <td><?php echo $ver_clie["telefono"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>TELEFONO2</td>
                                        <td><?php echo $ver_clie["telefono2"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>CORREO ELECTRONICO</td>
                                        <td><?php echo $ver_clie["correo_electronico"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>NOTA</td>
                                        <td><?php echo $ver_clie["nota"] ?></td>
                                    </tr>
                                     <tr>
                                        
                                        <td><form action="" method="POST"><button type="submit" name="alquilar"  class="btn btn-success btn-oval rippler rippler-default">ASIGNAR ALQUILER A ESTE CLIENTE</button></form></td>
                                        <td><?php if(isset($_POST["alquilar"])){
                                            echo " <a href='".site_url('Alquiler/alquilar_producto/'.$ver_clie['ID'].'/pelicula')."'><button class='btn btn-primary btn-oval rippler rippler-default'>PELICULAS</button></a>  <a href='".site_url('Alquiler/alquilar_producto/'.$ver_clie['ID'].'/videojuego')."'><button class='btn btn-inverse btn-oval rippler rippler-default'>VIDEOJUEGOS</button></a>" ;
                                        } ?></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><a href="<?php echo site_url('Venta/venta_producto/'.$ver_clie['ID'].'');?>"><button class="btn btn-info btn-oval rippler rippler-default">VENDER PRODUCTO A ESTE CLIENTE</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><a href="<?php echo site_url('Clientes/actualizar_datos/'.$ver_clie['ID'].'');?>"><button type="button">IR A ACTUALIZAR DATOS DE CLIENTE</button></a></td>
                                        <td>
                                            <form action="" method="POST"><button type="submit" name="borrar" class="btn btn-danger btn-flat rippler rippler-default">BORRAR CLIENTE</button></form><?php if(isset($_POST["borrar"])){
                                                if(isset($ver_clie["sin"][0]["ID"])){
                                                    echo "<strong>DEBE DE DEVOLVER TODOS LOS PRODUCTOS ALQUILADOS PRIMERO PARA BORRAR EL CLIENTE POR FAVOR</strong>";
                                                }else{
                                                echo " <strong>¿ESTA SEGURO QUE QUIERE BORRAR ESTE CLIENTES?</strong><form action='' method='POST'> <button type='submit'  name='si' value={$ver_clie['ID']}  class='btn btn-primary btn-oval rippler rippler-default'>SI</button>   <button 
                                                     type='submit'  name='no'   class='btn btn-inverse btn-oval rippler rippler-default'>NO</button></form>" ;
                                            }
                                        } ?>
                                        </td>
                                    </tr>
                                    
                                   
                                </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                        <div class="card-header bg-primary">
                            <span class="card-title">PRODUCTO ALQUILADO</span>
                        </div>
                        <div class="card-content">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID_COPIA
                                        <th>TIPO</th>
                                        <th>TITULO</th>
                                        <th>DEVOLVER</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($ver_clie['sin'] as $ver){
                                       echo "<tr>
                                            <td>{$ver['ID_copia']}</td>
                                            <td>{$ver['tipo']}</td>
                                            <td>{$ver['titulo']}</td>
                                            <td><a href='".site_url('Alquiler/devolver_producto/'.$ver['ID'].'/'.$ver['ID_producto'].'/'.$ver['ID_copia'])."'><button class='btn btn-danger btn-flat rippler rippler-default'>DEVOLVER</button></a></td>
                                            
                                        </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>