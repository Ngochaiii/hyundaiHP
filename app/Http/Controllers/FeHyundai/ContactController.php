<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function ResgisDrive(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
        ]);




        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => $validated['phone'],
            'content' => 'Tiêu đề Modal: ' . $request->input('modal_title'),
            'member_id' => $request->input('car'),
            'is_read' => false,
        ]);

        return redirect()->back()->with('success', 'Gửi thông tin thành công!');
    }
    public function drivedata(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:15',
            'modal_title' => 'required|string',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => $validated['phone'],
            'content' => 'Tiêu đề Modal: ' . $request->input('modal_title'),
            'member_id' => $request->input('car'),
            'is_read' => false,
        ]);


        return redirect()->back()->with('success', 'Dữ liệu đã được gửi thành công!');
    }
    public function requetSale(Request $request){
        dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:15',
        ]);
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => $validated['phone'],
            'content' => 'Yêu cầu tư vấn xe ',
            'member_id' => $request->input('car_model'),
            'is_read' => false,
        ]);
        return redirect()->back()->with('success', 'Dữ liệu đã được gửi thành công!');
    }

}
