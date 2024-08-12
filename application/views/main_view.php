<?php if($data):?>
    <div class="container">
        <div class="news-section__body">
            <div class="main-nav__icon-block">
                <h1>Пользователь: <b><?=$data['username']?></b></h1>
            </div>
            <div class="main-nav__icon-block">
                <h1>Общий Hashrate: <b><?=$data['hashrate']?></b></h1>
            </div>
        </div>
        <div class="main-nav__icon-block">API KEY: <?=$data['apiKey']?></div>
    </div>
<?php endif;?>