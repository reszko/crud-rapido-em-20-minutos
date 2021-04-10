<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Edição</title>
</head>

<body>
    <div class="container mt-5">

        <?php echo form_open('user/store') ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" value="<?php echo isset($user['username']) ? $user['username'] : '' ?>" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="<?php echo isset($user['name']) ? $user['name'] : '' ?>" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" value="<?php echo isset($user['lastname']) ? $user['lastname'] : '' ?>" name="lastname" id="lastname" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="<?php echo isset($user['email']) ? $user['email'] : '' ?>" name="email" id="email" class="form-control">
        </div>
        <input type="submit" value="Salvar" class="btn btn-primary">
        <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : '' ?>">
        <?php echo form_close(); ?>

    </div>
</body>

</html>