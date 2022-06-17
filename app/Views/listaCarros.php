<h1> Lista de Carros </h1>
<table class="table">
    <tr>
        <td>Modelo:</td>
        <td>Marca</td>
        <td>Placa</td>
        <td></td>
        <td></td>
    </tr>
    <?php

    foreach($carros as $carro_item){
    ?>
    <tr>
        <td><?=  $carro_item['modelo']  ?></td>
        <td><?=  $carro_item['marca']  ?></td>
        <td><?=  $carro_item['placa']  ?></td>
        <td> <a href="excluirCarro/<?=$carro_item['id']?>" class="btn btn-danger"> Apagar </a> </td>
        <!--<td> <a href="editarCarro/<?=$carro_item['id']?>" class="btn btn-warning"> Editar </a>--> </td>
    </tr>
    <?php
    }   
    ?>
</table>



