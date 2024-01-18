@extends ('./studentapp.layout')

@section('content')


<div class="container">
    @include('session.success')
    <h1>GRUPOS</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Grupo</th>
                <th scope="col">Semestre</th>
                <th scope="col">Turno</th>
                <th scope="col" colspan="2">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $x = 1 ?>
                @foreach($group as $group)
                <tr>
                <th scope="row">{{$x++}}</th>
                <td>{{$group -> group_g}}</td>
                <td>{{$group -> group_semester}}</td>
                <td>{{$group -> group_turn}}</td>
                <td colspan="2">
                    <a href="{{ route('group.edit', $group->id)}}" class="btn btn-warning">Editar</a>
                    

                    <form style="display: inline-block;" action="{{route('group.destroy', $group->id)}}" method="post">
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
