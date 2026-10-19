<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function index()
    {
        // প্রফেশনাল ডেটা অ্যারে
        $academicData = [
            'student_info' => [
                'name' => 'John Doe',
                'student_id' => 'STU-2026-8942',
                'email' => 'john.doe@example.com',
                'gender' => 'Male',
                'admission_date' => '10 January 2024',
            ],
            'guardian_info' => [
                'father_name' => 'Robert Doe',
                'mother_name' => 'Sarah Doe',
                'guardian_phone' => '+1 234 567 8900',
                'relation' => 'Father',
            ],
            'class_section' => [
                'class' => 'Grade 12',
                'section' => 'Section A (Science)',
                'roll_number' => '04',
                'academic_year' => '2025-2026',
            ],
            'subjects' => [
                ['code' => 'PHY-301', 'name' => 'Advanced Physics', 'teacher' => 'Dr. Angela T. Vigil', 'credit' => 4],
                ['code' => 'MTH-302', 'name' => 'Calculus & Linear Algebra', 'teacher' => 'Prof. Frank A. Mitchell', 'credit' => 4],
                ['code' => 'CSC-303', 'name' => 'Computer Science & IT', 'teacher' => 'Dr. Susan D. Lunsford', 'credit' => 3],
                ['code' => 'ENG-304', 'name' => 'English Literature', 'teacher' => 'Dr. Dennis A. Pruitt', 'credit' => 3],
            ],
            'routine' => [
                ['day' => 'Monday', 'time' => '09:00 AM - 10:30 AM', 'subject' => 'Advanced Physics', 'room' => 'Room 402'],
                ['day' => 'Monday', 'time' => '11:00 AM - 12:30 PM', 'subject' => 'Calculus', 'room' => 'Room 305'],
                ['day' => 'Tuesday', 'time' => '09:00 AM - 10:30 AM', 'subject' => 'Computer Science', 'room' => 'Lab 02'],
            ],
            'progress' => [
                ['term' => 'First Semester', 'gpa' => '3.85', 'status' => 'Passed'],
                ['term' => 'Midterm Evaluation', 'gpa' => '3.92', 'status' => 'Excellent'],
            ]
        ];

        return view('backend.academics', compact('academicData'));
    }
}