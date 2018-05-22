<div class="col-md-12">
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group row">
        <label for="email" class="col-md-2 offset-md-1 col-form-label text-md-right">{{ __('MATRICULA') }}</label>

        <div class="col-md-7">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class=" col-md-2 offset-md-1 col-form-label text-md-right">{{ __('SENHA') }}</label>

        <div class="col-md-7">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 text-md-right">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>
    </div>
</form>
</div>