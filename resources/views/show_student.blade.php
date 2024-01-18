@extends ('./studentapp.layout')

@section('content')


<div class="container">
    @include('session.success')
    <h1>Estudiantes</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre del estudiante</th>
                <th scope="col">Apellido del estudiante</th>
                <th scope="col">Edad del estudiante</th>
                <th scope="col">Email del estudiante</th>
                <th scope="col">Numero del estudiante</th>
                <th scope="col">Grupo</th>
                <th scope="col" colspan="2">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $x = 1 ?>
                @foreach($students as $student)
                <tr>
                <th scope="row">{{$x++}}</th>
                <td>{{$student -> student_name}}</td>
                <td>{{$student -> student_lastname}}</td>
                <td>{{$student -> student_age}}</td>
                <td>{{$student -> email}}</td>
                <td>{{$student -> student_number}}</td>
                <td>{{$student -> group -> group_g}}</td>
                <td colspan="2">
                    <a href="{{ route('student.edit', $student->id)}}" class="btn btn-warning">Editar</a>
                    

                    <form style="display: inline-block;" action="{{route('student.destroy', $student->id)}}" method="post">
                        {{ csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>



@endsection