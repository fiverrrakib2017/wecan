@extends('layouts.frontend.auth')
@section('title', 'Create New')
@section('content')
<div class="container" id="container">
    <div class="form-container sign-up">
        <form class="sign-up-form" method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" style="margin-bottom: 15px" value="{{ old('store_slug') }}" required autocomplete="store_slug" name="store_slug"
                placeholder="Store Slug">
            @error('store_slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <select name="language" id="languageSelect">
                <option value="none">Store Language</option>
                <option value="bangla">Bangla</option>
                <option value="english">English</option>
            </select>
            <br>
            @error('language')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <select name="currency" id="currencySelect">
                <option value="none">Store Currency</option>
                <option value="bdt">BDT</option>
                <option value="usd">USD</option>
            </select>
            @error('currency')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button>Continue</button>
            <p style="margin: 5px 0">Already have an account?<a href="{{ route('login') }}" style="color: #b83375">Log
                    in</a>
            </p>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
    $('#languageSelect').select2();
});
    $(document).ready(function() {
    $('#currencySelect').select2();
});
</script>
@endsection
