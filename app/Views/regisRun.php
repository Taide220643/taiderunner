<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Run</title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('public/css/register.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
<form action="regisruning" method="POST">
        <h3>SELECT RUN</h3>
        
        <div class="cardid">
            <div class="cardbox">
            <i class="fas fa-running"></i>
            <select  name="category_run" value="" > 
                <option>select run</option>
                <?php foreach($cate as $data){ ?>
                    <option value="<?php echo $data['category_id'] ?>"><?php echo $data['category_name'] ?></option>
                <?php }?>
            </select>
            </div>
        </div>
        
     
        <div class="buttongroup">
            <a href="home">back</a>
            <input type="submit"></input>
        </div>

    </form>
</body>
</html>