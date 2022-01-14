@extends('layouts.app')

@section('content')
    <div class="container">



            <div class="container border">
                <div class="d-flex w-100 justify-content-between mt-2">

                    <h5 class="mb-1">Водитель № {{ $driver->id }}<br>
                        Имя: {{ $driver->name }}</h5>
                    <small> Дата создания: {{ $driver->created_at->format('d/m/Y') }}</small>
                </div>

                <h5 class="mb-1"><strong>Номер водителя:</strong> {{ $driver->phone }}</h5>
                <h5 class="mb-1"><strong>Счет:</strong> {{ $driver->score }}</h5>

            </div>

            </div>


@endsection
