<?php

namespace App\Http\Controllers\Seller;

use App\Models\Order;
use App\Models\SubOrder;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = SubOrder::where('seller_id', auth()->id())->get();

        return view('sellers.orders.index', compact('orders'));
    
    }

    public function show(SubOrder $order)
    {
        $items = $order->items;

        return view('sellers.orders.show', compact('items'));
    }

    public function markDelivered(SubOrder $suborder) 
    {
       $suborder->satus = 'completed';
       $suborder->save();

       //check if all suborders are complete
       $pendingSubOrders = $suborder->order()->subOrders()->where('satus','!=', 'completed')->count();

        if ($pendingSubOrders == 0) {
            $suborder->order()->update(['satus' => 'completed']);
        }
        return redirect('/seller/orders')->withMessage('Order marked complete');
    
    }
}
