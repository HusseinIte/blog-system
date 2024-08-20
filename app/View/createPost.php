<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Create Post</title>
</head>

<body>

    <div class="container w-75 mb-6">
        <h2 class="text-center">Create Post</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" >
                <?php  if (isset($errors['title'])) { ?>
                    <span style=" color: red; font-weight: bold;"><?php echo $errors['title']; ?></span>
                <?php } ?>
                <br>
            </div>

            <div class="form-group">
                <label for="auther">auther:</label>
                <input type="text" class="form-control" id="auther" name="auther" >
                <?php if (isset($errors['auther'])) { ?>
                    <span style=" color: red; font-weight: bold;"><?php echo $errors['auther']; ?></span>
                <?php } ?>
                <br>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content"></textarea>
                <?php if (isset($errors['content'])) { ?>
                    <span style=" color: red; font-weight: bold;"><?php echo $errors['content']; ?></span>
                <?php } ?>
                <br>
            </div>
            <div class="form-group">
                <input type="hidden" name="action" value="store">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Create</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>