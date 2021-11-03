<?php

namespace Wamania\Snowball;

require_once STEMMER_DIR . '/voku/portable-utf8/UTF8.php';
require_once STEMMER_DIR . '/voku/portable-ascii/ASCII.php';
use voku\helper\UTF8;

require_once __DIR__ . '/NotFoundException.php';
require_once __DIR__ . '/Stem.php';
require_once __DIR__ . '/Stemmer.php';
use Wamania\Snowball\Stemmer\Stemmer;

require_once __DIR__ . '/Languages/Catalan.php';
require_once __DIR__ . '/Languages/Danish.php';
require_once __DIR__ . '/Languages/Dutch.php';
require_once __DIR__ . '/Languages/English.php';
require_once __DIR__ . '/Languages/Finnish.php';
require_once __DIR__ . '/Languages/French.php';
require_once __DIR__ . '/Languages/German.php';
require_once __DIR__ . '/Languages/Italian.php';
require_once __DIR__ . '/Languages/Norwegian.php';
require_once __DIR__ . '/Languages/Portuguese.php';
require_once __DIR__ . '/Languages/Romanian.php';
require_once __DIR__ . '/Languages/Russian.php';
require_once __DIR__ . '/Languages/Ukraine.php';
require_once __DIR__ . '/Languages/Spanish.php';
require_once __DIR__ . '/Languages/Swedish.php';
use Wamania\Snowball\Stemmer\Catalan;
use Wamania\Snowball\Stemmer\Danish;
use Wamania\Snowball\Stemmer\Dutch;
use Wamania\Snowball\Stemmer\English;
use Wamania\Snowball\Stemmer\Finnish;
use Wamania\Snowball\Stemmer\French;
use Wamania\Snowball\Stemmer\German;
use Wamania\Snowball\Stemmer\Italian;
use Wamania\Snowball\Stemmer\Norwegian;
use Wamania\Snowball\Stemmer\Portuguese;
use Wamania\Snowball\Stemmer\Romanian;
use Wamania\Snowball\Stemmer\Russian;
use Wamania\Snowball\Stemmer\Ukraine;
use Wamania\Snowball\Stemmer\Spanish;
use Wamania\Snowball\Stemmer\Swedish;

class StemmerFactory
{
    const LANGS = [
        Catalan::class    => ['ca', 'cat', 'catalan'],
        Danish::class     => ['da', 'dan', 'danish'],
        Dutch::class      => ['nl', 'dut', 'nld', 'dutch'],
        English::class    => ['en', 'eng', 'english'],
        Finnish::class    => ['fi', 'fin', 'finnish'],
        French::class     => ['fr', 'fre', 'fra', 'french'],
        German::class     => ['de', 'deu', 'ger', 'german'],
        Italian::class    => ['it', 'ita', 'italian'],
        Norwegian::class  => ['no', 'nor', 'norwegian'],
        Portuguese::class => ['pt', 'por', 'portuguese'],
        Romanian::class   => ['ro', 'rum', 'ron', 'romanian'],
        Russian::class    => ['ru', 'rus', 'russian'],
        Ukraine::class    => ['ua', 'ukr', 'Ukraine'],
        Spanish::class    => ['es', 'spa', 'spanish'],
        Swedish::class    => ['sv', 'swe', 'swedish']
    ];

    /**
     * @throws NotFoundException
     */
    public static function create(string $code): Stemmer
    {
        $code = UTF8::strtolower($code);

        foreach (self::LANGS as $classname => $isoCodes) {
            if (in_array($code, $isoCodes)) {
                return new $classname;
            }
        }

        throw new NotFoundException(sprintf('Stemmer not found for %s', $code));
    }
}
