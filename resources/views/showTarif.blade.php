<h1>Полная кредитная сетка</h1>
@isset($period)
<h2>Показания за период {{ $period }}</h2>
@endisset
<table border="3" cellspacing="5">
    <tr>
        <th>Банк</th>
        <th>Тип кредитования</th>
        <th>Период</th>
        <th>Плата за месяц</th>
        <th>Единовременная плата</th>
        <th>Процент</th>
    </tr>
    @foreach($bank as $bank)
        <tr>
            <td>{{$bank->bank}}</td>
            <td>{{$bank->credit_type}}</td>
            <td>{{$bank->period}}</td>
            <td>{{$bank->Month_pay}}</td>
            <td>{{$bank->Body_pay}}</td>
            <td>{{$bank->percent}}</td>

        </tr>
    @endforeach
</table>
<h1>Поиск по фильтру</h1>
<h3>Введите граничный период</h3>
<form name="postForm" method="GET" action="{{ route('filterTraif') }}">
    <input type="number"  name="test"><br>
    <input type="submit" >
</form>
