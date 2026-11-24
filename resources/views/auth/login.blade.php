<x-layout>
    <header class="header-sm">
        <div class="container h-100">
            <div class="row h-100 align-content-center justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="glass p-5">
                        <h1 class="text-center mb-0">Accedi</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-display-errors />
    
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-5 glass-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>                  
                    <button type="submit" class="btn glass-btn">Accedi</button>
                </form>
            </div>
            
        </div>
    </div>
    
    
    
    
</x-layout>