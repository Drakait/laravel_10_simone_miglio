<x-layout>
    <header class="header-sm">
        <div class="container h-100">
            <div class="row h-100 align-content-center justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="glass p-5">
                        <h1 class="text-center mb-0">Registrati</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-display-errors />

    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-6">
                <form class="glass-form p-5" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn glass-btn">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>