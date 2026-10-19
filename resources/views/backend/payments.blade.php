<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments - Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark text-white sidebar min-vh-100 p-3">
                <h4 class="text-center py-3 text-warning font-bold">Student Portal</h4>
                <ul class="nav flex-column gap-2">
                    <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link text-white"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/academics') }}" class="nav-link text-white"><i class="fas fa-user-graduate me-2"></i> Academics</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/attendance') }}" class="nav-link text-white"><i class="fas fa-clipboard-check me-2"></i> Attendance</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/communication') }}" class="nav-link text-white"><i class="fas fa-bullhorn me-2"></i> Communication</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/calendar') }}" class="nav-link text-white"><i class="fas fa-calendar-alt me-2"></i> Calendar</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/payments') }}" class="nav-link text-dark bg-warning rounded fw-bold"><i class="fas fa-wallet me-2"></i> Payments</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-headset me-2"></i> Support</a></li>
                </ul>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                    <h1 class="h3 font-bold text-gray-800">Payments / Fee Overview & Invoices</h1>
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark btn-sm">Back to Dashboard</a>
                </div>

                <!-- Fee Overview Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 rounded-3 p-3 bg-white">
                            <h6 class="text-muted">Total Payable</h6>
                            <h3 class="fw-bold text-primary mb-0">{{ $paymentData['fee_overview']['total_payable'] }}</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 rounded-3 p-3 bg-white">
                            <h6 class="text-muted">Paid Amount</h6>
                            <h3 class="fw-bold text-success mb-0">{{ $paymentData['fee_overview']['paid_amount'] }}</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 rounded-3 p-3 bg-white">
                            <h6 class="text-muted">Due Amount</h6>
                            <h3 class="fw-bold text-danger mb-0">{{ $paymentData['fee_overview']['due_amount'] }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Invoices Table -->
                <div class="card shadow-sm border-0 rounded-3 mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="fw-bold mb-0 text-dark"><i class="fas fa-file-invoice-dollar me-2"></i> Fee Invoices</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Invoice No</th>
                                    <th>Fee Title</th>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($paymentData['invoices'] as $inv)
                                <tr>
                                    <td class="fw-bold">{{ $inv['invoice_no'] }}</td>
                                    <td>{{ $inv['title'] }}</td>
                                    <td class="fw-bold text-primary">{{ $inv['amount'] }}</td>
                                    <td>{{ $inv['due_date'] }}</td>
                                    <td>
                                        @if($inv['status'] == 'Paid')
                                            <span class="badge bg-success">Paid</span>
                                        @else
                                            <span class="badge bg-danger">Unpaid</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($inv['status'] != 'Paid')
                                            <button class="btn btn-sm btn-warning fw-bold">Pay Now</button>
                                        @else
                                            <button class="btn btn-sm btn-outline-secondary" disabled>Receipt</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Payment History Table -->
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-white py-3">
                        <h5 class="fw-bold mb-0 text-dark"><i class="fas fa-history me-2"></i> Transaction History</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Title</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($paymentData['payment_history'] as $hist)
                                <tr>
                                    <td class="fw-bold text-secondary">{{ $hist['txn_id'] }}</td>
                                    <td>{{ $hist['title'] }}</td>
                                    <td class="fw-bold text-success">{{ $hist['amount'] }}</td>
                                    <td>{{ $hist['date'] }}</td>
                                    <td>{{ $hist['method'] }}</td>
                                    <td><span class="badge bg-success">{{ $hist['status'] }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>