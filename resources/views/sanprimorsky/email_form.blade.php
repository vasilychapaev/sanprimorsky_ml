<h1>Заявка с сайта: sanprimorsky.local</h1>
<h2>Форма: {{ $request->input('form_name') }}</h2>

@foreach ($request->all() as $key=>$value)
<p><b>{{ $key }}</b>: {{$value}}</p>
@endforeach
