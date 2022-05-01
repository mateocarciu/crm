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
   <form action="{{ route('rendezvous.update',$rendez_vous->IdRdv) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row"></div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Date :</strong><br>
         <input type="date" name="DateRdv" class="form-control" value="{{ $rendez_vous->DateRdv }}" placeholder="Entrez la date" required>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>ID du client:</strong><br>
         <select name="IdCli">
            @foreach ($datas as $key => $value)
            <option value="{{ $value->IdCli }}">{{ $value->IdCli }}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>ID du prospect :</strong><br>
         <select name="IdPro">
            @foreach ($datas as $key => $value)
            <option value="{{ $value->IdPro }}">{{ $value->IdPro }}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>ID du commercial :</strong><br>
         <select name="IdCom">
            @foreach ($datas as $key => $value)
            <option value="{{ $value->IdCom }}">{{ $value->IdCom }}</option>
            @endforeach
         </select>
      </div>
      <br>
      <br><br>
      <a class="btn btn-primary button button2 button_botom" href="{{ route('rendezvous.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-pen"></i> Modifier</button>
   </form>
   <br><br>
</center>