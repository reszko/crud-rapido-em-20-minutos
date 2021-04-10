<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Users</title>
    <style>
        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
    <script>
        function confirma() {
            if (!confirm('Desejar excluir o registro?')) {
                return false;
            }

            return true;
        }
    </script>
</head>

<body>

    <div class="container mt-5">
        <?php echo anchor(base_url('user/create'), 'Novo usuário', ['class' => 'btn btn-success mb-3']) ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['lastname'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <?php echo anchor('user/edit/' . $user['id'], 'Editar') ?>
                        -
                        <?php echo anchor('user/delete/' . $user['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php echo $pager->links(); ?>
    </div>

</body>

</html>