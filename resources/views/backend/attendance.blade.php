<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance - Student Portal</title>
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
                    <li class="nav-item"><a href="{{ url('/dashboard/attendance') }}" class="nav-link text-dark bg-warning rounded fw-bold"><i class="fas fa-clipboard-check me-2"></i> Attendance</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/communication') }}" class="nav-link text-dark bg-warning rounded fw-bold"><i class="fas fa-bullhorn me-2"></i> Communication</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-calendar-alt me-2"></i> Calendar</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-wallet me-2"></i> Payments</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-headset me-2"></i> Support</a></li>
                </ul>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                    <h1 class="h3 font-bold text-gray-800">Attendance / Daily Logs & History</h1>
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark btn-sm">Back to Dashboard</a>
                </div>

                <!-- Overview Summary Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0 rounded-3 p-3 bg-white">
                            <h6 class="text-muted">Total Classes</h6>
                            <h3 class="fw-bold text-primary mb-0">{{ $attendanceData['overview']['total_classes'] }}</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0 rounded-3 p-3 bg-white">
                            <h6 class="text-muted">Present</h6>
                            <h3 class="fw-bold text-success mb-0">{{ $attendanceData['overview']['present'] }}</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0 rounded-3 p-3 bg-white">
                            <h6 class="text-muted">Absent / Leave</h6>
                            <h3 class="fw-bold text-danger mb-0">{{ $attendanceData['overview']['absent'] }} / {{ $attendanceData['overview']['leave'] }}</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0 rounded-3 p-3 bg-white">
                            <h6 class="text-muted">Attendance Rate</h6>
                            <h3 class="fw-bold text-warning text-dark mb-0">{{ $attendanceData['overview']['percentage'] }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Daily Attendance Banner & Leave Status -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-4 bg-gradient text-white bg-success">
                            <h5 class="fw-bold mb-3"><i class="fas fa-calendar-day me-2"></i> Today's Attendance</h5>
                            <p class="mb-1"><strong>Date:</strong> {{ $attendanceData['daily_attendance']['date'] }}</p>
                            <p class="mb-1"><strong>Status:</strong> <span class="badge bg-light text-success fw-bold">{{ $attendanceData['daily_attendance']['status'] }}</span></p>
                            <p class="mb-0"><strong>Check-In / Out:</strong> {{ $attendanceData['daily_attendance']['check_in'] }} - {{ $attendanceData['daily_attendance']['check_out'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-3 h-100">
                            <h5 class="fw-bold text-dark mb-3"><i class="fas fa-file-alt me-2"></i> Leave Status History</h5>
                            <ul class="list-group list-group-flush text-sm">
                                @foreach($attendanceData['leave_status'] as $leave)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>{{ $leave['reason'] }}</strong> <small class="text-muted">({{ $leave['duration'] }})</small><br>
                                        <span class="text-xs text-gray-500">Applied: {{ $leave['applied_date'] }}</span>
                                    </div>
                                    <span class="badge bg-success">{{ $leave['status'] }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Attendance History Table -->
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-white py-3">
                        <h5 class="fw-bold mb-0 text-dark"><i class="fas fa-history me-2"></i> Attendance History Log</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Day</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendanceData['history'] as $hist)
                                <tr>
                                    <td class="fw-bold">{{ $hist['date'] }}</td>
                                    <td>{{ $hist['day'] }}</td>
                                    <td>
                                        @if($hist['status'] == 'Present')
                                            <span class="badge bg-success">Present</span>
                                        @elseif($hist['status'] == 'Absent')
                                            <span class="badge bg-danger">Absent</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Leave</span>
                                        @endif
                                    </td>
                                    <td>{{ $hist['remark'] }}</td>
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