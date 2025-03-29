<!DOCTYPE html>

<?include "header.php"; ?>

        <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title.jpg);">
            <div class="container">
                <h3 class="heading text-center">Check Out</h3>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li><a class="link" href="index.php">Homepage</a></li>
                    <li><i class="icon-arrRight"></i></li>
                    <li><a class="link" href="shop-default-grid.php">Shop</a></li>
                    <li><i class="icon-arrRight"></i></li>
                    <li>View Cart</li>
                </ul>
            </div>
        </div>
        <!-- /page-title -->
        <!-- Section checkout -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="flat-spacing tf-page-checkout">
                            <div class="wrap">
                                <div class="title-login">
                                    <p>Already have an account?</p>
                                    <a href="login.php" class="text-button">Login here</a>
                                </div>
                                <form class="login-box">
                                    <div class="grid-2">
                                        <input type="text" placeholder="Your name/Email">
                                        <input type="password" placeholder="Password">
                                    </div>
                                    <button class="tf-btn" type="submit"><span class="text">Login</span></button>
                                </form>
                            </div>
                            <div class="wrap">
                                <h5 class="title">Information</h5>
                                <form class="info-box">
                                    <div class="grid-2">
                                        <input type="text" placeholder="First Name*">
                                        <input type="text" placeholder="Last Name*">
                                    </div>
                                    <div class="grid-2">
                                        <input type="text" placeholder="Email Address*">
                                        <input type="text" placeholder="Phone Number*">
                                    </div>
                                    <div class="tf-select">
                                        <select class="text-title" name="address[country]" data-default="">
                                            <option selected value="Choose Country/Region" data-provinces="[]">Choose Country/Region</option>
                                            <option value="United States" data-provinces="[['Alabama','Alabama'],['Alaska','Alaska'],['American Samoa','American Samoa'],['Arizona','Arizona'],['Arkansas','Arkansas'],['Armed Forces Americas','Armed Forces Americas'],['Armed Forces Europe','Armed Forces Europe'],['Armed Forces Pacific','Armed Forces Pacific'],['California','California'],['Colorado','Colorado'],['Connecticut','Connecticut'],['Delaware','Delaware'],['District of Columbia','Washington DC'],['Federated States of Micronesia','Micronesia'],['Florida','Florida'],['Georgia','Georgia'],['Guam','Guam'],['Hawaii','Hawaii'],['Idaho','Idaho'],['Illinois','Illinois'],['Indiana','Indiana'],['Iowa','Iowa'],['Kansas','Kansas'],['Kentucky','Kentucky'],['Louisiana','Louisiana'],['Maine','Maine'],['Marshall Islands','Marshall Islands'],['Maryland','Maryland'],['Massachusetts','Massachusetts'],['Michigan','Michigan'],['Minnesota','Minnesota'],['Mississippi','Mississippi'],['Missouri','Missouri'],['Montana','Montana'],['Nebraska','Nebraska'],['Nevada','Nevada'],['New Hampshire','New Hampshire'],['New Jersey','New Jersey'],['New Mexico','New Mexico'],['New York','New York'],['North Carolina','North Carolina'],['North Dakota','North Dakota'],['Northern Mariana Islands','Northern Mariana Islands'],['Ohio','Ohio'],['Oklahoma','Oklahoma'],['Oregon','Oregon'],['Palau','Palau'],['Pennsylvania','Pennsylvania'],['Puerto Rico','Puerto Rico'],['Rhode Island','Rhode Island'],['South Carolina','South Carolina'],['South Dakota','South Dakota'],['Tennessee','Tennessee'],['Texas','Texas'],['Utah','Utah'],['Vermont','Vermont'],['Virgin Islands','U.S. Virgin Islands'],['Virginia','Virginia'],['Washington','Washington'],['West Virginia','West Virginia'],['Wisconsin','Wisconsin'],['Wyoming','Wyoming']]">United States</option>
                                            <option value="Australia" data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]">Australia</option>
                                            <option value="Austria" data-provinces="[]">Austria</option>
                                            <option value="Belgium" data-provinces="[]">Belgium</option>
                                            <option value="Canada" data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]">Canada</option>
                                            <option value="Czech Republic" data-provinces="[]">Czechia</option>
                                            <option value="Denmark" data-provinces="[]">Denmark</option>
                                            <option value="Finland" data-provinces="[]">Finland</option>
                                            <option value="France" data-provinces="[]">France</option>
                                            <option value="Germany" data-provinces="[]">Germany</option>
                                            <option value="Hong Kong" data-provinces="[['Hong Kong Island','Hong Kong Island'],['Kowloon','Kowloon'],['New Territories','New Territories']]">Hong Kong SAR</option>
                                            <option value="Ireland" data-provinces="[['Carlow','Carlow'],['Cavan','Cavan'],['Clare','Clare'],['Cork','Cork'],['Donegal','Donegal'],['Dublin','Dublin'],['Galway','Galway'],['Kerry','Kerry'],['Kildare','Kildare'],['Kilkenny','Kilkenny'],['Laois','Laois'],['Leitrim','Leitrim'],['Limerick','Limerick'],['Longford','Longford'],['Louth','Louth'],['Mayo','Mayo'],['Meath','Meath'],['Monaghan','Monaghan'],['Offaly','Offaly'],['Roscommon','Roscommon'],['Sligo','Sligo'],['Tipperary','Tipperary'],['Waterford','Waterford'],['Westmeath','Westmeath'],['Wexford','Wexford'],['Wicklow','Wicklow']]">Ireland</option>
                                            <option value="Israel" data-provinces="[]">Israel</option>
                                            <option value="Italy" data-provinces="[['Agrigento','Agrigento'],['Alessandria','Alessandria'],['Ancona','Ancona'],['Aosta','Aosta Valley'],['Arezzo','Arezzo'],['Ascoli Piceno','Ascoli Piceno'],['Asti','Asti'],['Avellino','Avellino'],['Bari','Bari'],['Barletta-Andria-Trani','Barletta-Andria-Trani'],['Belluno','Belluno'],['Benevento','Benevento'],['Bergamo','Bergamo'],['Biella','Biella'],['Bologna','Bologna'],['Bolzano','South Tyrol'],['Brescia','Brescia'],['Brindisi','Brindisi'],['Cagliari','Cagliari'],['Caltanissetta','Caltanissetta'],['Campobasso','Campobasso'],['Carbonia-Iglesias','Carbonia-Iglesias'],['Caserta','Caserta'],['Catania','Catania'],['Catanzaro','Catanzaro'],['Chieti','Chieti'],['Como','Como'],['Cosenza','Cosenza'],['Cremona','Cremona'],['Crotone','Crotone'],['Cuneo','Cuneo'],['Enna','Enna'],['Fermo','Fermo'],['Ferrara','Ferrara'],['Firenze','Florence'],['Foggia','Foggia'],['Forlì-Cesena','Forlì-Cesena'],['Frosinone','Frosinone'],['Genova','Genoa'],['Gorizia','Gorizia'],['Grosseto','Grosseto'],['Imperia','Imperia'],['Isernia','Isernia'],['L'Aquila','L’Aquila'],['La Spezia','La Spezia'],['Latina','Latina'],['Lecce','Lecce'],['Lecco','Lecco'],['Livorno','Livorno'],['Lodi','Lodi'],['Lucca','Lucca'],['Macerata','Macerata'],['Mantova','Mantua'],['Massa-Carrara','Massa and Carrara'],['Matera','Matera'],['Medio Campidano','Medio Campidano'],['Messina','Messina'],['Milano','Milan'],['Modena','Modena'],['Monza e Brianza','Monza and Brianza'],['Napoli','Naples'],['Novara','Novara'],['Nuoro','Nuoro'],['Ogliastra','Ogliastra'],['Olbia-Tempio','Olbia-Tempio'],['Oristano','Oristano'],['Padova','Padua'],['Palermo','Palermo'],['Parma','Parma'],['Pavia','Pavia'],['Perugia','Perugia'],['Pesaro e Urbino','Pesaro and Urbino'],['Pescara','Pescara'],['Piacenza','Piacenza'],['Pisa','Pisa'],['Pistoia','Pistoia'],['Pordenone','Pordenone'],['Potenza','Potenza'],['Prato','Prato'],['Ragusa','Ragusa'],['Ravenna','Ravenna'],['Reggio Calabria','Reggio Calabria'],['Reggio Emilia','Reggio Emilia'],['Rieti','Rieti'],['Rimini','Rimini'],['Roma','Rome'],['Rovigo','Rovigo'],['Salerno','Salerno'],['Sassari','Sassari'],['Savona','Savona'],['Siena','Siena'],['Siracusa','Syracuse'],['Sondrio','Sondrio'],['Taranto','Taranto'],['Teramo','Teramo'],['Terni','Terni'],['Torino','Turin'],['Trapani','Trapani'],['Trento','Trentino'],['Treviso','Treviso'],['Trieste','Trieste'],['Udine','Udine'],['Varese','Varese'],['Venezia','Venice'],['Verbano-Cusio-Ossola','Verbano-Cusio-Ossola'],['Vercelli','Vercelli'],['Verona','Verona'],['Vibo Valentia','Vibo Valentia'],['Vicenza','Vicenza'],['Viterbo','Viterbo']]">Italy</option>
                                            <option value="Japan" data-provinces="[['Aichi','Aichi'],['Akita','Akita'],['Aomori','Aomori'],['Chiba','Chiba'],['Ehime','Ehime'],['Fukui','Fukui'],['Fukuoka','Fukuoka'],['Fukushima','Fukushima'],['Gifu','Gifu'],['Gunma','Gunma'],['Hiroshima','Hiroshima'],['Hokkaidō','Hokkaido'],['Hyōgo','Hyogo'],['Ibaraki','Ibaraki'],['Ishikawa','Ishikawa'],['Iwate','Iwate'],['Kagawa','Kagawa'],['Kagoshima','Kagoshima'],['Kanagawa','Kanagawa'],['Kumamoto','Kumamoto'],['Kyōto','Kyoto'],['Kōchi','Kochi'],['Mie','Mie'],['Miyagi','Miyagi'],['Miyazaki','Miyazaki'],['Nagano','Nagano'],['Nagasaki','Nagasaki'],['Nara','Nara'],['Niigata','Niigata'],['Okayama','Okayama'],['Okinawa','Okinawa'],['Saga','Saga'],['Saitama','Saitama'],['Shiga','Shiga'],['Shimane','Shimane'],['Shizuoka','Shizuoka'],['Tochigi','Tochigi'],['Tokushima','Tokushima'],['Tottori','Tottori'],['Toyama','Toyama'],['Tōkyō','Tokyo'],['Wakayama','Wakayama'],['Yamagata','Yamagata'],['Yamaguchi','Yamaguchi'],['Yamanashi','Yamanashi'],['Ōita','Oita'],['Ōsaka','Osaka']]">Japan</option>
                                            <option value="Malaysia" data-provinces="[['Johor','Johor'],['Kedah','Kedah'],['Kelantan','Kelantan'],['Kuala Lumpur','Kuala Lumpur'],['Labuan','Labuan'],['Melaka','Malacca'],['Negeri Sembilan','Negeri Sembilan'],['Pahang','Pahang'],['Penang','Penang'],['Perak','Perak'],['Perlis','Perlis'],['Putrajaya','Putrajaya'],['Sabah','Sabah'],['Sarawak','Sarawak'],['Selangor','Selangor'],['Terengganu','Terengganu']]">Malaysia</option>
                                            <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                            <option value="New Zealand" data-provinces="[['Auckland','Auckland'],['Bay of Plenty','Bay of Plenty'],['Canterbury','Canterbury'],['Chatham Islands','Chatham Islands'],['Gisborne','Gisborne'],['Hawke's Bay','Hawke’s Bay'],['Manawatu-Wanganui','Manawatū-Whanganui'],['Marlborough','Marlborough'],['Nelson','Nelson'],['Northland','Northland'],['Otago','Otago'],['Southland','Southland'],['Taranaki','Taranaki'],['Tasman','Tasman'],['Waikato','Waikato'],['Wellington','Wellington'],['West Coast','West Coast']]">New Zealand</option>
                                            <option value="Norway" data-provinces="[]">Norway</option>
                                            <option value="Poland" data-provinces="[]">Poland</option>
                                            <option value="Portugal" data-provinces="[['Aveiro','Aveiro'],['Açores','Azores'],['Beja','Beja'],['Braga','Braga'],['Bragança','Bragança'],['Castelo Branco','Castelo Branco'],['Coimbra','Coimbra'],['Faro','Faro'],['Guarda','Guarda'],['Leiria','Leiria'],['Lisboa','Lisbon'],['Madeira','Madeira'],['Portalegre','Portalegre'],['Porto','Porto'],['Santarém','Santarém'],['Setúbal','Setúbal'],['Viana do Castelo','Viana do Castelo'],['Vila Real','Vila Real'],['Viseu','Viseu'],['Évora','Évora']]">Portugal</option>
                                            <option value="Singapore" data-provinces="[]">Singapore</option>
                                            <option value="South Korea" data-provinces="[['Busan','Busan'],['Chungbuk','North Chungcheong'],['Chungnam','South Chungcheong'],['Daegu','Daegu'],['Daejeon','Daejeon'],['Gangwon','Gangwon'],['Gwangju','Gwangju City'],['Gyeongbuk','North Gyeongsang'],['Gyeonggi','Gyeonggi'],['Gyeongnam','South Gyeongsang'],['Incheon','Incheon'],['Jeju','Jeju'],['Jeonbuk','North Jeolla'],['Jeonnam','South Jeolla'],['Sejong','Sejong'],['Seoul','Seoul'],['Ulsan','Ulsan']]">South Korea</option>
                                            <option value="Spain" data-provinces="[['A Coruña','A Coruña'],['Albacete','Albacete'],['Alicante','Alicante'],['Almería','Almería'],['Asturias','Asturias Province'],['Badajoz','Badajoz'],['Balears','Balears Province'],['Barcelona','Barcelona'],['Burgos','Burgos'],['Cantabria','Cantabria Province'],['Castellón','Castellón'],['Ceuta','Ceuta'],['Ciudad Real','Ciudad Real'],['Cuenca','Cuenca'],['Cáceres','Cáceres'],['Cádiz','Cádiz'],['Córdoba','Córdoba'],['Girona','Girona'],['Granada','Granada'],['Guadalajara','Guadalajara'],['Guipúzcoa','Gipuzkoa'],['Huelva','Huelva'],['Huesca','Huesca'],['Jaén','Jaén'],['La Rioja','La Rioja Province'],['Las Palmas','Las Palmas'],['León','León'],['Lleida','Lleida'],['Lugo','Lugo'],['Madrid','Madrid Province'],['Melilla','Melilla'],['Murcia','Murcia'],['Málaga','Málaga'],['Navarra','Navarra'],['Ourense','Ourense'],['Palencia','Palencia'],['Pontevedra','Pontevedra'],['Salamanca','Salamanca'],['Santa Cruz de Tenerife','Santa Cruz de Tenerife'],['Segovia','Segovia'],['Sevilla','Seville'],['Soria','Soria'],['Tarragona','Tarragona'],['Teruel','Teruel'],['Toledo','Toledo'],['Valencia','Valencia'],['Valladolid','Valladolid'],['Vizcaya','Biscay'],['Zamora','Zamora'],['Zaragoza','Zaragoza'],['Álava','Álava'],['Ávila','Ávila']]">Spain</option>
                                            <option value="Sweden" data-provinces="[]">Sweden</option>
                                            <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                            <option value="United Arab Emirates" data-provinces="[['Abu Dhabi','Abu Dhabi'],['Ajman','Ajman'],['Dubai','Dubai'],['Fujairah','Fujairah'],['Ras al-Khaimah','Ras al-Khaimah'],['Sharjah','Sharjah'],['Umm al-Quwain','Umm al-Quwain']]">United Arab Emirates</option>
                                            <option value="United Kingdom" data-provinces="[['British Forces','British Forces'],['England','England'],['Northern Ireland','Northern Ireland'],['Scotland','Scotland'],['Wales','Wales']]">United Kingdom</option>
                                            <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                        </select>
                                    </div>
                                    <div class="grid-2">
                                        <input type="text" placeholder="Town/City*">
                                        <input type="text" placeholder="Street,...">
                                    </div>
                                    <div class="grid-2">
                                        <div class="tf-select">
                                            <select class="text-title" data-default="">
                                                <option selected value="Choose State">Choose State</option>
                                                <option value="California">California</option>
                                                <option value="Alabama">Alabam</option>
                                                <option value="Alaska">Alaska</option>
                                                <option value="Arizona">Arizona</option>
                                                <option value="Arkansas">Arkansas</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Texas">Texas</option>
                                                <option value="Iowa">Iowa</option>
                                                <option value="Nevada">Nevada</option>
                                                <option value="Illinois">Illinois</option>
                                            </select>
                                        </div>
                                        <input type="text" placeholder="Postal Code*">
                                    </div>
                                    <textarea placeholder="Write note..."></textarea>
                                </form>
                            </div>
                            <div class="wrap">
                                <h5 class="title">Choose payment Option:</h5>
                                <form class="form-payment">
                                    <div class="payment-box" id="payment-box">
                                        <div class="payment-item payment-choose-card active">
                                            <label for="credit-card-method" class="payment-header" data-bs-toggle="collapse" data-bs-target="#credit-card-payment" aria-controls="credit-card-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="credit-card-method" checked>
                                                <span class="text-title">Credit Card</span>
                                            </label>
                                            <div id="credit-card-payment" class="collapse show" data-bs-parent="#payment-box">
                                                <div class="payment-body">
                                                    <p class="text-secondary">Make your payment directly into our bank account. Your order will not be shipped until the funds have cleared in our account.</p>
                                                    <div class="input-payment-box">
                                                        <input type="text" placeholder="Name On Card*">
                                                        <div class="ip-card">
                                                            <input type="text" placeholder="Card Numbers*">
                                                            <div class="list-card">
                                                                <img src="images/payment/img-7.png" width="48" height="16" alt="card">
                                                                <img src="images/payment/img-8.png" width="21" height="16" alt="card">
                                                                <img src="images/payment/img-9.png" width="22" height="16" alt="card">
                                                                <img src="images/payment/img-10.png" width="24" height="16" alt="card">
                                                            </div>
                                                        </div>
                                                        <div class="grid-2">
                                                            <input type="date" >
                                                            <input type="text" placeholder="CVV*">
                                                        </div>
                                                    </div>
                                                    <div class="check-save">
                                                        <input type="checkbox" class="tf-check" id="check-card" checked>
                                                        <label for="check-card">Save Card Details</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment-item">
                                            <label for="apple-method" class="payment-header collapsed" data-bs-toggle="collapse" data-bs-target="#apple-payment" aria-controls="apple-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="apple-method">
                                                <span class="text-title apple-pay-title"><img src="images/payment/applePay.png" alt="apple"> Apple Pay</span>
                                            </label>
                                            <div id="apple-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                        </div>
                                        <div class="payment-item paypal-item">
                                            <label for="paypal-method" class="payment-header collapsed" data-bs-toggle="collapse" data-bs-target="#paypal-method-payment" aria-controls="paypal-method-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="paypal-method">
                                                <span class="paypal-title"><img src="images/payment/paypal.png" alt="apple"></span>
                                            </label>
                                            <div id="paypal-method-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                        </div>
                                    </div>
                                    <button class="tf-btn btn-reset">Payment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1">
                        <div class="line-separation"></div>
                    </div>
                    <div class="col-xl-5">
                        <div class="flat-spacing flat-sidebar-checkout">
                            <div class="sidebar-checkout-content">
                                <h5 class="title">Shopping Cart</h5>
                                <div class="list-product">
                                    <div class="item-product">
                                        <a href="product-detail.php" class="img-product">
                                            <img src="images/products/womens/women-19.jpg" alt="img-product">
                                        </a>
                                        <div class="content-box">
                                            <div class="info">
                                                <a href="product-detail.php" class="name-product link text-title">V-neck cotton T-shirt</a>
                                                <div class="variant text-caption-1 text-secondary"><span class="size">XL</span>/<span class="color">Blue</span></div>
                                            </div>
                                            <div class="total-price text-button"><span class="count">1</span>X<span class="price">$60.00</span></div>
                                        </div>
                                    </div>
                                    <div class="item-product">
                                        <a href="product-detail.php" class="img-product">
                                            <img src="images/products/womens/women-1.jpg" alt="img-product">
                                        </a>
                                        <div class="content-box">
                                            <div class="info">
                                                <a href="product-detail.php" class="name-product link text-title">Polarized sunglasses</a>
                                                <div class="variant text-caption-1 text-secondary"><span class="size">XL</span>/<span class="color">Blue</span></div>
                                            </div>
                                            <div class="total-price text-button"><span class="count">1</span>X<span class="price">$60.00</span></div>
                                        </div>
                                    </div>
                                    <div class="item-product">
                                        <a href="product-detail.php" class="img-product">
                                            <img src="images/products/womens/women-29.jpg" alt="img-product">
                                        </a>
                                        <div class="content-box">
                                            <div class="info">
                                                <a href="product-detail.php" class="name-product link text-title">Ramie shirt with pockets </a>
                                                <div class="variant text-caption-1 text-secondary"><span class="size">XL</span>/<span class="color">Blue</span></div>
                                            </div>
                                            <div class="total-price text-button"><span class="count">1</span>X<span class="price">$60.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec-discount">
                                    <div dir="ltr" class="swiper tf-sw-categories" data-preview="2.25" data-tablet="3" data-mobile-sm="2.5" data-mobile="1.2" data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
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
                                            <div class="swiper-slide">
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
                                            </div>
                                            <div class="swiper-slide">
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
                                            
                                        </div>
                                    </div>
                                    <div class="ip-discount-code">
                                        <input type="text" placeholder="Add voucher discount">
                                        <button class="tf-btn"><span class="text">Apply Code</span></button>
                                    </div>
                                    <p>Discount code is only used for orders with a total value of products over $500.00</p>  
                                </div>
                                <div class="sec-total-price">
                                    <div class="top">
                                        <div class="item d-flex align-items-center justify-content-between text-button">
                                            <span>Shipping</span>
                                            <span>Free</span>
                                        </div>
                                        <div class="item d-flex align-items-center justify-content-between text-button">
                                            <span>Discounts</span>
                                            <span>-$80.00</span>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <h5 class="d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="total-price-checkout">$186,99</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section checkout -->
       
<?include "footer.php"; ?>
