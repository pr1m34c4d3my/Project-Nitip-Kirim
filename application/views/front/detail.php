<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
</head>
<body>
    <div class="blog-post">
    <?php
        echo "
        <figure class='post-image'> <span class='post-date'>".$artikel['date']."</span> <img src='images/news-image3.jpg' alt='Image'></figure>
        <h3 class='post-title'>".$artikel['judul']."</h3>
        <p class='post-text'>".$artikel['isi_artikel']."</p>
       
        ";
    ?>
    </div>
    
</body>
</html>