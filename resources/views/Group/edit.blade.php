@extends('./studentapp.layout')

@section('content')

@include('./session.success')
<div class="card">
    <div class="card-header">
        Editar registro de grupos
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('group.update', $group->id)}}"> 
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label>Grupo: </label>
                <input type="text" class="form-control" name="group_g" placeholder="Ingresa grupo" value="{{$group -> group_g}}" required>
            </div>
            <br>
            <div class="form-group">
                <label>Semestre: </label>
                <input type="number" class="form-control" name="group_semester" placeholder="Ingresa semestre" value="{{$group -> group_semester}}" required>
            </div>
            <br>
            <div class="form-group">
                <label>Turno</label>
                <input type="text" class="form-control" name="group_turn" placeholder="Ingresa turno" value="{{$group -> group_turn}}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    </div>

@endsection