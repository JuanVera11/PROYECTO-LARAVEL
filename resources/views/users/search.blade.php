@forelse ($users as $user)
    <tr>
        <td class="text-center">
            <img class="user-photo" src="{{ asset('img') }}/{{ $user->photo }}" width="50px" alt="Foto Usuario">
        </td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->lastname }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <button class="btn btn-primary edit" data-bs-toggle="modal" data-bs-target="#modalEdit"
                id="{{ $user->id }}">Editar</button>
            <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#modalDelete"
                id="{{ $user->id }}">Eliminar</button>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="6" class="text-center">No se encontraron registros para los criterios de búsqueda</td>
    </tr>
@endforelse
