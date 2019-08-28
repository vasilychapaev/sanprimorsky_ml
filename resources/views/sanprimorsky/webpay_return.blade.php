@if ($order)
    Заказ №{{ $order->id }}<br>
@endif

{{ $message }}<br>
{{ implode('<br>', $errors) }} <br>
<a href="{{ env('APP_URL') }}">назад</a>