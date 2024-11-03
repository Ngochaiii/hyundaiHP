<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GoogleTracking;
use Illuminate\Http\Request;

class GoogleTrackingController extends Controller
{
    public function index()
    {
        $trackings = GoogleTracking::all();
        return view('backend.google_tracking.index', compact('trackings'));
    }

    public function create()
    {
        return view('backend.google_tracking.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tracking_code' => 'required|string',
            'is_active' => 'boolean'
        ]);

        // Đảm bảo is_active luôn có giá trị
        $validated['is_active'] = $request->has('is_active');

        GoogleTracking::create([
            'tracking_code' => $validated['tracking_code'],
            'is_active' => $validated['is_active'],
            'campaign_name' => null,
            'conversion_id' => null,
            'conversion_label' => null
        ]);

        return redirect()->route('admin.google_tracking.index')
            ->with('success', 'Tracking code đã được lưu thành công.');
    }

    public function edit($id)
    {
        $tracking = GoogleTracking::findOrFail($id);
        return view('backend.google_tracking.form', compact('tracking'));
    }

    public function update(Request $request, $id)
    {
        $tracking = GoogleTracking::findOrFail($id);

        $validated = $request->validate([
            'tracking_code' => 'required|string',
            'is_active' => 'boolean'
        ]);

        // Đảm bảo is_active luôn có giá trị
        $validated['is_active'] = $request->has('is_active');

        $tracking->update([
            'tracking_code' => $validated['tracking_code'],
            'is_active' => $validated['is_active']
        ]);

        return redirect()->route('admin.google_tracking.index')
            ->with('success', 'Tracking code đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        try {
            $tracking = GoogleTracking::findOrFail($id);
            $tracking->delete();

            return redirect()->route('admin.google_tracking.index')
                ->with('success', 'Đã xóa tracking code thành công.');
        } catch (\Exception $e) {
            return redirect()->route('admin.google_tracking.index')
                ->with('error', 'Có lỗi xảy ra khi xóa tracking code.');
        }
    }

    public function toggleStatus($id)
    {
        $tracking = GoogleTracking::findOrFail($id);
        $tracking->update([
            'is_active' => !$tracking->is_active
        ]);

        return redirect()->route('admin.google_tracking.index')
            ->with('success', 'Đã thay đổi trạng thái thành công.');
    }
}
