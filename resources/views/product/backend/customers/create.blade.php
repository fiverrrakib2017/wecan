@extends('layouts.master')
@section('title', 'New Customer')
@section('content')
<!-- Main Dashboard -->
<div id="main-container" class="container">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <div id="app">
        <div class="page-wrapper customers-wrapper is-sticky-bottom">
            <form action="{{ route('create.customers') }}" method="POST" class="edit-resource">
                @csrf
                <div class="page-header">
                    <div class="page-title">
                        <h1>Create customer</h1>
                    </div>
                </div>
                <div class="page-body">
                    <div class="main-bar">
                        <div class="is-grid">
                            <div class="outer-block has-padding">
                                <div class="outer-block-header">
                                    <div class="outer-block-title">
                                        <h2>Customer overview</h2>
                                    </div>
                                </div>
                                <div class="outer-block-body">
                                    <div class="is-grid">
                                        <div class="is-grid grid-3">
                                            <div class="form-group ">
                                                <label for="first_name" class="form-label">First name</label>
                                                <input id="first_name" type="text" name="customer_first_name">
                                            </div>
                                            <div class="form-group ">
                                                <label for="last_name" class="form-label">Last name</label>
                                                <input id="last_name" type="text" name="customer_last_name">
                                            </div>
                                            <div class="form-group ">
                                                <label for="email" class="form-label">Email</label>
                                                <input id="email" type="email" name="customer_email">
                                            </div>
                                        </div>
                                        <div class="is-grid grid-3">
                                            <div class="form-group ">
                                                <label for="country" class="form-label">Country</label>
                                                <input id="country" type="text" name="customer_country">
                                            </div>
                                            <div class="form-group ">
                                                <label for="region" class="form-label">Region</label>
                                                <input id="region" type="text" name="customer_region">
                                            </div>
                                            <div class="form-group ">
                                                <label for="city" class="form-label">City</label>
                                                <input id="city" type="text" name="customer_city">
                                            </div>
                                            <div class="form-group ">
                                                <label for="phone" class="form-label">Phone number</label>
                                                <input id="city" type="text" name="customer_phone">
                                            </div>
                                        </div>
                                        @foreach ($users as $user)
                                        <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                        <input type="hidden" name="store_id" value="{{ $user->store_id }}">
                                        @endforeach
                                        <div class="form-group ">
                                            <label for="notes" class="form-label">Notes</label>
                                            <textarea id="notes" name="customer_notes"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer sticked">
                    <div class="page-title"></div>
                    <ul class="page-actions">
                        <li>
                            <a href="{{ route('customers') }}" class="button" style="background: rgb(177, 177, 177);">
                                All Customer
                            </a>
                        </li>
                        <li>
                            <button type="submit" class="button primary-button">
                                Save Customer
                            </button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
