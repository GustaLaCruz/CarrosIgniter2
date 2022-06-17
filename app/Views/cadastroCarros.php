<div class="row">
    <div class="col offset-5">
        <h2>Cadastro de Carros</h2>
    </div>
</div>

<form method="post" action="gravarCarro">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Modelo: </label>
                <input type="text" class="form-control" name="modelo"
                value="<?= isset($carro['modelo']) ? $carros['modelo'] : ""  ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3 offset-3">
            <div class="form-group">
                <label for="">Marca: </label>
                <input type="text" class="form-control" name="marca"
                value="<?= isset($carro['marca']) ? $carro['marca'] : ""  ?>">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="">Placa: </label>
                <input type="text" class="form-control" name="placa"
                value="<?= isset($carro['placa']) ? $carro['placa'] : ""  ?>">
            </div>
        </div>
    </div>
    <input type="hidden" name="id" 
    value="<?= isset($carro['id']) ? $carro['id'] : ""  ?>"
    >
    <div class="row">
        <div class="col-2 offset-5">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </div>
        </div>
    </div>
</form>