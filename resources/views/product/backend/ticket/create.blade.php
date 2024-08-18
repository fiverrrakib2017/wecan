@extends('layouts.master')
@section('title', 'New Support Ticket')
@section('content')
<!-- Main Dashboard -->
<div id="main-container" class="container">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <div id="app">
        <div class="page-wrapper support-wrapper is-sticky-bottom">
            <div class="page-header">
                <div class="page-title">
                    <h1>Help &amp; Support</h1>
                    <p>Facing a problem or can't find what you're looking for? Then, please contact us to assist you</p>
                </div>
            </div>
            <form action="{{ route('create.tickets') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="page-body">
                    <div class="main-bar">
                        <div class="outer-block has-padding">
                            <div class="outer-block-header">
                                <div class="outer-block-title">
                                    <h2>Create Ticket</h2>
                                </div>
                            </div>
                            <div class="outer-block-body">
                                <div class="is-grid">
                                    <div class="form-group ">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input id="subject" type="text" name="ticket_subject" placeholder="Subject"
                                            required>
                                    </div>
                                    <div class="form-group ">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea id="content" name="ticket_content" placeholder="Ask your question..."
                                            required></textarea>
                                    </div>
                                    <div class="form-group ">
                                        <label for="attachement" class="form-label">Attachments</label>
                                        <div class="input-file">
                                            <input id="attachement" name="ticket_filename" type="file" multiple />
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
                </div>
                <div class="page-footer sticked">
                    <div class="page-title">
                    </div>
                    <div class="page-actions">
                        <div class="page-action">
                            <button type="submit" class="button primary-button">
                                Send Ticket
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
