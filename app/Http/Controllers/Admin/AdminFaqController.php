<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;


class AdminFaqController extends Controller
{
    public function index()
    {
        // dd('h1');
        return view('admin.faq.add-faq');
    }


    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->status = $request->status;
        $faq->save();
        return redirect()->route('view-faq')->with('success', 'Faq Uploaded Successfully');
    }
    public function edit($id)
    {
        // dd($request->all());
        $id = request('id');
        // dd($id);

        $data = Faq::find($id);
        return view('admin.faq.edit-faq', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $id = $request->id;
        $faq = Faq::find($id);
        $faq->question = $request->question;

        $faq->answer = $request->answer;
        $faq->status = $request->status;
        $faq->save();
        return redirect()->route('view-faq')->with('success', 'Faq Updated Successfully');
    }


    public function destroy(Request $request)
    {

        $id = $request->id;
        $faq = Faq::find($id);
        // dd($id);
        // @unlink('public/uploads/fqa/'.$fqa->image);

        $faq->delete();
        return back()->with('flash_success', 'fqa Deleted  Successfully!');
    }
    public function view()
    {
        $data = Faq::orderBy('id')->paginate(10);
        return view('admin.faq.view-faq', compact('data'));
    }
}
