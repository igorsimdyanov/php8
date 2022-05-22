<?php
trait Seo
{
    private $seo_title;
    private $seo_description;
    private $seo_keywords;

    public function seo(
        $title = null,
        $description = null,
        $keywords = null)
    {
        $this->seo_title = $title;
        $this->seo_description = $description;
        $this->seo_keywords = $keywords;
    }
    public function title()
    {
        if(!empty($this->seo_title)) {
            return $this->seo_title;
        } else {
            return $this->title;
        }
    }
    public function description()
    {
        return $this->seo_description;
    }
    public function keywords()
    {
        return $this->seo_keywords;
    }
}
