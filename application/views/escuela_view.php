<!DOCTYPE html>
<html>
 <head>
  <title><?php echo $page_title ?></title>
 </head>
 <body>
  <?php foreach($result as $row): ?>
  <h3><?php echo $row->Nombre ?></h3>
  <p><?php echo $row->Dirección ?></p>
  <?php endforeach; ?>
 </body>
</html>