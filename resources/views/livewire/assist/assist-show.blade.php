<div>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} assist</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('assists.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $assist->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $assist->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $assist->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Carnetidentidad:</strong>
                            {{ $assist->carnetIdentidad }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $assist->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $assist->fechaNacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
