@extends ('layouts.admin')
@section ('contenido')

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">MusicRecords</li>
      <li class="breadcrumb-item"><a href="#">Cancion</a></li>
      <li class="breadcrumb-item active">Index</li>
      <!-- Breadcrumb Menu-->

    </ol>

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i> Cancion
                <a href="cancion/create"> <button type="button" class="btn btn-success"> Nuevo</button></a>

              </div>
              <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Titulo</th>
                      <th>Pista</th>
                      <th>Duracion</th>
                      <th>Fecha</th>
                      <th>Album</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cancion as $can)
                    <tr>
                      <td>{{ $can->id }}</td>
                      <td>{{ $can->titulo }}</td>
                      <td>{{ $can->numpista }}</td>
                      <td>{{ $can->duracion }}</td>
                      <td>{{ $can->fecha }}</td>
                      <td>{{ $can->album_id }}</td>

                      <td>

                        <a href="{{route('cancion.edit',$can->id)}}">
                          <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                        </a>
                        <a href="{{route('cancion.show',$can->id)}}">
                          <button type="button" class="btn btn-info btn-sm" name="button">Ver</button>
                        </a>

                   <form style="display: inline" method="POST" action="{{route('cancion.destroy', $can->id)}}">
                   {!!method_field('DELETE')!!}
                   {!!csrf_field()!!}
                     <button type="submit" class="btn btn-danger btn-sm" name="button">Eliminar</button>
                   </form>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>
            </div>
          </div>

          </div>
        </div>

    </div>
    <!-- /.conainer-fluid -->

@endsection
