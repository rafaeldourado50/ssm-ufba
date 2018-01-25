<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DisciplineClassOffer;
use Illuminate\Http\Request;

class DisciplineClassOffersController extends Controller
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
            $discipline_class_offers = DisciplineClassOffer::paginate($perPage);
        } else {
            $discipline_class_offers = DisciplineClassOffer::paginate($perPage);
        }

        return view('discipline_class_offers.index', compact('discipline_class_offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('discipline_class_offers.create');
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
        
        DisciplineClassOffer::create($requestData);

        return redirect('discipline_class_offers')->with('flash_message', 'DisciplineClassOffer added!');
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
        $discipline_class_offer = DisciplineClassOffer::findOrFail($id);

        return view('discipline_class_offers.show', compact('discipline_class_offer'));
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
        $discipline_class_offer = DisciplineClassOffer::findOrFail($id);

        return view('discipline_class_offers.edit', compact('discipline_class_offer'));
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
        
        $discipline_class_offer = DisciplineClassOffer::findOrFail($id);
        $discipline_class_offer->update($requestData);

        return redirect('discipline_class_offers')->with('flash_message', 'DisciplineClassOffer updated!');
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
        DisciplineClassOffer::destroy($id);

        return redirect('discipline_class_offers')->with('flash_message', 'DisciplineClassOffer deleted!');
    }
}
