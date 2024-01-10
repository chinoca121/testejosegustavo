<!DOCTYPE html>
    <html>
        <head>
            <title>Produtos</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        </head>
        <body>
<div class="container">
<h1>Lista de produtos</h1>
<hr />
<table class="table table-striped">
<thead>
<tr>
<th>#</th>
<th>Nome</th>
<th>Código</th>
<th>Categoria</th>
<th>Preço</th>
<th>Descrição</th>
</tr>
</thead>
<tbody>
@foreach ($produtos as $row)
<tr>
<th scope="row">{{ $row->id }}</th>
<td>{{ $row->Nome }}</td>
<td>{{ $row->Codigo }}</td>
<td>{{ $row->categoria }}</td>
<td>{{ $row->preço }}</td>
<td>{{ $row->descrição}}</td> </tr>
@endforeach
</tbody>
</table>
</div>
</body>
    </html>