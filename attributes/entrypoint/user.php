<?php
namespace Entrypoint;

#[model]
class User
{
    public function __construct(
      private ?string $first_name,
      private ?string $last_name
    ) {}

    #[entrypoint]
    function first_name() : string
    {
        return $this->first_name;
    }

    #[entrypoint]
    function last_name() : string
    {
        return $this->last_name;
    }
}
