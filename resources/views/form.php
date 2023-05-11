<html>
    <head>
        <h1><?= $title; ?></h1>
        <h3><?= session('message'); ?></h3>
    </head>
    <body>
        <form action="<?= route('get-contactdata'); ?>" method="post">
        <input type="hidden" name="_token" value="<?= @csrf_token(); ?>"><br>
        <label for="">Name</label><input type="text" name="name" value=""><br>
        <label for="">Number</label><input type="number" name="Number" value=""><br>
        <label for="">Age</label><input type="number" name="Age" value=""><br>
        <button type="submit">Submit</button>
        </form>

    </body>
</html>
