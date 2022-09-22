<h1>esta es la vista</h1>

La suma es {{$suma}}<br>
El texto es {{$valor}}<br>

<h1>articulos</h1>
<ul>
    @foreach($articulos as $articulo)
        <li>{{$articulo->nombre}}</li>
    @endforeach
</ul>
<h1>articulos2</h1>
<ul>
    @foreach($articulos2 as $articulo)
        <li>{{$articulo->nombre}}</li>
    @endforeach
</ul>


<table border="1">
    <tr>
        <td>Id</td>
        <td>nombre</td>
        <td>Precio</td>
    </tr>
    @foreach($articulos as $articulo)
    <tr>
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->nombre}}</td>
        <td>{{$articulo->precio}}</td>
    </tr>
    @endforeach
</table>
