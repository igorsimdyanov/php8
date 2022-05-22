<?php
require_once 'tag.php';
require_once 'theme.php';

class Page
{
    use Theme, Tag
    {
      Tag::tags insteadof Theme;
      Theme::themes insteadof Tag;
      Theme::tags as private themeTags;
      Tag::themes as private tagThemes;
    }
}

$page = new Page();
$page->themes();    // Theme::themes
$page->tags();      // Tag::tags
// $page->themeTags(); // Fatal error: Call to private method
// $page->tagThemes(); // Fatal error: Call to private method
