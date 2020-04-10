@auth
    {!! Form::open(['method' =>'DELETE', 'route' =>['productos.destroy',$product->id], 'onsubmit' =>' return confirm("¿Estás seguro de eliminar éste producto?")']) !!}
    <input type="submit" value="Eliminar producto" class="btn btn-danger">
    {!! Form::close() !!}
@endauth
