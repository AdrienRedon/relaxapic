{include file="templates/header.tpl" size="small" title="A propos"}

<div class="apropos-banner">
</div>
<section class="apropos-container">

    <h2 class="titre">
            Membres de l'équipe
    </h2>

    <article class="team-members">

        <div class="team-member">
            <img src="{WEBROOT}img/membres/hugo.png" class="member-image" alt="member photograph">
            <h4 class="membeer-name">Hugo Dufaitre</h4>
            <p class="member-post">Cuisinier</p>
            <ul class="member-social">
                <li><a href=""><i class="icon icon-instagram"></i></a></li>
                <li><a href=""><i class="icon icon-twitter"></i></a></li>
                <li><a href=""><i class="icon icon-facebook"></i></a></li>
            </ul>
        </div>

        <div class="team-member">
            <img src="{WEBROOT}img/membres/nico.png" class="member-image" alt="member photograph">
            <h4 class="membeer-name">Nicolas Lebrun</h4>
            <p class="member-post">Portier</p>
            <ul class="member-social">
                <li><a href=""><i class="icon icon-instagram"></i></a></li>
                <li><a href=""><i class="icon icon-twitter"></i></a></li>
                <li><a href=""><i class="icon icon-facebook"></i></a></li>
            </ul>
        </div>

        <div class="team-member">
            <img src="{WEBROOT}img/membres/pa.png" class="member-image" alt="member photograph">
            <h4 class="membeer-name">Pierre-Adrien Maison</h4>
            <p class="member-post">Jardinier</p>
            <ul class="member-social">
                <li><a href=""><i class="icon icon-instagram"></i></a></li>
                <li><a href=""><i class="icon icon-twitter"></i></a></li>
                <li><a href=""><i class="icon icon-facebook"></i></a></li>
            </ul>
        </div>

        <div class="team-member">
            <img src="{WEBROOT}img/membres/adrien.png" class="member-image" alt="member photograph">
            <h4 class="membeer-name">Adrien Redon</h4>
            <p class="member-post">Femme de ménage</p>
            <ul class="member-social">
                <li><a href=""><i class="icon icon-instagram"></i></a></li>
                <li><a href=""><i class="icon icon-twitter"></i></a></li>
                <li><a href=""><i class="icon icon-facebook"></i></a></li>
            </ul>
        </div>

    </article>

    <h2 class="titre">
            Descriptions des développements
    </h2>
    
    <article class="architecture">
        <p>
            Mise en place d'une Architecture MVC : Utilisation d’un framework ‘maison’ (développé par Adrien REDON) comprenant entre
            autres un sytème de routing (url-rewriting), un ORM (avec adapteur PDO), de la validation de données (ex: formulaires)
            et un sytème d’authentification.
        </p>

        <p>
            Utilisation de compass (framework SASS), webpack (module bundler), smarty (moteur de template), jquery (manipulation du DOM
            et Ajax) et composer et npm pour la gestion de dépendances PHP (Composer) et JS (npm).
        </p>
    </article>

    <h2 class="titre">
            Sources
    </h2>

    <article class="sources">
        <ul class="sources-list">
            <li>
                <a href="http://www.alsacreations.com" class="sources-lien">http://www.alsacreations.com</a>
                <p class="sources-utilisation">Documentation media queries, viewport, navigation clavier</p>
            </li>
            <li>
                <a href="http://stackoverflow.com" class="sources-lien">http://stackoverflow.com</a>
                <p class="sources-utilisation">Debugging</p>
            </li>
            <li>
                <a href="https://www.pexels.com" class="sources-lien">https://www.pexels.com</a>
                <p class="sources-utilisation">Toutes les images, libres de droits</p>
            </li>
            <li>
                <a href="https://www.w3.org/TR/wai-aria/roles" class="sources-lien">https://www.w3.org/TR/wai-aria/roles</a>
                <p class="sources-utilisation">Rôles Aria</p>
            </li>
            <li>
                <a href="http://www.smarty.net/documentation" class="sources-lien">http://www.smarty.net/documentation</a>
                <p class="sources-utilisation">Documentation Smarty</p>
            </li>
        </ul>
    </article>


</section>



{include file="templates/footer.tpl" js="aPropos"}