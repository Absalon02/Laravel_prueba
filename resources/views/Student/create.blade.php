@extends('./studentapp.layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@include('./session.success')

    <div class="card">
    <div class="card-header">
        Agregar registro de estudiantes
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('student.store')}}"> 
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nombre del estudiante:</label>
                <input type="text" class="form-control" name="student_name" placeholder="Ingresa nombre del estudiante" required>
            </div>
            <br>
            <div class="form-group">
                <label>Apellidos del estudiante:</label>
                <input type="text" class="form-control" name="student_lastname" placeholder="Ingresa apellidos del estudiante" required>
            </div>
            <br>
            <div class="form-group">
                <label>Edad del estudiante:</label>
                <input type="number" class="form-control" name="student_age" placeholder="Ingresa edad del estudiante" required>
            </div>
            <br>
            <div class="form-group">
                <label>Email del estudiante:</label>
                <input type="email" class="form-control" name="student_email" aria-describedby="emailHelp" placeholder="Ingresa email del estudiante"required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <br>
            <div class="form-group">
                <label>Numero del estudiante:</label>
                <input type="number" class="form-control" name="student_number" placeholder="Ingresa número del estudiante" required>
            </div>
            <br>
            <div class="form-group">
                <label>Grupo:</label>
                <input type="number" class="form-control" name="group_id" placeholder="Ingresa grupo id" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    </div>

@endsection