<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    protected $subscriber;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
    public function index()
    {
        $data = $this->subscriber::latest()->get();
        return view('admin.subscriber.index', compact('data'));
    }
    public function destroy($id)
    {
        $data = $this->subscriber::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Subscriber Delete Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
