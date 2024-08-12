<?php
/*echo '<pre>';
var_dump($data);
echo '</pre>';*/
?>
<div class="container">
    <div class="faq-section__wrap">
        <div class="faq-section__body">
            <div class="faq-section__list">
                <?php foreach ($data as $name => $pool):?>
                    <div class="faq-section__card acc">
                        <div class="faq-section__card-header acc-header">
                            <div class="faq-section__card-header-body">
                                <h2 class="faq-section__card-header-title"><?=$name?></h2>
                                <div class="faq-section__card-header-arrow">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="acc-circle" r="14.5" transform="matrix(-1 0 0 1 15.6819 15)" stroke="#333333" fill="#fff"/>
                                        <path class="acc-arrow" d="M18.3432 15.0619C18.3292 15.1967 18.274 15.3239 18.1851 15.4263L14.2251 20.0463C14.173 20.1233 14.1053 20.1885 14.0263 20.2375C13.9473 20.2866 13.8588 20.3184 13.7667 20.3308C13.6746 20.3433 13.5808 20.3362 13.4916 20.3099C13.4025 20.2836 13.3198 20.2388 13.2492 20.1784C13.1785 20.1179 13.1214 20.0433 13.0816 19.9592C13.0418 19.8752 13.0202 19.7837 13.0182 19.6908C13.0163 19.5978 13.0339 19.5055 13.0701 19.4198C13.1063 19.3342 13.1602 19.2572 13.2282 19.1938L16.8238 15L13.2282 10.8063C13.1602 10.7429 13.1063 10.6659 13.0701 10.5802C13.0339 10.4946 13.0163 10.4023 13.0182 10.3093C13.0202 10.2164 13.0418 10.1249 13.0816 10.0408C13.1214 9.9568 13.1785 9.88215 13.2492 9.82172C13.3198 9.76129 13.4025 9.71645 13.4916 9.69018C13.5808 9.66391 13.6746 9.65679 13.7667 9.66926C13.8588 9.68173 13.9473 9.71352 14.0263 9.76256C14.1053 9.81159 14.173 9.87676 14.2251 9.95379L18.1851 14.5738C18.2427 14.6405 18.2864 14.718 18.3135 14.8018C18.3407 14.8857 18.3508 14.9741 18.3432 15.0619V15.0619Z" fill="#333333"/>
                                        <path class="acc-cross" style="opacity: 0;" d="M10.8782 19.6613C11.1241 19.9032 11.5011 19.9032 11.747 19.6613L15.6159 15.8549L19.4847 19.6613C19.7143 19.9194 20.0913 19.9355 20.3536 19.7258C20.6159 19.5161 20.6323 19.1291 20.4192 18.871C20.4028 18.8549 20.3864 18.8226 20.3536 18.8065L16.4847 15L20.3536 11.1936C20.5995 10.9678 20.6159 10.5807 20.3864 10.3387C20.1569 10.0968 19.7634 10.0807 19.5175 10.3065C19.5011 10.3226 19.5011 10.3226 19.4847 10.3387L15.6159 14.1452L11.747 10.3387C11.5011 10.1129 11.1077 10.1291 10.8782 10.371C10.6651 10.5968 10.6651 10.9678 10.8782 11.1936L14.747 15L10.8782 18.8065C10.6487 19.0484 10.6487 19.4194 10.8782 19.6613Z" fill="#333333"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                            <div class="faq-section__card-body acc-body">
                                <?php foreach ($pool as $miner):?>
                                    <div class="faq-section__card-acc acc">
                                        <div class="faq-section__card-acc-header acc-header">
                                            <div class="faq-section__card-acc-header-body">
                                                <h2 class="faq-section__card-acc-header-title"><?=$miner['username']?></h2>
                                                <h2 class="faq-section__card-acc-header-title">Hashrate: <?=$miner['hashrate']?></h2>
                                                <?php if($miner['nowMining']):?>
                                                    <div class="miner-active"></div>
                                                <?php else:?>
                                                    <div class="miner-disable"></div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
