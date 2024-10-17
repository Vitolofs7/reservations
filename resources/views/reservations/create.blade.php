@extends('layout')

<link rel="stylesheet" href="/css/create.css">

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('reservations.store') }}">
            @csrf
            <div class="form-group">
                <label for="client_name">Nombre del Cliente</label>
                <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Ingresa el nombre del cliente" required>
            </div>
            <div class="form-group">
                <label for="reservation_date">Fecha de Reserva</label>
                <input type="text" name="reservation_date" class="form-control" id="reservation_date" placeholder="Ingresa la fecha de la reserva" required>
            </div>
            <div class="form-group">
                <label for="number_people">Número de Personas</label>
                <input type="text" name="number_people" class="form-control" id="number_people" placeholder="Ingresa el número de personas" required>
            </div>
            <div class="form-group">
                <label for="state">Estado de la Reserva</label>
                <input type="text" name="state" class="form-control" id="state" placeholder="Ingresa el estado de la reserva" required>
            </div>
            <div>
                <button type="submit" class="btn">Enviar Reserva</button>
                <a href="{{ route('reservations.index') }}" class="btn">Volver a la lista</a>
            </div>
        </form>
    </div>
@endsection
