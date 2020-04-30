<?php
session_start();

  if (!isset( $_SESSION['lists'] ))
  
    $_SESSION['lists'] = array();
  

  $_SESSION['lists'] = array_values( $_SESSION['lists'] );
    
  if ( isset( $_POST ) && !empty( $_POST ) ) 
  array_push( $_SESSION['lists'], $_POST['task'] );
     
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
<form action="./index.php" method="POST">
    <label for="intrest">
      <h3>Add an task:</h3>
      <input type="text" name="task" id="task">
    </label>
    <input type="submit" value="Add">
    <button><?php session_destroy(); ?> Reset</button> <?php // reset the session. ?>
  </form>
    <h2>Todo task list:</h2>
    <ul>
    <?php foreach ( $_SESSION['lists'] as $task ) : ?>
        <li>
          <?php echo $task; ?> <?php //out put the array ?>
        </li>
      <?php endforeach; ?>
    </ul>
  
  <pre>
    <strong>$_POST contents:</strong>
    <?php var_dump( $_POST ); ?>
  </pre>
  <pre>
    <strong>$_SESSION contents:</strong>
    <?php var_dump( $_SESSION ); ?>
  </pre>
</body>
</html>