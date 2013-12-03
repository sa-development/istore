<?php
App::uses('AppController', 'Controller');
/**
 * Parts Controller
 *
 * @property Part $Part
 */
class PartsController extends AppController {
	
	// Import from a hard-coded file.
	public function import_csv() {
		$raw_file = file_get_contents("lol.txt");
		$rows = preg_split('/\n/', $raw_file);
		$i = 0;
		foreach ($rows as $row) {
			$tokens = preg_split('/,/', $row);
			$data[$i] = $tokens[0];
			
			$i++;
		}
		/*
		<input name="data[Part][part_no]" maxlength="11" type="text" id="PartPartNo"/>
		<input name="data[Part][rev]" maxlength="4" type="text" id="PartRev"/>
		<input name="data[Part][class]" maxlength="64" type="text" id="PartClass"/>
		<input name="data[Part][type]" maxlength="64" type="text" id="PartType"/>
		<textarea name="data[Part][description]" cols="30" rows="6" id="PartDescription"></textarea>
		<input name="data[Part][material_type]" maxlength="64" type="text" id="PartMaterialType"/>
		<input name="data[Part][source]" maxlength="64" type="text" id="PartSource"/>
		<input name="data[Part][unit_cost]" step="any" type="number" id="PartUnitCost"/>
		<textarea name="data[Part][note]" cols="30" rows="6" id="PartNote"></textarea>
		<input name="data[Part][package]" maxlength="64" type="text" id="PartPackage"/>
		<input type="hidden" name="data[Part][active]" id="PartActive_" value="0"/>
		<input type="checkbox" name="data[Part][active]"  value="1" id="PartActive"/>
		*/
		$this->set('lols', $data);
	}
	
	public function index() {
		$this->Part->recursive = 0;
		$this->set('parts', $this->paginate());
	}
	
	
	public function view($id = null) {
		$this->Part->id = $id;
		if (!$this->Part->exists()) {
			throw new NotFoundException(__('Invalid part'));
		}
		$this->set('part', $this->Part->read(null, $id));
	}
	
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Part->create();
			if ($this->Part->save($this->request->data)) {
				$this->Session->setFlash(__('The part has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The part could not be saved. Please, try again.'));
			}
		}
	}
	
	
	public function edit($id = null) {
		$this->Part->id = $id;
		if (!$this->Part->exists()) {
			throw new NotFoundException(__('Invalid part'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Part->save($this->request->data)) {
				$this->Session->setFlash(__('The part has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The part could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Part->read(null, $id);
		}
	}
	
	
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Part->id = $id;
		if (!$this->Part->exists()) {
			throw new NotFoundException(__('Invalid part'));
		}
		if ($this->Part->delete()) {
			$this->Session->setFlash(__('Part deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Part was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
