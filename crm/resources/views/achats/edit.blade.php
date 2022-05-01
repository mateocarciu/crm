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
   <form action="{{ route('achats.update', $achat->IdAchat) }}" method="POST">
      @csrf
      @method('PUT')
      <h1>Modifier l'achat</h1>
      <br>
      <div class="row"></div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>ID de Client :</strong><br>
            <select name="idcli">
               @foreach ($client as $key => $value)
               <option value="{{ $value->IdCli }}">{{ $value->NomCli }} {{ $value->PreCli }}</option>
               @endforeach
            </select>
         </div>
         <br>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>ID de produit :</strong><br>
         <select name="idprod">
            @foreach ($produit as $key => $value)
            <option value="{{ $value->IdProd }}">{{ $value->NomProd }}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Quantité :</strong><br>
         <input type="number" name="montant" class="form-control" value="{{ $achat->Qte }}" placeholder="Entrez la quantité" required>
      </div>
      <br><br>
      <a class="btn btn-primary button button2 button_botom" href="{{ route('achats.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-pen"></i> Modifier</button>
   </form>
   <br><br>
</center>