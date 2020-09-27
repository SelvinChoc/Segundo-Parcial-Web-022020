<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>descripcion</th>
            <th>categoria</th>
            <th>cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $producto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->categoria}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->precio}}</td>
        </tr>
    @endforeach
    </tbody>
</table>