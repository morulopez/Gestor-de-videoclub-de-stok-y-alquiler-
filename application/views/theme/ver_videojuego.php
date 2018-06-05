<div class="inner-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">VIDEOJUEGO</span>
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
                                        <td style ="width:65% ;"><?php echo $video['titulo'];?></td>
                                    </tr>
                                     <tr>
                                        <td>GENERO</td>
                                        <td><?php echo $video['nombre'];?></td>
                                    </tr>
                                    <tr>
                                        <td>PRECIO</td>
                                        <td><?php echo $video['precio'];?></td>
                                    </tr>
                                    <tr>
                                        <td>AÑO</td>
                                        <td><?php echo $video['year'];?></td>
                                    </tr>
                                    <tr>
                                        <td>DIRECTOR</td>
                                        <td><?php echo $video['director'];?></td>
                                    </tr>
                                    <tr>
                                        <td>SINOPSIS</td>
                                        <td><?php echo $video['sinopsis'];?></td>
                                    </tr>
                                     <tr>
                                        <form action="" method="POST">
                                        <td><button name ="copia" class="btn btn-warning btn-oval rippler rippler-default">CREAR COPIA DE VIDEOJUEGO</button>
                                        
                                                    </form>
                                            <?php if(isset($_POST["copia"])){
                                                echo "<form action='' method='POST'><br>
                                                    <button type='submit' name='si_copia' value={$video['ID']}  class='btn btn-primary btn-oval rippler rippler-default'>SI</button>   
                                                    <button type='submit'  name='no_copia'   class='btn btn-inverse btn-oval rippler rippler-default'>NO</button></form></td>";
                                                    }
                                            ?>

                                        <td> <a href="<?php echo site_url('Videojuegos/listado_copias/'.$video['ID'].'');?>"><button class="btn btn-inverse btn-oval rippler rippler-default">VER LISTADO DE COPIAS</button></a></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><a href="<?php echo site_url('Videojuegos/actualizar_videojuego/'.$video['ID']."/".$video['ID_genero'].'');?>"><button type="button">IR A ACTUALIZAR DATOS DE VIDEOJUEGO</button></a></td>
                                        <td>
                                        <form action="" method="POST"><button type="submit" name="borrar" class="btn btn-danger btn-flat rippler rippler-default">BORRAR VIDEOJUEGO</button></form><?php if(isset($_POST["borrar"])){
                                            echo " <strong>¿ESTA SEGURO QUE QUIERE BORRAR ESTE VIDEOJUEGO?</strong><form action='' method='POST'> <button type='submit'  name='si' value={$video['ID']}  class='btn btn-primary btn-oval rippler rippler-default'>SI</button>   <button 
                                            type='submit'  name='no'   class='btn btn-inverse btn-oval rippler rippler-default'>NO</button></form>" ;
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
        </div>