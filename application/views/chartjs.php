<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container" style="padding:10px;">        
        <div class="col-sm-3 ">
            <select id="select_indicador" name="select" class="form-control"  data-placeholder="Seleccione un Indicador">
               <!--  <option value=""></option> -->
                <option id="option" value="<?= $data->uf->codigo;?> "> <?= $data->uf->nombre;?> </option>
                <option id="option" value="<?= $data->ivp->codigo;?> "> <?= $data->ivp->nombre;?> </option>
                <option id="option" value="<?= $data->dolar->codigo;?> "> <?= $data->dolar->nombre;?> </option>
                <option id="option" value="<?= $data->dolar_intercambio->codigo;?> "> <?= $data->dolar_intercambio->nombre;?> </option>
                <option id="option" value="<?= $data->euro->codigo;?> "> <?= $data->euro->nombre;?> </option>
                <option id="option" value="<?= $data->ipc->codigo;?> "> <?= $data->ipc->nombre;?> </option>
                <option id="option" value="<?= $data->utm->codigo;?> "> <?= $data->utm->nombre;?> </option>
                <option id="option" value="<?= $data->imacec->codigo;?> "> <?= $data->imacec->nombre;?> </option>
                <option id="option" value="<?= $data->tpm->codigo;?> "> <?= $data->tpm->nombre;?> </option>
                <option id="option" value="<?= $data->libra_cobre->codigo;?> "> <?= $data->libra_cobre->nombre;?> </option>
                <option id="option" value="<?= $data->tasa_desempleo->codigo;?> "> <?= $data->tasa_desempleo->nombre;?> </option>
                <option id="option" value="<?= $data->bitcoin->codigo;?> "> <?= $data->bitcoin->nombre;?> </option>
            </select>
        </div>
        <div id="contenedor_graf">
            <canvas id="myChart" width="500" height="200"></canvas>
        </div>

        <br>
        <div class="row">
            <div class="col-sm-12">
                <a clas="btn btn-primary" href="<?=base_url("index.php/welcome/mantenedor")?>" type="button" id="Crud" >Ir al crud</button>
            </div>
        </div>
    </div>

<script src="<?=base_url('assets/js/scripts.js')?>"></script>
</body>
</html>