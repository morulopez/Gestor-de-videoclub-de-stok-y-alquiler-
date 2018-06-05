 <div class="inner-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary bg-primary">
                            <span class="card-title">CLIENTES</span>
                            <form action="<?php echo site_url('Clientes/buscar_cliente');?>" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group m-b">
                                            <input type="text"  name="cliente" class="form-control" placeholder="nombre de la pelicula">
                                                 <span class="input-group-btn">                    
                                                 <button type="submit" name="boton_clientes" class="btn btn-default rippler rippler-default btn-flat with-border">Buscar</button>
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
                                        <th>NOMBRE</th>
                                        <th>APELLIDOS</th>
                                        <th>VER CLIENTE</th>
                                    </tr>
                                </thead>
                                <?php foreach ($lista_clientes as $lista) {
                                   
                                           echo "<tbody>
                                                <tr>
                                                    <td>{$lista['ID']}</td>
                                                    <td>{$lista['nombre']}</td>
                                                    <td>{$lista['apellidos']}</td>
                                                    <td><a href='".site_url('Clientes/ver_cliente/'.$lista['ID'])."'>VER CLIENTE</a></td>
                                                    
                                                </tr>
                                                
                                            </tbody>";
                                    }
                                ?>
                            </table>
                        </div>
                        <!-- /5. $DEFAULT_TABLES -->
                    </div>
                </div>
            </div>
