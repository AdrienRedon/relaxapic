<div class="filters__wrapper">

    <form class="filters__container">

        <div class="filters-header">
            <h2>
                Rechercher une pathologie
            </h2>
        </div>

        <div class="all-filters">

            {if $logged}
            <input type="text" name="search" id="search-input" placeholder="Symptômes ou pathologies" />
            {/if}

            <div class="filter filterTypePatho">
                <fieldset>
                    <a href="#" class="filter__toggle">
                        <legend>Type de pathologie</legend>
                    </a>
                    <div class="filter__dropdown">
                        {foreach from=$typesPatho item=typePatho}
                        <div class="filter__row"><label for="filter-{$typePatho->idT}"><input type="radio" name="typePatho" id="filter-{$typePatho->idT}" value="{$typePatho->idT}">{$typePatho->name}</label></div>
                        {/foreach}
                    </div>
                </fieldset>
            </div>

            <div class="filter filterMeridiens">
                <fieldset>
                    <a href="#" class="filter__toggle">
                        <legend>Méridiens</legend>
                    </a>
                    <div class="filter__dropdown">
                        {foreach from=$meridiens item=meridien}
                        <div class="filter__row"><label for="filter-{$meridien->code}"><input type="checkbox" name="meridien" id="filter-{$meridien->code}" value="{$meridien->code}">{$meridien->nom}</label></div>
                        {/foreach}
                    </div>
                    
                </fieldset>
            </div>

            <div class="filter filterCaracteristiques">
                <fieldset>
                    <a href="#" class="filter__toggle">
                        <legend>Caractéristiques</legend>
                    </a>
                    <div class="filter__dropdown">
                        <div class="filter__row"><label for="filter-carac-1"><input type="checkbox" name="caracteristiques" id="filter-carac-1" value="1">plein</label></div>
                        <div class="filter__row"><label for="filter-carac-2"><input type="checkbox" name="caracteristiques" id="filter-carac-2" value="2">chaud</label></div>
                        <div class="filter__row"><label for="filter-carac-3"><input type="checkbox" name="caracteristiques" id="filter-carac-3" value="3">vide</label></div>
                        <div class="filter__row"><label for="filter-carac-4"><input type="checkbox" name="caracteristiques" id="filter-carac-4" value="4">froid</label></div>
                        <div class="filter__row"><label for="filter-carac-5"><input type="checkbox" name="caracteristiques" id="filter-carac-5" value="5">interne</label></div>
                        <div class="filter__row"><label for="filter-carac-6"><input type="checkbox" name="caracteristiques" id="filter-carac-6" value="6">externe</label></div>
                    </div>
                    </fieldset>
            </div>
        </div>

        <button type="submit">Rechercher</button>
    </form>

</div>