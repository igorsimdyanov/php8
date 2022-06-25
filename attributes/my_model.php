<?php
namespace MyModel;
require_once('my_model/my_model.php');

#[MyModel(['id' => 'news_id', 'body' => 'content'])]
#[MyModel(info: 'Модель страницы')]
#[MyModel('SEO-информация')]
#[MyModel(MyModel::INFO)]
#[MyModel('Ivan' . ' ' . 'Ivanov')]
class User
{
}

$reflect = new \ReflectionClass(User::class);

echo '<pre>';
foreach ($reflect->getAttributes() as $attribute) {
    $info = $attribute->newInstance()->info();
    if (is_array($info)) {
        print_r($info);
    } else {
        echo $attribute->newInstance()->info() . PHP_EOL;;
    }
}
echo '</pre>';
