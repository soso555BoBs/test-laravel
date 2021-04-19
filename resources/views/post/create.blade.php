<!-- /resources/views/post/create.blade.php -->

<h1>ポスト作成</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('post') }}">
    @csrf
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

        <div class="col-md-6">
            <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" autofocus>

            @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('body') }}</label>

        <div class="col-md-6">
            <input id="body" type="body" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ old('body') }}" autofocus>

            @if ($errors->has('body'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="publish_at" class="col-md-4 col-form-label text-md-right">{{ __('publish_at') }}</label>

        <div class="col-md-6">
            <input id="publish_at" type="publish_at" class="form-control{{ $errors->has('publish_at') ? ' is-invalid' : '' }}" name="publish_at" value="{{ old('publish_at') }}" autofocus>

            @if ($errors->has('publish_at'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('publish_at') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('submit') }}
            </button>
        </div>
    </div>
</form>

<!-- ポスト作成フォーム -->
