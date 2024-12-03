<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artists = [
            ["Robert Downey Jr.", "1965-04-04"],
            ["Tom Holland", "1996-06-01"],
            ["Chris Evans", "1981-06-13"],
            ["Benedict Cumberbatch", "1976-07-19"],
            ["Scarlett Johansson", "1984-11-22"],
            ["Chris Hemsworth", "1983-08-11"],
            ["Natalie Portman", "1981-06-09"],
            ["Mark Ruffalo", "1967-11-22"],
            ["Jeremy Renner", "1971-01-07"],
            ["Elizabeth Olsen", "1989-02-16"],
            ["Samuel L. Jackson", "1948-12-21"],
            ["Paul Rudd", "1969-04-06"],
            ["Brie Larson", "1989-10-01"],
            ["Chadwick Boseman", "1976-11-29"],
            ["Letitia Wright", "1993-10-31"],
            ["Ryan Reynolds", "1976-10-23"],
            ["Hugh Jackman", "1968-10-12"],
            ["Patrick Stewart", "1940-07-13"],
            ["Ian McKellen", "1939-05-25"],
            ["James McAvoy", "1979-04-21"],
            ["Michael Fassbender", "1977-04-02"],
            ["Jennifer Lawrence", "1990-08-15"],
            ["Sophie Turner", "1996-02-21"],
            ["Evan Peters", "1987-01-20"],
            ["Daniel Radcliffe", "1989-07-23"],
            ["Emma Watson", "1990-04-15"],
            ["Rupert Grint", "1988-08-24"],
            ["Alan Rickman", "1946-02-21"],
            ["Maggie Smith", "1934-12-28"],
            ["Helena Bonham Carter", "1966-05-26"],
            ["Johnny Depp", "1963-06-09"],
            ["Orlando Bloom", "1977-01-13"],
            ["Keira Knightley", "1985-03-26"],
            ["Kate Winslet", "1975-10-05"],
            ["Leonardo DiCaprio", "1974-11-11"],
            ["Matt Damon", "1970-10-08"],
            ["Ben Affleck", "1972-08-15"],
            ["Christian Bale", "1974-01-30"],
            ["Anne Hathaway", "1982-11-12"],
            ["Tom Hardy", "1977-09-15"],
            ["Charlize Theron", "1975-08-07"],
            ["Gal Gadot", "1985-04-30"],
            ["Jason Momoa", "1979-08-01"],
            ["Dwayne Johnson", "1972-05-02"],
            ["Vin Diesel", "1967-07-18"],
            ["Michelle Rodriguez", "1978-07-12"],
            ["Jordana Brewster", "1980-04-26"],
            ["Zac Efron", "1987-10-18"],
            ["Vanessa Hudgens", "1988-12-14"],
            ["Timothée Chalamet", "1995-12-27"],
            ["Florence Pugh", "1996-01-03"],
            ["Zendaya", "1996-09-01"],
            ["Anya Taylor-Joy", "1996-04-16"],
            ["Millie Bobby Brown", "2004-02-19"],
            ["Finn Wolfhard", "2002-12-23"],
            ["Noah Schnapp", "2004-10-03"],
            ["Winona Ryder", "1971-10-29"],
            ["David Harbour", "1975-04-10"],
            ["Natalia Dyer", "1995-01-13"],
            ["Charlie Heaton", "1994-02-06"],
            ["Sadie Sink", "2002-04-16"],
            ["Caleb McLaughlin", "2001-10-13"],
            ["Maya Hawke", "1998-07-08"],
            ["Jake Gyllenhaal", "1980-12-19"],
            ["Heath Ledger", "1979-04-04"],
            ["Joaquin Phoenix", "1974-10-28"],
            ["Reese Witherspoon", "1976-03-22"],
            ["Meryl Streep", "1949-06-22"],
            ["Julia Roberts", "1967-10-28"]
        ];

        foreach ($artists as $artist) {
            Artist::create([
                'name' => $artist[0],
                'birthdate' => $artist[1],
            ]);
        }
    }
}
