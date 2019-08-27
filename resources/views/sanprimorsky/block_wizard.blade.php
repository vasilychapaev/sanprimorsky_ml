<div class="section calc">
    <div class="container">
        <h2 class="calc__title" id="wizard_h1">
            Хотите подобрать программу отдыха<br>исходя из ваших заболеваний?
        </h2>
        <div class="calc-form">
            <div class="wrapper">
                <form action="https://sandbox.webpay.by" id="wizard" method="post">

                    <span id="hidden">
                        {{--
                        <input type='hidden' name='*scart'>
                        <input type='hidden' name='wsb_storeid' value='999080791'>
                        <input type='hidden' name='wsb_store' value='Санаториум/Приморский'>
                        <input type='hidden' name='wsb_order_num' value='ORDER_1234'>
                        <input type='hidden' name='wsb_currency_id' value='BYN'>
                        <input type='hidden' name='wsb_version' value='2'>
                        <input type='hidden' name='wsb_language_id' value='russian'>
                        <input type='hidden' name='wsb_seed' value='11123232001'>
                        <input type='hidden' name='wsb_signature' value='8d4395dab7598c5f4b94d5bc4780f4af '>
                        <input type='hidden' name='wsb_return_url' value='http://yoursite.com/complete'>
                        <input type='hidden' name='wsb_cancel_return_ url' value='http://yoursite.com/cancel'>
                        <input type='hidden' name='wsb_notify_url' value='http://yoursite.com/notify'>
                        <input type='hidden' name='wsb_test' value='1'>
                        <input type='hidden' name='wsb_customer_ name' value='Иванов Петр Петрович'>
                        <input type='hidden' name='wsb_customer_ address' value='Минск пр. Независимости д.1 кв.2'>
                        <input type='hidden' name='wsb_service_date' value='Доставка до 1 января 2016 года'>
                        <input type='hidden' name='wsb_invoice_item_ name[0]' value='Товар 1'>
                        <input type='hidden' name='wsb_invoice_item_ name[1]' value='Товар 2'>
                        <input type='hidden' name='wsb_invoice_item_ quantity[0]' value='2'>
                        <input type='hidden' name='wsb_invoice_item_ quantity[1]' value='1'>
                        <input type='hidden' name='wsb_tax' value='1'>
                        <input type='hidden' name='wsb_shipping_ name' value='Доставка курьером'>
                        <input type='hidden' name='wsb_shipping_ price' value='2'>
                        <input type='hidden' name='wsb_discount_ name' value='Дисконтная карта'>
                        <input type='hidden' name='wsb_discount_ price' value='0.58'>
                        <input type='hidden' name='wsb_discount_ promo_code' value='ABC001'>
                        <input type='hidden' name='wsb_total' value='28.42'>
                        --}}
                    </span>


                    <h4></h4>
                    <section>
                        <h3>Выберите даты</h3>
                        <div class="form-row">
                            <div class="form-holder">
                                <label for="">Заезда</label>
                                {{--                                <i class="zmdi zmdi-account"></i>--}}
                                <input name="datestart" type="text" class="form-control js_datepicker" placeholder="21.09.2019">
                            </div>
                            <div class="form-holder">
                                <label for="">Выезда</label>
                                {{--                                <i class="zmdi zmdi-account"></i>--}}
                                <input name="datefinish" type="text" class="form-control js_datepicker" placeholder="32.09.2019">
                            </div>
                        </div>

                    </section>


                    <h4></h4>
                    <section>
                        <h3>Люди и лечение</h3>
                        <div class="form-row">
                            <div class="form-holder">
                                <label for="">Взрослые</label>
                                <select name="adult_count" class="form-control">
                                    <option value="1">1 взрослый</option>
                                    <option value="2">2 взрослых</option>
                                    <option value="3">3 взрослых</option>
                                    <option value="4">4 взрослых</option>
                                    <option value="5">5 взрослых</option>
                                    <option value="6">6 взрослых</option>
                                </select>
                            </div>
                            <div class="form-holder">
                                <label for="">Дети</label>
                                <select name="child_count" class="form-control">
                                    <option value="0">без детей</option>
                                    <option value="1">1 ребенок</option>
                                    <option value="2">2 ребенка</option>
                                    <option value="3">3 ребенка</option>
                                    <option value="4">4 ребенка</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-holder">
                                <label for="">Лечение для 1го взрослого</label>
                                <select name="adult_cure[]" class="form-control">
                                    <option value="wo">без лечения</option>
                                    <option value="std">стандартная путевка</option>
                                    <option value="ext">расширенная путевка</option>
                                </select>
                            </div>
                            <div class="form-holder">
                                <label for="">Возраст 1го ребенка</label>
                                <select name="child_cure[]" class="form-control">
                                    @foreach (range(1, 16) as $age)
                                        <option value="{{ $age }}">{{ $age }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        {{--
                        <div class="form-row">
                            <div class="form-holder">
                                <label for="">Профили лечения</label><br>
                                <select name="" class="form-control js-select2" --}}{{--multiple="multiple"--}}{{-->
                                    <option value="Сердечно-сосудистая система">Сердечно-сосудистая система</option>
                                    <option value="Опорно-двигательный аппарат">Опорно-двигательный аппарат</option>
                                    <option value="Органы дыхания">Органы дыхания</option>
                                    <option value="Верхние дыхательные пути">Верхние дыхательные пути</option>
                                    <option value="Органы ЖКТ">Органы ЖКТ</option>
                                    <option value="Нервная система">Нервная система</option>
                                    <option value="Общетерапевтический профиль">Общетерапевтический профиль</option>
                                    <option value="Органы пищеварения">Органы пищеварения</option>
                                    <option value="Костно-мышечные болезни">Костно-мышечные болезни</option>
                                </select>
                            </div>
                        </div>
                        --}}

                    </section>


                    <h4></h4>
                    <section>
                        <h3 style="margin-bottom: 16px;">Номера</h3>
                        <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
                            <thead>
                            <th></th>
                            <th style="text-align: left;">Номер</th>
                            <th style="text-align: left;">Фичи</th>
                            <th style="text-align: center;">Цены</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody>

                            @php
                                $rooms = [
                                    ['id'=>1, 'name'=>'Single', 'desc'=>'1мест-1комн', 'price'=>'3389', 'img'=>'/img/Apport/mini/img_9407_0_min.Ep3AH.jpg',
                                        'icons'=>'<i class="fas fa-wifi"></i> <i class="fas fa-car"></i>'],
                                    ['id'=>2, 'name'=>'Twin', 'desc'=>'2мест-1комн', 'price'=>'2712', 'img'=>'/img/Apport/mini/img_9453_min.XY1QN.jpg',
                                        'icons'=>'<i class="fas fa-wifi"></i> <i class="fas fa-car"></i> <i class="fas fa-toilet"></i>'],
                                    ['id'=>3, 'name'=>'Kingsize', 'desc'=>'2мест-2комн', 'price'=>'3723', 'img'=>'/img/Apport/mini/img_9382_min.wQvX1.jpg',
                                        'icons'=>'<i class="fas fa-wifi"></i> <i class="fas fa-car"></i> <i class="fas fa-toilet"></i> <i class="fas fa-bath"></i> <i class="fas fa-tshirt"></i>'],
                                ];
                            @endphp

                            @foreach ($rooms as $room)
                                <tr>
                                    <td class="product-thumb">
                                        <a href="#" class="item-thumb">
                                            <img src="{{ $room['img'] }}" alt="">
                                        </a>
                                    </td>
                                    <td class="product-detail" data-title="Product Detail" style="padding-left: 5px">
                                        <div>
                                            <a href="#">{{ $room['name'] }}</a>
                                            <span>{{ $room['desc'] }}</span>
                                        </div>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        {!! $room['icons'] !!}
                                    </td>
                                    <td class="total-price" data-title="Total Price">
                                        <span class="woocommerce-Price-amount amount">{{ $room['price'] }} руб</span>
                                    </td>
                                    <td class="product-remove">
                                        <input type="radio" name="room_id" value="{{ $room['id'] }}">
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </section>

                    <h4></h4>
                    <section>
                        <h3>Итоговый расчет</h3>
                        <div class="cart_totals">
                            <table cellspacing="0" class="shop_table shop_table_responsive">
                                <tr class="cart-subtotal">
                                    <th>Количество людей</th>
                                    <td>
                                        <span class="woocommerce-Price-amount amount">
                                            Взрослых: 2 чел<br>
                                            Детей: 1 чел (5 лет)
                                        </span>
                                    </td>
                                </tr>
                                <tr class="cart-subtotal shipping">
                                    <th>Даты:</th>
                                    <td data-title="Subtotal">
                                        Заезд: 23.09.2019<br>
                                        Выезд: 02.10.2019<br>
                                    </td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <th>Номер</th>
                                    <td>
                                        Twin, 2мест-2комн
                                    </td>
                                </tr>
                                <tr class="order-total border-0">
                                    <th>Общая цена путевок</th>
                                    <td data-title="Total">
                                        <span class="woocommerce-Price-amount amount">
                                            76800 руб
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </section>
                    {{--                    <input type="submit" name="submit" value="go">--}}
                </form>
            </div>
        </div>
    </div>
</div>