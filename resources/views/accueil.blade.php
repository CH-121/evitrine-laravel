@extends('backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                <div class="col-sm-6">
                    <div class="card bg-white gest-card">
                    <img class="card-img-top svg-size-control offset-3" src="css/categorie.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title offset-3">Gestion des catégories</h5>
                        <a href="{{ url('categories') }}" class="btn btn-primary offset-4">Plus d'info<i class="far fa-arrow-alt-circle-right icon"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-white gest-card">
                    <img class="card-img-top svg-size-control offset-3" src="css/article.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title offset-3">Gestion des articles</h5>
                        <a href="{{ url('articles') }}" class="btn btn-primary offset-4">Plus d'info<i class="far fa-arrow-alt-circle-right icon"></i></a>
                    </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
