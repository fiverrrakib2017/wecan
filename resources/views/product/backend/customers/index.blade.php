@extends('layouts.master')
@section('title', 'All Customers')
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
                        All Customers
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
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Created Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($customers as $customer)
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>{{ $customer->customer_first_name.' '.$customer->customer_last_name }}</td>
                                                <td>{{ $customer->customer_email }}</td>
                                                <td>{{ $customer->customer_city.', '.$customer->customer_region.', '.$customer->customer_country }}</td>
                                                <td>{{ $customer->created_at }}</td>

                                                <td>
                                                    <form id="deleteForm"
                                                        action="{{ route('destroy.customers', $customer->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="action-button"
                                                            data-tooltip="Delete customer" onclick="confirmDelete()">
                                                            <i class="youcan-icon fas fa-trash-alt"
                                                                style="color: red"></i>
                                                        </button>
                                                    </form>
                                                    <script>
                                                        function confirmDelete() {
                                                            if (confirm('Are you sure you want to delete this customer?')) {
                                                                document.getElementById('deleteForm').submit();
                                                            }
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            @empty
                                            <td colspan="500">No customer Found!</td>
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
                        <a href="{{ route('new.customers') }}" class="button primary-button">
                            Add New customer
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
