<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
      table {
      width: 100%;      
    }
    th, td {
      width: 25%;
      border: 2px blue;
      border: red 2px solid;
    }
    h1,h3{
      text-align: center;
      background-color: aqua;
    }
 </style>
    <title>Comprobante</title>
</head>
<body>      
  
<div class="container text-center">

<table class="table">
    <thead class="thead-dark">
      <tr style="background-color: aqua;">
         <th scope="col" colspan="6"><h3>Datos de los Productos</h3></th>     
      </tr>     
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Cliente</th>
        <th scope="col">Articulo</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Subtotal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($detalleingreso as $item) 
      <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$item->nombreCliente}}</td>
        <td>{{$item->nombreProducto}}</td>
        <td>{{$item->precio}}</td>
        <td>{{$item->cantidad}}</td>
        <td>{{$item->subtotal}}</td>
      </tr>  
      @endforeach  
    </tbody>
  </table>                         
</div>
</body>
</html>

