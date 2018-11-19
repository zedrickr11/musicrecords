@extends ('layouts.admin')
@section ('contenido')

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">MusicRecords</li>
      <li class="breadcrumb-item"><a href="#">Cancion</a></li>
      <li class="breadcrumb-item active">Vista</li>
      <!-- Breadcrumb Menu-->

    </ol>

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i> Cancion
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <p><strong>Titulo: </strong>{{ $cancion->titulo }}</p>
                    <p><strong>Numero de pista: </strong>{{ $cancion->numpista }}</p>
                    <p><strong>Duracion: </strong>{{ $cancion->duracion }}</p>
                    <p><strong>Fecha: </strong>{{ $cancion->fecha }}</p>
                    <p><strong>Album: </strong>{{ $cancion->album_id }}</p>
                  </div>

                </div>
                <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>Vocalista</th>

                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cancion->vocalist as $can)
                    <tr>
                      <td>{{ $can->nombre }}</td>



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
