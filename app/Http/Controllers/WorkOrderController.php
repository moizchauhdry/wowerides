<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkOrderRequest;
use App\Models\WorkOrder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class WorkOrderController extends Controller
{
    public function index()
    {
        $work_orders = WorkOrder::orderBy('id', 'desc')->paginate(10)
            ->withQueryString()
            ->through(fn ($work_order) => [
                'id' => $work_order->id,
                'customer_name' => $work_order->customer_name,
                'bike_brand' => $work_order->bike_brand,
                'bike_model' => $work_order->bike_model,
                'wo_date' => $work_order->wo_date,
                'return_date' => $work_order->return_date,
                'total_amount' => $work_order->total_amount,
            ]);

        return Inertia::render('WorkOrder/Index', [
            'work_orders' => $work_orders,
        ]);
    }

    public function create()
    {
        return Inertia::render('WorkOrder/Edit', [
            'work_order' => null,
            'edit_mode' => false,
        ]);
    }

    public function edit($id)
    {
        $work_order = WorkOrder::find($id);

        return Inertia::render('WorkOrder/Edit', [
            'work_order' => $work_order,
            'edit_mode' => true,
        ]);
    }

    public function update(WorkOrderRequest $request)
    {
        $work_order = WorkOrder::updateOrCreate(['id' => $request->work_order_id], $request->validated());

        // try {
        //     if (!$request->work_order_id) {
        //         Mail::to($work_order->user_email)->send(new WorkOrderMail($work_order));
        //     }
        // } catch (\Throwable $th) {
        //     //throw $th;
        // }

        return Redirect::route('work-order.index');
    }

    // public function pdf($id)
    // {
    //     $work_order = WorkOrder::find($id);

    //     view()->share([
    //         'work_order' => $work_order,
    //     ]);

    //     $pdf = PDF::loadView('pdf.work_order');
    //     $pdf->setPaper('A4', 'portrait');
    //     return $pdf->stream('work_order.pdf');
    // }
}
