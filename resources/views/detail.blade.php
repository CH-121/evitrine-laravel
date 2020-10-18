@extends('frontend')
@section('content')

<div class="container">

  <h1 class="my-4">{{ $article->nomArt }}</h1>

  <div class="row">

    <div class="col-md-6">
      <img class="img-fluid" src="{{ asset('/uploads/articles/' . $article->image) }}" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Description</h3>
      <p>{{ $article->description }}</p>
      <h3 class="my-3">Details</h3>
      <ul>
        <li>prix : {{ $article->pu }} Dhs</li>
        <li>Quantité en stock : {{ $article->quantite }}</li>
        <li>Garantie : {{ $article->garantie }} mois</li>
        <li>Retour gratuit dans {{ $article->garantie }} jours</li>
        <li>Livraison dans {{ $article->joursLivraison }} jours</li>
        <li>Prix de la livraison : {{ $article->prixLivraison }} Dhs</li>

      </ul>
    </div>

  </div>
</br>
</br>

</div>
@endsection
