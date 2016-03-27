<div class="pathology_symptoms_title">
    SYMPTÔMES
</div>
<ul class="pathology_symptoms_list">
    {foreach from=$symptomes item=symptome}
        <li>- {$symptome->desc} {if $symptome->aggr}/!\{/if}</li>
    {/foreach}
</ul>