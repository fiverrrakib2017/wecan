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
        <div class="page-wrapper products-wrapper is-sticky-bottom">
            <div class="page-header" v-on:click="hideTableFilters">
                <div class="page-title">
                    <h1 class="primary-heading">
                        All Coupons
                    </h1>
                </div>
            </div>
            <div class="page-body">
                <div class="main-bar">
                    <div class="outer-block has-padding">
                        <div class="outer-block-body">
                            <div class="table-wrapper">
                                <div class="table-header">
                                    <form action="">
                                        <div class="search-filters is-flex align-center">
                                            <div class="search-input">
                                                <input type="hidden" name="sort_order" value="desc">
                                                <input type="hidden" name="sort_field" value="created_at">
                                                <input type="search" name="q" value=""
                                                    placeholder="Search for products">
                                                <i class="yc fas fa-search"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-body">
                                    <table class="table sortable">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox"></th>
                                                <th>Coupon Code</th>
                                                <th>Discount</th>
                                                <th>Type</th>
                                                <th>End Date</th>
                                                <th>Max User</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($coupons as $coupon)
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>{{ $coupon->coupon_code }}</td>
                                                <td class="highlighted-td">{{ $coupon->coupon_discount }}</td>
                                                <td>
                                                    @if ($coupon->discount_type == 1)
                                                    {{ 'Fixed Amount' }}
                                                    @else
                                                    {{ '% Percentage' }}
                                                    @endif
                                                </td>
                                                <td class="highlighted-td">{{ $coupon->coupon_end_date }}</td>
                                                <td>{{ $coupon->coupon_max_usage }}</td>
                                                <td>
                                                    <form id="deleteForm" action="{{ route('destroy.coupon', $coupon->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="action-button" data-tooltip="Delete Coupon" onclick="confirmDelete()">
                                                            <i class="youcan-icon fas fa-trash-alt" style="color: red"></i>
                                                        </button>
                                                    </form>
                                                    <script>
                                                        function confirmDelete() {
                                                            if (confirm('Are you sure you want to delete this coupon?')) {
                                                                document.getElementById('deleteForm').submit();
                                                            }
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            @empty
                                            <td colspan="500">No Coupon Found!</td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-footer align-blocks">
                                    <div class="products-listing">
                                        Showing 1 - 5 of 5 results
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
                        <a href="{{ route('new.coupon') }}" class="button primary-button">
                            Add New Coupon
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
