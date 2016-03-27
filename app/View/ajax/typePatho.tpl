{foreach from=$typesPatho item=typePatho}
    <div class="category__container">
        <div class="category_title__container">
            <div class="category__title">
                {$typePatho->name}
            </div>
            <a class="drop" data-id="{$typePatho->idT}"><i class="icon icon-down-open"></i></a>
        </div>
        <ul class="pathologies__container"></ul>
    </div>
{/foreach}