<?php 
    use app\core\form\Form;
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Route</title>
</head>


<body>
    <div class="container">
        <h2> Add Route </h2>
        <div class="jumbotron">
            <div class="row">
                <div class="col">
                    <?php $form = Form::begin('/addroute', 'post'); ?>
                        <?php echo $form->field($model, 'routename'); ?>
                        <?php echo $form->field($model, 'source'); ?>
                        <?php echo $form->field($model, 'destination'); ?>
                        <?php echo $form->field($model, 'cost', 'number'); ?>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <?php Form::end(); ?>
                </div>
            </div>
        </div>
    </div>
</body>