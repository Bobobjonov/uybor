<header style="background-color: black; color: white" class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="BUTTON"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>UYLAR ADMIN</b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
    </div>
    <div class="top-menu" >
        <ul class="nav pull-right top-menu">
            <li>
                <?php if(\Yii::$app->user->isGuest) : ?>
            <li class="nav-item">
                <a style="margin-top: 15px; background-color: black; color: white" class="nav-link" href="<?=\yii\helpers\Url::to(['/site/login'])?>">
                    Tizimdan chiqish
                </a>
            </li>
            <?php else : ?>
                <?php $user = \common\models\User::findOne(\Yii::$app->user->id) ?>
                <li class="nav-item">
                    <a data-method="post" style="margin-top: 15px; color: white" class="nav-link" href="<?=\yii\helpers\Url::to(['/site/logout']) ?>">
                        Tizimdan chiqish
                    </a>

                </li>
            <?php endif ?>
            </li>
        </ul>
    </div>
</header>