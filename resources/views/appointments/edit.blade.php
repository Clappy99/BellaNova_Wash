<x-layout>
    <x-navbar />
    <div class="row">
        <div class="mt-5 col-lg-6 mx-auto">
            <div>
                <a href="{{ route('appointments.index') }}">Indietro</a>
            </div>
            <h1>Modifica un appuntamento</h1>
            <x-feedback />

            <div class="mt-5">
                <form action="{{ route('appointments.update', $appointment) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $appointment->name) }}"
                                class="form-control @error('name') is-invalid  @enderror" maxlength="50">
                            @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="surname">Cognome</label>
                            <input type="text" id="surname" name="surname" value="{{ old('surname', $appointment->surname) }}"
                                class="form-control @error('surname') is-invalid  @enderror" maxlength="50">
                            @error('surname') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="description">Modello Auto</label>
                            <input type="text" id="modelcar" name="modelcar" value="{{ old('modelcar', $appointment->modelcar) }}"
                                class="form-control @error('modelcar') is-invalid  @enderror" maxlength="100">
                            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" rows="5"
                                class="form-control @error('description') is-invalid  @enderror"> {{ old('description', $appointment->description)}}</textarea>
                            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="data">Data</label>
                            <input type="date" id="data" name="data" value="{{ old('data', $appointment->data) }}" class="form-control"
                        </div>
                        <div class="col-12">
                            <label for="text">Orario</label>
                            <input type="ora" id="ora" name="ora" value="{{ old('ora', $appointment->ora) }}" class="form-control"
                        </div>
                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-primary">Crea</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>