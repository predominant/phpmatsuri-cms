<?php
class Page extends AppModel {
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'You must have a title'
		)
	);

	public function beforeSave($options = array()) {
		$result = parent::beforeSave($options);

		$slug = Inflector::slug(
			$this->data['Page']['title']
		);
		$this->data['Page']['slug'] = $slug;

		return $result;
	}
}

