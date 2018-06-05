<div class="inner-content">
<div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">RESULTADO PELICULAS</span>
                    <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group m-b">
                                        <input type="text"  name="buscar" class="form-control" placeholder="nombre del cliente">
                                             <span class="input-group-btn">                    
                                             <button type="submit" name="boton" class="btn btn-default rippler rippler-default btn-flat with-border">Buscar</button>
                                             </span>
                                    </div>
                                </div>
                            </div>     
                    </form>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">    
                         </div>
                            <br>
                            <br>
                             <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>TITULO</th>
                                        <th>GENERO</th>
                                        <th>VER CLIENTE</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                <?php
                                 foreach ($peli as $peli) {
                    
                                        echo "<tr>
                                            <td>{$peli['ID_producto']}</td>
                                            <td>{$peli['titulo']}</td>
                                            <td>{$peli['nombre']}</td>
                                            <td><a href='".site_url('Peliculas/ver_pelicula/'.$peli['ID_producto'])."'>VER PELICULA</a></td>
                                            
                                        </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>