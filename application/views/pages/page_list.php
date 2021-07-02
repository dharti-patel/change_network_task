<div class="row">
    <div class="col-lg-12">           
        <h2>Pages        
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('index.php/pages/create') ?>"> Upload New Page</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>id</th>
          <th>Name</th>
		</tr>
  </thead>
  <tbody>
   <?php $i=1;
   foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $i; ?></td>
          <td><a href="<?php echo base_url('/resources/pages/'.$d->name); ?>"><?php echo $d->name; ?></td>          
      <td>
      </td>     
      </tr>
      <?php $i++; } ?>
  </tbody>
</table>
</div>
</div>
</body>
</html>