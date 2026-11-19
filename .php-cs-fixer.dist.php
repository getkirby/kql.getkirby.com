<?php

return Kirby\PhpCs\Config::create()->setFinder(
	PhpCsFixer\Finder::create()
		->exclude('accounts')
		->exclude('cache')
		->exclude('sessions')
		// separate repo, vendored in; brings its own code style
		->exclude('mailcoach')
		// installed with Composer
		->exclude('discord')
		->exclude('vendor')
		->in(__DIR__ . '/site')
		->append([
			__DIR__ . '/public/index.php'
		])
);
