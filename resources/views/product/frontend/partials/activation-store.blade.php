@extends('layouts.frontend.auth')
@section('title', 'Switch Store')
@section('stylesheet')
@include('partials.custom_css')
@endsection
@section('content')

<div class="container" id="container">
    <div class="form-container sign-up">
        <div id="tsum-tabs">
            <h1>Switch between stores</h1>
            <main>
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1">Active stores</label>

                <input id="tab2" type="radio" name="tabs">
                <label for="tab2">Inactive stores</label>

                <section id="content1">
                    <center>
                        <i class="fas fa-store"
                            style="font-size: 50px; padding: 15px; border: 1px solid #CDD5DF; color:gray; border-radius: 25%"></i>
                    </center>
                    <center style="margin-top: 15px">
                        <h5>No active stores to display</h5>
                        <p>All your stores are currently inactive</p>
                    </center>
                    <center>
                        <a href="{{ route('new.store') }}" style="padding: 10px; border: 1px solid #CDD5DF; color: #b83375">+ Add New Store</a>
                    </center>
                </section>

                <section id="content2">
                    <center>
                        <i class="fas fa-store"
                            style="font-size: 50px; padding: 15px; border: 1px solid #CDD5DF; color:gray; border-radius: 25%"></i>
                    </center>
                    <center style="margin-top: 15px">
                        <h5>No inactive stores to display</h5>
                        <p>All your stores are currently inactive</p>
                    </center>
                    <center>
                        <a href="" style="padding: 10px; border: 1px solid #CDD5DF; color: #b83375">+ Add New Store</a>
                    </center>
                </section>
            </main>
        </div>
    </div>
</div>
@endsection
