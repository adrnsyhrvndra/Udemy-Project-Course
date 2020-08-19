<?php

namespace App\Http\Controllers;

use App\Page;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){

        $pages = Page::All();

        $pagefirst = Page::where('id',1)->first();
        
        return view('website.home',compact('pages','pagefirst'));

    }

    public function page($id){

        $pages = Page::All();

        $pagefirst = Page::where('id',$id)->first();
        
        return view('website.home',compact('pages','pagefirst'));

    }
    
    public function create(){



    }

    public function store(Request $request){
        


    }

    
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
