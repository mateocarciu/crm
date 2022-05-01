<?php
if (!Auth::check()) {
   header("Location: login");
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css\app.css') }}" />
<br><br>
<center>
   <form action="{{ route('produits.update',$produit->IdProd) }}" method="POST">
      @csrf
      @method('PUT')
      <h1>Modifier le produit</h1>
      <br>
      <div class="row"></div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Type :</strong><br>
         <input type="text" name="TypeProd" class="form-control" value="{{ $produit->TypeProd }}" placeholder="Entrez le type" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Nom :</strong><br>
         <input type="text" name="NomProd" class="form-control" value="{{ $produit->NomProd }}" placeholder="Entrez le nom du produit" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Libellé :</strong><br>
         <input type="text" name="LibProd" class="form-control" value="{{ $produit->LibProd }}" placeholder="Entrez le libellé du produit" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Prix :</strong><br>
         <input type="number" name="PrixProd" class="form-control" value="{{ $produit->PrixProd }}" placeholder="Entrez le prix du produit" required>
      </div>
      <br><br>
      <a class="btn btn-primary button button2 button_botom" href="{{ route('produits.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-pen"></i> Modifier</button>
   </form>
   <br><br>
</center>