{foreach from=$pathos item=patho}
 <li class="pathology__container">
    <div class="pathology_title__container">
        <div class="pathology__title">
            {$patho->desc}
        </div>
        <a class="info" data-idp="{$patho->idP}">
            <i class="icon icon-info-circled"></i>
        </a>
    </div>
    <div class="pathology_info__container">
        <div class="pathology_meridien__wrapper">
            <div class="pathology_meridien_container">
                <div class="pathology_meridien_title">
                    MÉRIDIEN
                </div>
                <div class="pathology_meridien_name">

                </div>
                <div class="pathology_meridien_element">

                </div>
            </div>
        </div>
        <div class="pathology_symptoms__wrapper">
            <div class="pathology_symptoms_container">
                <div class="pathology_symptoms_title">
                    SYMPTÔMES
                </div>
                <ul class="pathology_symptoms_list">

                </ul>
            </div>
        </div>
 </li>
 {/foreach}