<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        return view('backend.payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Payment $payment)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|min:2',
        ]);

        $data = $request->except('_token', 'MAX_FILE_SIZE');
        // save post image.
        if ($request->image) {
            $data['image'] =  $request->image->store('public/images/payments');
        }
        $payment = $payment->create($data);
        session()->flash('message', 'Payment Added!');
        return redirect(route('payment.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $date = $payment->date;
        return view('backend.payment.edit', compact('payment', 'date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        // Retrieve all records from request.
        $data = $request->except('_token', '_method', 'action', 'MAX_FILE_SIZE');

        //store post based on condition.
        if ($request->image) {
            Storage::delete($payment->image);
            $data['image'] =  $request->image->store('public/images/payments');
            $payment->update($data);
        } else {
            $payment->update($data);
        }
        session()->flash('message', __('Payment Updated'));
        return redirect(route('payment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        // Delete from Storage folder.
        Storage::delete($payment->image);

        // Delete record from DB.
        $payment->delete();

        session()->flash('error', __('Payment Deleted'));
        return redirect(route('payment.index'));
    }
}
