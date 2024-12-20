@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Dashboard Header -->
        <div class="col-md-12">
            <h1 class="mb-4">Admin Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <!-- Statistics Cards -->
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Users</div>
                <div class="card-body">
                    <h4 class="card-title">1,234</h4>
                    <p class="card-text">Active users in the system.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Revenue</div>
                <div class="card-body">
                    <h4 class="card-title">$12,345</h4>
                    <p class="card-text">Revenue this month.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Pending Tasks</div>
                <div class="card-body">
                    <h4 class="card-title">8</h4>
                    <p class="card-text">Tasks waiting for approval.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Issues</div>
                <div class="card-body">
                    <h4 class="card-title">3</h4>
                    <p class="card-text">Open issues reported by users.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Chart Section -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Monthly Performance</div>
                <div class="card-body">
                    <canvas id="performanceChart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Recent Activities -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Recent Activities</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">User John Doe logged in</li>
                        <li class="list-group-item">New order placed</li>
                        <li class="list-group-item">Support ticket resolved</li>
                        <li class="list-group-item">System update completed</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
