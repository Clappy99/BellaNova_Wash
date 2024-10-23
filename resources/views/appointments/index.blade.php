<x-layout title="Gestione articoli">
    <x-navbar />
    <div class="row mt-5 ">
        <div class="col-md-6">
            <h1>Gestione appuntamenti</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('appointments.create') }}" class="btn btn-primary">Crea Appuntamento</a>
        </div>
    </div>

    <x-feedback />

    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Modello auto</th>
                    <th>Descrizione</th>
                    <th>Data</th>
                    <th>Orario</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->surname }}</td>
                    <td>{{ $appointment->modelcar }}</td>
                    <td>{{ $appointment->description }}</td>
                    <td>{{ $appointment->data->format('d/m/Y') }}</td>
                    <td>{{ $appointment->ora }}</td>
                    <td class="text-end">
                        <a href="{{ route('appointments.edit', $appointment) }}" class="small fw-bold text-secondary">modifica</a>

                        <form class="d-inline ms-2" action="{{ route('appointments.destroy', $appointment) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-danger border-0 p-0 bg-transparent btn-link">cancella</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
        {{$appointments->links()}}
        </div>
    </div>
</x-layout>