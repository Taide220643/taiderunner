<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Runing</title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('public/css/run.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <div class="backbox">
        <a href='myrun' class="backmyrun"><i class="fas fa-arrow-left"></i></a>
    </div>
    <div class="list_body">
       <div class="list_head">
           <p id="P01">id</p>
           <p id="P02">run list</p>
           <p id="P03">status</p>
           <p id="P04">comfirm</p>
           
       </div>
       <?php foreach($test[0] as $data){ ?>
       <form action="updaterun" method="post">
           <input id="P01" name="ID"  value="<?php echo $data['ID'] ?>"></input>
           <input id="P02" value="<?php echo $data['category_name'] ?> <?php echo $data['length'] ?>  price <?php echo $data['price'] ?> bath"></input>
           <select name="S_id" id="P03" value=""> 
               <?php foreach($test[1] as $da){ ?>
                    <option value="<?php echo $da['s_id'] ?>">
                        <?php echo $da['s_name'] ?>
                    </option>
                <?php } ?>
        </select>
        <input id="P07" name="cate_id" value="<?php echo $data['category_id'] ?>"></input>
           <input type="submit" value="update" id="P04"></input>
    
       </form>
       <?php } ?>
    </div>
</body>
</html>