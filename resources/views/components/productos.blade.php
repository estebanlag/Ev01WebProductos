




 <tr>
      <th scope="row">{{$idx}}</th>
      
      <td>{{$nombre}}</td>
      <td>{{$cantidad}}</td>
      
      <td>{{$sucursal}}</td>
      <td>{{$id}}</td>
      <td>{{$categoria}}</td>
      <td>{{$precio}}</td>
      
    
      <td>  <a href="../actualiza/{{$nombre}}/{{$cantidad}}/{{$sucursal}}" <button class="btn btn-primary" id="{{$id}}">Actualizar</button></a>
                <a href="../elimina/{{$nombre}}/{{$cantidad}}" <button class="btn btn-danger" id="{{$id}}">Eliminar</button></a>
            </td>
    </tr>