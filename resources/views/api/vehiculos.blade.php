@extends('welcome')
@section('contenido')

<form method="POST" action="/vehiculos">
@csrf
<style>
    input{
        margin: 5px;
        padding: 1px;
    }

</style>
<label for="marcas"> Marcas</label>

<select name="marca" id="marca">
 <option value="toyota">Toyota</option>
 <option value="yaris">Yaris</option>
 <option value="ferrari">Ferrari</option>
 <option value="chevrolet">Chevrolet</option>
 <option value="ford mustang">Ford Mustang</option>
 <option value="prsche">Porsche</option>
</select>

<label for="color"> Color</label>
<select name="color" id="color">
 <option value="blanco">Blanco</option>
 <option value="amarillo">Amarillo</option>
 <option value="gris">Gris</option>
 <option value="rojo">Rojo</option>
 <option value="verde">Verde</option>
</select>



<div class="form-group">
 <label for="placa">Placa:</label>
 <input type="text" class="form-group" name="placa" id="placa" aria-describedby="emailHelp" >
 <small id="emailHelp" class="form-text text-pink">Escriba la Placa</small>
</div>

<div class="form-group">
    <label for="chasis">Chasis:</label>
    <input type="text" class="form-group" name="chasis" id="chasis" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-pink">Escriba el chasis</small>
   </div>

   <div class="form-group">
    <label for="dueño">Dueño:</label>
    <input type="text" class="form-group" name="dueño" id="dueño" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-pink">Escriba su nombre</small>
   </div>

   <button type="submit" class="btn btn-secondary">Guardar</button>
</form> 

@endsection