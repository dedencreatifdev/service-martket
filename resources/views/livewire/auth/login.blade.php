<div>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="style/index2.html" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form wire:submit.prevent="login">

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" wire:model="email"
                            class="form-control form-control-sm @error('email') is-invalid @enderror" id="email"
                            placeholder="Masukan Email" aria-describedby="email-error" aria-invalid="true"
                            value="{{ old('email') }}">
                        @error('email')
                            <span id="email-error" class="error invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" wire:model="password"
                            class="form-control form-control-sm @error('password') is-invalid @enderror" id="password"
                            placeholder="Masukan password" aria-describedby="password-error" aria-invalid="true"
                            value="{{ old('password') }}">
                        @error('password')
                            <span id="password-error" class="error invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-sm">
                                <i class="fab fa-facebook mr-2"></i>
                                Masuk
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
