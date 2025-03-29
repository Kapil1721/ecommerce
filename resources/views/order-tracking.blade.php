<!DOCTYPE html>

<?include "header.php"; ?>

        <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title.jpg);">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Order Tracking</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="index.php">Homepage</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                <a class="link" href="shop-default-grid.php">Shop</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                Order Tracking
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- order track -->
        <section class="flat-spacing">
            <div class="container">
                <div class="login-wrap tracking-wrap">
                    <div class="left">
                        <div class="heading">
                            <h4 class="mb_8">Order Tracking</h4>
                            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                        </div>
                        <form action="#" class="form-login">
                            <div class="wrap">
                                <fieldset>
                                    <input type="text" placeholder="Username or email address*">
                                </fieldset>
                                <fieldset>
                                    <input type="text" placeholder="Billing Email*">  
                                </fieldset>
                            </div>
                            <div class="button-submit">
                                <button class="tf-btn btn-fill" type="submit">
                                    <span class="text">Tracking Orders</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <h4 class="mb_8">Already have an account?</h4>
                        <p class="text-secondary">Welcome back. Sign in to access your personalized experience, saved preferences, and more. We're thrilled to have you with us again!</p>
                        <a href="login.php" class="tf-btn btn-fill"><span class="text">Login</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /login -->

<?include "footer.php"; ?>
