<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function ResgisDrive(Request $request)
    {
        $rules = [
            'form_type' => 'required|string|max:20',
            'your-name' => 'required|string|max:255',
            'your-car' => 'required|string|max:50',
            'your-phone' => 'required|string|max:20',
        ];
        // dd($request->all());
        $validatedData = $request->validate($rules);
        $formType = $validatedData['form_type'];

        switch ($formType) {
            case 'lai_thu':
                $content = 'Yêu cầu lái thử';
                break;
            case 'bao_gia':
                $content = 'Yêu cầu báo giá';
                break;
            case 'dang_ky_lai_thu':
                $content = 'Đăng ký lái thử';
                break;
            case 'yeu_cau_tu_van':
                $content = 'Yêu cầu tư vấn';
                break;
            case 'general_contact':
                $content = 'Liên hệ chung';
                break;
            case 'khuyen_mai':
                $content = 'Đăng ký nhận khuyến mãi';
                break;
            default:
                $content = 'Yêu cầu thông tin';
        }

        $contactData = [
            'name' => $validatedData['your-name'],
            'mobile' => $validatedData['your-phone'],
            'content' => $content,
            'member_id' => $validatedData['your-car'],
            'form_type' => $formType,
            'is_read' => false,
            'company_name' => trim($request->input('your-address', '') . ' ' . $request->input('your-message', '')),
        ];

        try {
            Contact::create($contactData);
            Mail::to('hoapn04@gmail.com')->send(new ContactMail($contactData));
            if ($request->ajax()) {
                return response()->json(['success' => true]);
            }
            return redirect()->back()->with('success', 'Gửi thông tin thành công!');
        } catch (\Exception $e) {
            Log::error('Error creating contact: ' . $e->getMessage());
            if ($request->ajax()) {
                return response()->json(['success' => false]);
            }
            return redirect()->back()->with('error', 'Có lỗi xảy ra. Vui lòng thử lại sau.');
        }
    }
    public function requetSale(Request $request)
    {
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
