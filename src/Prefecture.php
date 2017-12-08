<?php

namespace JpPrefecture;

/**
 * 
 * 
 * @category Prefecture
 * @package  JpPrefecture\Prefecture
 * @author   Zazimko Alexey <notfoundsam@gmail.com>
 * @link     https://github.com/notfoundsam/jp_prefecture
 *
 */
class Prefecture
{
    public $code;
    public $area;
    public $nameKanji;
    public $nameRoman;
    public $nameHiragana;
    public $nameKatakana;

    private $zipRange;

    public function __construct($code, $area, $nameKanji, $nameRoman, $nameHiragana, $nameKatakana, $zipRange)
    {
        $this->code = $code;
        $this->area = $area;
        $this->nameKanji = $nameKanji;
        $this->nameRoman = $nameRoman;
        $this->nameHiragana = $nameHiragana;
        $this->nameKatakana = $nameKatakana;
        $this->zipRange = $zipRange;
    }
}
