<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog{

    public $title;
    public $slug;
    public $intro;
    public $date;
    public $body;

    public function __construct($title,$slug,$intro,$date,$body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->intro = $intro;
        $this->date = $date;
        $this->body = $body;
    }

    public static function find($slug){
        // $path = resource_path("blogs/$slug.html");
        // if(!file_exists($path)){
        //     return redirect("/");
        // }
        // return cache()->remember("posts.$slug", 5, function() use($path){
        //     return file_get_contents($path);
        // });
        $blogs = static::all();
        return $blogs->firstWhere("slug", $slug);

    }
    public static function all(){
        $files = File::files(resource_path("blogs"));

        return collect($files)->map(function($file){
            $obj = YamlFrontMatter::parseFile($file);
            return new Blog($obj->title, $obj->slug, $obj->intro,$obj->date, $obj->body());
        })->sortByDesc("date");
    }

}

?>
