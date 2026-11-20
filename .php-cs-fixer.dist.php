<?php

return Kirby\PhpCs\Config::create()->setFinder(
	PhpCsFixer\Finder::create()
		->exclude('accounts')
		->exclude('cache')
		->exclude('sessions')
		->exclude('vendor')
		->in(__DIR__ . '/site')
		->append([
			__DIR__ . '/public/index.php'
		])
);
