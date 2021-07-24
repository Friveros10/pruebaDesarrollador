<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MANTENEDOR</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    </head>
    <body>
        <div class="content" style="background-color:#fff;color:#000;">
        <div class="row">
            <div class="col-sm-12">
                <label class="label-primary"  style="background-color:#fff; border:1px; ">Fecha: <?=  json_encode($data->fecha) ; ?></label>
            </div>
        </div>
            <table class="table table-responsive center" style="background-color:#fff; border:1px; " cellspacing="2"> 
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Unidad de medida</th>
                    <th>Fecha</th>
                    <th>Valor</th>
                    <th>opciones</th>
                </thead>
                <tbody>
                    <tr>
                        <td> <?=  json_encode($data->uf->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->uf->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->uf->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->uf->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->uf->valor) ; ?> </td>
                        <td><a href="" ><span class="glyphicon glyphicon-trash">
                            Eliminar </a></td>>
                    </tr>
                    <tr>
                        <td> <?=  json_encode($data->ivp->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->ivp->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->ivp->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->ivp->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->ivp->valor) ; ?> </td>
                    </tr>
                    <tr>
                        <td> <?=  json_encode($data->dolar->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->dolar->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->dolar->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->dolar->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->dolar->valor) ; ?> </td>
                    </tr>    
                    <tr>
                        <td> <?=  json_encode($data->dolar_intercambio->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->dolar_intercambio->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->dolar_intercambio->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->dolar_intercambio->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->dolar_intercambio->valor) ; ?> </td>
                    </tr> 
                    <tr>
                        <td> <?=  json_encode($data->euro->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->euro->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->euro->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->euro->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->euro->valor) ; ?> </td>
                    </tr>   
                    <tr>
                        <td> <?=  json_encode($data->ipc->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->ipc->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->ipc->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->ipc->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->ipc->valor) ; ?> </td>
                    </tr> 
                    <tr>
                        <td> <?=  json_encode($data->utm->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->utm->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->utm->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->utm->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->utm->valor) ; ?> </td>
                    </tr>  
                    <tr>
                        <td> <?=  json_encode($data->imacec->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->imacec->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->imacec->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->imacec->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->imacec->valor) ; ?> </td>
                    </tr>                
                    <tr>
                        <td> <?=  json_encode($data->tpm->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->tpm->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->tpm->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->tpm->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->tpm->valor) ; ?> </td>
                    </tr>              
                    <tr>
                        <td> <?=  json_encode($data->libra_cobre->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->libra_cobre->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->libra_cobre->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->libra_cobre->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->libra_cobre->valor) ; ?> </td>
                    </tr>     
                    <tr>
                        <td> <?=  json_encode($data->tasa_desempleo->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->tasa_desempleo->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->tasa_desempleo->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->tasa_desempleo->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->tasa_desempleo->valor) ; ?> </td>
                    </tr>         
                    <tr>
                        <td> <?=  json_encode($data->bitcoin->codigo) ; ?> </td>
                        <td> <?=  json_encode($data->bitcoin->nombre) ; ?> </td>
                        <td> <?=  json_encode($data->bitcoin->unidad_medida) ; ?> </td>
                        <td> <?=  json_encode($data->bitcoin->fecha) ; ?> </td>
                        <td> <?=  json_encode($data->bitcoin->valor) ; ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="<?= base_url('index.php/welcome/sendDatos') ?>" id="create">Cargar Datos</a>
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  

    </body>
</html>