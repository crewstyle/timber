<?php

class TestTimberRequest extends Timber_UnitTestCase {

	function testPostData() {
		$_POST['foo'] = 'bar';
		$template = '{{request.post.foo}}';
		$context = Timber::get_context();
		$str = Timber::compile_string($template, $context);
		$this->assertEquals('bar', $str);
	}

}