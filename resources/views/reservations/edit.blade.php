@extends('layout')

<link rel="stylesheet" href="/css/edit.css">

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('reservations.update', $reservation->id) }}" class="reservation-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="client_name">Nombre del Cliente</label>
                <input type="text" name="client_name" class="form-control" id="client_name" value="{{ $reservation->client_name }}" required>
            </div>
            <div class="form-group">
                <label for="reservation_date">Fecha de Reserva</label>
                <input type="text" name="reservation_date" class="form-control" id="reservation_date" value="{{ $reservation->reservation_date }}" required>
            </div>
            <div class="form-group">
                <label for="number_people">Número de Personas</label>
                <input type="text" name="number_people" class="form-control" id="number_people" value="{{ $reservation->number_people }}" required>
            </div>
            <div class="form-group">
                <label for="state">Estado</label>
                <input type="text" name="state" class="form-control" id="state" value="{{ $reservation->state }}" required>
            </div>
            <div >
                <button type="submit" class="btn">Actualizar</button>
                <a href="{{ route('reservations.index') }}" class="btn">Volver a la lista</a>
            </div>
        </form>
    </div>
@endsection
