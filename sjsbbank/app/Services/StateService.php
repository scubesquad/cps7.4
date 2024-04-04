<?php
namespace App\Services;

use App\Models\State;
use App\Services\LogService;

class StateService{

	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// function to get list of state
	public function list(){
		return State::select('state_id', 'state_name', 'state_code', 'is_delete')
		       ->orderBy('state_id', 'desc');
	}

	// function to store state
	public function store($req=null){
		$state = new State;
		$state->country_id = $req->country_id;
		$state->state_name = $req->state_name;
		$state->state_code = substr($req->state_name, 0, 3).'001';
		$state->state_name_al = substr($req->state_name, 0, 3);
		$state->is_delete = $req->is_delete;
		if($state->save()){
			// state log when insert
			$this->logService->insertLog('tb_statemaster', 'State Master', $state->country_id, 'insert', [], ['country_id' => $req->country_id, 'state_name' => $req->state_name, 'state_code' => substr($req->state_name, 0, 3).'001', 'state_name_al' => substr($req->state_name, 0, 3), 'is_delete' => $req->is_delete]);
			return true;
		}
	}

	// function to get state by id
	public function edit($id){
		return State::find($id);
	}

	// function to update state by id
	public function update($req=null){
		$state = State::find($req->state_id);
		// state log when update
		$this->logService->insertLog('tb_statemaster', 'State Master', $state->country_id, 'update', ['country_id' => $state->country_id, 'state_name' => $state->state_name, 'state_code' => substr($state->state_name, 0, 3).'001', 'state_name_al' => substr($state->state_name, 0, 3), 'is_delete' => $state->is_delete], ['country_id' => $req->country_id, 'state_name' => $req->state_name, 'state_code' => substr($req->state_name, 0, 3).'001', 'state_name_al' => substr($req->state_name, 0, 3), 'is_delete' => $req->is_delete]);


		$state->country_id = $req->country_id;
		$state->state_name = $req->state_name;
		$state->state_code = substr($req->state_name, 0, 3).'001';
		$state->state_name_al = substr($req->state_name, 0, 3);
		$state->is_delete = $req->is_delete;
		if($state->save()){
			return true;
		}
	}

	// function to remove the state
	public function delete($req){
		$state = State::find($req->id);
		// state log when delete
		$this->logService->insertLog('tb_statemaster', 'State Master', $state->country_id, 'delete', ['country_id' => $state->country_id, 'state_name' => $state->state_name, 'state_code' => substr($state->state_name, 0, 3).'001', 'state_name_al' => substr($state->state_name, 0, 3), 'is_delete' => $state->is_delete], []);

		if($state->delete()){
			return true;
		}
	}
}