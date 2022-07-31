<?php
interface Seo
{
    public function seo(
        ?string $title,
        ?string $description,
        ?array $keywords);
    public function title() : ?string;
    public function description() : ?string;
    public function keywords() : ?array;
}
