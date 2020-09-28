<div class="form-group">
<label for="nombre" class="control-label">{{'nombre'}} </label>
<input class="form-control" type="text" name="nombre" value="{{isset($product->nombre)?$product->nombre:''}}">
</div>
<div class="form-group">
<label for="descripcion" class="control-label">{{'descripcion'}}</label>
<input class="form-control" type="text" name="descripcion" value="{{isset($product->descripcion)?$product->descripcion:''}}">
</div>
<div class="form-group">
<label for="categoria" class="control-label">{{'categoria'}} </label>
<input class="form-control" type="text" name="categoria" value="{{isset($product->categoria)?$product->categoria:''}}">
</div>
<div class="form-group">
<label for="cantidad" class="control-label">{{'cantidad'}} </label>
<input class="form-control" type="text" name="cantidad" value="{{isset($product->cantidad)?$product->cantidad:''}}">
</div>
<div class="form-group">
<label for="precio" class="control-label">{{'precio'}}</label>
<input class="form-control" type="text" name="precio" value="{{isset($product->precio)?$product->precio:''}}">
</div>
<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Registrar': 'Modificar'}}">
<br/>
<a class="btn button-primary" href="{{url('products')}}">Regresar</a>