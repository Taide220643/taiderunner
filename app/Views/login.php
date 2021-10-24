<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('public/css/register.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
<form action="logining" method="POST">
        <h3>LOG IN</h3>
        
        <div class="cardid">
            <div class="cardbox">
            <i class="fas fa-address-card"></i>
            <input placeholder="id card" name="id_card01" value="" > </input>
            </div>
        </div>
        
        <div  class="cardid">
            <div class="cardbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" value="" name="password01" > </input>
            </div>
        </div>
        <div class="buttongroup">
            <a href="home">back</a>
            <input type="submit"></input>
        </div>

    </form>
    
</body>
</html>