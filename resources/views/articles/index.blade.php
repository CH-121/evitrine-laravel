@extends('backend')
@section('content')

<div class="d-flex justify-content-center">
<h1 class="p-2">Gestion des Articles</h1>
</div>
<div class="d-flex justify-content-center">

  <button type="submit" class="btn btn-primary"><a href="/articles/create" class="btn btn-sm">Ajouter un article</a></button>
    <!-- @if($message = Session::get('success'))
    <div class="alert alert-succes">
        <p>{{ $message }}</p>
    </div>
    @endif -->
</div>
</br>
<div class="text-nowrap container-fluid ">
    <table class="table-responsive text-center table-striped table-sm " >
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Code</th>
            <th>Catégorie</th>
            <th>Nom</th>
            <th>PU</th>
            <th>Quantité</th>
            <th>Garantie</th>
            <th>Jours d'echantillon</th>
            <th>Jours de livraison</th>
            <th>Prix de livraison</th>
            <th >Description</th>
            <th>User</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="bg-white">
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->codeArt }}</td>
                    <td>{{ $article->categorie->nomCat }}</td>
                    <td>{{ $article->nomArt }}</td>
                    <td>{{ $article->pu }}</td>
                    <td>{{ $article->quantite }}</td>
                    <td>{{ $article->garantie }}</td>
                    <td>{{ $article->joursEchantillon }}</td>
                    <td>{{ $article->joursLivraison }}</td>
                    <td>{{ $article->prixLivraison }}</td>
                    <div>
                    <td style="width:20%">{{ $article->description }}</td>
                    </div>
                    <td>{{ $article->user_id }}</td>

                    <td><img src="{{ asset('/uploads/articles/' . $article->image) }}" width="100px;" height="100px" alt="Image"> </td>

                    <td>
                        <a href="{{ route('article.edit', $article->id ) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('article.delete', $article->id ) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    </br>
    <div class="d-flex justify-content-center">
    <a href="/home" class="btn btn-primary ">Revenir à l'accueil</a>
    </div>
</div>
@endsection
