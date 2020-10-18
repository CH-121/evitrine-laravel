@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
<h1 class="p-2">Gestion des Catégories</h1>
</div>
<div class="d-flex justify-content-center">
<form class="form-inline" method="POST" action="/categorie/save">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="nomCat"  placeholder="Nom du catégorie..." required>
    <!-- @error('nomCat')
    <p class="help is-danger">{{ $message }}</p>
    @enderror -->
  </div>
  <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
</form>
@yield('content')
</div>
</br>
<div class="table-responsive text-nowrap container-fluid col-8">
    <table class="table text-center table-striped ">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Nom</th>
            <th>User</th>
            <th style="width: 40%">Action</th>

        </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->nomCat }}</td>
                    <td>{{ $categorie->user_id }}</td>
                    <td>
                        <button type="submit" class="btn btn-warning "><a href="/categorie/edit/{{ $categorie->id  }}" class="btn btn-sm"><i class="fas fa-edit"></i></a> </button>
                        <button type="submit" class="btn btn-danger "><a href="/categorie/delete/{{ $categorie->id }}" class="btn btn-sm"><i class="far fa-trash-alt"></i></a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </br>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary  "><a href="/home" class="btn btn-sm">Revenir à l'accueil</a></button>
    </div>
</div>
@endsection
