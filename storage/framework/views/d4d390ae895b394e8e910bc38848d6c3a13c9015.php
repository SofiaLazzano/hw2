<!DOCTYPE html>

<html lang="en">
<head>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script>
        const BASE_URL = "<?php echo e(url('/')); ?>"
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "<?php echo e(url('css/homepage.css')); ?>">
    <link rel="icon" type="image/png" href="immagini/icona.png">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="<?php echo e(url('js/home.js')); ?>" defer></script>
    <title>WeSocial</title>
</head>
<body>
    
<header>
<nav>
   <img src = 'immagini/icona.png'> 
    <div class = 'rightblock'>
    <a href = "<?php echo e(url('home')); ?>">Home</a>
    <a href = "<?php echo e(url('logout')); ?>">Logout</a>
</div>
</nav>

</header>
    </body>
    <main>
      <section class = 'striscia'>
       <section class = 'background'>
       
        <section id ='utente'>    

           <div class = 'utente'> <img src = 'immagini/thor.png'  class = 'image'></div>
            <div class = 'username'>
                @ <?php echo e($username); ?>

                 
            </div>
            <div class="stats">
                    <div>
                         <span class="conta"></span> <?php echo e($nposts); ?> <br>Posts
                    </div>
                
        </section>

        </section>
</section>

        <section class = 'central'>
        </section>
<section class = 'striscia2'>
        <section class = 'side'>
            <div id = 'container'>
                <button class = 'tasto'>Crea un post</button>
                
            </div>

        </section>
</section>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-hw2\resources\views/home.blade.php ENDPATH**/ ?>