@extends('./studentapp.layout')

@section('content')

@include('./session.success')

    <div class="card">
    <div class="card-header">
        Editar registro de estudiantes
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('student.update', $student->id)}}"> 
            <input type="hidden" name="__method" value="PUT">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label>Nombre del estudiante:</label>
                <input type="text" class="form-control" name="student_name" placeholder="Ingresa nombre del estudiante" value="{{$student -> student_name}}" required>
            </div>
            <br>
            <div class="form-group">
                <label>Apellidos del estudiante:</label>
                <input type="text" class="form-control" name="student_lastname" placeholder="Ingresa apellidos del estudiante" value="{{$student -> student_lastname}}"required>
            </div>
            <br>
            <div class="form-group">
                <label>Edad del estudiante:</label>
                <input type="number" class="form-control" name="student_age" placeholder="Ingresa edad del estudiante" value="{{$student -> student_age}}"required>
            </div>
            <br>
            <div class="form-group">
                <label>Email del estudiante:</label>
                <input type="email" class="form-control" name="student_email" aria-describedby="emailHelp" placeholder="Ingresa email del estudiante" value="{{$student -> email}}"required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <br>
            <div class="form-group">
                <label>Numero del estudiante:</label>
                <input type="number" class="form-control" name="student_number" placeholder="Ingresa número del estudiante" value="{{$student -> student_number}}"required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    </div>

@endsection