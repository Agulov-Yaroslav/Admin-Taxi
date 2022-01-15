@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Все машины</h1>

        @foreach($cars as $car)
            <div class="container border">
                <div class="row w-100 justify-content-between mt-2">

                    <h5 class="mb-1 col-10">Машина № {{ $car->id }}
                        <br><strong>Цвет:</strong> {{ $car->color }}
                    </h5>
                    <div class="col text-end">


                    <small > Дата создания: {{ $car->created_at->format('d/m/Y') }}</small>

                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <h5 class="mb-1"><strong>Марка:</strong> {{ $car->brand }}</h5>
                        <h5><strong>Номер: </strong>{{ $car->number }}</h5>
                        <div class="d-flex">
                            <form action="/driver/cars" method="post" class="mr-3">
                                @csrf
                                <input type="hidden" name="driver_id" value="{{$driver->id}}">
                                <input type="hidden" name="car_id" value="{{$car->id}}">
                                <button type="submit" class="btn btn-success m-2" style="width: 110px">Выбрать</button>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        @endforeach
            </div>


    </div>
@endsection
