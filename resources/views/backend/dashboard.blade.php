<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark text-white sidebar min-vh-100 p-3">
                <h4 class="text-center py-3 text-warning font-bold">Student Portal</h4>
                <ul class="nav flex-column gap-2">
                    <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link text-dark bg-warning rounded fw-bold"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/academics') }}" class="nav-link text-white"><i class="fas fa-user-graduate me-2"></i> Academics</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/attendance') }}" class="nav-link text-white"><i class="fas fa-clipboard-check me-2"></i> Attendance</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/communication') }}" class="nav-link text-white"><i class="fas fa-bullhorn me-2"></i> Communication</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/calendar') }}" class="nav-link text-white"><i class="fas fa-calendar-alt me-2"></i> Calendar</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/payments') }}" class="nav-link text-white"><i class="fas fa-wallet me-2"></i> Payments</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-headset me-2"></i> Support</a></li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <!-- Top Bar -->
                <div class="d-flex justify-content-between align-items-center bg-white p-3 rounded shadow-sm mb-4">
                    <h1 class="h4 font-bold text-gray-800 mb-0">Admin Dashboard</h1>
                    <div class="d-flex align-items-center gap-3">
                        <div class="input-group" style="width: 250px;">
                            <input type="text" class="form-control form-control-sm" placeholder="Search...">
                            <button class="btn btn-outline-secondary btn-sm"><i class="fas fa-search"></i></button>
                        </div>
                        <a href="{{ url('/') }}" class="btn btn-outline-dark btn-sm">Home</a>
                    </div>
                </div>

                <!-- Top Stats Cards Grid (8 Cards Layout) -->
                <div class="row g-3 mb-4">
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Fee Awaiting Payment</span>
                            <h4 class="fw-bold text-dark mt-1 mb-0">2,450 <span class="text-xs text-muted font-normal">/5,000</span></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Monthly Fee Collection</span>
                            <h4 class="fw-bold text-success mt-1 mb-0">₹ 9,00,000</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Expenses this Month</span>
                            <h4 class="fw-bold text-danger mt-1 mb-0">₹ 5,72,136</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Profits this Month</span>
                            <h4 class="fw-bold text-primary mt-1 mb-0">₹ 3,27,884</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Teachers Present Today</span>
                            <h4 class="fw-bold text-dark mt-1 mb-0">72 <span class="text-xs text-muted font-normal">/80</span></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Students Present Today</span>
                            <h4 class="fw-bold text-dark mt-1 mb-0">4,396 <span class="text-xs text-muted font-normal">/5,000</span></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Staff Present Today</span>
                            <h4 class="fw-bold text-dark mt-1 mb-0">40 <span class="text-xs text-muted font-normal">/50</span></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <span class="text-muted text-xs">Converted Leads this Month</span>
                            <h4 class="fw-bold text-warning text-dark mt-1 mb-0">2 <span class="text-xs text-muted font-normal">/10</span></h4>
                        </div>
                    </div>
                </div>

                <!-- Main Middle Section (Chart + Sidebar Widgets) -->
                <div class="row g-4">
                    <!-- Left Side: Fee Collection & Expenses Bar Chart + Pie Charts -->
                    <div class="col-lg-8 space-y-4">
                        <!-- Bar Chart Card -->
                        <div class="card border-0 shadow-sm p-4 bg-white rounded-3">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="fw-bold text-dark mb-0">Fee Collection and Expenses</h5>
                                <div class="d-flex gap-2">
                                    <select class="form-select form-select-sm"><option>Session: 2024-25</option></select>
                                    <select class="form-select form-select-sm"><option>All Months</option></select>
                                </div>
                            </div>
                            <div style="height: 280px;">
                                <canvas id="feeExpenseChart"></canvas>
                            </div>
                        </div>

                        <!-- Bottom Two Pie/Doughnut Charts Row -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                                    <h6 class="fw-bold text-dark mb-2">Income June 2024</h6>
                                    <div style="height: 185px;">
                                        <canvas id="incomePieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                                    <h6 class="fw-bold text-dark mb-2">Expense June 2024</h6>
                                    <div style="height: 185px;">
                                        <canvas id="expensePieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Notice Board, Upcoming Events, Faculty On Leave -->
                    <div class="col-lg-4 space-y-4">
                        <!-- Notice Board -->
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <h6 class="fw-bold text-dark mb-3">Notice Board</h6>
                            <div class="space-y-2 text-sm border-start border-3 border-danger ps-2 mb-3">
                                <p class="mb-1 fw-bold text-danger cursor-pointer">Result for Class IX is out Now!! <br><span class="text-xs text-muted font-normal">Today, 11:00 am</span></p>
                                <p class="mb-1 fw-bold text-danger cursor-pointer">Result for Class VIII is out Now!! <br><span class="text-xs text-muted font-normal">Today, 11:07 am</span></p>
                                <p class="mb-1 fw-bold text-danger cursor-pointer">Result for Class VII is out Now!! <br><span class="text-xs text-muted font-normal">Today, 11:10 am</span></p>
                            </div>
                            <button class="btn btn-outline-primary btn-sm w-100">+ Add New Notice</button>
                        </div>

                        <!-- Upcoming Events -->
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <h6 class="fw-bold text-dark mb-3">Upcoming Events</h6>
                            <div class="p-2 bg-light rounded mb-2">
                                <p class="fw-bold text-sm mb-1">Webinar on Career Trends for Class X</p>
                                <small class="text-muted"><i class="far fa-calendar-alt"></i> 20 Jul &nbsp; <i class="far fa-clock"></i> 11:00 AM</small>
                            </div>
                            <div class="p-2 bg-light rounded mb-3">
                                <p class="fw-bold text-sm mb-1">Webinar on Career Trends for Class IX</p>
                                <small class="text-muted"><i class="far fa-calendar-alt"></i> 22 Jul &nbsp; <i class="far fa-clock"></i> 11:00 AM</small>
                            </div>
                            <button class="btn btn-outline-primary btn-sm w-100">+ Add New Event</button>
                        </div>

                        <!-- Faculty On Leave -->
                        <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                            <h6 class="fw-bold text-dark mb-3">Faculty On Leave</h6>
                            <div class="d-flex align-items-center gap-3 mb-2 p-2 bg-light rounded">
                                <div class="bg-secondary rounded-circle text-white d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">SS</div>
                                <div>
                                    <h6 class="fw-bold text-sm mb-0">Suchita Sachdeva</h6>
                                    <small class="text-muted">Mathematics</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Chart.js Scripts -->
    <script>
        // Bar Chart
        const ctxBar = document.getElementById('feeExpenseChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    { label: 'Fee Collection', data: [3000, 1800, 900, 2100, 1900, 800, 1700, 1800, 600, 600, 600, 600], backgroundColor: '#198754' },
                    { label: 'Expenses', data: [600, 1400, 1100, 1500, 1200, 500, 2300, 1400, 500, 500, 500, 500], backgroundColor: '#dc3545' }
                ]
            },
            options: { responsive: true, maintainAspectRatio: false }
        });

        // Income Pie Chart
        const ctxIncome = document.getElementById('incomePieChart').getContext('2d');
        new Chart(ctxIncome, {
            type: 'doughnut',
            data: {
                labels: ['Donation', 'Rent', 'Miscellaneous', 'Book Sale'],
                datasets: [{ data: [40, 25, 20, 15], backgroundColor: ['#ffc107', '#0dcaf0', '#6c757d', '#20c997'] }]
            },
            options: { responsive: true, maintainAspectRatio: false }
        });

        // Expense Pie Chart
        const ctxExpense = document.getElementById('expensePieChart').getContext('2d');
        new Chart(ctxExpense, {
            type: 'doughnut',
            data: {
                labels: ['Telephone', 'Phase', 'Electricity', 'Stationary'],
                datasets: [{ data: [30, 30, 25, 15], backgroundColor: ['#6f42c1', '#fd7e14', '#198754', '#dc3545'] }]
            },
            options: { responsive: true, maintainAspectRatio: false }
        });
    </script>
</body>
</html>