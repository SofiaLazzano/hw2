<!DOCTYPE html>
<html lang="en">
<head>
<script>
        const BASE_URL = "{{ url('/') }}"
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "{{ url('css/crea.css') }}"/>
    <link rel = "stylesheet" href = "{{ url('css/homepage.css') }}"/>
    <link rel="icon" type="image/png" href="immagini/icona.png">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <script src="{{ url('js/crea.js') }}" defer></script>
    <title>WeSocial</title>
</head>
<body>
    
<header>
<nav>
   <img src = 'immagini/icona.png'> 
    <div class = 'rightblock'>
    <a href = "{{ url('home') }}">Home</a>
    <a href = "{{ url('logout') }}">Logout</a>
</div>
</nav>

</header>
 
    <main>
        
  
        <section id ='utente'>    
           <div class = 'utente'> <img src = 'immagini/thor.png'  class = 'image'></div>
            <div class = 'username'>
               @ {{ $username }}
                
            </div>
            <div class="stats">
                    <div>
                        <span class="conta"> {{ $nposts }} </span><br>Posts
                    </div>
                    
        </section>

<article id='central'>
        <section class = 'scegli'>
            <div class = 'container'>
                <div class = 'didascalia'>Cerca qui il contenuto da pubblicare</div>
                <button class = 'music' >Musica</button>
                <button class = 'photos' >Foto</button>
            </div>
            <form id='musicForm' class='hidden'>
                <label>
                    <input type = 'text' id = 'music' placeholder = 'Cerca musica'>
                </label>
                <label>
                    <input type = 'submit' id = "musicSubmit">
                </label>
            </form>
            
            <form id='photoForm' class = 'hidden'>
                <label>
                    <input type = 'text' id = 'photos' placeholder = 'Cerca foto'>
                </label>
                <label>
                    <input type = 'submit' id = "photoSubmit">
                </label>
           
            </form>
        </section>
        <section class = 'music_results'></section>
        <section class = 'photos_results'></section>
</article>

        <section class = 'side'></section>
</main>

</body>