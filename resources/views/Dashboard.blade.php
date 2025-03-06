@extends('layouts.dashlay')

@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-end" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase">
            <img src="{{ asset('img/logohg.png') }}" alt="Logo" width="70">Herogram
        </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold d-flex align-items-center">
                <img src="{{ asset('img/woman.png') }}" alt="User" width="30" class="me-2">
                <div>
                    <span class="fw-bold">Ms. Mariel</span>
                    <span class="d-block text-muted small">HR</span>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold">
                <i class="bi bi-people"></i> Users
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold">
                <i class="bi bi-person-badge"></i> Employee Records
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold">
                <i class="bi bi-file-earmark-text"></i> Leave Forms
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold">
                <i class="bi bi-megaphone"></i> Announcements
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold">
                <i class="bi bi-gear"></i> Settings
            </a>
            <a href="{{ route('login') }}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="bi bi-box-arrow-left"></i> Logout
            </a>
        </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" style="background-color: #2F1B59;">
            <div class="container-fluid">
                <button class="btn border-0 text-white fs-3" id="menu-toggle" style="background: transparent;">☰</button>
                <span class="navbar-brand ms-2 fw-bold text-white fs-5">Employee Information System</span>

            </div>
        </nav>

        <!-- Main Content -->
        <div class="container-fluid mt-4">
            <div class="row">
                <!-- Main Dashboard Section -->
                <div class="col-md-9">
                    <div class="bg-white p-4 shadow-sm rounded">
                        <h4>Welcome to the Dashboard</h4>
                        <p>This is where the main content will go.</p>
                    </div>
                </div>

                <!-- Inbox Section -->
                <div class="col-md-3">
                    <div class="bg-white p-3 shadow-sm rounded">
                        <h5><i class="bi bi-envelope"></i> Inbox</h5>
                        <p>No new messages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Toggle Script -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        let wrapper = document.getElementById("wrapper");
        let sidebar = document.getElementById("sidebar");
        let navbar = document.querySelector(".navbar");

        wrapper.classList.toggle("toggled");
        sidebar.classList.toggle("d-none"); // Hide/show sidebar
        navbar.classList.toggle("w-100"); // Make navbar full width
    });
</script>


<style>
    /* Sidebar Styling */
    #wrapper {
        display: flex;
    }

    #sidebar-wrapper {
        width: 250px;
        min-height: 100vh;
        transition: all 0.3s;
    }

    #page-content-wrapper {
        flex-grow: 1;
        padding-left: 10px;
    }

    /* Collapsed Sidebar */
    #wrapper.toggled #sidebar-wrapper {
        margin-left: -250px;
    }

    @media (max-width: 768px) {
        #sidebar-wrapper {
            margin-left: -250px;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }
    }

    /* Navbar Stretches Full Width when Sidebar is Collapsed */
    #wrapper.toggled .navbar {
        width: 100%;
    }
</style>

@endsection