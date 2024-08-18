@extends('layouts.master')
@section('title', 'All Reviews')
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
                        All Reviews
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
                                                <th>Ratting</th>
                                                <th>Created Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($reviews as $review)
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>{{ $review->review_first_name.' '.$review->review_last_name }}</td>
                                                <td>{{ $review->review_email }}</td>
                                                <td>
                                                    <div class="review-rating">
                                                        <div class="rate">
                                                            @if ($review->review_rate == 5)
                                                            <input type="radio" id="star5" name="review_rate" value="5"
                                                                checked>

                                                            <label for="star4" title="text">5 stars</label>
                                                            @elseif($review->review_rate == 4)
                                                            <input type="radio" id="star5" name="review_rate" value="4"
                                                                checked>

                                                            <label for="star4" title="text">4 stars</label>
                                                            @elseif($review->review_rate == 3)
                                                            <input type="radio" id="star5" name="review_rate" value="3"
                                                                checked>

                                                            <label for="star4" title="text">3 stars</label>
                                                            @elseif($review->review_rate == 2)
                                                            <input type="radio" id="star5" name="review_rate" value="2"
                                                                checked>

                                                            <label for="star4" title="text">2 stars</label>
                                                            @elseif($review->review_rate == 1)
                                                            <input type="radio" id="star5" name="review_rate" value="1"
                                                                checked>

                                                            <label for="star4" title="text">1 stars</label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $review->created_at }}</td>

                                                <td>
                                                    <form id="deleteForm"
                                                        action="{{ route('destroy.reviews', $review->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="action-button"
                                                            data-tooltip="Delete review" onclick="confirmDelete()">
                                                            <i class="youcan-icon fas fa-trash-alt"
                                                                style="color: red"></i>
                                                        </button>
                                                    </form>
                                                    <script>
                                                        function confirmDelete() {
                                                            if (confirm('Are you sure you want to delete this review?')) {
                                                                document.getElementById('deleteForm').submit();
                                                            }
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            @empty
                                            <td colspan="500">No review Found!</td>
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
                        <a href="{{ route('new.reviews') }}" class="button primary-button">
                            Add New Review
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
