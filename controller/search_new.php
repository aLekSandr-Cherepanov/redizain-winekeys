<?php
class ControllerCommonSearchNew extends Controller {
	public function index() {
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search_new'])) {
			$data['search_new'] = $this->request->get['search_new'];
		} else {
			$data['search_new'] = '';
		}

		return $this->load->view('common/search_new', $data);
	}
}