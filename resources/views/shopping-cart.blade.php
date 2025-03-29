@extends('layout.main')
@section('main')

<!DOCTYPE html>
 <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title.jpg);">
            <div class="container">
                <h3 class="heading text-center">Shopping Cart</h3>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li><a class="link" href="index.php">Homepage</a></li>
                    <li><i class="icon-arrRight"></i></li>
                    <li><a class="link" href="shop-default-grid.php">Shop</a></li>
                    <li><i class="icon-arrRight"></i></li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </div>
        <!-- /page-title -->
        <!-- Section cart -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="tf-cart-sold">
                            <div class="notification-sold bg-surface">
                                <img class="icon" src="images/logo/icon-fire.png" alt="img">
                                <div class="count-text">Your cart will expire in <div class="js-countdown time-count" data-timer="600" data-labels=":,:,:,"></div> minutes! Please checkout now before your items sell out!</div>  
                            </div>
                            <div class="notification-progress">
                                <div class="text">Buy <span class="fw-semibold text-primary">$70.00</span> more to get <span class="fw-semibold">Freeship</span></div>
                                <div class="progress-cart">
                                    <div class="value" style="width: 0%;" data-progress="50">
                                        <span class="round"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form>
                            <table class="tf-table-page-cart">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="product-detail.php" class="img-box">
                                                <img src="images/products/womens/women-19.jpg" alt="product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="product-detail.php" class="cart-title link">V-neck cotton T-shirt</a>
                                                <div class="variant-box">
                                                    <div class="tf-select">
                                                        <select>
                                                            <option selected="selected">Blue</option>
                                                            <option>Black</option>
                                                            <option>White</option>
                                                            <option>Red</option>
                                                            <option>Beige</option>
                                                            <option>Pink</option>
                                                        </select>
                                                    </div>
                                                    <div class="tf-select">
                                                        <select>
                                                            <option selected="selected">XL</option>
                                                            <option>XS</option>
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                            <option>XL</option>
                                                            <option>2XL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                            <div class="cart-price text-button price-on-sale">$60.00</div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <div class="wg-quantity mx-md-auto">
                                                <span class="btn-quantity btn-decrease">-</span>
                                                <input type="text" class="quantity-product" name="number" value="1">
                                                <span class="btn-quantity btn-increase">+</span>
                                            </div>
                                        </td>
                                        <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                            <div class="cart-total text-button total-price">$60.00</div>
                                        </td>
                                        <td data-cart-title="Remove" class="remove-cart"><span class="remove icon icon-close"></span></td>
                                    </tr>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="product-detail.php" class="img-box">
                                                <img src="images/products/womens/women-1.jpg" alt="product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="product-detail.php" class="cart-title link">V-neck cotton T-shirt</a>
                                                <div class="variant-box">
                                                    <div class="tf-select">
                                                        <select>
                                                            <option selected="selected">Blue</option>
                                                            <option>Black</option>
                                                            <option>White</option>
                                                            <option>Red</option>
                                                            <option>Beige</option>
                                                            <option>Pink</option>
                                                        </select>
                                                    </div>
                                                    <div class="tf-select">
                                                        <select>
                                                            <option selected="selected">XL</option>
                                                            <option>XS</option>
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                            <option>XL</option>
                                                            <option>2XL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                            <div class="cart-price text-button price-on-sale">$40.00</div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <div class="wg-quantity mx-md-auto">
                                                <span class="btn-quantity btn-decrease">-</span>
                                                <input type="text" class="quantity-product" name="number" value="1">
                                                <span class="btn-quantity btn-increase">+</span>
                                            </div>
                                        </td>
                                        <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                            <div class="cart-total text-button total-price">$40.00</div>
                                        </td>
                                        <td data-cart-title="Remove" class="remove-cart"><span class="remove icon icon-close"></span></td>
                                    </tr>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="product-detail.php" class="img-box">
                                                <img src="images/products/womens/women-29.jpg" alt="product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="product-detail.php" class="cart-title link">V-neck cotton T-shirt</a>
                                                <div class="variant-box">
                                                    <div class="tf-select">
                                                        <select>
                                                            <option selected="selected">Blue</option>
                                                            <option>Black</option>
                                                            <option>White</option>
                                                            <option>Red</option>
                                                            <option>Beige</option>
                                                            <option>Pink</option>
                                                        </select>
                                                    </div>
                                                    <div class="tf-select">
                                                        <select>
                                                            <option selected="selected">XL</option>
                                                            <option>XS</option>
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                            <option>XL</option>
                                                            <option>2XL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                            <div class="cart-price"><span class="old-price">$80.00</span><span class="text-button new-price price-on-sale">$129.00</span></div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <div class="wg-quantity mx-md-auto">
                                                <span class="btn-quantity btn-decrease">-</span>
                                                <input type="text" class="quantity-product" name="number" value="1">
                                                <span class="btn-quantity btn-increase">+</span>
                                            </div>
                                        </td>
                                        <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                            <div class="cart-total text-button total-price">$129.00</div>
                                        </td>
                                        <td data-cart-title="Remove" class="remove-cart"><span class="remove icon icon-close"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="ip-discount-code">
                                <input type="text" placeholder="Add voucher discount">
                                <button class="tf-btn"><span class="text">Apply Code</span></button>
                            </div>
                            <div class="group-discount">
                                <div class="box-discount">
                                    <div class="discount-top">
                                        <div class="discount-off">
                                            <div class="text-caption-1">Discount</div>
                                            <span class="sale-off text-btn-uppercase">10% OFF</span>
                                        </div>
                                        <div class="discount-from">
                                            <p class="text-caption-1">For all orders <br> from 200$</p>
                                        </div>
                                    </div>
                                    <div class="discount-bot">
                                        <span class="text-btn-uppercase">Mo234231</span>
                                        <button class="tf-btn"><span class="text">Apply Code</span></button>
                                    </div>
                                </div>
                                <div class="box-discount active">
                                    <div class="discount-top">
                                        <div class="discount-off">
                                            <div class="text-caption-1">Discount</div>
                                            <span class="sale-off text-btn-uppercase">10% OFF</span>
                                        </div>
                                        <div class="discount-from">
                                            <p class="text-caption-1">For all orders <br> from 200$</p>
                                        </div>
                                    </div>
                                    <div class="discount-bot">
                                        <span class="text-btn-uppercase">Mo234231</span>
                                        <button class="tf-btn"><span class="text">Apply Code</span></button>
                                    </div>
                                </div>
                                <div class="box-discount">
                                    <div class="discount-top">
                                        <div class="discount-off">
                                            <div class="text-caption-1">Discount</div>
                                            <span class="sale-off text-btn-uppercase">10% OFF</span>
                                        </div>
                                        <div class="discount-from">
                                            <p class="text-caption-1">For all orders <br> from 200$</p>
                                        </div>
                                    </div>
                                    <div class="discount-bot">
                                        <span class="text-btn-uppercase">Mo234231</span>
                                        <button class="tf-btn"><span class="text">Apply Code</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4">
                        <div class="fl-sidebar-cart">
                            <div class="box-order bg-surface">
                                <h5 class="title">Order Summary</h5>
                                <div class="subtotal text-button d-flex justify-content-between align-items-center">
                                    <span>Subtotal</span>
                                    <span class="total">-$80.00</span>
                                </div>
                                <div class="discount text-button d-flex justify-content-between align-items-center">
                                    <span>Discounts</span>
                                    <span class="total">-$80.00</span>
                                </div>
                                <div class="ship">
                                    <span class="text-button">Shipping</span>
                                    <div class="flex-grow-1">
                                        <fieldset class="ship-item">
                                            <input type="radio" name="ship-check" class="tf-check-rounded" id="free" checked>
                                            <label for="free">
                                                <span>Free Shipping</span>
                                                <span class="price">$0.00</span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="ship-item">
                                            <input type="radio" name="ship-check" class="tf-check-rounded" id="local">
                                            <label for="local">
                                                <span>Local:</span>
                                                <span class="price">$35.00</span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="ship-item">
                                            <input type="radio" name="ship-check" class="tf-check-rounded" id="rate">
                                            <label for="rate">
                                                <span>Flat Rate:</span>
                                                <span class="price">$35.00</span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <h5 class="total-order d-flex justify-content-between align-items-center">
                                    <span>Total</span>
                                    <span class="total">$186,99</span>
                                </h5>
                                <div class="box-progress-checkout">
                                    <fieldset class="check-agree">
                                        <input type="checkbox" id="check-agree" class="tf-check-rounded">
                                        <label for="check-agree">
                                            I agree with the <a href="term-of-use.php">terms and conditions</a>
                                        </label>
                                    </fieldset>
                                    <a href="checkout.php" class="tf-btn btn-reset">Process To Checkout</a>
                                    <p class="text-button text-center">Or continue shopping</p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section cart -->
        <!-- Recent product -->
        <section class="flat-spacing pt-0"> 
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h4 class="heading">You may also like</h4>
                </div>
                <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp" data-wow-delay="0s">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.php" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/womens/women-20.jpg" src="images/products/womens/women-20.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                    </div> 
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.php" class="title link">V-neck cotton T-shirt</a>
                                    <span class="price">$59.99</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.php" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/womens/women-176.jpg" src="images/products/womens/women-176.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/womens/women-179.jpg" src="images/products/womens/women-179.jpg" alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="marquee-product bg-main">
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                    </div> 
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.php" class="title link">Polarized sunglasses</a>
                                    <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-blue"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-176.jpg" src="images/products/womens/women-176.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-blue-2"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-177.jpg" src="images/products/womens/women-177.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product card-product-size wow fadeInUp" data-wow-delay="0.2s">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.php" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/womens/women-29.jpg" src="images/products/womens/women-29.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/womens/women-30.jpg" src="images/products/womens/women-30.jpg" alt="image-product">
                                    </a>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="variant-wrap countdown-wrap">
                                        <div class="variant-box">
                                            <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"></div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                    </div> 
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.php" class="title link">Ramie shirt with pockets </a>
                                    <span class="price"><span class="old-price">$98.00</span> $89.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-orange"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-29.jpg" src="images/products/womens/women-29.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-grey"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-33.jpg" src="images/products/womens/women-33.jpg" alt="image-product">
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.php" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                    </div> 
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.php" class="title link">Ribbed cotton-blend top</a>
                                    <span class="price">$69.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-dark-grey"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-dark-grey-2"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-3.jpg" src="images/products/womens/women-3.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Recent product -->
@endsection

       

