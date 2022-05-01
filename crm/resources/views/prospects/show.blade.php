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
   <h1>Informations du prospect</h1>
   <br>
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left"></div>
      </div>
   </div>
   <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>ID :</strong>
         {{ $prospect->IdPro }}
      </div>
      <br>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Nom :</strong>
         {{ $prospect->NomPro }}
      </div>
      <br>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Prénom :</strong>
         {{ $prospect->PrePro }}
      </div>
      <br>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Adresse :</strong>
         {{ $prospect->AdrPro }}
      </div>
      <br>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
      <strong>Code postal :</strong>
      {{ $prospect->CpPro }}
   </div>
   <br>
   <div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
      <strong>Ville :</strong>
      {{ $prospect->VillePro }}
   </div>
   <br>
   <div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
      <strong>Mail :</strong>
      {{ $prospect->MailPro }}
   </div>
   <br>
   <div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
      <strong>Téléphone :</strong>
      {{ $prospect->TelPro }}
   </div>
   <br><br>
   <div class="pull-right">
      <a class="btn btn-primary button button2" href="{{ route('prospects.index') }}"><i class="fas fa-reply"></i> Retour</a>
   </div>
</center>