<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Overview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::all();
        return view('pages.test', ['travels' => $travels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.createPlan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
            $travel = new Travel();
            $travel->title = $request->title;
            $travel->subtitle = $request->sub_title;
            $travel->save();

            $overviews = $request->all();
            foreach ($overviews['overview_title'] as $overview) {
                    $data = [
                        'travel_id' => $travel->id,
                        'title' => $overview,
                        'content' => 'test',
                    ];
                Overview::insert($data);
            }
            // foreach ($overviews['overview_content'] as $overview) {
            //     foreach ($overview as $key => $value) {
            //         $data = [
            //             'travel_id' => $travel->id,
            //             'content' => $value,
            //         ];
            //     $overview = Overview::insert($data);
            //     }
            // }
            // $overviews = $request->all(); // ①
            // foreach ($votes['vote'] as $vote) {
            //     foreach ($vote as $key => $value) {
            //         $data = [
            //             'vote' => $value,
            //             'question_id' => $question->id,
            //         ];
            //     // ③
            //     $vote = Vote::insert($data);
            //     }
            // }
        } catch(\Exception $e) {
            var_dump('失敗');
            DB::rollback();
            return back()->withInput();
        }
        DB::commit();
        return redirect('/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
