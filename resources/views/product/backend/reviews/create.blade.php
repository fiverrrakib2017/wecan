@extends('layouts.master')
@section('title', 'New Review')
@section('style')
@include('product.backend.reviews.partials.styles')
@endsection
@section('content')
<!-- Main Dashboard -->
<div id="main-container" class="container">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <div id="app">
        <div class="page-wrapper reviews-wrapper is-sticky-bottom">
            <form method="POST" action="{{ route('create.reviews') }}" enctype="multipart/form-data"
                class="edit-resource">
                @csrf
                <div class="page-header">
                    <div class="page-title">
                        <h1 class="primary-heading">Create Review</h1>
                    </div>
                </div>
                <div class="page-body">
                    <div class="main-bar">
                        <div class="outer-block has-padding">
                            <div class="outer-block-body">
                                <div class="is-grid grid-3">
                                    <div class="form-group ">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="email" name="review_email">
                                    </div>
                                    <div class="form-group ">
                                        <label for="first-name" class="form-label">First name</label>
                                        <input id="first-name" type="text" name="review_first_name">
                                    </div>
                                    <div class="form-group ">
                                        <label for="last-name" class="form-label">Last name</label>
                                        <input id="last-name" type="text" name="review_last_name">
                                    </div>
                                </div>
                                <div class="is-grid grid-2">
                                    <div class="form-group ">
                                        <label class="form-label">Selected product</label>
                                        <div class="single-item-selector">
                                            <div class="search-filters is-flex align-center">
                                                <div class="search-input">
                                                    <input type="search" name="q" value=""
                                                        placeholder="Search for products">
                                                    <i class="yc fas fa-search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-label">Rating</label>
                                        <div class="review-rating">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="review_rate" value="5">
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="review_rate" value="4">
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="review_rate" value="3">
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="review_rate" value="2">
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="review_rate" value="1">
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="is-grid">
                                    <div class="form-group">
                                        <label for="description" class="form-label">Description</label>
                                        @include('product.backend.reviews.partials.editor')
                                        @foreach ($users as $user)
                                        <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                        <input type="hidden" name="store_id" value="{{ $user->store_id }}">
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <div class="app-notices">
                                            <label class="form-label">Upload Attachment File</label>
                                            <div class="alert alert-info">
                                                <div>
                                                    <input type="file" name="review_file">
                                                </div>
                                            </div>
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
                            <a href="{{ route('reviews') }}" class="button" style="background: rgb(177, 177, 177);">
                                All Review
                            </a>
                        </li>
                        <li>
                            <button type="submit" class="button primary-button">
                                Save Review
                            </button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
@include('product.backend.reviews.partials.scripts')
@endsection
