<input type="hidden" name="*scart">
<input type="hidden" name="wsb_storeid" value="{{ config('webpay.wsb_store_id') }}">
<input type="hidden" name="wsb_store" value="{{ config('webpay.wsb_store_name') }}">
<input type="hidden" name="wsb_order_num" value="{{ $order->id }}">
<input type="hidden" name="wsb_currency_id" value="{{ config('webpay.wsb_currency_id') }}">
<input type="hidden" name="wsb_version" value="{{ config('webpay.wsb_version') }}">
<input type="hidden" name="wsb_test" value="{{ config('webpay.wsb_test') }}">

<input type="hidden" name="wsb_invoice_item_name[0]" value="Путевка в Санаторий Приморский №{{ $order->id }}">
<input type="hidden" name="wsb_invoice_item_quantity[0]" value="1">
<input type="hidden" name="wsb_invoice_item_price[0]" value="{{ $order->amount }}">
<input type="hidden" name="wsb_total" value="{{ $order->amount }}">

<input type="hidden" name="wsb_seed" value="{{ $seed }}">
<input type="hidden" name="wsb_signature" value="{{ $signature }}">

<input type="hidden" name="wsb_return_url" value="{{ config('webpay.wsb_return_url') }}">
<input type="hidden" name="wsb_cancel_return_url" value="{{ config('webpay.wsb_cancel_url') }}">
<input type="hidden" name="wsb_notify_url" value="{{ config('webpay.wsb_notify_url') }}">

{{--<input type="submit" value="Оплатить">--}}