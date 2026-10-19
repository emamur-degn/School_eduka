<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communication - Student Portal</title>
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
                    <li class="nav-item"><a href="{{ url('/dashboard/communication') }}" class="nav-link text-dark bg-warning rounded fw-bold"><i class="fas fa-bullhorn me-2"></i> Communication</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/calendar') }}" class="nav-link text-white"><i class="fas fa-calendar-alt me-2"></i> Calendar</a></li>
                    <li class="nav-item"><a href="{{ url('/dashboard/payments') }}" class="nav-link text-white"><i class="fas fa-calendar-alt me-2"></i> Payment</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-headset me-2"></i> Support</a></li>
                </ul>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                    <h1 class="h3 font-bold text-gray-800">Communication / Announcements & Messages</h1>
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark btn-sm">Back to Dashboard</a>
                </div>

                <!-- Announcements & Teacher Messages Row -->
                <div class="row g-4 mb-4">
                    <!-- Announcements -->
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-3 h-100">
                            <h5 class="fw-bold text-primary mb-3"><i class="fas fa-bullhorn me-2"></i> Announcements</h5>
                            <div class="space-y-3">
                                @foreach($communicationData['announcements'] as $ann)
                                <div class="p-3 bg-light rounded border-start border-4 border-primary mb-2">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold mb-1">{{ $ann['title'] }}</h6>
                                        <small class="text-muted">{{ $ann['date'] }}</small>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-1">{{ $ann['desc'] }}</p>
                                    <small class="text-xs text-primary fw-bold">By: {{ $ann['by'] }}</small>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Teacher Messages -->
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-3 h-100">
                            <h5 class="fw-bold text-success mb-3"><i class="fas fa-chalkboard-user me-2"></i> Teacher Messages</h5>
                            <div class="space-y-3">
                                @foreach($communicationData['teacher_messages'] as $msg)
                                <div class="p-3 bg-light rounded border-start border-4 border-success mb-2">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold mb-1">{{ $msg['teacher'] }} <span class="text-xs text-muted">({{ $msg['subject'] }})</span></h6>
                                        <small class="text-muted">{{ $msg['time'] }}</small>
                                    </div>
                                    <p class="text-sm text-gray-700 mb-0">{{ $msg['message'] }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- School Notices & Message History Row -->
                <div class="row g-4">
                    <!-- School Notices -->
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-3 h-100">
                            <h5 class="fw-bold text-dark mb-3"><i class="fas fa-flag me-2"></i> School Notices</h5>
                            <ul class="list-group list-group-flush text-sm">
                                @foreach($communicationData['school_notices'] as $notice)
                                <li class="list-group-item py-3">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-dark">{{ $notice['title'] }}</strong>
                                        <small class="text-muted">{{ $notice['date'] }}</small>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-0 mt-1">{{ $notice['details'] }}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Message History -->
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-3 h-100">
                            <h5 class="fw-bold text-dark mb-3"><i class="fas fa-history me-2"></i> Message History</h5>
                            <table class="table table-sm align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Recipient</th>
                                        <th>Topic</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($communicationData['message_history'] as $hist)
                                    <tr>
                                        <td class="fw-bold text-sm">{{ $hist['recipient'] }}</td>
                                        <td class="text-sm">{{ $hist['topic'] }}</td>
                                        <td class="text-xs text-muted">{{ $hist['date'] }}</td>
                                        <td><span class="badge bg-success">{{ $hist['status'] }}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>