<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$appUrl = Yii::$app->request->baseUrl . '/';
?>
<section class="ba-section ba-about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="ba-title"><span>About us</span></h2>
                <h3 class="ba-sub-title">We are awesome</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            </div>
            <div class="col-sm-6">
                <h2 class="ba-title"><span>What We Do</span></h2>
                <h3 class="ba-sub-title">Creative &amp; Digital</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            </div>
        </div>
    </div>
</section>
<section class="ba-section ba-section--benefits">
    <div class="container">
        <div class="ba-section__content">
            <h2 class="ba-title text-center"><span>some benefits</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="ba-benefit">
                    <div class="ba-benefit__icon ion-iphone"></div>
                    <h3 class="ba-benefit__title">FULLY RESPONSIVE</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eleifend suscipit enim, eu commodo neque molestie vitae.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ba-benefit">
                    <div class="ba-benefit__icon ion-ios-infinite-outline"></div>
                    <h3 class="ba-benefit__title">UNLIMITED OPTIONS</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eleifend suscipit enim, eu commodo neque molestie vitae.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ba-benefit">
                    <div class="ba-benefit__icon ion-social-wordpress-outline"></div>
                    <h3 class="ba-benefit__title">WORDPRESS</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eleifend suscipit enim, eu commodo neque molestie vitae.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="ba-benefit">
                    <div class="ba-benefit__icon ion-ios-cart-outline"></div>
                    <h3 class="ba-benefit__title">E-commerce</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eleifend suscipit enim, eu commodo neque molestie vitae.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ba-benefit">
                    <div class="ba-benefit__icon ion-ios-settings"></div>
                    <h3 class="ba-benefit__title">CUSTOMIZABLE DESIGN</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eleifend suscipit enim, eu commodo neque molestie vitae.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ba-benefit">
                    <div class="ba-benefit__icon ion-settings"></div>
                    <h3 class="ba-benefit__title">SUPPORT</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eleifend suscipit enim, eu commodo neque molestie vitae.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ba-section">
    <div class="container">
        <div class="ba-section__content">
            <h2 class="ba-title text-center"><span>THE DREAM TEAM</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row ba-team">
            <!-- BEGIN col-sm-3-->
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team1.jpg" alt="Team"></div>
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team2.jpg" alt="Team"></div>
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team3.jpg" alt="Team"></div>
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team4.jpg" alt="Team"></div>
        </div>
        <div class="row ba-team">
            <!-- BEGIN col-sm-3-->
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team5.jpg" alt="Team"></div>
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team6.jpg" alt="Team"></div>
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team7.jpg" alt="Team"></div>
            <div class="col-sm-3 col-xs-6"><img src="<?= $appUrl ?>files/images/team/team8.jpg" alt="Team"></div>
        </div>
        <div class="ba-callout">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p><a class="btn btn-primary">READ MORE</a>
        </div>
    </div>
</section>
<section class="ba-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ba-testimonials">
                    <div class="ba-testimonials__slide">
                        <div class="ba-testimonial">
                            <div class="ba-testimonial__img"><img src="<?= $appUrl ?>files/images/testimonials/client-user.jpg" alt=""></div>
                            <p>Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum. Donec mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat luctus, gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.</p><a class="btn btn-primary ba-testimonial__name">John doe</a>
                        </div>
                    </div>
                    <div class="ba-testimonials__slide">
                        <div class="ba-testimonial">
                            <div class="ba-testimonial__img"><img src="<?= $appUrl ?>files/images/testimonials/client-user.jpg" alt=""></div>
                            <p>Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum. Donec mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat luctus, gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.</p><a class="btn btn-primary ba-testimonial__name">John doe</a>
                        </div>
                    </div>
                    <div class="ba-testimonials__slide">
                        <div class="ba-testimonial">
                            <div class="ba-testimonial__img"><img src="<?= $appUrl ?>files/images/testimonials/client-user.jpg" alt=""></div>
                            <p>Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum. Donec mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat luctus, gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.</p><a class="btn btn-primary ba-testimonial__name">John doe</a>
                        </div>
                    </div>
                    <div class="ba-testimonials__slide">
                        <div class="ba-testimonial">
                            <div class="ba-testimonial__img"><img src="<?= $appUrl ?>files/images/testimonials/client-user.jpg" alt=""></div>
                            <p>Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum. Donec mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat luctus, gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.</p><a class="btn btn-primary ba-testimonial__name">John doe</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ba-clients">
                    <div class="ba-clients__item"><img src="<?= $appUrl ?>files/images/clients/client1.jpg" alt=""></div>
                    <div class="ba-clients__item"><img src="<?= $appUrl ?>files/images/clients/client2.jpg" alt=""></div>
                    <div class="ba-clients__item"><img src="<?= $appUrl ?>files/images/clients/client3.jpg" alt=""></div>
                    <div class="ba-clients__item"><img src="<?= $appUrl ?>files/images/clients/client4.jpg" alt=""></div>
                    <div class="ba-clients__item"><img src="<?= $appUrl ?>files/images/clients/client5.jpg" alt=""></div>
                    <div class="ba-clients__item"><img src="<?= $appUrl ?>files/images/clients/client6.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ba-section ba-section--subscribe">
    <div class="container">
        <h2>Subscribe</h2>
    </div>
</section>
