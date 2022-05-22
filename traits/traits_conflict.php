<?php
require_once 'tag.php';
require_once 'theme.php';

class Page
{
    use Theme, Tag
    {
      Tag::tags insteadof Theme;
      Theme::themes insteadof Tag;
      Theme::tags as themeTags;
      Tag::themes as tagThemes;
    }
}

$page = new Page();
$page->themes();    // Theme::themes
$page->tags();      // Tag::tags
$page->themeTags(); // Theme::tags
$page->tagThemes(); // Tag::themes
