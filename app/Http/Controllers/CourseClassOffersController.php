<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CourseClassOffer;
use Illuminate\Http\Request;

class CourseClassOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $course_class_offers = CourseClassOffer::paginate($perPage);
        } else {
            $course_class_offers = CourseClassOffer::paginate($perPage);
        }

        return view('course_class_offers.index', compact('course_class_offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('course_class_offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        CourseClassOffer::create($requestData);

        return redirect('course_class_offers')->with('flash_message', 'CourseClassOffer added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $course_class_offer = CourseClassOffer::findOrFail($id);

        return view('course_class_offers.show', compact('course_class_offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $course_class_offer = CourseClassOffer::findOrFail($id);

        return view('course_class_offers.edit', compact('course_class_offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $course_class_offer = CourseClassOffer::findOrFail($id);
        $course_class_offer->update($requestData);

        return redirect('course_class_offers')->with('flash_message', 'CourseClassOffer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        CourseClassOffer::destroy($id);

        return redirect('course_class_offers')->with('flash_message', 'CourseClassOffer deleted!');
    }
}
