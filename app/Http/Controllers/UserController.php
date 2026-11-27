<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view("user.index");
    }

    public function orders()
    {
        $orders = $this->userService->getOrders();
        return view('user.orders.orders-home', compact('orders'));
    }

    public function order_details($order_id)
    {
        $orderData = $this->userService->getOrderDetails($order_id);
        if ($orderData) {
            return view('user.orders.orders-details', $orderData);
        }
        return redirect()->route('login');
    }

    public function order_cancel(Request $request)
    {
        $isCanceled = $this->userService->cancelOrder($request->order_id);
        if ($isCanceled) {
            return back()->with('status', "Order has been cancelled successfully!");
        }
        return back()->with('error', "Order cancellation failed!");
    }

    public function accountDetails()
{
    return view('user.account-details');
}

public function updateAccountDetails(Request $request)
{
    $user = User::find(Auth::id());

    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|digits_between:10,15|unique:users,mobile,' . $user->id,
        'email' => 'required|email|unique:users,email,' . $user->id,
        'old_password' => 'nullable|required_with:new_password',
        'new_password' => 'nullable|min:8|confirmed',
    ]);

    $user->name = $request->name;
    $user->mobile = $request->mobile;
    $user->email = $request->email;

    // Jika user mengisi password baru
    if ($request->filled('new_password')) {
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak sesuai!']);
        }
        $user->password = Hash::make($request->new_password);
    }

    $user->save();

    return back()->with('status', 'Account details berhasil diperbarui!');
}
}
