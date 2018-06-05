<div class="inner-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary bg-primary">
                            <span class="card-title">ULTIMAS 100 VENTAS</span>
                        </div>
                        <div class="card-content">
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID_VENTA</th>
                                        <th>CLIENTE</th>
                                        <th>TELEFONO</th>
                                        <th>CORREO</th>
                                        <th>PRECIO</th>
                                        <th>FECHA</th>
                                        <th>DESCRIPCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($cien as $cien){
                                    echo "<tr>
                                        <td>{$cien['ID']}</td>
                                        <td>{$cien['nombre']}</td>
                                        <td>{$cien['telefono']}</td>
                                        <td>{$cien['correo_electronico']}</td>
                                        <td>{$cien['precio']}</td>
                                        <td>{$cien['fecha']}</td>
                                        <td>{$cien['description']}</td>
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
