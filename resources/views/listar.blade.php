<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos</title>
    </head>
    <body>
        <div>
            <br>
            @csrf
            <table>
                <h1>Produtos</h1>
                <thead>
                    <td>#</td>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Estoque</td>
                    <td></td>
                    <td></td>
                </thead>
                <?php
                    foreach($produto as $element){
                        echo "<tr>";
                        echo "<td>$element->id</td>";
                        echo "<td>$element->nome</td>";
                        echo "<td>R$$element->valor</td>";
                        echo "<td>$element->estoque</td>";
                        echo "<td><button onclick='document.location=\"/editar-produto/{id}"'>Editar</button></td>";
                        echo "<td><button onclick='document.location=\"/excluir-produto/{id}"'>Excluir</button></td>";
                        echo "</tr>";
                    }
                ?>
                </table>
                <div>
                    <button onclick="document.location = '/cadastrar-produto';">Cadastrar Novo</button>
                </div>
    </body>
<html>