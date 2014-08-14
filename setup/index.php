<?php
	session_start();

	define('DIRBASE', $_SERVER['DOCUMENT_ROOT'] . '/setup/');

	require_once($_SERVER['DOCUMENT_ROOT'] . '/include/class.template.php');

	$page = new \Sleepy\Template('setup');

	// SEO
	$page->bind('title', 'Sleepy Mustache');
	$page->bind('description', 'This is the description');
	$page->bind('keywords', 'blog, sleepy mustache, framework');

	// Content
	$page->bind('header', 'sleepy<span>MUSTACHE</span>');
	$page->bind('heading', 'Installation');
	$page->bindStart();
?>
	<p>
		Welcome to your new installation of SleepyMUSTACHE. This wizard will
		walk you through the rest of the installation process.
	</p>
	<p>
		The next three pages will get information about your development,
		staging, and live environments. We will need your database information,
		information about your server setup (e.g. Domain, paths, etc.), and
		email information (e.g. To, From, CC, BCC).
	</p>
	<p>
		Please note, the only required settings are the domain, base URL, and
		base directory.
	</p>
	<p>
		<a href="data-collection/">Continue &raquo;</a>
	</p>
<?php
	$page->bindStop('form');
	$page->show();