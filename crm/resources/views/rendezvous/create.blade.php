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
   <form action="{{ route('rendezvous.store') }}" method="POST">
      @csrf
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Date :</strong><br>
            <input type="date" name="DateRdv" class="form-control" placeholder="Entrez la date" required>
         </div>
         <br>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Client :</strong><br>
            <select name="IdCli">
               @foreach ($client as $key => $value)
               <option value="{{ $value->IdCli }}">{{ $value->NomCli }} {{ $value->PreCli }}</option>
               @endforeach
            </select>
         </div>
         <br>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Prpspect :</strong><br>
         <select name="IdPro">
            @foreach ($prospect as $key => $value)
            <option value="{{ $value->IdPro }}">{{ $value->NomPro }} {{ $value->PrePro }}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Commercial :</strong><br>
         <select name="IdCom">
            @foreach ($commercial as $key => $value)
            <option value="{{ $value->IdCom }}">{{ $value->NomCom }} {{ $value->PreCom }}</option>
            @endforeach
         </select>
      </div>
      <br><br>
      <a class="btn btn-primary button button2 button_bottom" href="{{ route('rendezvous.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-plus"></i> Ajouter</button>
   </form>
</center>