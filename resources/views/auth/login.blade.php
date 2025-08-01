<div class="container">
    <div class="d-flex bg-gray-100">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="w-75 d-flex flex-column align-items-center gap-4">
                <h1 class="fs-1 font-bold text-green-800">Tarjetas Empresarios</h1>
                <img class="img-fluid rounded" src="{{ asset('storage/imagenes/miMovilidad.png') }}"
                    alt="{{ 'Imagen tarjeta' }}">
            </div>
        </div>
        <div class="col-md-6 ">
            <x-guest-layout>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>

                        <x-input-label for="email" :value="__('Correo')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Contraseña')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                        </label>
                    </div>


                    <div class="flex justify-between my-3">
                        <a href="{{ route('register') }}">
                            Crea tu cuenta
                        </a>

                        <a href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3 bg-green-800 font-bold">
                            {{ __('Iniciar Sesión') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-guest-layout>
        </div>
    </div>
</div>
