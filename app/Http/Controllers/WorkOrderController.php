<?php

namespace App\Http\Controllers;

use App\Models\WorkOrder;
use App\Models\WorkOrderAddress;
use App\Models\WorkOrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class WorkOrderController extends Controller
{
    public function index()
    {
        $work_orders = WorkOrder::orderBy('id', 'desc')->paginate(10)
            ->withQueryString()
            ->through(fn ($work_order) => [
                'id' => $work_order->id,
                'wo_customer_name' => $work_order->wo_customer_name,
                'wo_bike_brand' => $work_order->wo_bike_brand,
                'wo_bike_model' => $work_order->wo_bike_model,
                'wo_date' => $work_order->wo_date,
                'wo_return_date' => $work_order->wo_return_date,
                'wo_total_amount' => $work_order->wo_total_amount,
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
        $work_order = WorkOrder::with(['billing_address', 'items'])->find($id);

        return Inertia::render('WorkOrder/Edit', [
            'work_order' => $work_order,
            'edit_mode' => true,
        ]);
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'wo_date' => 'required',
            'wo_return_date' => 'required',
            'wo_title' => 'required',
            'wo_customer_name' => 'required',
            'wo_bike_brand' => 'required',
            'wo_bike_model' => 'required',
            'wo_completed_date' => 'required',

            'wo_addr_customer_name' => 'required',
            'wo_addr_str_address' => 'required',
            'wo_addr_city' => 'required',
            'wo_addr_state' => 'required',
            'wo_addr_zipcode' => 'required',
            'wo_addr_phone' => 'required',
            'wo_addr_email' => 'required',

            'wo_item_category_id' => 'required',
            'wo_item_name' => 'required',
            'wo_item_hours' => 'required',
            'wo_item_rate' => 'required',
        ]);

        try {

            DB::beginTransaction();

            $work_order = WorkOrder::updateOrCreate(['id' => $request->wo_id], [
                'wo_date' => Carbon::parse($request->wo_date)->format('Y-m-d'),
                'wo_return_date' => Carbon::parse($request->wo_return_date)->format('Y-m-d'),
                'wo_title' => $request->wo_title,
                'wo_customer_name' => $request->wo_customer_name,
                'wo_bike_brand' => $request->wo_bike_brand,
                'wo_bike_model' => $request->wo_bike_model,
                'wo_completed_date' => Carbon::parse($request->wo_completed_date)->format('Y-m-d'),
            ]);

            WorkOrderAddress::updateOrCreate(['wo_id' => $request->wo_id], [
                'wo_id' => $work_order->id,
                'wo_addr_customer_name' => $request->wo_addr_customer_name,
                'wo_addr_str_address' => $request->wo_addr_str_address,
                'wo_addr_city' => $request->wo_addr_city,
                'wo_addr_state' => $request->wo_addr_state,
                'wo_addr_zipcode' => $request->wo_addr_zipcode,
                'wo_addr_phone' => $request->wo_addr_phone,
                'wo_addr_email' => $request->wo_addr_email,
            ]);

            WorkOrderItem::updateOrCreate(['wo_id' => $request->wo_id], [
                'wo_id' => $work_order->id,
                'wo_item_category_id' => $request->wo_item_category_id,
                'wo_item_name' => $request->wo_item_name,
                'wo_item_hours' => $request->wo_item_hours,
                'wo_item_rate' => $request->wo_item_rate,
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            //throw $th;
        }

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
