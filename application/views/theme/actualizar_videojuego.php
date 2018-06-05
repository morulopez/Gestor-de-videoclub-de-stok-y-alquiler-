<div class="inner-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">ACTUALIZAR VIDEOJUEGO</span>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">    
                         </div>
                            <br>
                            <br>
                            <table id="user" class="table table-bordered table-striped">
                                <form action="" method="POST">
                                    <tbody>
                                    <tr>
                                        <td>TITULO</td>
                                        <td> <input  type="text"  name="titulo" class="form-control" value="<?php echo $video['titulo']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>GENERO</td>
                                        <td> <input  type="text"  name="genero" class="form-control" value="<?php echo $video['nombre']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>AÑO</td>
                                        <td> <input  type="text"  name="year" class="form-control" value="<?php echo $video['year']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>DIRECTOR</td>
                                        <td> <input  type="text"  name="director" class="form-control" value="<?php echo $video['director']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>MINUTOS</td>
                                        <td> <input  type="text"  name="minutos" class="form-control" value="<?php echo $video['minutos']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>PRECIO</td>
                                        <td>  <input  type="text"  name="precio" class="form-control" value="<?php echo $video['precio']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>SINOPSIS</td>
                                        <td>  <textarea  type="text"  name="sinopsis" class="form-control"><?php echo $video['sinopsis']; ?></textarea></td>
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td><button type="submit" name="boton_actualizar" class="btn btn-default rippler rippler-default btn-flat with-border">ACTUALIZAR DATOS</button></td>
                                    </tr>
                                </form>
                                <tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>