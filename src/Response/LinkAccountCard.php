<?php

namespace Alexa\Response;

class LinkAccountCard extends Card {
	public $type = 'LinkAccount';
	public $title = '';
	public $content = '';

	public function render() {
		return array(
			'type' => $this->type,
			'title' => $this->title,
			'content' => $this->content,
		);
	}
}