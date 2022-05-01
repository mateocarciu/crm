<?php
if (!Auth::check()) {
   header("Location: login");
}
?>
<!DOCTYPE html>
<html lang="en">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
   <link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />
   <link rel="stylesheet" href="{{ URL::asset('css\app.css') }}" />
   <body>
   <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
         <div class="container">
            <a class="navbar-brand" href="#">CRM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  @guest
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">Se Connecter</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                  </li>
                  @else
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
                  </li>
                  @endguest
               </ul>
            </div>
         </div>
      </nav>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-body">
                     <div class="topnav" id="myTopnav">
                        <a href="{{ route('rendezvous.index') }}">Rendez-vous</a>
                        <a href="{{ route('commercials.index') }}">Commerciaux</a>
                        <a href="{{ route('prospects.index') }}" >Prospects</a>
                        <a href="{{ route('clients.index') }}"class="active">Clients</a>
                        <a href="{{ route('achats.index') }}">Achats</a>
                        <a href="{{ route('produits.index') }}">Produits</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a><br><br>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <center>
         <h1>Liste des clients</h1>
         <br>
         <table class="table table-bordered">
            <tr>
               <th>ID</th>
               <th>Nom</th>
               <th>Prénom</th>
               <th>Adresse</th>
               <th>Code postal</th>
               <th>Ville</th>
               <th>Mail</th>
               <th>Téléphone</th>
               <th width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $value)
            <tr>
               <td>{{ $value->IdCli }}</td>
               <td>{{ $value->NomCli }}</td>
               <td>{{ $value->PreCli }}</td>
               <td>{{ $value->AdrCli }}</td>
               <td>{{ $value->CpCli }}</td>
               <td>{{ $value->VilleCli }}</td>
               <td>{{ $value->MailCli }}</td>
               <td>{{ $value->TelCli }}</td>
               <td>
                  <form action="{{ route('clients.destroy',$value->IdCli) }}" method="POST">
                     <a class="btn btn-info button button2 button_action" href="{{ route('clients.show', $value->IdCli) }}"><i class="fas fa-user-tag"></i></a>
                     <a class="btn btn-primary button button3 button_action" href="{{ route('clients.edit', $value->IdCli) }}"><i class="fas fa-pen"></i></a>
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger button button1 button_action"><i class="fas fa-trash"></i></button>
                  </form>
               </td>
            </tr>
            @endforeach
            <form action="/search-client" method="get">
               <input type="search" id="search" style="border-radius: 4px; margin-right: 6px; width: 30%; background-color: #D1D5E4; padding-top: 3px; padding-bottom: 3px; padding-left: 12px; border: none;" placeholder="Rechercher..." name="search" required>
               <span>
               <button type="Submit" class="button button2" style="border-radius: 4px; padding-top: 7px; padding-bottom: 7px; padding-left: 12px; padding-right: 12px; transition: 0.2s;"><i class="fas fa-search"></i></button>
               @if (isset($search))
               <a href="/clients" class="btn btn-sm btn-default">{{ $search }}<span id="close" style="margin-left: 6px;"><i class="fas fa-times"></i></span></a>
               @endif
               </span>
            </form>
            <br><br><br>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
               <p>{{ $message }}</p>
            </div>
            @endif
         </table>
      </center>
      <div class="d-felx justify-content-center">
         {{ $data->links() }}
         <a class="btn btn-primary button button3 button_bottom" href="{{ route('clients.create') }}"><i class="fas fa-plus"></i> Ajouter un nouveau client</a>
      </div>
   </body>
</html>








