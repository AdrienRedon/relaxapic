
<div class="pathology_meridien_title">
    MÉRIDIEN
</div>

{foreach from=$meridiens item=meridien}
    <div class="pathology_meridien_name">
        {$meridien->nom} ({if $meridien->yin}Yin{else}Yang{/if})
    </div>
    <div class="pathology_meridien_element">
        {if $meridien->element}
            <img src="{WEBROOT}img/{$meridien->element}" alt="element emblem" width="40" height="40" />
        {/if}
    </div>
{/foreach}
