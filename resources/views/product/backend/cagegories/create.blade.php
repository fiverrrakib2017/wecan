@extends('layouts.master')
@section('title', 'New Categories')
@section('content')
<div id="main-container" class="container">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <div id="app">
        <div class="page-wrapper categories-wrapper with-sidebar is-sticky-bottom">
            <form action="{{ route('categories.store') }}" method="POST" class="edit-resource" enctype="multipart/form-data">
                @csrf
                <div class="page-header">
                    <div class="page-title">
                        <h1 class="primary-heading">Create New Category</h1>
                    </div>
                </div>
                <div class="page-body">
                    <div class="main-bar is-grid">
                        <div class="outer-block has-padding">
                            <div class="outer-block-body">
                                <div class="is-grid">
                                    <div class="form-group ">
                                        <label for="name" class="form-label">Name</label>
                                        <input id="name" type="text" name="category_name">
                                    </div>
                                    <div class="form-group ">
                                        <label for="slug" class="form-label">Slug</label>
                                        <div class="slug-holder">
                                            <span>{{ asset('collections/') }}</span>
                                            {{-- <span>https://tech-boikali.youcan.store/collections/</span> --}}
                                            <input id="slug" type="text" name="category_slug"
                                                placeholder="Enter category slug" ref="slug">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group ">
                                        <label class="form-label">Parent category</label>
                                        <div class="single-item-selector">
                                        </div>
                                    </div> --}}
                                    <div class="form-group ">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="category_description" id="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side-bar">
                        <div class="is-grid">
                            <div class="outer-block has-padding">
                                <div class="outer-block-body">
                                    <div class="is-grid">
                                        <div class="form-group">
                                            <div class="checkbox-block">
                                                <div class="checkbox has-text">
                                                    <input id="show" name="show_on_collection" type="checkbox" value="1"
                                                        checked>
                                                    <label for="show">Show on collection page</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="outer-block has-padding">
                                <div class="outer-block-body">
                                    @foreach ($users as $user)
                                    <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                    <input type="hidden" name="store_id" value="{{ $user->store_id }}">
                                    @endforeach
                                    {{-- <div class="app-notices">
                                        <div class="alert alert-info">
                                            <div class="alert-message">
                                                <p>Category thumbnail size (300x300)</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="app-notices">
                                        <div class="alert alert-info">
                                            <div>
                                                <input type="file" name="category_image">
                                            </div>
                                        </div>
                                    </div>
                                    <label class="form-label">Category thumbnail size (300x300)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer sticked">
                    <div class="page-title"></div>
                    <ul class="page-actions">
                        <li>
                            <a href="{{ route('categories') }}" class="button" style="background: rgb(177, 177, 177);">
                                All Category
                            </a>
                        </li>
                        <li>
                            <button type="submit" class="button primary-button">
                                Save Category
                            </button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
