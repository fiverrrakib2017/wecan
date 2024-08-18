@extends('layouts.master')
@section('title', 'New Products')
@section('style')
@include('product.backend.reviews.partials.styles')
@include('product.backend.product.partials.upload')
@endsection
@section('content')
<div id="main-container" class="container">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <div id="app">
        <div class="page-wrapper categories-wrapper with-sidebar is-sticky-bottom">
            <form action="{{ route('store.products') }}" method="POST" class="edit-resource" enctype="multipart/form-data">
                @csrf
                <div class="page-header">
                    <div class="page-title">
                        <h1 class="primary-heading">Create New Product</h1>
                    </div>
                </div>
                <div class="page-body">
                    <div class="main-bar is-grid">
                        <div class="outer-block has-padding">
                            <div class="outer-block-body">
                                <div class="is-grid">
                                    <div class="form-group ">
                                        <label for="name" class="form-label">Name</label>
                                        <input id="name" type="text" name="product_name">
                                    </div>
                                    <div class="form-group ">
                                        <label for="slug" class="form-label">Slug</label>
                                        <div class="slug-holder">
                                            <span>{{ asset('products/') }}</span>
                                            {{-- <span>https://tech-boikali.youcan.store/collections/</span> --}}
                                            <input id="slug" type="text" name="product_slug"
                                                placeholder="Enter product slug" ref="slug">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group ">
                                        <label class="form-label">Parent product</label>
                                        <div class="single-item-selector">
                                        </div>
                                    </div> --}}
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
                                                <label class="form-label" style="font-weight: bold">Pricing
                                                    Section</label>
                                                <div class="alert alert-info"
                                                    style="display: flex; align-items:center; justify-content:space-between">
                                                    <div>
                                                        <label class="form-label">Price</label>
                                                        <input type="number" name="product_price">
                                                    </div>
                                                    <div>
                                                        <label class="form-label">Compare at price</label>
                                                        <input type="number" name="product_comprice">
                                                    </div>
                                                    <div>
                                                        <label class="form-label">Cost price</label>
                                                        <input type="number" name="product_costprice">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="app-notices">
                                                <label class="form-label" style="font-weight: bold">Upload Product
                                                    Image</label>
                                                <div class="alert alert-info" style="align-items: center">
                                                    <div>
                                                        <input type="file" name="product_image" multiple>
                                                    </div>
                                                    <div>
                                                        <p style="color: #127ee3"><span
                                                                style="font-weight: bold">Note:</span> For best visual
                                                            appearance, use a product image with a size of 800x800.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="app-notices">
                                                <div class="alert alert-info" style="align-items: center">
                                                    <a type="button" class="accordion">Variants</a>
                                                    <div class="panel" style="overflow-y: scroll">
                                                        <div id="wrapper">
                                                            <table align='center' cellspacing=2 cellpadding=5
                                                                id="data_table" border=1>
                                                                <tr>
                                                                    <th>Option</th>
                                                                    <th>Type</th>
                                                                    <th>Value</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <input placeholder="Size, material,color" type="text" id="new_name" name="product_v_size_material_color[]">
                                                                    </td>
                                                                    <td>
                                                                        <select name="product_v_option[]" class="types-select" id="new_country">
                                                                            <option value="Radio Buttons">Radio Buttons</option>
                                                                            <option value="Dropdown list">Dropdown list</option>
                                                                            <option value="Textual Buttons">Textual Buttons</option>
                                                                            <option value="Color Based Buttons">Color Based Buttons</option>
                                                                            <option value="Image Based Buttons">Image Based Buttons</option>
                                                                            <option value="Upload Image Zone">Upload Image Zone</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" placeholder="Type,add values" id="new_age" name="product_v_type_add_value[]">
                                                                        </td>
                                                                    <td>
                                                                        <input type="button" class="add button primary-button" onclick="add_row();" value="Insert">
                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($users as $user)
                                    <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                    <input type="hidden" name="store_id" value="{{ $user->store_id }}">
                                    @endforeach
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
                                                    <input style="width: 85%" id="show" name="online_store"
                                                        type="checkbox" value="1" checked>
                                                    <label for="show">Online Store</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="outer-block has-padding">
                                <div class="outer-block-body">
                                    <div class="is-grid">
                                        <div class="form-group">
                                            <span for="" style="font-size: 17px; font-weight: bold">Storage
                                                details</span>
                                            <div class="form-group" style="padding: 5px 0">
                                                <input style="width: 85%" id="name" type="text" name="product_sku"
                                                    placeholder="SKU">
                                            </div>
                                            <div class="form-group" style="padding: 5px 0">
                                                <input style="width: 85%" id="name" type="text" name="product_barcode"
                                                    placeholder="Barcode">
                                            </div>
                                            <div class="form-group" style="padding: 5px 0">
                                                <input style="width: 85%" id="name" type="text" name="product_weight"
                                                    placeholder="Weight">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="outer-block has-padding">
                                <div class="outer-block-body">
                                    <div class="is-grid">
                                        <div class="form-group">
                                            <span for="" style="font-size: 17px; font-weight: bold">Category</span>
                                                <div class="search-filters is-flex align-center" style="margin: 10px 0">
                                                    <div class="search-input">
                                                        <input type="hidden" name="sort_order" value="desc">
                                                        <input type="hidden" name="sort_field" value="created_at">
                                                        <input style="width: 85%" type="search" name="category_search"
                                                            placeholder="Search for category">
                                                        <i class="yc fas fa-search"></i>
                                                    </div>
                                                </div>
                                            <a href="{{ route('categories') }}" target="_blank">+ Add a new category</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="outer-block has-padding">
                                <div class="outer-block-body">
                                    {{-- <div class="app-notices">
                                        <div class="alert alert-info">
                                            <div class="alert-message">
                                                <p>product thumbnail size (300x300)</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="app-notices">
                                        <div class="alert alert-info">
                                            <div>
                                                <input type="file" name="product_thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                    <label class="form-label">product thumbnail size (300x300)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer sticked">
                    <div class="page-title"></div>
                    <ul class="page-actions">
                        <li>
                            <a href="" class="button" style="background: rgb(177, 177, 177);">
                                All Products
                            </a>
                        </li>
                        <li>
                            <button type="submit" class="button primary-button">
                                Save Product
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
@include('product.backend.product.partials.scripts')
@endsection
