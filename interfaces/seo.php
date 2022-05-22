<?php
interface Seo
{
    public function seo($title, $description, $keywords);
    public function title();
    public function description();
    public function keywords();
}
