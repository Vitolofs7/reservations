<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/list.css">
    <title>Restaurante - Lista de Reservas</title>
</head>
<body>
    <div class="container">
        <div class="top-section">
            <div class="restaurant-image">
                <img src="/img/pexels-chanwalrus-941861.jpg" alt="Imagen del restaurante">
            </div>
            <div class="restaurant-text">
                <h1>El Sabor Auténtico</h1>
                <p>
                    Bienvenido a nuestro restaurante, donde cada plato es una obra maestra. 
                    Nuestro equipo de chefs apasionados se esfuerza por crear una experiencia culinaria 
                    inigualable, utilizando ingredientes frescos y locales. Relájate, saborea cada bocado, y 
                    disfruta de un entorno acogedor. Ya sea que estés celebrando una ocasión especial o buscando 
                    un momento de desconexión, <em>¡tu mesa te espera con los sabores más exquisitos!</em>
                </p>
                <button class="btn-reserve" onclick="window.location.href='{{ route('reservations.create') }}'">Reserva tu mesa</button>
            </div>
        </div>
        <div class="bottom-section">
            <div class="left-text">
                <h2>Reserva tu mesa</h2>
                <p>
                    Puedes hacer tu reserva llamando a nuestro número, completando el formulario en línea, o acercándote personalmente a 
                    nuestro restaurante. Nos aseguraremos de que tengas la mejor experiencia posible, brindándote atención personalizada y 
                    respondiendo a todas tus preguntas. Queremos que tu visita sea memorable, así que no dudes en contactarnos para cualquier 
                    consulta adicional.
                </p>
                <div class="image-container" style="text-align: center; margin-top: 20px;">
                    <img src="/img/sorza.jpg" alt="Descripción de la imagen" style="width: 432px; height: 432px;">
                </div>                
            </div>
            <div class="right-reservations">
                <h2>Reservas Activas</h2>
                <div class="reservation-list">
                    @foreach ($reservations as $f)
                        <div class="reservation-item">
                            <div class="reservation-info">
                                <p><strong>Nombre:</strong> {{$f->client_name}}</p>
                                <p><strong>Fecha:</strong> {{$f->reservation_date}}</p>
                                <p><strong>Personas:</strong> {{$f->number_people}}</p>
                                <p><strong>Estado:</strong> {{$f->state}}</p>
                            </div>
                            <div class="reservation-actions">
                                <a href="{{ route('reservations.edit', $f->id) }}" class="btn btn-edit">Editar</a>
                                <form action="{{ route('reservations.destroy', $f->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>


