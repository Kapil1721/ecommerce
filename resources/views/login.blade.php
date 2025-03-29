<!DOCTYPE html>

<?include "header.php"; ?>

        <!-- tf-add-cart-success -->
        <div class="tf-add-cart-success">
            <div class="tf-add-cart-heading">
                <h5>Shopping Cart</h5>
                <i class="icon icon-close tf-add-cart-close"></i>
            </div>
            <div class="tf-add-cart-product">
                <div class="image">
                    <img class=" ls-is-cached lazyloaded" data-src="images/products/womens/women-3.jpg" alt="" src="images/products/womens/women-3.jpg">
                </div>
                <div class="content">
                    <div class="text-title">
                        <a class="link" href="product-detail.php">Biker-style leggings</a>
                    </div>
                    <div class="text-caption-1 text-secondary-2">Green, XS, Cotton</div>
                    <div class="text-title">$68.00</div>
                </div>
            </div>
            <a href="shopping-cart.php" class="tf-btn w-100 btn-fill radius-4"><span class="text text-btn-uppercase">View cart</span></a>
        </div>
        <!-- /tf-add-cart-success -->

        <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title.jpg);">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Login</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="index.php">Homepage</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                <a class="link" href="#">Pages</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                Login
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- login -->
        <section class="flat-spacing">
            <div class="container">
                <div class="login-wrap">
                    <div class="left">
                        <div class="heading">
                            <h4>Login</h4>
                        </div>
                        <form action="#" class="form-login form-has-password">
                            <div class="wrap">
                                <fieldset class="">
                                    <input class="" type="email" placeholder="Username or email address*" name="email" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <fieldset class="position-relative password-item">
                                    <input class="input-password" type="password" placeholder="Password*" name="password" tabindex="2" value="" aria-required="true" required="">
                                    <span class="toggle-password unshow">
                                        <i class="icon-eye-hide-line"></i>
                                    </span>
                                </fieldset>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="tf-cart-checkbox">
                                        <div class="tf-checkbox-wrapp">
                                            <input checked class="" type="checkbox" id="login-form_agree" name="agree_checkbox">
                                            <div>
                                                <i class="icon-check"></i>
                                            </div>
                                        </div>
                                        <label for="login-form_agree">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="forget-password.php" class="font-2 text-button forget-password link">Forgot Your Password?</a>
                                </div>
                            </div>
                            <div class="button-submit">
                                <button class="tf-btn btn-fill" type="submit">
                                    <span class="text text-button">Login</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <h4 class="mb_8">New Customer</h4>
                        <p class="text-secondary">Be part of our growing family of new customers! Join us today and unlock a world of exclusive benefits, offers, and personalized experiences.</p>
                        <a href="register.php" class="tf-btn btn-fill"><span class="text text-button">Register</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /login -->

<?include "footer.php"; ?>
