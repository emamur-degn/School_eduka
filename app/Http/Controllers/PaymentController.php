<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $paymentData = [
            'fee_overview' => [
                'total_payable' => '$1,250',
                'paid_amount' => '$1,100',
                'due_amount' => '$150',
                'status' => 'Pending Due',
            ],
            'invoices' => [
                ['invoice_no' => 'INV-2026-01', 'title' => 'Fall Semester Tuition Fee', 'amount' => '$750', 'due_date' => '30 October 2026', 'status' => 'Unpaid'],
                ['invoice_no' => 'INV-2026-02', 'title' => 'Library & Lab Fee', 'amount' => '$500', 'due_date' => '15 September 2026', 'status' => 'Paid'],
            ],
            'payment_history' => [
                ['txn_id' => 'TXN-984210', 'title' => 'Library & Lab Fee', 'amount' => '$500', 'date' => '12 Sep 2026', 'method' => 'Credit Card', 'status' => 'Success'],
                ['txn_id' => 'TXN-873102', 'title' => 'Summer Semester Fee', 'amount' => '$600', 'date' => '10 Jun 2026', 'method' => 'Bank Transfer', 'status' => 'Success'],
            ]
        ];

        return view('backend.payments', compact('paymentData'));
    }
}