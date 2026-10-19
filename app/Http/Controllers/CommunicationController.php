<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index()
    {
        // প্রফেশনাল কমিউনিকেশন ডেটা অ্যারে
        $communicationData = [
            'announcements' => [
                ['title' => 'Midterm Examination Schedule Released', 'date' => '18 Oct 2026', 'by' => 'Exam Controller', 'desc' => 'The midterm exam timetable has been published. Check your calendar for details.'],
                ['title' => 'Annual Sports Week Registration Open', 'date' => '15 Oct 2026', 'by' => 'Sports Dept', 'desc' => 'Students interested in participating can register via the portal before Friday.'],
            ],
            'teacher_messages' => [
                ['teacher' => 'Dr. Angela T. Vigil', 'subject' => 'Advanced Physics', 'message' => 'Please submit your lab reports by tomorrow morning without fail.', 'time' => '2 hours ago'],
                ['teacher' => 'Prof. Frank A. Mitchell', 'subject' => 'Calculus', 'message' => 'Extra problem-solving session scheduled for Thursday afternoon.', 'time' => '1 day ago'],
            ],
            'school_notices' => [
                ['title' => 'Library Timing Update', 'date' => '14 Oct 2026', 'details' => 'The central library will remain open until 8:00 PM during exam weeks.'],
                ['title' => 'Campus Cafeteria Notice', 'date' => '10 Oct 2026', 'details' => 'New healthy meal options have been added to the daily menu.'],
            ],
            'message_history' => [
                ['recipient' => 'Dr. Susan D. Lunsford', 'topic' => 'Project Query', 'date' => '12 Oct 2026', 'status' => 'Replied'],
                ['recipient' => 'Administration Office', 'topic' => 'Fee Receipt Correction', 'date' => '05 Oct 2026', 'status' => 'Resolved'],
            ]
        ];

        return view('backend.communication', compact('communicationData'));
    }
}