<?php
trait Seo
{
    private ?string $seo_title;
    private ?string $seo_description;
    private ?string $seo_keywords;

    public function seo(
        ?string $title = null,
        ?string $description = null,
        ?string $keywords = null) : void
    {
        $this->seo_title = $title;
        $this->seo_description = $description;
        $this->seo_keywords = $keywords;
    }
    public function title() : ?string
    {
        if (!empty($this->seo_title)) {
            return $this->seo_title;
        } else {
            return $this->title;
        }
    }
    public function description() : ?string
    {
        return $this->seo_description;
    }
    public function keywords() : ?string
    {
        return $this->seo_keywords;
    }
}
