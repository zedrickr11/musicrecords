@extends ('layouts.admin')
@section ('contenido')

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">MusicRecords</li>
      <li class="breadcrumb-item"><a href="#">Artista</a></li>
      <li class="breadcrumb-item active">Index</li>
      <!-- Breadcrumb Menu-->

    </ol>

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i> Artista
                <a href="artista/create"> <button type="button" class="btn btn-success"> Nuevo</button></a>

              </div>
              <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Artista</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($artista as $art)
                    <tr>
                      <td>{{ $art->id }}</td>
                      <td>{{ $art->nombre }}</td>
                      <td>

                        <a href="{{route('artista.edit',$art->id)}}">
                     <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                   </a>


                   <form style="display: inline" method="POST" action="{{route('artista.destroy', $art->id)}}">
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
