<?php
namespace Factory\Models;

class Pages extends Collection
{
    public function __construct(public ?array $pages = null)
    {
        $pages ??= [
            new Page(
                 'Первая статья',
                 'Содержимое первой статьи'),
            new Page(
                 'Вторая статья',
                 'Содержимое второй статьи')
        ];
        parent::__construct($pages);
    }

    public function render() : string
    {
        return implode('', parent::renders());
    }
}
