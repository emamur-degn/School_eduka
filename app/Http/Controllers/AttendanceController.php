<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        // প্রফেশনাল অ্যাটেন্ডেন্স ডেটা অ্যারে
        $attendanceData = [
            'overview' => [
                'total_classes' => 120,
                'present' => 114,
                'absent' => 4,
                'leave' => 2,
                'percentage' => '95%',
            ],
            'daily_attendance' => [
                'date' => 'October 19, 2026',
                'status' => 'Present',
                'check_in' => '08:45 AM',
                'check_out' => '03:15 PM',
            ],
            'history' => [
                ['date' => '18 Oct 2026', 'day' => 'Sunday', 'status' => 'Present', 'remark' => 'On Time'],
                ['date' => '17 Oct 2026', 'day' => 'Saturday', 'status' => 'Present', 'remark' => 'On Time'],
                ['date' => '16 Oct 2026', 'day' => 'Friday', 'status' => 'Absent', 'remark' => 'Unexcused'],
                ['date' => '15 Oct 2026', 'day' => 'Thursday', 'status' => 'Leave', 'remark' => 'Medical Leave'],
                ['date' => '14 Oct 2026', 'day' => 'Wednesday', 'status' => 'Present', 'remark' => 'On Time'],
            ],
            'leave_status' => [
                ['applied_date' => '14 Oct 2026', 'reason' => 'Medical Checkup', 'duration' => '1 Day', 'status' => 'Approved'],
                ['applied_date' => '01 Sep 2026', 'reason' => 'Family Event', 'duration' => '2 Days', 'status' => 'Approved'],
            ]
        ];

        return view('backend.attendance', compact('attendanceData'));
    }
}