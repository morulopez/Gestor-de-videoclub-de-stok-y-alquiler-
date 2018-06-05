<div class="inner-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">ACTUALIZAR PELICULA</span>
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
                                <form action="" method="POST">
                                    <tr>
                                        <td>TITULO</td>
                                        <td> <input  type="text"  name="titulo" class="form-control" value="<?php echo $pelicula['titulo']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>GENERO</td>
                                        <td> <input  type="text"  name="genero" class="form-control" value="<?php echo $pelicula['nombre']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>AÑO</td>
                                        <td> <input  type="text"  name="year" class="form-control" value="<?php echo $pelicula['year']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>DIRECTOR</td>
                                        <td> <input  type="text"  name="director" class="form-control" value="<?php echo $pelicula['director']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>MINUTOS</td>
                                        <td> <input  type="text"  name="minutos" class="form-control" value="<?php echo $pelicula['minutos']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>PRECIO</td>
                                        <td>  <input  type="text"  name="precio" class="form-control" value="<?php echo $pelicula['precio']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>SINOPSIS</td>
                                        <td>  <textarea  type="text"  name="sinopsis" class="form-control"><?php echo $pelicula['sinopsis']; ?></textarea></td>
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