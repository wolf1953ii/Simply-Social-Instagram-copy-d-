<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\GuardsAttributes;

class Image extends Model
{
    //
    /**
     * @var int|string|null
     */
    private $user_id;

    /**
     * @param int|string|null $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @var string
     */
    private $extension;

    /**
     * @param string $extension
     */
    public function setExtension(string $extension): void
    {
        $this->extension = $extension;
    }
    /**
     * @var string|null
     */
    private $name;

    /**
     * @param string|null $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    private $title;

    /**
     * @param string|null $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    private $privacy;

    /**
     * @param mixed $priv
     */
    public function setPriv($privacy): void
    {
        $this->privacy = $privacy;
    }

    protected $fillable = [
        'name','extension','title','privacy','user_id'
    ];

}
