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
   <form action="{{ route('prospects.update',$prospect->IdPro) }}" method="POST">
      @csrf
      @method('PUT')
      <h1>Modifier le prospect</h1>
      <br>
      <div class="row"></div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Nom :</strong><br>
         <input type="text" name="NomPro" class="form-control" value="{{ $prospect->NomPro }}" placeholder="Entrez le nom du prospect" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Prénom :</strong><br>
         <input type="text" name="PrePro" class="form-control" value="{{ $prospect->PrePro }}" placeholder="Entrez le prénom du prospect" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Adresse :</strong><br>
         <input type="text" name="AdrPro" class="form-control" value="{{ $prospect->AdrPro }}" placeholder="Entrez l'adresse du prospect" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Code postal :</strong><br>
         <input type="text" name="CpPro" class="form-control" value="{{ $prospect->CpPro }}" placeholder="Entrez le code postal du prospect" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Ville :</strong><br>
         <input type="text" name="VillePro" class="form-control" value="{{ $prospect->VillePro }}" placeholder="Entrez la ville du prospect" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Mail :</strong><br>
         <input type="email" name="MailPro" class="form-control" value="{{ $prospect->MailPro }}" placeholder="Entrez l'adresse mail du prospect" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Téléphone :</strong><br>
         <input type="text" name="TelPro" class="form-control" value="{{ $prospect->TelPro }}" placeholder="Entrez le téléphone du prospect" required>
      </div>
      <br><br>
      <a class="btn btn-primary button button2 button_botom" href="{{ route('prospects.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-pen"></i> Modifier</button>
   </form>
   <br><br>
</center>