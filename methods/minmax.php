<?php
class MinMax
{
    public function __call(string $method, array $arr)
    {
        switch ($method) {
            case 'min':
                return $this->min($arr);
            case 'max':
                return $this->max($arr);
            default:
                return null;
        }
    }

    private function min(array $arr) : mixed
    {
        $result = $arr[0];

        foreach ($arr as $value) {
            if ($value < $result) {
                $result = $value;
            }
        }

        return $result;
    }

    private function max(array $arr) : mixed
    {
        $result = $arr[0];

        foreach ($arr as $value) {
            if ($value > $result) {
                $result = $value;
            }
        }

        return $result;
    }
}
