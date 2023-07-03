<?php

class Toolkit {

	static function load_all_utils(){
		$utils_path = PROJECT_PATH.'/app/php/utils';
		if($dh = opendir($utils_path)){
			while($file = readdir($dh)){
				if(is_file($utils_path.'/'.$file)){
					include $utils_path.'/'.$file;
				};
			};
		};
	}

	static function load_all_helpers(){
		$helpers_path = PROJECT_PATH.'/app/php/helpers';
		if($dh = opendir($helpers_path)){
			while($file = readdir($dh)){
				if(is_file($helpers_path.'/'.$file)){
					include $helpers_path.'/'.$file;
				};
			};
		};
	}

}