<?php
if(!empty($important_links))
{
//     echo "<pre>";
// print_r($important_links);
// echo "</pre>";
?>
<div id="accordion" role="tablist" class="mb-50">
    <h5 class="h5-sm steelblue-color">Important Links</h5>
    <div class="box-list">
        <?php
        foreach($important_links as $imlink)
        {?>
        <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
        <p><a href="<?=$imlink['url']?>"><?=$imlink['name']?></a></p>
        <?php 
        }?>
        
        
    </div>
</div>
<?php
}
else
{?>
<div id="accordion" role="tablist" class="mb-50">
    <h5 class="h5-sm steelblue-color">Services</h5>
    <div class="card">
        <div class="card-header" role="tab" id="headingOne">
            <h5 class="h5-xs">
                <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                Hair
                </a>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
            <div class="card-body">
                <div class="box-list">
                    <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                    <p><a href="/hair-loss-treatment-in-bangalore/">Hair Loss Treatment</a></p>
                    <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                    <p><a href="/hair-transplant-in-bangalore/">Hair Transplant</a></p>
                    <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                    <p><a href="/fue-hair-transplant-in-bangalore/">FUE Hair Transplant</a></p>
                    <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                    <p><a href="/fut-hair-transplant-in-bangalore/">FUT Hair Transplant</a></p>
                    <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                    <p><a href="/beard-transplant-in-bangalore/">Beard Transplant</a></p>
                    <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                    <p><a href="/revision-hair-transplant-in-bangalore/">Revision Hair Transplant</a></p>
                    <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                    <p><a href="/prp-treatment-for-hair-in-bangalore/">PRP Hair Treatment</a></p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
            <h5 class="h5-xs">
                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                Skin
                </a>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/acne-treatment-in-bangalore/">Acne Treatment</a></p>
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/tattoo-removal-in-bangalore/">Tattoo Removal</a></p>
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/mole-removal-in-bangalore/">Mole Removal</a></p>
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/pigmentation-treatment-in-bangalore/">Pigmentation Treatment</a></p>
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/carbon-peel-treatment-in-bangalore/">Carbon Facial</a></p>
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/laser-hair-removal-in-bangalore/">Laser Hair Removal</a></p>
              
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" role="tab" id="headingThree">
            <h5 class="h5-xs">
                <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                Anti-aging
                </a>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/botox-treatment-in-bangalore/">Botox Treatment</a></p>
                <div class="box-list-icon"><i class="fas fa fa-genderless"></i></div>
                <p><a href="/stretch-marks-treatment-in-bangalore/">Stretch Marks Treatment</a></p>
           
            </div>
        </div>
    </div>
</div>
<?php }?>

