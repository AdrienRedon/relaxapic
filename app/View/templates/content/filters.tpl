<div class="filters__wrapper">
    
    <form class="filters__container">

        <div class="type_patho__container">
            <div class="title__container" >
                <div class="title">
                    Types de pathologie
                </div>
                <a class="drop_select"><i class="icon icon-down-open"></i></a>
            </div>
            <select size="{count($typesPatho)}" class="multiselect" multiple>
                {foreach from=$typesPatho item=typePatho}
                    <option class="option_item" value="{$typePatho->idT}">{$typePatho->name}</option>
                {/foreach}
            </select>
        </div>

        <div class="meridien__container">
            <div class="title__container" >
                <div class="title">
                    Méridiens
                </div>
                <a class="drop_select"><i class="icon icon-down-open"></i></a>
            </div>
            <select size="{count($meridiens)}" class="multiselect" multiple>
                {foreach from=$meridiens item=meridien}
                    <option class="option_item" value="{$meridien->code}">{$meridien->nom}</option>
                {/foreach}
            </select>
        </div>

        <div class="caracteristiques__container">
            <div class="title__container" >
                <div class="title">
                    Caractéristiques
                </div>
                <a class="drop_select"><i class="icon icon-down-open"></i></a>
            </div>
            <select size="6" class="multiselect" multiple>
                    <option class="option_item" value="1">plein</option>
                    <option class="option_item" value="2">chaud</option>
                    <option class="option_item" value="3">vide</option>
                    <option class="option_item" value="4">froid</option>
                    <option class="option_item" value="5">interne</option>
                    <option class="option_item" value="6">externe</option>
            </select>
        </div>

        <button type="submit">Rechercher</button>
    </form>
   
</div>