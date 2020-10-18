@extends('backend')
@section('content')
<form class="form-inline d-flex justify-content-center mt-5" method="POST" action="/categorie/update/{{ $categorie->id }}">
@csrf
@method('PUT')
  <div class="form-group mx-sm-3  ">
    <input type="text" class="form-control" name="nomCat" value="{{ $categorie->nomCat }}"  required>
  </div>
  <button type="submit" class="btn btn-warning ">Modifier</button>
</form>
@endsection

