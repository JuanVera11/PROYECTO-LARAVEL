@forelse ($products as $product)
<tr>
    <td class="text-center">
        <img class="product-photo" src="{{ asset('img') }}/{{ $product->photo }}" alt="Foto Producto">
    </td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->description }}</td>
    <td>{{ $product->available ? 'Sí' : 'No' }}</td>
    <td>
        <button class="btn btn-primary edit" data-bs-toggle="modal" data-bs-target="#modalEdit" id="{{ $product->id }}">Editar</button>
        <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#modalDelete" id="{{ $product->id }}">Eliminar</button>
    </td>
</tr>
@empty
<h1>No encontro registros para criterios de busqueda</h1>
@endforelse