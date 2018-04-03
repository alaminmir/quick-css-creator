<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <section class="container">
    
    <form action="getdata.php" method="POST">
            <div class="form-group">
                <label for="h1">h1</label>
                <input type="text" class="form-control" id="h1" name="headertag" autocomplete="on">

                

                <input type="text" class="form-control" id="h1Property" name="h1Property" autocomplete="on">
                <input type="text" class="form-control" id="h1" name="propertyvalue" autocomplete="on">
            </div>
            <div class="form-group">
                <label for="h2">h2</label>
                <input type="text" class="form-control" id="h2" name="h2">
            </div>
            <input type="submit" class="btn btn-success" value="Submit" />
        </form>
    </section>





</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<script>
    // $(document).on('click', '.btn', function(e) {
    //     event.preventDefault();
    //     alert($('input').val());
    // })
</script>

</html>