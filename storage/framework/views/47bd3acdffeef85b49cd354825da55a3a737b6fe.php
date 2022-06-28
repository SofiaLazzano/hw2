
<!DOCTYPE html>

<html lang="en">
<head>
<script>
const BASE_URL = "<?php echo e(url('/')); ?>"
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="immagini/icona.png">
<link rel = 'stylesheet' href = "<?php echo e(url('css/sign_in.css')); ?>">
<script src = " <?php echo e(url('js/checkform.js')); ?>" defer></script>
<title>WeSocial</title>
</head>

<body>

<div class = 'side-container'>
  <a class="side">Benvenuto su<br></a>
  <h>WeSocial</h>
  </div>
    <main class = 'box'>
      
        <form name="sign_in" method="post">
        <?php echo csrf_field(); ?>
                <span class = 'text-center'>Inserisci i tuoi dati</span>
                <div class = 'input-container'>
                    <label id="nome"><input type = 'text' name = 'nome' value = '<?php echo e(old("nome")); ?>'><div id = 'adv'></div>
                    Nome</label>
                </div>
                <div class = 'input-container'>
                    <label id = 'cognome'><input type = "text" name = 'cognome' value = '<?php echo e(old("cognome")); ?>'> <div id = 'adv2'></div>
                    Cognome
                    </label>
                </div>
                <div class = 'input-container'>
                 <label id = 'username'> <input type = "text" name = 'username' id = 'username' value = '<?php echo e(old("username")); ?>'><div id = 'adv3'></div>
                  Username
                 </label>
                </div>
                <div class="input-container">
                  <label id = 'email'><input type="text" name = 'email' id = 'email'><div id = 'adv4'></div>
                  E-mail
                  </label>
                </div>
                <div class="input-container">
                 <label id = 'password'> <input type="password" name = 'password' id = 'password'><div id = 'adv5'></div>
                  Password
                 </label>
                </div>
              <label>
                <input type="submit" value="registrati" class="button"></input>
                
              </label>
                  
        </form>
        <p>Sei già registrato? Effettua il  <a href = "<?php echo e(url('log_in')); ?>">login</a></p>
    </main>
</body>

</html><?php /**PATH C:\xampp\htdocs\example-hw2\resources\views/registrazione.blade.php ENDPATH**/ ?>