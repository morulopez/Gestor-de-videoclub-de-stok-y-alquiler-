<div class="inner-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">PELICULAS</span>
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
                                        <td style ="width:35% ;">TITULO</td>
                                        <td style ="width:65% ;"><?php echo $pelicula['titulo'];?></td>
                                    </tr>
                                    <tr>
                                        <td>GENERO</td>
                                        <td><?php echo $pelicula['nombre'];?></td>
                                    </tr>
                                    <tr>
                                        <td>PRECIO</td>
                                        <td><?php echo $pelicula['precio'];?></td>
                                    </tr>
                                    <tr>
                                        <td>AÑO</td>
                                        <td><?php echo $pelicula['year'];?></td>
                                    </tr>
                                    <tr>
                                        <td>DIRECTOR</td>
                                        <td><?php echo $pelicula['director'];?></td>
                                    </tr>
                                    <tr>
                                        <td>MINUTOS</td>
                                        <td><?php echo $pelicula['minutos'];?></td>
                                    </tr>
                                    <tr>
                                        <td>SINOPSIS</td>
                                        <td><?php echo $pelicula['sinopsis'];?></td>
                                    </tr>
                                    <tr>
                                       <form action="" method="POST">
                                        <td><button name ="copia" class="btn btn-warning btn-oval rippler rippler-default">CREAR COPIA DE PELICULA</button>
                                        
                                        </form>
                                            <?php if(isset($_POST["copia"])){
                                                echo "<form action='' method='POST'><br>
                                                    <button type='submit' name='si_copia' value={$pelicula['ID']}  class='btn btn-primary btn-oval rippler rippler-default'>SI</button>   
                                                    <button type='submit'  name='no_copia'   class='btn btn-inverse btn-oval rippler rippler-default'>NO</button></form></td>";
                                                    }
                                            ?>
                                        <td> <a href="<?php echo site_url('Peliculas/listado_copias/'.$pelicula['ID'].'');?>"><button class="btn btn-inverse btn-oval rippler rippler-default">VER LISTADO DE COPIAS</button></a></td>
                                        
                                    </tr> 
                                    <tr>
                                        
                                        <td><a href="<?php echo site_url('Peliculas/actualizar_pelicula/'.$pelicula['ID']."/".$pelicula['ID_genero'].'');?>"><button type="button">IR A ACTUALIZAR DATOS DE PELICULA</button></a></td>
                                        <td><form action="" method="POST"><button type="submit" name="borrar" class="btn btn-danger btn-flat rippler rippler-default">BORRAR PELICULA</button></form><?php if(isset($_POST["borrar"])){
                                            echo " <strong>¿ESTA SEGURO QUE QUIERE BORRAR ESTA PELICULA?</strong><form action='' method='POST'><button type='submit'  name='si' value='{$pelicula['ID']}' class='btn btn-primary btn-oval rippler rippler-default'>SI</button><button 
                                            type='submit' name='no' class='btn btn-inverse btn-oval rippler rippler-default'>NO</button></form>" ;
                                        } ?></td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>