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

    <div class="container">
      <h1>Simple Count Visitor View Codeigniter</h1>
      <hr>
    </div>


    <div class="container">
      <h2>Leader</h2>
      
        <form >
          <div class="row">
            <div class="col-md-8">
          <label>name</label>
          <input type="text" name="name" class="form-control" value="<?=$data->name?>" disabled>
          <label>address</label>
          <textarea name="alamat" rows="6" class="form-control" cols="80" disabled><?=$data->alamat?></textarea>
        </div>
        <div class="col-md-4">
          <label>foto</label><br>
         <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" style="max-width:115%; max-height:100%; height:200px" alt="foto">
       </div>
       &nbsp;
       <div class="col-md-12" >
       <a href="<?php echo base_url()?>" class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i>
home</a>
       </div>
          </div>
        </form>
       
    </div>


    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
