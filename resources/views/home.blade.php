@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<!-- Main Dashboard -->
<div id="main-container" class="container">
    <div class="onboarding-container">
        <p class="title">Getting started </p>
        <div class="store-onboarding">
            <div class="onboarding-block">
                <div class="checkmark"></div>
                <div class="content">
                    <span class="title">Verify your email address</span>
                </div>
            </div>
            <div class="onboarding-block">
                <div class="checkmark"></div>
                <div class="content">
                    <span class="title">Activate your store</span>
                    <a href="" class="action">
                        Purchase balance
                    </a>
                </div>
            </div>
            <div class="onboarding-block">
                <div class="checkmark "></div>
                <div class="content">
                    <span class="title">Set a payment method</span>
                    <a href="" class="action">
                        Configure payment methods
                    </a>
                </div>
            </div>
        </div>
        <div class="separator"></div>
    </div>
    <div id="app">
        <div class="page-wrapper dashboard-wrapper">
            <div class="page-body">
                <div class="main-bar">
                    <div class="welcome-area">
                        <div class="welcome-message">
                            @php
                            $user = App\Models\User::find(Auth::id());
                            $userName = $user->last_name;
                            @endphp
                            <h1>
                                Welcome back
                                <span>
                                    @php
                                        echo $userName;
                                    @endphp
                                </span> ,
                            </h1>
                            <p>Please complete the information above in order to activate your store</p>
                        </div>
                    </div>

                    <div class="is-grid">
                        <div class="outer-block has-padding">
                            <div class="outer-block-header">
                                <div class="outer-block-title">
                                    <h2>Overview dashboard</h2>
                                </div>
                            </div>
                            <div class="outer-block-body">
                                <div class="is-grid grid-2">
                                    <div class="inner-block has-padding">
                                        <div class="block-header">
                                            <div class="block-title">
                                                <h2>
                                                    <i class="youcan-icon fas fa-border-all"></i> <span
                                                        style="margin-left: 10px;">Orders</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="dashboard-widgets">
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">Today</h5>
                                                    <span class="value">0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">Yesterday</h5>
                                                    <span class="value">0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">This week</h5>
                                                    <span class="value">0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">This month</h5>
                                                    <span class="value">0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">This year</h5>
                                                    <span class="value">0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">All time</h5>
                                                    <span class="value">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-block has-padding">
                                        <div class="block-header">
                                            <div class="block-title">
                                                <h2>
                                                    <i class="youcan-icon fas fa-comment-dollar"></i><span
                                                        style="margin-left: 10px;">Earnings</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="dashboard-widgets">
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">Today</h5>
                                                    <span class="value">$ 0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">Yesterday</h5>
                                                    <span class="value">$ 0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">This week</h5>
                                                    <span class="value">$ 0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">This month</h5>
                                                    <span class="value">$ 0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">This year</h5>
                                                    <span class="value">$ 0</span>
                                                </div>
                                                <div
                                                    class="dashboard-widget is-flex align-center justify-space-between">
                                                    <h5 class="title">All time</h5>
                                                    <span class="value">$ 0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
