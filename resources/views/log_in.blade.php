<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="immagini/icona.png">
<link rel = 'stylesheet' href = "{{ url('css/log_in.css') }}">
<script src="{{ url('js/sign_in.js') }}" defer></script>
<title>WeSocial</title>
</head>

<body>


@if($error == 'error')

  <p class = "error">Credenziali non valide</p>
  
@endif



    <main class = 'box'>
        <form name = 'log_in' method="post">
@csrf
            <span class = 'text-center'>Effettua l'accesso</span>
             <div class="input-container">
               <input type="text" name = 'email'>
               <label>E-mail</label>
             </div>
             <div class="input-container">
               <input type="password" name = 'password'>
               <label>Password</label>
             </div>
             <button type="submit" value="submit" class="button">Accedi</button>
             <p>Non sei ancora registrato? Clicca <a href = "{{ url('registrazione') }}">qui</a></p>
             
        </form>
    </main>
</body>



</html>