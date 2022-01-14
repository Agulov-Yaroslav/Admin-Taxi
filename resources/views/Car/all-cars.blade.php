@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
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
                            <form action="car/delete" method="post" class="mr-3">
                                @csrf
                                <input type="hidden" name="id" value="{{$car->id}}">
                                <button type="submit" class="btn btn-danger m-2" style="width: 110px">Удалить</button>
                            </form>



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

                <div class="form-group h3 mb-3">

                    <label class="mb-3 " for="number">Номер машины:</label>
                    <input id="number" name="number" type="text"
                           autofocus="autofocus" required="required"
                            pattern="[A-Z]{2}[0-9]{4}[A-Z]{2}"
                           placeholder="AA0000AA">
                    @error('number')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group h3">
                    <label for="name">Марка</label>
                    <select name="brand" required>
                        <option></option>
                        <option value="BMW">BMW</option>
                        <option value="Renault">Renault</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Kia">Kia</option>
                        <option value="Skoda">Skoda</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Ford">Ford</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Другая марка">Другая марка</option>
                    </select>
                </div>

                <div class="form-group h3">
                    <label for="score">Цвет</label>
                    <select name="color" required>
                        <option></option>
                        <option value="Белый">Белый</option>
                        <option value="Черный">Черный</option>
                        <option value="Темно серый">Темно серый</option>
                        <option value="Светло серый">Светло серый</option>
                        <option value="Синий">Синий</option>
                        <option value="Красный">Красный</option>
                        <option value="Коричневый">Коричневый</option>
                        <option value="Желтый">Желтый</option>
                        <option value="Зеленый">Зеленый</option>
                        <option value="другой">другой</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-success btn-lg mt-2">Подтвердить</button>
            </form>
        </div>
        </div>
    </div>

            </form>
    </div>
@endsection
