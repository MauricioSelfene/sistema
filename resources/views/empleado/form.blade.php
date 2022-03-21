@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{ $modo }} empleado</h1>

@if (count($errors)>10)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>


@endif

    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
    </div>

    <div class="form-group">
        <label for="ApellidoPaterno">Apellido Paterno</label>
        <input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}" id="ApellidoPaterno">
    </div>
        
    <div class="form-group">
        <label for="ApellidoMaterno">Apellido Materno</label>
        <input class="form-control" type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}" id="ApellidoMaterno">
    </div>

    <div class="form-group">
        <label for="Correo">Correo</label>
        <input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo">
    </div>

    <div class="form-group">
        <label for="Foto">Foto</label>

            @if (isset($empleado->Foto))
                <img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$empleado->Foto) }}" width="100" alt="">    
            @endif

        <input class="form-control" type="file" name="Foto"  id="Foto">
        
    </div>
<br>
<a href="{{ url('empleado/') }}" class="btn btn-success">regresar</a>

<input type="submit" value="{{ $modo }} datos" class="btn btn-primary">

</div>

@endsection