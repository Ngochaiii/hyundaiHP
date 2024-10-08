<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function ResgisDrive(Request $request)
    {
        // Base validation rules
        $rules = [
            'form_type' => 'required|string|max:20',
            'your-name' => 'required|string|max:255',
            'your-car' => 'required|string|max:50',
            'your-phone' => 'required|string|max:20',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        $formType = $validatedData['form_type'];

        // Determine the content based on form type
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
        ];

        try {
            Contact::create($contactData);
            return redirect()->back()->with('success', 'Gửi thông tin thành công!');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error creating contact: ' . $e->getMessage());
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
