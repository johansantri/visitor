<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document Code</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  </head>
  <body>

    <div class="container" >
      <h1>Simple Count Visitor View Codeigniter &nbsp; </h1> 
      <hr>
      
    </div>

    <div class="container" style="text-align: center;">
 
  <br>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" style="max-width:115%; max-height:100%; height:180px" alt="foto">
            </a>
            <div class="caption">
              <h3><?php echo $data->name?></h3>
              <p> <?php echo $data->alamat ?></p>
              <p>
                
                <a href="<?=base_url()?>home/viewdata/<?=$data->id?>" class="btn btn-lg btn-success" role="button">View &nbsp; &nbsp; &nbsp; <i class="fa fa-eye" aria-hidden="true"></i>

 <?php echo $data->visit ?></a>

              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>


    <div class="card text-center">
   
    <div class="card-body">
    <hr>    
  
    <a href="https://www.youtube.com/user/johansantri" class="btn btn-primary"><i class="fa fa-youtube-play" aria-hidden="true"></i>
Document Code</a>
    </div>
    <div class="card-footer text-muted">
    
<?php echo "Today is " . date("l:d-m-Y") . "<br>";?>
    </div>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
