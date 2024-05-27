<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ceci est mon back</title>
        <meta name="description" content="Super site avec une magnifique intégration">
        <link rel="stylesheet" href="/css/back.css">
    </head>
    <body>
        <main class="mainBack" >
            <aside class="navbar" >
                <a class="navbar--logo__link" href="/dashboard">
                    <img class="navbar--logo__picture" src="/assets/logo.svg">
                </a>
                <h3>Navigation</h3>
                <section class="navbar--list" >
                    <ul class="navbar--list__links">
                        <li class="navbar--list__link"><a href="/dashboard">Aller au dashboard</a></li>
                        <li class="navbar--list__link"><a href="/page/home">Pages</a></li>
                        <li class="navbar--list__link"><a href="/article/home">Articles</a></li>
                        <li class="navbar--list__link"><a href="/users/home">Utilisateurs</a></li>
                    </ul>
                </section>
            </aside>
            <section class="content" >
                <h1>Template Back - CMS</h1>
                <!-- intégration de la vue -->
                <?php include "../Views/".$this->view.".php";?>
            </section>
        </main>
    </body>
</html>