@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
        <h1>Все водители</h1>

        @foreach($drivers as $driver)
            <div class="container border">
                <div class="row w-100 justify-content-between mt-2">

                    <h5 class="mb-1 col-10">Водитель № {{ $driver->id }}<br>
                        Имя: {{ $driver->name }}</h5>
                    <div class="col text-end">


                    <small > Дата создания: {{ $driver->created_at->format('d/m/Y') }}</small>

                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <h5 class="mb-1"><strong>Номер водителя:</strong> {{ $driver->phone }}</h5>
                        <h5 class="mb-1"><strong>Счет:</strong> {{ $driver->score }}</h5>
                        <div class="d-flex">
                            <form action="driver/delete" method="post" class="mr-3">
                                @csrf
                                <input type="hidden" name="id" value="{{$driver->id}}">
                                <button type="submit" class="btn btn-danger m-2" style="width: 110px">Удалить</button>
                            </form>


                            <a href="/driver/{{$driver->id}}/update" class="btn btn-primary m-2" style="width: 110px">Изменить</a>

                        </div>
                    </div>
                    <div class="col text-end">
                        <a href="driver/{{ $driver->id }}" class="btn btn-info btn-lg p-3 mt-4" style="height: 70px">Детальнее</a>
                    </div>
                </div>


            </div>
        @endforeach
            </div>

        <div class="col">

        <div class="card p-3  sticky-top">
            <h1>Добавление нового водителя:</h1><br>
            <div>
            <form action="/" method="post">
                @csrf
                <div class="form-group h3">
                    <label for="name">Имя водителя</label>
                    <input type="text" class="form-control mt-3" name="name" id="name">
                    @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group h3">

                    <label for="online_phone">Номер телефона:</label>
                    <input id="online_phone" name="phone" type="tel" maxlength="50"
                           autofocus="autofocus" required="required"
                           value="+38(0__)___-__-__"

                           placeholder="+38(0__)___-__-__">
                    @error('phone')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group h3">
                    <label for="score">Счет</label>
                    <input type="number" class="form-control mt-3" name="score" id="score">
                    @error('number')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-lg mt-2">Подтвердить</button>
            </form>
        </div>
        </div>
    </div>

            </form>

            <script type="text/javascript">
                function setCursorPosition(pos, e) {
                    e.focus();
                    if (e.setSelectionRange) e.setSelectionRange(pos, pos);
                    else if (e.createTextRange) {
                        var range = e.createTextRange();
                        range.collapse(true);
                        range.moveEnd("character", pos);
                        range.moveStart("character", pos);
                        range.select()
                    }
                }

                function mask(e) {
                    //console.log('mask',e);
                    var matrix = this.placeholder,// .defaultValue
                        i = 0,
                        def = matrix.replace(/\D/g, ""),
                        val = this.value.replace(/\D/g, "");
                    def.length >= val.length && (val = def);
                    matrix = matrix.replace(/[_\d]/g, function(a) {
                        return val.charAt(i++) || "_"
                    });
                    this.value = matrix;
                    i = matrix.lastIndexOf(val.substr(-1));
                    i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
                    setCursorPosition(i, this)
                }
                window.addEventListener("DOMContentLoaded", function() {
                    var input = document.querySelector("#online_phone");
                    input.addEventListener("input", mask, false);
                    input.focus();
                    setCursorPosition(3, input);
                });
            </script>
@endsection
