{{-- formulario que tendra los datos --}}
<label for="">Nombre:</label>
<input type="text" name="nombre"  value="{{isset($empleado->nombre)?$empleado->nombre:''}}" placeholder="Nombre">
<br>
<label for="">Apellido:</label>
<input type="text" name="apellido" value="{{isset($empleado->apellido)?$empleado->apellido:''}}" placeholder="apellido">
<br>
<label for="">Puesto:</label>
<input type="text" name="puesto" value="{{isset($empleado->puesto)?$empleado->puesto:''}}" placeholder="puesto">
<br>
<label for="">Email:</label>
<input type="email" name="email"  value="{{isset($empleado->email)?$empleado->email:''}}" placeholder="email">
<br>
<input type="submit" value="Guardar Datos">
<br>
<a href="{{url('empleado/')}}">Regresar</a>