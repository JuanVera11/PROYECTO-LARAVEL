@forelse ($orders as $order)
    <tr>
        <td>{{ $order->user->name }}</td>
        <td>{{ $order->user->phone }}</td>
        <td>{{ $order->delivery_address }}</td>
        <td>{{ $order->description }}</td>
        <td>{{ $order->total }}</td>
        <td>{{ $order->product->name }}</td>
        <td>{{ $order->product->price  }}</td>
        <td>{{ $order->product->descriptio }}</td>

        <td>
            @if($order->product && $order->product->photo)
                <img class="product-photo" src="{{ asset('img/' . $order->product->photo) }}" alt="Foto Producto" style="max-width: 80px; max-height: 80px;">
            @else
                -
            @endif
        </td>

        <td>
            <button class="btn btn-primary edit" data-bs-toggle="modal" data-bs-target="#modalEdit" id="{{ $order->id }}">Editar</button>
            <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#modalDelete" id="{{ $order->id }}">Eliminar</button>
        </td>
    </tr>
@empty
    <h1>No se encontraron órdenes para los criterios de búsqueda.</h1>
@endforelse