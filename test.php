<?php

function _mkdir($dir) {
	if (file_exists($dir)) {
		return false;
	}
	mkdir($dir, 0777, true);
	file_put_contents("/www/test.log", 'dir='.$dir);
}
