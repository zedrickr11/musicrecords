@extends ('layouts.admin')
@section ('contenido')

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">MusicRecords</li>
      <li class="breadcrumb-item"><a href="#">Album</a></li>
      <li class="breadcrumb-item active">Editar</li>
      <!-- Breadcrumb Menu-->

    </ol>

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header">
                <strong>Vocalista</strong>
                <small>Form</small>
              </div>
              <form class="" action="{{ route('album.update',$album->id) }}" method="post">
                {!!method_field('PUT')!!}
                 {!!csrf_field()!!}
              <div class="card-body">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" required class="form-control" name="nombre" value="{{ $album->nombre }}">
                </div>
                <div class="form-group">
                  <label for="nombre">Fecha de creacion</label>
                  <input type="date" class="form-control" name="fecha" value="{{ $album->fecha }}" >
                </div>
                <div class="form-group">
                  <label for="nombre">Duracion</label>
                  <input type="text" class="form-control" name="duracion" value="{{ $album->duracion }}">
                </div>
                <div class="form-group">
                  <label for="nombre">Artista</label>
                  <select class="form-control" name="artista_id">
                    @foreach ($artista as $art)
                       @if ($art->id==$album->artista_id)
                       <option value="{{$art->id}}" selected>{{$art->nombre}}</option>
                       @else
                       <option value="{{$art->id}}">{{$art->nombre}}</option>
                       @endif
                    @endforeach
                  
                  </select>
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
