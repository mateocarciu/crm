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
   <form action="{{ route('commercials.store') }}" method="POST">
      @csrf
      <h1>Ajouter un commercial</h1>
      <br>
      <div class="row"></div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Nom :</strong><br>
            <input type="text" name="NomCom" class="form-control" placeholder="Entrez le nom du commercial" required>
         </div>
         <br>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Prénom :</strong><br>
            <input type="text" name="PreCom" class="form-control" placeholder="Entrez le prénom du commercial" required>
         </div>
         <br>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Mail :</strong><br>
            <input type="email" name="MailCom" class="form-control" placeholder="Entrez l'adresse mail du commercial" required>
         </div>
         <br>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Tel :</strong><br>
         <input type="text" name="TelCom" class="form-control" placeholder="Entrez le téléphone du commercial" required>
      </div>
      <br>
      <br><br>
      <a class="btn btn-primary button button2 button_bottom" href="{{ route('commercials.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-plus"></i> Ajouter</button>
   </form>
</center>