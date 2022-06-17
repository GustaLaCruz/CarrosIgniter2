<h1> <?=$title?> </h1>
<table class="table">
    <tr>
        <td>Nome:</td>
        <td>Profissão</td>
        <td>Idade</td>
        <td></td>
        <td></td>
    </tr>
    <?php

    foreach($pessoas as $pessoa_item){
    ?>
    <tr>
        <td><?=  $pessoa_item['nome']  ?></td>
        <td><?=  $pessoa_item['profissao']  ?></td>
        <td><?=  $pessoa_item['idade']  ?></td>
        <td> <a href="excluir/<?=$pessoa_item['id']?>" class="btn btn-danger"> Apagar </a> </td>
        <td> <a href="editar/<?=$pessoa_item['id']?>" class="btn btn-warning"> Editar </a> </td>
    </tr>
    <?php
    }   
    ?>
</table>



