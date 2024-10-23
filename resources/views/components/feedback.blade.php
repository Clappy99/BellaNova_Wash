
    <div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @elseif(session()->has('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif
    </div>
