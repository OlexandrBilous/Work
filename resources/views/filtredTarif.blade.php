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
