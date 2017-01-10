<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SignUp</title>



<?php
echo $this->Html->css(array(
"stylelogin1",
)
);
?>


</head>

<body>
  <!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">

    <title>SignUp</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  </head>

  <body class="align">

    <div class="grid">

       <?php
        echo $this->Form->create('User', array('class' => 'form login','id'=>'form_user'));
    ?>

        <div class="form__field">
         <?php
      echo $this->Form->input('User.Username', array('label' => false,'class'=>'form-control','type'=>'text','required'=>'false','placeholder'=>'Username'));
      ?>
        </div>
        <div class="form__field">
         <?php
      echo $this->Form->input('User.Password', array('label' => false,'class'=>'form-control','type'=>'password','required'=>'false','placeholder'=>'Password'));
      ?>
        </div>
        <div class="form__field">
         <?php
      echo $this->Form->input('User.Retype_password', array('label' => false,'class'=>'form-control','type'=>'password','required'=>'false','placeholder'=>'Retype Password'));
      ?>
        </div>
        <div class="form__field">
         <?php
      echo $this->Form->input('User.Fullname', array('label' => false,'class'=>'form-control','type'=>'text','required'=>'false','placeholder'=>'Fullname'));
      ?>
        </div>
        <div class="form__field">
         <?php
      echo $this->Form->input('User.Phone', array('label' => false,'class'=>'form-control','type'=>'text','required'=>'false','placeholder'=>'Phone'));
      ?>
        </div>
        <div class="form__field">
         <?php
      echo $this->Form->input('User.Email', array('label' => false,'class'=>'form-control','type'=>'text','required'=>'false','placeholder'=>'Email'));
      ?>
        </div>
          <input type="submit" name="submit" value="Sign Up" >
        </div>

      


  </body>

</html>


</body>
</html>
