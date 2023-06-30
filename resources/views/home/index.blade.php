<!DOCTYPE html>
<html>

<head>
    <title>Code de la place </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        {{-- <div class="row">
            <div class="col-12 col-md-4 offset-md-4" style="padding-top: 50px;">
                    <form method="POST" action="">
                        @csrf
                         <h4>Ajouter un code de place </h4>
                         <label for="">N </label>


                          <input type="text" class="form-control mb-2" name="name" placeholder="Name" required>

                        <button type="submit" class="btn btn-primary" name="save">Enregister</button>
                  </form>
           </div>
     </div>

  </div> --}}


        <div class="container mt-5">
            <form action="{{route('generate')}} " method="post">
                @csrf
                <div class="row mt-2">
                    <h2 class="text-center">Generation d'identifant de place de parcking</h2>

                    @if (session('info'))
                        <div class="col-12 m-2">
                            <div class="alert alert-primary" role="alert">
                                <strong><i class="me-1" data-feather="info"></i> Informations :</strong>

                                <div class="alert-body">
                                    {{ session('info') }}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="alert alert-primary" role="alert">

                        <div class="alert-body">
                            <strong><i class="me-1" data-feather="info"></i> Informations :</strong>
                            <br>
                            {{ __(session('info')) }}
                            {!! session('info') !!}
                        </div>
                    </div> --}}
                    @endif
                    @if (session('errors'))
                        <div class="col-12 m-2">
                            <div class="alert alert-primary" role="alert">
                                <strong><i class="me-1" data-feather="info"></i> Informations :</strong>

                                <div class="alert-body">
                                    {{ session('errors') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-6 col-md-6 col">
                        <div class="form-group">
                            <label for="commune">Nom de la commune</label>
                            <input type="text" name="commune" id="commune" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col">
                        <div class="form-group">
                            <label for="zone">Nom de la zone</label>
                            <input type="text" name="zone" id="commune" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col mt-3">

                        <input type="submit" value="Enregistrer" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>


</body>

</html>
