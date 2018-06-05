<div class="inner-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title">ALQUILAR PRODUCTO</span>
                </div>
                <div class="card-content">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">    
                         </div>
                            <br>
                            <br>
                            <table id="user" class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td><form action="" method="POST"><button  name="alquilar" class="btn btn-success btn-oval rippler rippler-default">ALQUILAR</button></form></td>
                                        <td><?php if(isset($_POST["alquilar"])){
                                          echo "¿Esta seguro de alquilar este producto? <form action='' method='POST'>
                                          <button  type='submit' name='si' class='btn btn-success btn-oval rippler rippler-default'>SI</button>
                                          <button type='submit' name='no' class='btn btn-success btn-oval rippler rippler-default'>NO</button></form>";
                                        } ?></td>
                                    </tr>
                                    <tr>
                                        <td class="separador"></td>
                                        <td class="separador"></td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>