<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;


class ProductListController extends Controller
{
    public function saveSubject(Request $request)
    {
        echo json_encode($request->all());
        $newProductItem = new Subject();
        $newProductItem->tutor_title = $request->ttitle;
        $newProductItem->tutor_description = $request->tdescription;
        $newProductItem->tutor_price = $request->tprice;
        $newProductItem->tutor_total = $request->ttotal;
        $newProductItem->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['listProducts' => Subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }
    public function markDelete($id)
    {
        $listItem = Subject::find($id);
        $listItem->delete();
        return redirect('mainpage');
    }

    public function markUpdate($subject_id, Request $request)
    {
        $listItem = Subject::find($subject_id);
        $listItem->tutor_title = $request->ttitle;
        $listItem->tutor_description = $request->tdecription;
        $listItem->tutor_price = $request->tprice;
        $listItem->tutor_total = $request->ttotal;
        $listItem->update();
        return redirect('mainpage');
    }
}