<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Gedimagination</title>
</head>
<body>
    <section class="contact-us" id="contact-section">
        <div class="img_accueil">
            <img src="img/btn_gedimat.png" alt=""/>
        </div>
    <form action="{{ url('verif')}}" method="get">
        <div class='welcome-page'>
            <input type='submit' id="form-submit" value='Participer au jeu concours'>
        </div>
    </form>
    <form action="{{ url('classement')}}" method="get">
        <div class="classement-page">
            <input type='submit' id="form_submit2" value='Voir le classement' href="classement.blade.php"> 
        </div>
    </form>
    </section>
</body>