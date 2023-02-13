<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Nhap 1 day so: </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="n" required>
        </div>
        <input type="submit" name="sub" class="btn btn-danger mb-3"></input>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <?php
    if (isset($_POST['n'])) {
        $number = (int)$_POST['n'];
    }
    if (isset($_POST['sub'])) {
        $n = $number;
        $res = 0;
        while ($number > 1) {
            $res += ($number % 10);
            $number = $number / 10;
        }
        echo "Tong cua day so $n la $res";
    }
    ?>
</body>

</html>