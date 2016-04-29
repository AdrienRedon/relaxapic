<!DOCTYPE html>
<html>
    <head>
        <title>Relaxapic {$title}</title>
        <link rel="stylesheet" type="text/css" href="{WEBROOT}css/app.css" media="screen">
        <link rel="stylesheet" type="text/css" href="{WEBROOT}css/print.css" media="print">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no">
    </head>
    <body>
        <header {if $size=="big"}class="header--big"{/if}>
            <div class="header__logo">
                <a href="{WEBROOT}">
                    <img src="{WEBROOT}img/relaxapic_logo.png" alt="Relaxapic logo" height="75" width="75">
                </a>
            </div>
            <h1 class="header__title">
                RELAXAPIC
            </h1>
            <div class="header__login">
                <a id="signin__button" class="isNotLogged{if $logged} hidden{/if}" href="#">S'inscrire</a>
                <a id="login__button" class="isNotLogged{if $logged} hidden{/if}" href="#">Se connecter</a>
                <a id="logout__button" class="isLogged{if ! $logged} hidden{/if}" href="#">Se déconnecter</a>
            </div>
        </header>
        <nav class="menu {if $size=="big"}menu--big{/if}">
            <ul class="menu__list">
                <li class="menu__item link_accueil{if $title=="Accueil"} active{/if}"><a href="{WEBROOT}"> Accueil </a></li>
                <li class="menu__item link_patho{if $title=="Pathologies"} active{/if}"><a href="{WEBROOT}pathologies"> Pathologies </a></li>
                <li class="menu__item link_salons{if $title=="Salons"} active{/if}"><a href="{WEBROOT}salons"> Salons </a></li>
                <li class="menu__item link_membres{if $title=="Membres"} active{/if}"><a href="{WEBROOT}membres"> Membres </a></li>
            </ul>
        </nav>

    {include file="templates/popup/login.tpl"}
    {include file="templates/popup/signin.tpl"}

    <div class="overlay hidden"></div>

    <div class="main__wrapper">
    
    

