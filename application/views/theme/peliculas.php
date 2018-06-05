<div class="inner-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary bg-primary">
                            <span class="card-title">PELICULAS</span>
                            <form action="<?php echo site_url('Peliculas/buscar_pelicula');?>" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group m-b">
                                            <input type="text"  name="buscar_pelicula" class="form-control" placeholder="nombre de la pelicula">
                                                 <span class="input-group-btn">                    
                                                 <button type="submit" name="boton_buscar" class="btn btn-default rippler rippler-default btn-flat with-border">Buscar</button>
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
                                        <th>ID</th>
                                        <th>PELICULA</th>
                                        <th>GENERO</th>
                                        <th>VER PELICULA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                        
                                    foreach ($pelicula as $peliculas) {
                    
                                        echo "<tr>
                                            <td>{$peliculas['ID_producto']}</td>
                                            <td>{$peliculas['titulo']}</td>
                                            <td>{$peliculas['nombre']}</td>
                                            <td><a href='".site_url('Peliculas/ver_pelicula/'.$peliculas['ID_producto'])."'>VER PELICULA</a></td>
                                            
                                        </tr>";
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /5. $DEFAULT_TABLES -->
                    </div>
                </div>
            </div>
