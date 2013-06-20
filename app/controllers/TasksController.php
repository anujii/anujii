<?php

class TasksController extends BaseController {

	public function index() {
		return Response::json($this->getTasks());
	}

	public function show($id) {
		list(,$task) = $this->findTaskById($id);
		return Response::json($task);
	}

	public function store() {
		$id = $this->session->get('tasksId', 0) + 1;
		$subject = $this->request->input('subject');
		$tasks = $this->getTasks();

		$task = array('id' => $id, 'subject' => $subject);
		$tasks[] = $task;

		$this->session->set('tasks', $tasks);
		$this->session->set('tasksId', $id);
		return Response::json($task);
	}

	public function update($id) {
		$tasks = $this->getTasks();
		list($i, $task) = $this->findTaskById($id);
		$task['subject'] = $this->request->input('subject');
		$tasks[$i] = $task;
		$this->session->set('tasks', $tasks);
		return Response::json($task);
	}

	public function destroy($id) {
		$tasks = $this->getTasks();
		list($i) = $this->findTaskById($id);
		if($i !== null) {
			unset($tasks[$i]);
		}
		$this->session->set('tasks', $tasks);
	}

	public function clear() {
		$this->session->set('tasks', array());
	}


	private function findTaskById($id) {
		$tasks = $this->getTasks();
		foreach ($tasks as $i => $task) {
			if($task['id'] == $id) {
				return array($i, $task);
			}
		}
		return null;
	}

	private function getTasks() {
		return $this->session->get('tasks', array());
	}

}