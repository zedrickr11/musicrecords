@extends ('layouts.admin')
@section ('contenido')

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">MusicRecords</li>
      <li class="breadcrumb-item"><a href="#">Cancion</a></li>
      <li class="breadcrumb-item active">Nuevo</li>
      <!-- Breadcrumb Menu-->

    </ol>

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header">
                <strong>Cancion</strong>
                <small>Form</small>
              </div>
              <form class="" action="{{ route('cancion.store') }}" method="post">
                {!! csrf_field() !!}

              <div class="card-body">
                <div class="form-group">
                  <label for="nombre">Titulo</label>
                  <input type="text" required class="form-control" name="titulo" placeholder="Nombre...">
                </div>
                <div class="form-group">
                  <label for="nombre">Pista</label>
                  <input type="number"  class="form-control" name="numpista" >
                </div>
                <div class="form-group">
                  <label for="nombre">Fecha de creacion</label>
                  <input type="date" class="form-control" name="fecha" >
                </div>
                <div class="form-group">
                  <label for="nombre">Duracion</label>
                  <input type="text" class="form-control" name="duracion" placeholder="Duracion...">
                </div>
                <div class="form-group">
                  <label for="nombre">Album</label>
                  <select class="form-control" name="album_id">
                    @foreach ($album as $art)
                      <option value="{{ $art->id }}">{{ $art->nombre }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="checkbox">
                  <label for="vocalista_id">Vocalistas</label>
                  @foreach ($vocalista as $voc)

                    <input type="checkbox" class="form-control" name="vocalista_id[]" value="{{ $voc->id }}">{{ $voc->nombre }}

                  @endforeach
                </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Guardar</button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Cancelar</button>
              </div>
              </form>
            </div>

          </div>
        </div>
      </div>

    </div>
@endsection
