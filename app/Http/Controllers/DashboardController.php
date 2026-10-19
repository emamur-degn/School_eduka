<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // ফ্রন্টএন্ড বা হোম পেজের জন্য
    public function home()
    {
       return view('frontend.homepage');
    }

    // ব্যাকএন্ড ড্যাশবোর্ডের জন্য (ফ্লোচার্ট অনুযায়ী ড্যাশবোর্ড ডেটা পাস করা হয়েছে)
    public function index()
    {
        $dashboardData = [
            'overview' => 'Student Overview Data',
            'today' => 'Today Schedule & Classes',
            'attendance' => '95%',
            'upcoming_events' => ['Science Fair', 'Math Quiz'],
            'pending_fees' => '$150',
            'recent_results' => 'A+',
            'important_notices' => 'Campus remains closed on Thursday.',
        ];

        return view('backend.dashboard', compact('dashboardData'));
    }
}