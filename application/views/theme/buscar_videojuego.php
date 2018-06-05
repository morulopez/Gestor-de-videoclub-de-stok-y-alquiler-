<div class="inner-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary bg-primary">
                            <span class="card-title">VIDEOJUEGOS</span>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group m-b">
                                            <input type="text"  name="buscar" class="form-control" placeholder="nombre de la pelicula">
                                                 <span class="input-group-btn">                    
                                                 <button type="submit" name="boton" class="btn btn-default rippler rippler-default btn-flat with-border">Buscar</button>
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
                                        <th>VIDEOJUEGO</th>
                                        <th>GENERO</th>
                                        <th>VER VIDEOJUEGO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($videojuego as $videojuego) {
                                       echo "<tr>
                                            <td>{$videojuego['ID_producto']}</td>
                                            <td>{$videojuego['titulo']}</td>
                                            <td>{$videojuego['nombre']}</td>
                                            <td><a href='".site_url('Videojuegos/ver_videojuego/'.$videojuego['ID_producto'])."'>VER VIDEOJUEGO</a></td> 
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
