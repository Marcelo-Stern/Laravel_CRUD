<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos</title>
    </head>
    <body>
        <h1>Produtos</h1>

        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Quantidade</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
        <tbody>
            foreach($clients as $client){
                $produto .= '<tr>';
                $produto .= "<td><input type='checkbox' value='{$produto->id}'></td>";
                $produto .= "<td>{$produto->id}</td>";
                $produto .= "<td>{produto->Nome</td>";
                $produto .= "<td>{$produto->Valor}</td>";
                $produto .= "<td>{$produto->Quantidade}</td>";
                $produto .= "<td><a class='bnt btn-info' href='/editar-produto/{id}'>Editar</a></td>";
                $produto .= "<td><a class='bnt btn-info' href='client/delete/{$client->id}'>Excluir</a></td>";
                $produto .= '</tr>';
        </tbody>
    </body>
<html>