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
                        echo "<td><a href=/editar-produto/{$element->id}><button>Editar</button></a></td>";
                        echo "<td><a href=/excluir-produto/{$element->id}><button>Excluir</button></a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
    </body>
<html>