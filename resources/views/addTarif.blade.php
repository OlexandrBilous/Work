<form method="post" action="{{ route('saveTarif') }}">
    <div>
        <h3>Добавление тарифа</h3>
        <div class="form-group">
            <input type="text" class="form-control {{$errors->has('bank') ? 'is-invalid' : ''}}" name="bank"
                   placeholder="Название банка" value="{{old('bank')}}"
                   aria-label="Username" aria-describedby="addon-wrapping">
            @error('bank')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control {{$errors->has('credit_type') ? 'is-invalid' : ''}}" name="credit_type"
                   placeholder="Тип кредита" value="{{old('credit_type')}}"
                   aria-label="Username" aria-describedby="addon-wrapping">
            @error('credit_type')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control {{$errors->has('period') ? 'is-invalid' : ''}}" name="period"
                   placeholder="Период" value="{{old('period')}}"
                   aria-label="Username" aria-describedby="addon-wrapping">
            @error('period')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control {{$errors->has('Month_pay') ? 'is-invalid' : ''}}" name="Month_pay"
                   placeholder="Оплата за месяц" value="{{old('Month_pay')}}"
                   aria-label="Username" aria-describedby="addon-wrapping">
            @error('Month_pay')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control {{$errors->has('Body_pay') ? 'is-invalid' : ''}}" name="Body_pay"
                   placeholder="Оплата целиком" value="{{old('Body_pay')}}"
                   aria-label="Username" aria-describedby="addon-wrapping">
            @error('Body_pay')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control {{$errors->has('percent') ? 'is-invalid' : ''}}" name="percent"
                   placeholder="Процент" value="{{old('percent')}}"
                   aria-label="Username" aria-describedby="addon-wrapping">
            @error('percent')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">


        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-primary" type="submit" value="Добавить тариф">
    </div>
</form>
