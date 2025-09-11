<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Vieclam;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // hiển thị danh sách việc làm
    public function vieclam(){
        $vieclams = Vieclam ::latest()->paginate(10);
        return view ('backend.vieclam',compact('vieclams'));
    }

    //thêm việc làm
    public function create (){
        return view ('backend.formthemvieclam');
    }

    //lưu việc làm vào database
    public function store(Request $request)
    {
        try {
            // Xử lý is_active trước khi validate
            $input = $request->all();
            $input['is_active'] = $request->has('is_active') ? 1 : 0;
            $request->merge($input); // Ghi đè request

            // Validate sau khi đã xử lý
            $request->validate([
                'title' => 'required|string|max:255',
                'company' => 'required|string|max:255',
                'description' => 'required|string',
                'requirements' => 'required|string',
                'benefits' => 'required|string',
                'company_info' => 'required|string',
                'location' => 'required|string|max:255',
                'salary_min' => 'required|numeric|min:0',
                'salary_max' => 'required|numeric|min:0',
                'type' => 'required|string',
                'deadline' => 'required|date',
                'is_active' => 'nullable|boolean',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data = $request->except('is_active');
            $data['is_active'] = $request->input('is_active');

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename); // Lưu thẳng vào public/uploads
                $data['logo'] = 'uploads/' . $filename; // Lưu đường dẫn tương đối vào DB
            }


            Vieclam::create($data);

            return redirect()->route('quanlivieclam')
                ->with('success', 'Thêm việc làm thành công!');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    //sửa việc làm
    public function suavieclam($id){
         $vieclam = Vieclam::findOrFail($id);
        return view ('backend.formsuavieclam',compact('vieclam'));

    }

    // Cập nhật việc làm
   public function update(Request $request, $id)
    {
        try {
            // Xử lý is_active trước khi validate
            $input = $request->all();
            $input['is_active'] = $request->has('is_active') ? 1 : 0;
            $request->merge($input); // Ghi đè request

            $vieclam = Vieclam::findOrFail($id);

            $request->validate([
                'title' => 'required|string|max:255',
                'company' => 'required|string|max:255',
                'description' => 'required|string',
                'requirements' => 'required|string',
                'benefits' => 'required|string',
                'company_info' => 'required|string',
                'location' => 'required|string|max:255',
                'salary_min' => 'required|numeric|min:0',
                'salary_max' => 'required|numeric|min:0',
                'type' => 'required|string',
                'deadline' => 'required|date',
                'is_active' => 'nullable|boolean',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data = $request->except('logo', 'is_active');
            $data['is_active'] = $request->has('is_active') ? 1 : 0;

            if ($request->hasFile('logo')) {
                if ($vieclam->logo && file_exists(public_path($vieclam->logo))) {
                    unlink(public_path($vieclam->logo));
                }

                $file = $request->file('logo');
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename);
                $data['logo'] = 'uploads/' . $filename;
            }

            $vieclam->update($data);

            return redirect()->route('quanlivieclam')
                ->with('success', '✅ Cập nhật việc làm thành công!');

        } catch (\Exception $e) {
            dd($e->getMessage()); // Hiển thị lỗi nếu có
        }
    }
    public function xoavieclam($id)
    {
        $vieclam = ViecLam::findOrFail($id);

        // DEBUG: Hiển thị đường dẫn file
        echo "DEBUG: " . $vieclam->logo . "<br>";

        // DEBUG: Kiểm tra file có tồn tại không?
        $filePath = public_path($vieclam->logo);
        echo "File path: " . $filePath . "<br>";
        echo "File exists: " . (file_exists($filePath) ? 'YES' : 'NO') . "<br>";

        // Xóa file nếu tồn tại
        if ($vieclam->logo && file_exists($filePath)) {
            echo "Đang xóa file: " . $filePath . "<br>";
            if (unlink($filePath)) {
                echo "File đã được xóa thành công!<br>";
            } else {
                echo " Không thể xóa file!<br>";
            }
        }

        $vieclam->delete();

        return redirect()->route('quanlivieclam')
            ->with('success', '🗑️ Xóa việc làm và logo thành công!');
    }
}
    //

