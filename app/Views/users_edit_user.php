<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <form action="<?= base_url('admin/users/update'); ?>" method="POST">
                <input type="hidden" name="id" value="<?=$users['id']?>">    
                <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" value="<?= $users['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?= $users['email'] ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Edit</button>
                    </div>
            </form>
        </div>    
    </div>
</div>


</body>
</html>