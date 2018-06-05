
 <div class="inner-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">ACTUALIZAR CLIENTES</span>
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
                                    <form action="" method="POST">
                                        <td>DIRECCION</td>
                                        <td>  <input type="text"  name="direccion" class="form-control" value="<?php echo $ver_clie['direccion']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>CODIGO POSTAL</td>
                                        <td>  <input type="text"  name="codigo_postal" class="form-control" value="<?php echo $ver_clie['codigo_postal']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>TELEFONO1</td>
                                        <td>  <input type="text"  name="telefono1" class="form-control" value="<?php echo $ver_clie['telefono']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>TELEFONO2</td>
                                        <td>  <input type="text"  name="telefono2" class="form-control" value="<?php echo $ver_clie['telefono2']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>CORREO ELECTRONICO</td>
                                        <td>  <input type="text"  name="email" class="form-control" value="<?php echo $ver_clie['correo_electronico']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>NOTA</td>
                                        <td>  <input type="text"  name="nota" class="form-control" value="<?php echo $ver_clie['nota']; ?>"></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><button type="submit" name="boton_actualizar" class="btn btn-default rippler rippler-default btn-flat with-border">ACTUALIZAR DATOS</button></td>
                                    </tr>
                                </form>
                                    
                                   
                                </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>