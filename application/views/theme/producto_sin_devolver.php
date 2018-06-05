<div class="inner-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary bg-primary">
                            <span class="card-title">PRODUCTO SIN DEVOLVER</span>
                        </div>
                        <div class="card-content">
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ALQUILER NUMERO</th>
                                        <th>ID_COPIA</th>
                                        <th>TITULO DE COPIA</th>
                                        <th>DIA DE ALQUILER</th>
                                        <th>CLIENTE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($sin as $sin) {
                                            echo "<tr>
                                        <td>{$sin['ID']}</td>
                                        <td>{$sin['ID_copia']}</td>
                                        <td>{$sin['titulo']}</td>
                                        <td>{$sin['fecha']}</td>
                                        <td>{$sin['nombre']} {$sin['apellidos']}</td>
                                        <td><a href='".site_url('Clientes/ver_cliente/'.$sin['ID_cliente'].'/'.$sin['ID_copia'].'/'.$sin['ID_producto'])."'><button class='btn btn-danger btn-flat rippler rippler-default'>DEVOLVER PRODUCTO</button></a></td></tr>";

                                                
                                            }
                                        
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /5. $DEFAULT_TABLES -->
                    </div>
                </div>
            </div>
