<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics - Student Portal</title>
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
                    <li class="nav-item"><a href="{{ url('/dashboard/academics') }}" class="nav-link text-dark bg-warning rounded fw-bold"><i class="fas fa-user-graduate me-2"></i> Academics</a></li>
                   <a href="{{ url('/dashboard/attendance') }}" class="nav-link text-white">Attendence</a>
                    <a href="{{ url('/dashboard/communication') }}" class="nav-link text-white">Communications</a>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-calendar-alt me-2"></i> Calendar</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-wallet me-2"></i> Payments</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-headset me-2"></i> Support</a></li>
                </ul>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                    <h1 class="h3 font-bold text-gray-800">Academics / Student Profile & Progress</h1>
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark btn-sm">Back to Dashboard</a>
                </div>

                <!-- Student Info & Guardian Info Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-3">
                            <h5 class="fw-bold text-primary mb-3"><i class="fas fa-user-circle me-2"></i> Student Information</h5>
                            <ul class="list-unstyled text-sm space-y-2">
                                <li><strong>Full Name:</strong> {{ $academicData['student_info']['name'] }}</li>
                                <li><strong>Student ID:</strong> {{ $academicData['student_info']['student_id'] }}</li>
                                <li><strong>Email:</strong> {{ $academicData['student_info']['email'] }}</li>
                                <li><strong>Class / Section:</strong> {{ $academicData['class_section']['class'] }} - {{ $academicData['class_section']['section'] }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0 rounded-3 p-3">
                            <h5 class="fw-bold text-success mb-3"><i class="fas fa-users me-2"></i> Guardian & Class Info</h5>
                            <ul class="list-unstyled text-sm space-y-2">
                                <li><strong>Father's Name:</strong> {{ $academicData['guardian_info']['father_name'] }}</li>
                                <li><strong>Mother's Name:</strong> {{ $academicData['guardian_info']['mother_name'] }}</li>
                                <li><strong>Guardian Phone:</strong> {{ $academicData['guardian_info']['guardian_phone'] }}</li>
                                <li><strong>Roll Number:</strong> {{ $academicData['class_section']['roll_number'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Subjects Table -->
                <div class="card shadow-sm border-0 rounded-3 mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="fw-bold mb-0 text-dark"><i class="fas fa-book me-2"></i> Enrolled Subjects</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Code</th>
                                    <th>Subject Name</th>
                                    <th>Lecturer</th>
                                    <th>Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($academicData['subjects'] as $sub)
                                <tr>
                                    <td><span class="badge bg-secondary">{{ $sub['code'] }}</span></td>
                                    <td class="fw-bold">{{ $sub['name'] }}</td>
                                    <td>{{ $sub['teacher'] }}</td>
                                    <td>{{ $sub['credit'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Routine & Academic Progress Row -->
                <div class="row g-4">
                    <div class="col-md-7">
                        <div class="card shadow-sm border-0 rounded-3 p-3">
                            <h5 class="fw-bold text-dark mb-3"><i class="fas fa-calendar-day me-2"></i> Class Routine</h5>
                            <table class="table table-sm table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Subject</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($academicData['routine'] as $rt)
                                    <tr>
                                        <td>{{ $rt['day'] }}</td>
                                        <td>{{ $rt['time'] }}</td>
                                        <td class="fw-bold">{{ $rt['subject'] }}</td>
                                        <td>{{ $rt['room'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card shadow-sm border-0 rounded-3 p-3">
                            <h5 class="fw-bold text-dark mb-3"><i class="fas fa-chart-line me-2"></i> Academic Progress</h5>
                            @foreach($academicData['progress'] as $prog)
                            <div class="p-3 mb-2 bg-light rounded border-start border-4 border-success">
                                <h6 class="fw-bold mb-1">{{ $prog['term'] }}</h6>
                                <p class="mb-0 text-sm">GPA: <span class="badge bg-success">{{ $prog['gpa'] }}</span> | Status: <strong>{{ $prog['status'] }}</strong></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>