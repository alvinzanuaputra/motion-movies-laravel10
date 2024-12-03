<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'name' => "Spider-Man: Homecoming",
                'link' => "https://www.youtube.com/watch?v=rk-dF1lIbIg",
                'studio' => "Marvel Studios",
                'release_date' => "2017-07-07",
                'image' => "images/1.spidermanhomecoming.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Adventure"
            ],
            [
                'name' => "Spider-Man 2 (2004)",
                'link' => "https://www.youtube.com/watch?v=rk-dF1lIbIg",
                'studio' => "Marvel Studios",
                'release_date' => "2004-06-30",
                'image' => "images/2-spiderman2.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Adventure"
            ],
            [
                'name' => "The Amazing SpiderMan (2012)",
                'link' => "https://www.youtube.com/watch?v=rk-dF1lIbIg",
                'studio' => "Marvel Studios",
                'release_date' => "2012-07-03",
                'image' => "images/3-theamazingspiderman.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Adventure"
            ],
            [
                'name' => "Spider-Man: Far From Home",
                'link' => "https://www.youtube.com/watch?v=JfVOs4V3pQk",
                'studio' => "Marvel Studios",
                'release_date' => "2019-07-02",
                'image' => "images/4-spiderfarfromhome,jpg.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Adventure"
            ],
            [
                'name' => "Your Name.",
                'link' => "https://youtu.be/3KR8_igDs1Y",
                'studio' => "CoMix Wave Films",
                'release_date' => "2016-07-03",
                'image' => "images/5-kimi-no-na-wa.jpg",
                'paid' => 0,
                'tags' => "Anime | Romance | Fantasy"
            ],
            [
                'name' => "Venom: Let There Be Carnage",
                'link' => "https://www.youtube.com/watch?v=Hzg3b3YgG9I",
                'studio' => "Sony Pictures",
                'release_date' => "2021-09-24",
                'image' => "images/7-venom2.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Sci-Fi"
            ],
            [
                'name' => "Venom 3",
                'link' => "https://www.youtube.com/watch?v=ATJYac_dORw", 
                'studio' => "Sony Pictures",
                'release_date' => "2024-12-20",
                'image' => "images/8-venom3.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Sci-Fi"
            ],
            [
                'name' => "Doctor Strange in the Multiverse of Madness",
                'link' => "https://www.youtube.com/watch?v=9p2gJ2PIZ6Y",
                'studio' => "Marvel Studios",
                'release_date' => "2022-05-06",
                'image' => "images/9-doctorstrangem.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Fantasy"
            ],
            [
                'name' => "Moana",
                'link' => "https://www.youtube.com/watch?v=LKFuXETZUsI",
                'studio' => "Walt Disney Animation Studios",
                'release_date' => "2016-11-23",
                'image' => "images/11-moana.jpg",
                'paid' => 1,
                'tags' => "Animation | Family | Adventure"
            ],
            [
                'name' => "Agatha: Coven of Chaos",
                'link' => "https://www.youtube.com/watch?v=tc3j5dG0F_U",
                'studio' => "Marvel Studios",
                'release_date' => "2024-03-15",
                'image' => "images/10-agatha.jpg",
                'paid' => 1,
                'tags' => "Action | Superhero | Fantasy"
            ],
            [
                'name' => "The Dark Knight (2008)",
                'link' => "https://www.youtube.com/watch?v=EXeTwQWrcwY",
                'studio' => "Warner Bros. Pictures",
                'release_date' => "2008-07-18",
                'image' => "images/12-The_Dark_Knight_(2008_film).jpg",
                'paid' => 1,
                'tags' => "Action | Crime | Drama"
            ]
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
