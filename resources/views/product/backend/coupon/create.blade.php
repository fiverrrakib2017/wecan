@extends('layouts.master')
@section('title', 'Coupon')
@section('content')
<!-- Main Dashboard -->
<div id="main-container" class="container">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <div id="app">
        <div class="page-wrapper coupons-wrapper is-sticky-bottom">
            <form action="{{ route('create.coupon') }}" method="POST" class="edit-resource">
                @csrf
                <div class="page-header">
                    <div class="page-title">
                        <h1>Create New Coupon</h1>
                    </div>
                </div>
                <div class="page-body">
                    <div class="main-bar">
                        <div class="outer-block has-padding">
                            <div class="outer-block-body">
                                <div class="is-grid">
                                    <div class="is-grid grid-3">
                                        <div class="form-group ">
                                            <label for="code" class="form-label">Code</label>
                                            <input id="code" type="text" name="coupon_code"
                                                placeholder="Enter Coupon Code...">
                                        </div>
                                        <div class="form-group ">
                                            <label for="value" class="form-label">Discount Value</label>
                                            <input id="value" type="text" name="coupon_discount"
                                                placeholder="Enter Coupon Discount...">
                                        </div>
                                        <div class="form-group ">
                                            <label class="form-label">Discount Type</label>
                                            <select name="discount_type">
                                                <option value="1" selected>
                                                    Percentage
                                                </option>
                                                <option value="2">
                                                    Fixed
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="is-grid grid-2">
                                        <div class="form-group">
                                            <label for="start_date" class="form-label">Validity period</label>
                                            <div class="form-floating" style="display: flex">
                                                <input type="text" name="coupon_start_date"
                                                    class="datepicker_input form-control border-2" id="datepicker1"
                                                    required placeholder="START: DD/MM/YYYY">
                                                <input type="text" name="coupon_end_date"
                                                    class="datepicker_input form-control border-2" id="datepicker1"
                                                    required placeholder="END: DD/MM/YYYY">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="max_usage" class="form-label">Usage limit</label>
                                            <input id="max_usage" type="text" name="coupon_max_usage" value="">
                                        </div>
                                    </div>
                                    @foreach ($users as $user)
                                    <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                    <input type="hidden" name="store_id" value="{{ $user->store_id }}">
                                    @endforeach
                                    {{-- <div class="is-grid grid-2">
                                        <div class="form-group ">
                                            <label class="form-label">Filter by products (optional)</label>
                                            <multiple-products-selector input-name="product_ids" :input-value="[]"
                                                show-image show-hidden is-grid></multiple-products-selector>
                                        </div>
                                    </div> --}}
                                    <div class="is-grid">
                                        <div class="form-group ">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea id="description" name="coupon_description"></textarea>
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
                            <a href="{{ route('coupon') }}" class="button" style="background: rgb(177, 177, 177);">
                                All Coupons
                            </a>
                        </li>
                        <li>
                            <button type="submit" class="button primary-button">
                                Save Coupon
                            </button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
