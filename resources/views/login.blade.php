<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Universitas Tarumanagara</title>
    <!-- Pemanggilan CSS langsung dari folder public -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="untar-body">
    <main class="untar-container">
        <!-- Top Header -->
        <header class="untar-header">
            <h1 class="subtitle">SIGN ON</h1>
            <h2 class="title">UNIVERSITAS TARUMANAGARA</h2>
        </header>

        <!-- Middle Red Banner Section -->
        <section class="untar-banner">
            <div class="untar-banner-overlay"></div>
            
            <div class="untar-card">
                <!-- Error Alert -->
                @if ($errors->any())
                    <div class="untar-alert-error" style="margin-bottom: 1.5rem;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="/login" class="untar-form">
                    @csrf
                    
                    <div class="untar-input-group">
                        <label for="email">Masukan Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="nama@email.untar.ac.id" 
                            required 
                            autocomplete="email"
                            value="{{ old('email') }}"
                        >
                    </div>
                    
                    <div class="untar-input-group">
                        <label for="password">Masukan password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="••••••••" 
                            required 
                            autocomplete="current-password"
                        >
                    </div>
                    
                    <!-- Hidden button for form submission on enter key -->
                    <button type="submit" style="display: none;"></button>
                </form>
            </div>
        </section>

        <!-- Bottom Footer Button -->
        <footer class="untar-footer">
            <button 
                type="button" 
                class="untar-btn-login" 
                onclick="document.querySelector('.untar-form').submit()"
            >
                LOGIN
            </button>
            
            <!-- Demo Account Information -->
            <div class="untar-demo-info">
                <strong>Akun Demo:</strong> admin@untar.ac.id dengan password 12345678<br>
                Lakukan <code>php artisan migrate:fresh --seed</code> untuk menginisialisasi database.
            </div>
        </footer>
    </main>
</body>
</html>