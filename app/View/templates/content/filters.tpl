<div class="filters__wrapper">
    
    <form class="filters__container">

        <input type="text" name="search" id="search-input" placeholder="Symptômes ou pathologies" />

        <div class="filter">
            <fieldset>
                <legend>Type de pathologie</legend>
                {foreach from=$typesPatho item=typePatho}
                    <div class="filter__row"><input type="checkbox" value="{$typePatho->idT}">{$typePatho->name}</div>
                {/foreach}
            </fieldset>
        </div>

        <div class="filter">
            <fieldset>
                <legend>Méridiens</legend>
                {foreach from=$meridiens item=meridien}
                    <div class="filter__row"><input type="checkbox" value="{$meridien->code}">{$meridien->nom}</div>
                {/foreach}
            </fieldset>
        </div>

        <div class="filter">
            <fieldset>
                <legend>Caractéristiques</legend>
                <div class="filter__row"><input type="checkbox" value="1">plein</div>
                <div class="filter__row"><input type="checkbox" value="2">chaud</div>
                <div class="filter__row"><input type="checkbox" value="3">vide</div>
                <div class="filter__row"><input type="checkbox" value="4">froid</div>
                <div class="filter__row"><input type="checkbox" value="5">interne</div>
                <div class="filter__row"><input type="checkbox" value="6">externe</div>
            </fieldset>
        </div>

        <button type="submit">Rechercher</button>
    </form>
   
</div>