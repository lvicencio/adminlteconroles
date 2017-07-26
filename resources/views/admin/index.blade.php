@extends('admin.dashboard')

@section('contenido')
{{-- <div class="container"> --}}
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2"> --}}
            <div class="panel panel-default">
                <div class="panel-heading">Panel Administrador</div>

                <div class="panel-body">
                    <h1>Administrador</h1>
                    <br>
                    @if (session('notification') )
                      <div class="alert alert-success">
                        {{ session('notification') }}
                      </div>
                    @endif
                    <!-- Errores de validaciones -->
                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>

                    @endif

                    <div class="form-group">
                      <a href="/usuario" class="btn btn-sm btn-primary" title="Nuevo Usuario">Nuevo Usuario</a>
                    </div>

                    <form action="" method="GET">
                       <!-- {{ csrf_field() }}-->



                      <div class="form-group">
                        <label for="name">Buscar</label>
                         <input type="text" class="form-control" name="name" placeholder="Buscar Usuarios">
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-default">Buscar</button>
                      </div>
                    </form>




                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Correo</th>
                          <th>Nombre</th>
                          <th>Rol</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->rol }}</td>
                          <td>
                            <a href="usuario/{{ $user->id }}" class="btn btn-sm btn-primary" title="Editar">
                              <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="usuario/{{ $user->id }}/eliminar" class="btn btn-sm btn-danger" title="Eliminar" onclick="
return confirm('¿Esta seguro de Eliminar este registro?')">
                              <span class="glyphicon glyphicon-trash"></span>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                </div>


                {{ $users->links() }}
            </div>
        {{-- </div>
    </div> --}}
{{-- </div> --}}
@endsection
