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
   <form action="{{ route('clients.store') }}" method="POST">
      @csrf
      <h1>Ajouter un nouveau client</h1>
      <br>
      <div class="row"></div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Nom :</strong><br>
         <input type="text" name="NomCli" class="form-control" placeholder="Entrez le nom du client" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Prénom :</strong><br>
         <input type="text" name="PreCli" class="form-control" placeholder="Entrez le prénom du client" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Adresse :</strong><br>
         <input type="text" name="AdrCli" class="form-control" placeholder="Entrez l'adresse du client" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Code postal :</strong><br>
         <input type="text" name="CpCli" class="form-control" placeholder="Entrez le code postal du client" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Ville :</strong><br>
         <input type="text" name="VilleCli" class="form-control" placeholder="Entrez la ville du client" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Mail :</strong><br>
         <input type="email" name="MailCli" class="form-control" placeholder="Entrez le mail du client" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Téléphone :</strong><br>
         <input type="text" name="TelCli" class="form-control" placeholder="Entrez le téléphone du client" required>
      </div>
      <br><br>
      <a class="btn btn-primary button button2 button_bottom" href="{{ route('clients.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-plus"></i> Ajouter</button>
   </form>
</center>