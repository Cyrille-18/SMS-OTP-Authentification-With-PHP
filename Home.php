<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Stark Company| Home</title>
</head>
<body>
<div class="loader">
<div></div>
</div>
<div class="content">
    <div class="home-container">
        <h1>Bienvenue,</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet assumenda commodi culpa delectus earum odit placeat porro quisquam saepe. Aperiam doloribus fugiat hic omnis ratione saepe sint tempore veritatis.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid animi consequatur minus nesciunt rem reprehenderit sapiente, similique soluta voluptatibus. Adipisci aliquam asperiores consequuntur corporis dicta id laboriosam voluptate! Magni.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam autem, consequatur doloribus eaque fugiat id ipsa laborum magni obcaecati, omnis possimus quas ratione repellat sed tempora vero vitae! Non.</p>
        <div class="home-end">
            <button type="submit" class="btn" name="connexion" id="connexion">Deconnexion</button>
            <p>Abonnez-vous à mon compte Github :)</p>
            <a href="https://github.com/Cyrille-18" style="color: black" ><i class="fa fa-github" style="font-size:36px"></i></a>
        </div>
    </div>
</div>
<script>
    $(window).on('load', function() {
        setTimeout(function() {
            $(".loader").fadeOut(1000, function() {
                $(".content").fadeIn(1000);
            });
        }, 3000);
    });
</script>
</body>
</html>
