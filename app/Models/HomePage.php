<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    private $title;
    private $appDescription;
    private $loginDescription;

    // TODO: Add image path to model and other necessary attributes

    private $imgPath;

    public function __construct(string $title, string $appDescription, string $loginDescription) {
        $this->title = $title;
        $this->appDescription = $appDescription;
        $this->loginDescription = $loginDescription;
    }

    public function getContent() : Array {
        return [
            'title' => $this->title,
            'appDescription' => $this->appDescription,
            'loginDescription' => $this->loginDescription
        ];
    }

    public static function getHomePageContent() : Array {
        $home = new HomePage(
                    "Planboard",
                    "Usefull appDescription to be added later.",
                    "Login or register in the top left corner!"
            );
        return $home->getContent();
    }
}
