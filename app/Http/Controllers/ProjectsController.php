<?php

namespace App\Http\Controllers;

use App\Project;;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate(request(), [
			'name' => 'required',
			'location' => 'required',
			'description' => 'required',

		]);

		$type = Project::create([
			'name' => request('name'),
			'location' => request('location'),
			'description' => request('description'),
		]);

		session()->flash('message', 'Your project has been saved.');

		return redirect()->home();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function edit(string $slug)
	{
		$project = Project::where(['slug' => $slug])->first();

			if (request()->method() === 'POST') {
				// dd(request('featured'));
				 $this->validate(request(), [
					'name' => 'required',
					'location' => 'required',
					'description' => 'required',

				]);
				$project = Project::where('slug', $slug)->first();
				$project->name = request('name');
				$project->location = request('location');
				$project->description = request('description');
				$project->save();
				session()->flash('message', 'The project was successfully editted.');
				return redirect()->home();
			}

		return view('projects.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(string $slug)
	{
        $project = Project::where('slug', $slug)->first();
        $project->delete();
        session()->flash('message', 'The project has been deleted.');

        return redirect()->home();
	}
}
