<x-layout>
    <x-navbar />
    <div class="row">
        <div class="mt-5 col-lg-6 mx-auto">
            <div>
                <a href="{{ route('appointments.index') }}">Indietro</a>
            </div>
            <h1>Crea un nuovo appuntamento</h1>
            <p class="lead text-muted">Istruzioni che guidano alla creazione di un nuovo articolo</p>

            <x-feedback />

            <div class="mt-5">
                <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid  @enderror" maxlength="50">
                            @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="surname">Cognome</label>
                            <input type="text" id="surname" name="surname" value="{{ old('surname') }}"
                                class="form-control @error('surname') is-invalid  @enderror" maxlength="50">
                            @error('surname') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="description">Modello Auto</label>
                            <input type="text" id="modelcar" name="modelcar" value="{{ old('modelcar') }}"
                                class="form-control @error('modelcar') is-invalid  @enderror" maxlength="100">
                            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" rows="5"
                                class="form-control @error('description') is-invalid  @enderror">{{ old('description') }}</textarea>
                            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="data">Data</label>
                            <input type="date" id="data" name="data" value="{{ old('data') }}" class="form-control @error('data') is-invalid  @enderror">
                            @error('data') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="text">Orario</label>
                            <input type="ora" id="ora" name="ora" value="{{ old('ora') }}" class="form-control @error('ora') is-invalid  @enderror">
                            @error('ora') <span class="text-danger small">{{ $message }}</span> @enderror
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