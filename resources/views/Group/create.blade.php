@extends('./studentapp.layout')

@section('content')@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@include('session.success')

<div class="card">
    <div class="card-header">
        Agregar registro de grupos
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('group.store')}}"> 
            {{ csrf_field() }}
            <div class="form-group">
                <label>Grupo: </label>
                <input type="text" class="form-control" name="group_g" placeholder="Ingresa grupo" required>
            </div>
            <br>
            <div class="form-group">
                <label>Semestre: </label>
                <input type="number" class="form-control" name="group_semester" placeholder="Ingresa semestre" required>
            </div>
            <br>
            <div class="form-group">
                <label>Turno</label>
                <input type="text" class="form-control" name="group_turn" placeholder="Ingresa turno" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    </div>


@endsection