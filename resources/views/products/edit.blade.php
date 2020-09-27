<form action="{{url('/products/'.$product->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}


    <label for="nombre">{{'nombre'}}</label>
    <input class="form-control" type="text" name="nombre" value="{{$product->nombre}}">
    <br/>
    <label for="detalle">{{'descripcion'}}</label>
    <input class="form-control" type="text" name="descripcion" value="{{$product->descripcion}}">
    <br/>
    <label for="detalle">{{'categoria'}}</label>
    <input class="form-control" type="text" name="categoria" value="{{$product->categoria}}">
    <br/>
    <label for="detalle">{{'cantidad'}}</label>
    <input class="form-control" type="text" name="cantidad" value="{{$product->cantidad}}">
    <br/>
    <label for="precio">{{'precio'}}</label>
    <input class="form-control" type="text" name="precio" value="{{$product->precio}}">
    <input type="submit" value="Guardar modificaciones">

    <a href="{{url('products')}}">Regresar</a>
</form>