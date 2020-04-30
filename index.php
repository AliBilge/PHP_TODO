<?php
session_start();
array_push( $_POST['task'] );
?>

<?php
$myTilte = 'PHP Todo List';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $myTilte; ?></title>
</head>
<body>
<h1><?php echo $myTilte; ?></h1>
<pre>
<form action="./index.php" method="POST"><?php ?>
    <label for="task">
      <h3>Add an task:</h3>
      <input type="text" name="task" id="task">
    </label>
    <input type="submit" value="Add">
  </form>
    <h2>Todo task list:</h2>
    <ul>
      <?php foreach ( $_POST['task'] as $task ) : ?>
        <li>
          <?php echo $task; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  
  <pre>
    <strong>Todo Task List:</strong>
    <?php var_dump( $_POST ); ?>
  </pre>
  
</body>
</html>