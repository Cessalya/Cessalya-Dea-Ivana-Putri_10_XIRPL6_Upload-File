<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload-data.php?id=<?php echo $_GET['id']?>" method="post" enctype="multipart/form-data">
        <div for="file">Upload Jurnal</div>
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>