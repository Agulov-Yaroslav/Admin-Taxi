@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
        <h1>Все машины</h1>

        @foreach($cars as $car)
            <div class="container border">
                <div class="row w-100 justify-content-between mt-2">

                    <h5 class="mb-1 col-10">Машина № {{ $car->id }}<br>
                        Номер: {{ $car->number }}</h5>
                    <div class="col text-end">


                    <small > Дата создания: {{ $car->created_at->format('d/m/Y') }}</small>

                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <h5 class="mb-1"><strong>Марка:</strong> {{ $car->brand }}</h5>
                        <h5 class="mb-1"><strong>Цвет:</strong> {{ $car->color }}</h5>
                        <div class="d-flex">
                            <form action="car/delete" method="post" class="mr-3">
                                @csrf
                                <input type="hidden" name="id" value="{{$car->id}}">
                                <button type="submit" class="btn btn-danger m-2" style="width: 110px">Удалить</button>
                            </form>


                            <a href="/car/{{$car->id}}/update" class="btn btn-primary m-2" style="width: 110px">Изменить</a>

                        </div>
                    </div>

                </div>


            </div>
        @endforeach
            </div>

        <div class="col">

        <div class="card p-3  sticky-top">
            <h1>Добавление нового автомобиля:</h1><br>
            <div>
            <form action="/car" method="post">
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
    </div>
@endsection
