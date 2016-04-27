<h2 class="titre">
        Type de pathologies
</h2>

{foreach from=$typesPatho item=typePatho}
    <div class="category__container" data-id="{$typePatho->idT}">
        <div class="category_title__container">
            <div class="category__title">
                {$typePatho->name}
            </div>
            <a class="drop"><i class="icon icon-down-open"></i></a>
        </div>
        <ul class="pathologies__container"></ul>
    </div>
{/foreach}