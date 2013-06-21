<?php

class TasksController extends BaseController {

	public function index() {
		return Response::json(Issue::all());
	}

	public function show($id) {
		$task = Issue::find($id);
		return Response::json($task);
	}

	public function store() {
		$task = Issue::create($this->request->all());
		return Response::json($task);
	}

	public function update($id) {
		$task = Issue::find($id);
		$task->subject = $this->request->input('subject');
		$task->save();
		return Response::json($task);
	}

	public function destroy($id) {
		$task = Issue::find($id);
		$task->delete();
	}

}