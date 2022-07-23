<?php
class PhotoAlbum
{
    const IMAGE_DIR = 'img';

    private array $current_file;

    public function __construct(array $arr)
    {
        // Создаем каталог для файлов, если он еще не существует
        if (!file_exists(self::IMAGE_DIR)) {
            mkdir(self::IMAGE_DIR, 0777);
        }
        $this->current_file = $arr;
    }

    public function tempFileName() : string
    {
        return $this->current_file['tmp_name'];
    }

    public function fileName() : string
    {
        $ext = $this->extension($this->current_file['full_path']);
        return self::IMAGE_DIR . '/' . time() . '.' . $ext;
    }

    public function isImage() : bool
    {
        $tmp = $this->tempFileName();
        $info = getimagesize($tmp);
        return strpos($info['mime'], 'image/') === 0;
    }

    public static function list() : array
    {
        $photos = [];
        foreach (glob(self::IMAGE_DIR . '/*') as $path) {
            $sz = getimagesize($path);      // размер
            $photos[] = [
                'name' => basename($path),  // имя файла
                'url'  => $path,            // его URI
                'w'    => $sz[0],           // ширина картинки
                'h'    => $sz[1],           // ее высота
                'wh'   => $sz[3]            // "width=xxx height=yyy"
            ];
        }
        sort($photos);
        return $photos;
    }

    private function extension(string $str) : string
    {
        $arr = explode('.', $str);
        return $arr[count($arr) - 1];
    }
}
