<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\WorkOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // $total_bookings = WorkOrder::count();
        // $new_customers = WorkOrder::select(DB::raw('COUNT(DISTINCT user_email) as count'))->get();
        // $new_customers = $new_customers[0]->count;

        // $repeat_customers = $total_bookings - $new_customers;

        // $card_payments = WorkOrder::where('payment_type', 'Credit Card')->sum('price');
        // $cash_payments = WorkOrder::where('payment_type', 'Cash Payment')->sum('price');

        return Inertia::render('Dashboard', [
            // 'total_bookings' => $total_bookings,
            // 'new_customers' => $new_customers,
            // 'repeat_customers' => $repeat_customers,
            // 'card_payments' => $card_payments,
            // 'cash_payments' => $cash_payments,
            'total_bookings' => 0,
            'new_customers' => 0,
            'repeat_customers' => 0,
            'card_payments' => 0,
            'cash_payments' => 0,
        ]);
    }
}
