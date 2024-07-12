<?php

$markdown = file_get_contents(get_template_directory_uri() . "/README.md", "r");
$parser = new \cebe\markdown\GithubMarkdown();

echo $parser->parse($markdown);
