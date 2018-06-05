<div class="inner-content">
<div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">RESULTADO CLIENTES</span>
                    <form action=" " method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group m-b">
                                        <input type="text"  name="clientes" class="form-control" placeholder="nombre del cliente">
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
                                        <th>NOMBRE</th>
                                        <th>APELLIDOS</th>
                                        <th>VER CLIENTE</th>
                                    </tr>
                                </thead>
                                <?php foreach ($bus_cliente as $bus) {
                                   
                                           echo "<tbody>
                                                <tr>
                                                    <td>{$bus['ID']}</td>
                                                    <td>{$bus['nombre']}</td>
                                                    <td>{$bus['apellidos']}</td>
                                                    <td><a href='".site_url('Clientes/ver_cliente/'.$bus['ID'])."'>VER CLIENTE</a></td>
                                                    
                                                </tr>
                                                
                                            </tbody>";
                                    }
                                ?>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>