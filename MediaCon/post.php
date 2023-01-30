<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Create the new post</h1>
    <form action="save-post.php" method="post">
        <fieldset>
            <lable for="body">Body:</lable>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <label for="user">User:</label>
            <input type="" name="user" id="user">
        </fieldset>
        <button>Post</button>

    </form>
</body>
</html>