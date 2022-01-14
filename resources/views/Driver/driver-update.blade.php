@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card p-3  sticky-top">
            <h1>Редактирование водителя № {{ $driver->id }}</h1><br>
            <div class="h3 p-3 ">
                <form action="/driver/update" method="post">
                    @csrf

                    <input type="hidden" name="id" id="id" value="{{$driver->id}}">
                    <div class="row mt-3">
                        <label class="col-3" for="name">Имя водителя:</label>
                        <input type="text" class="col-3" name="name" required="required" id="name" value="{{ $driver->name }}">
                        @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mt-3">
                        <label class="col-3" for="online_phone">Номер телефона:</label>
                        <input class="col-3" id="online_phone" name="phone" type="tel" maxlength="50"
                               autofocus="autofocus" required="required"
                               value="{{ $driver->phone }}"

                               placeholder="+38(0__)___-__-__">
                        @error('phone')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mt-3">
                        <label class="col-3" for="score">Счет:</label>
                        <input type="number" class="col-2" name="score" id="score" required="required" value="{{ $driver->score }}">
                        @error('number')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success btn-lg mt-5 " style="width: 400px; height: 100px; font-size:150%;">Подтвердить</button>
                </form>
            </div>
        </div>
        </div>

        </form>

    </div>

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
