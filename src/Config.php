<?php

namespace JpPrefecture;

/**
 * Prefectures names and codes
 * 
 * @category Prefecture
 * @package  JpPrefecture\Prefecture
 * @author   Zazimko Alexey <notfoundsam@gmail.com>
 * @link     https://github.com/notfoundsam/jp_prefecture
 *
 */

/**
* Define prefectures codes
*/
class Config
{
    const CODES = [
        1 => [
            'name_kanji' => '北海道',
            'name_roman' => 'hokkaido',
            'name_hiragana' => 'ほっかいどう',
            'name_katakana' => 'ホッカイドウ',
            'area' => '北海道',
            'zip_range' => [
                [
                    'start' => 10000,
                    'end' => 70895,
                ],
                [
                    'start' => 400000,
                    'end' => 996509,
                ],
            ],
        ],
        2 => [
            'name_kanji' => '青森県',
            'name_roman' => 'aomori',
            'name_hiragana' => 'あおもりけん',
            'name_katakana' => 'アオモリケン',
            'area' => '東北',
            'zip_range' => [
                [
                    'start' => 185501,
                    'end' => 185501,
                ],
                [
                    'start' => 300111,
                    'end' => 395346,
                ],
            ],
        ],
        3 => [
            'name_kanji' => '岩手県',
            'name_roman' => 'iwate',
            'name_hiragana' => 'いわてけん',
            'name_katakana' => 'イワテケン',
            'area' => '東北',
            'zip_range' => [
                [
                    'start' => 200000,
                    'end' => 295703,
                ],
            ],
        ],
        4 => [
            'name_kanji' => '宮城県',
            'name_roman' => 'miyagi',
            'name_hiragana' => 'みやぎけん',
            'name_katakana' => 'ミヤギケン',
            'area' => '東北',
            'zip_range' => [
                [
                    'start' => 9800000,
                    'end' => 9896941,
                ],
            ],
        ],
        5 => [
            'name_kanji' => '秋田県',
            'name_roman' => 'akita',
            'name_hiragana' => 'あきたけん',
            'name_katakana' => 'アキタケン',
            'area' => '東北',
            'zip_range' => [
                [
                    'start' => 100000,
                    'end' => 185422,
                ],
                [
                    'start' => 185511,
                    'end' => 192742,
                ],
            ],
        ],
        6 => [
            'name_kanji' => '山形県',
            'name_roman' => 'yamagata',
            'name_hiragana' => 'やまがたけん',
            'name_katakana' => 'ヤマガタケン',
            'area' => '東北',
            'zip_range' => [
                [
                    'start' => 9900000,
                    'end' => 9998531,
                ],
            ],
        ],
        7 => [
            'name_kanji' => '福島県',
            'name_roman' => 'fukushima',
            'name_hiragana' => 'ふくしまけん',
            'name_katakana' => 'フクシマケン',
            'area' => '東北',
            'zip_range' => [
                [
                    'start' => 9600000,
                    'end' => 9793204,
                ],
            ],
        ],
        8 => [
            'name_kanji' => '茨城県',
            'name_roman' => 'ibaraki',
            'name_hiragana' => 'いばらきけん',
            'name_katakana' => 'イバラキケン',
            'area' => '関東',
            'zip_range' => [
                [
                    'start' => 3000000,
                    'end' => 3114407,
                ],
                [
                    'start' => 3114501,
                    'end' => 3193705,
                ],
            ],
        ],
        9 => [
            'name_kanji' => '栃木県',
            'name_roman' => 'tochigi',
            'name_hiragana' => 'とちぎけん',
            'name_katakana' => 'トチギケン',
            'area' => '関東',
            'zip_range' => [
                [
                    'start' => 3114411,
                    'end' => 3114411,
                ],
                [
                    'start' => 3200001,
                    'end' => 3294425,
                ],
                [
                    'start' => 3491221,
                    'end' => 3491221,
                ],
            ],
        ],
        10 => [
            'name_kanji' => '群馬県',
            'name_roman' => 'gunma',
            'name_hiragana' => 'ぐんまけん',
            'name_katakana' => 'グンマケン',
            'area' => '関東',
            'zip_range' => [
                [
                    'start' => 3700000,
                    'end' => 3792314,
                ],
                [
                    'start' => 3840097,
                    'end' => 3840097,
                ],
                [
                    'start' => 3890121,
                    'end' => 3890121,
                ],
            ],
        ],
        11 => [
            'name_kanji' => '埼玉県',
            'name_roman' => 'saitama',
            'name_hiragana' => 'さいたまけん',
            'name_katakana' => 'サイタマケン',
            'area' => '関東',
            'zip_range' => [
                [
                    'start' => 3300000,
                    'end' => 3491216,
                ],
                [
                    'start' => 3500001,
                    'end' => 3691912,
                ],
            ],
        ],
        12 => [
            'name_kanji' => '千葉県',
            'name_roman' => 'chiba',
            'name_hiragana' => 'ちばけん',
            'name_katakana' => 'チバケン',
            'area' => '関東',
            'zip_range' => [
                [
                    'start' => 2600000,
                    'end' => 2995506,
                ],
            ],
        ],
        13 => [
            'name_kanji' => '東京都',
            'name_roman' => 'tokyo',
            'name_hiragana' => 'とうきょうと',
            'name_katakana' => 'トウキョウト',
            'area' => '関東',
            'zip_range' => [
                [
                    'start' => 1000000,
                    'end' => 2080035,
                ],
            ],
        ],
        14 => [
            'name_kanji' => '神奈川県',
            'name_roman' => 'kanagawa',
            'name_hiragana' => 'かながわけん',
            'name_katakana' => 'カナガワケン',
            'area' => '関東',
            'zip_range' => [
                [
                    'start' => 2100000,
                    'end' => 2591335,
                ],
            ],
        ],
        15 => [
            'name_kanji' => '新潟県',
            'name_roman' => 'niigata',
            'name_hiragana' => 'にいがたけん',
            'name_katakana' => 'ニイガタケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 3892261,
                    'end' => 3892261,
                ],
                [
                    'start' => 9400000,
                    'end' => 9498317,
                ],
                [
                    'start' => 9498401,
                    'end' => 9594636,
                ],
            ],
        ],
        16 => [
            'name_kanji' => '富山県',
            'name_roman' => 'toyama',
            'name_hiragana' => 'とやまけん',
            'name_katakana' => 'トヤマケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 9300001,
                    'end' => 9390156,
                ],
                [
                    'start' => 9390231,
                    'end' => 9398282,
                ],
            ],
        ],
        17 => [
            'name_kanji' => '石川県',
            'name_roman' => 'ishikawa',
            'name_hiragana' => 'いしかわけん',
            'name_katakana' => 'イシカワケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 9200000,
                    'end' => 9220673,
                ],
                [
                    'start' => 9220801,
                    'end' => 9292379,
                ],
                [
                    'start' => 9390171,
                    'end' => 9390171,
                ],
            ],
        ],
        18 => [
            'name_kanji' => '福井県',
            'name_roman' => 'fukui',
            'name_hiragana' => 'ふくいけん',
            'name_katakana' => 'フクイケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 9100001,
                    'end' => 9192387,
                ],
                [
                    'start' => 9220679,
                    'end' => 9220679,
                ],
            ],
        ],
        19 => [
            'name_kanji' => '山梨県',
            'name_roman' => 'yamanashi',
            'name_hiragana' => 'やまなしけん',
            'name_katakana' => 'ヤマナシケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 4000000,
                    'end' => 4093867,
                ],
            ],
        ],
        20 => [
            'name_kanji' => '長野県',
            'name_roman' => 'nagano',
            'name_hiragana' => 'ながのけん',
            'name_katakana' => 'ナガノケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 3800801,
                    'end' => 3840096,
                ],
                [
                    'start' => 3840301,
                    'end' => 3890115,
                ],
                [
                    'start' => 3890200,
                    'end' => 3892258,
                ],
                [
                    'start' => 3892300,
                    'end' => 3999601,
                ],
                [
                    'start' => 9498321,
                    'end' => 9498321,
                ],
            ],
        ],
        21 => [
            'name_kanji' => '岐阜県',
            'name_roman' => 'gifu',
            'name_hiragana' => 'ぎふけん',
            'name_katakana' => 'ギフケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 5000000,
                    'end' => 5099232,
                ],
            ],
        ],
        22 => [
            'name_kanji' => '静岡県',
            'name_roman' => 'shizuoka',
            'name_hiragana' => 'しずおかけん',
            'name_katakana' => 'シズオカケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 4100000,
                    'end' => 4314112,
                ],
                [
                    'start' => 4320000,
                    'end' => 4390037,
                ],
            ],
        ],
        23 => [
            'name_kanji' => '愛知県',
            'name_roman' => 'aichi',
            'name_hiragana' => 'あいちけん',
            'name_katakana' => 'アイチケン',
            'area' => '中部',
            'zip_range' => [
                [
                    'start' => 4314121,
                    'end' => 4314121,
                ],
                [
                    'start' => 4400001,
                    'end' => 4970058,
                ],
                [
                    'start' => 4980000,
                    'end' => 4980069,
                ],
            ],
        ],
        24 => [
            'name_kanji' => '三重県',
            'name_roman' => 'mie',
            'name_hiragana' => 'みえけん',
            'name_katakana' => 'ミエケン',
            'area' => '関西',
            'zip_range' => [
                [
                    'start' => 4980000,
                    'end' => 4980000,
                ],
                [
                    'start' => 4980801,
                    'end' => 4980823,
                ],
                [
                    'start' => 5100000,
                    'end' => 5195835,
                ],
                [
                    'start' => 6471321,
                    'end' => 6471325,
                ],
            ],
        ],
        25 => [
            'name_kanji' => '滋賀県',
            'name_roman' => 'shiga',
            'name_hiragana' => 'しがけん',
            'name_katakana' => 'シガケン',
            'area' => '関西',
            'zip_range' => [
                [
                    'start' => 5200000,
                    'end' => 5200363,
                ],
                [
                    'start' => 5200471,
                    'end' => 5291851,
                ],
            ],
        ],
        26 => [
            'name_kanji' => '京都府',
            'name_roman' => 'kyoto',
            'name_hiragana' => 'きょうとふ',
            'name_katakana' => 'キョウトフ',
            'area' => '関西',
            'zip_range' => [
                [
                    'start' => 5200461,
                    'end' => 5200465,
                ],
                [
                    'start' => 6000000,
                    'end' => 6180000,
                ],
                [
                    'start' => 6180071,
                    'end' => 6293579,
                ],
            ],
        ],
        27 => [
            'name_kanji' => '大阪府',
            'name_roman' => 'osaka',
            'name_hiragana' => 'おおさかふ',
            'name_katakana' => 'オオサカフ',
            'area' => '関西',
            'zip_range' => [
                [
                    'start' => 5300000,
                    'end' => 5630373,
                ],
                [
                    'start' => 5640000,
                    'end' => 5998276,
                ],
                [
                    'start' => 6180000,
                    'end' => 6180024,
                ],
                [
                    'start' => 6300271,
                    'end' => 6300272,
                ],
            ],
        ],
        28 => [
            'name_kanji' => '兵庫県',
            'name_roman' => 'hyogo',
            'name_hiragana' => 'ひょうごけん',
            'name_katakana' => 'ヒョウゴケン',
            'area' => '関西',
            'zip_range' => [
                [
                    'start' => 5630801,
                    'end' => 5630801,
                ],
                [
                    'start' => 6500000,
                    'end' => 6795654,
                ],
            ],
        ],
        29 => [
            'name_kanji' => '奈良県',
            'name_roman' => 'nara',
            'name_hiragana' => 'ならけん',
            'name_katakana' => 'ナラケン',
            'area' => '関西',
            'zip_range' => [
                [
                    'start' => 6300000,
                    'end' => 6300267,
                ],
                [
                    'start' => 6301101,
                    'end' => 6393809,
                ],
                [
                    'start' => 6471271,
                    'end' => 6471271,
                ],
                [
                    'start' => 6471581,
                    'end' => 6471584,
                ],
                [
                    'start' => 6480300,
                    'end' => 6480309,
                ],
            ],
        ],
        30 => [
            'name_kanji' => '和歌山県',
            'name_roman' => 'wakayama',
            'name_hiragana' => 'わかやまけん',
            'name_katakana' => 'ワカヤマケン',
            'area' => '関西',
            'zip_range' => [
                [
                    'start' => 6400000,
                    'end' => 6471235,
                ],
                [
                    'start' => 6471600,
                    'end' => 6480263,
                ],
                [
                    'start' => 6480401,
                    'end' => 6497216,
                ],
            ],
        ],
        31 => [
            'name_kanji' => '鳥取県',
            'name_roman' => 'tottori',
            'name_hiragana' => 'とっとりけん',
            'name_katakana' => 'トットリケン',
            'area' => '中国',
            'zip_range' => [
                [
                    'start' => 6800000,
                    'end' => 6840076,
                ],
                [
                    'start' => 6890101,
                    'end' => 6895673,
                ],
            ],
        ],
        32 => [
            'name_kanji' => '島根県',
            'name_roman' => 'shimane',
            'name_hiragana' => 'しまねけん',
            'name_katakana' => 'シマネケン',
            'area' => '中国',
            'zip_range' => [
                [
                    'start' => 6840100,
                    'end' => 6850435,
                ],
                [
                    'start' => 6900000,
                    'end' => 6995637,
                ],
            ],
        ],
        33 => [
            'name_kanji' => '岡山県',
            'name_roman' => 'okayama',
            'name_hiragana' => 'おかやまけん',
            'name_katakana' => 'オカヤマケン',
            'area' => '中国',
            'zip_range' => [
                [
                    'start' => 7000000,
                    'end' => 7193814,
                ],
            ],
        ],
        34 => [
            'name_kanji' => '広島県',
            'name_roman' => 'hiroshima',
            'name_hiragana' => 'ひろしまけん',
            'name_katakana' => 'ヒロシマケン',
            'area' => '中国',
            'zip_range' => [
                [
                    'start' => 7200001,
                    'end' => 7392732,
                ],
            ],
        ],
        35 => [
            'name_kanji' => '山口県',
            'name_roman' => 'yamaguchi',
            'name_hiragana' => 'やまぐちけん',
            'name_katakana' => 'ヤマグチケン',
            'area' => '中国',
            'zip_range' => [
                [
                    'start' => 7400000,
                    'end' => 7596614,
                ],
            ],
        ],
        36 => [
            'name_kanji' => '徳島県',
            'name_roman' => 'tokushima',
            'name_hiragana' => 'とくしまけん',
            'name_katakana' => 'トクシマケン',
            'area' => '四国',
            'zip_range' => [
                [
                    'start' => 7700000,
                    'end' => 7795453,
                ],
            ],
        ],
        37 => [
            'name_kanji' => '香川県',
            'name_roman' => 'kagawa',
            'name_hiragana' => 'かがわけん',
            'name_katakana' => 'カガワケン',
            'area' => '四国',
            'zip_range' => [
                [
                    'start' => 7600000,
                    'end' => 7692908,
                ],
            ],
        ],
        38 => [
            'name_kanji' => '愛媛県',
            'name_roman' => 'ehime',
            'name_hiragana' => 'えひめけん',
            'name_katakana' => 'エヒメケン',
            'area' => '四国',
            'zip_range' => [
                [
                    'start' => 7900001,
                    'end' => 7993772,
                ],
            ],
        ],
        39 => [
            'name_kanji' => '高知県',
            'name_roman' => 'kochi',
            'name_hiragana' => 'こうちけん',
            'name_katakana' => 'コウチケン',
            'area' => '四国',
            'zip_range' => [
                [
                    'start' => 7800000,
                    'end' => 7891936,
                ],
            ],
        ],
        40 => [
            'name_kanji' => '福岡県',
            'name_roman' => 'fukuoka',
            'name_hiragana' => 'ふくおかけん',
            'name_katakana' => 'フクオカケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 8000000,
                    'end' => 8114343,
                ],
                [
                    'start' => 8120000,
                    'end' => 8160983,
                ],
                [
                    'start' => 8180000,
                    'end' => 8391415,
                ],
                [
                    'start' => 8710000,
                    'end' => 8710000,
                ],
                [
                    'start' => 8710226,
                    'end' => 8710226,
                ],
                [
                    'start' => 8710801,
                    'end' => 8710928,
                ],
            ],
        ],
        41 => [
            'name_kanji' => '佐賀県',
            'name_roman' => 'saga',
            'name_hiragana' => 'さがけん',
            'name_katakana' => 'サガケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 8400001,
                    'end' => 8480146,
                ],
                [
                    'start' => 8490000,
                    'end' => 8495264,
                ],
            ],
        ],
        42 => [
            'name_kanji' => '長崎県',
            'name_roman' => 'nagasaki',
            'name_hiragana' => 'ながさきけん',
            'name_katakana' => 'ナガサキケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 8115100,
                    'end' => 8115757,
                ],
                [
                    'start' => 8170000,
                    'end' => 8172333,
                ],
                [
                    'start' => 8480401,
                    'end' => 8480408,
                ],
                [
                    'start' => 8500000,
                    'end' => 8596415,
                ],
            ],
        ],
        43 => [
            'name_kanji' => '熊本県',
            'name_roman' => 'kumamoto',
            'name_hiragana' => 'くまもとけん',
            'name_katakana' => 'クマモトケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 8600001,
                    'end' => 8696405,
                ],
            ],
        ],
        44 => [
            'name_kanji' => '大分県',
            'name_roman' => 'oita',
            'name_hiragana' => 'おおいたけん',
            'name_katakana' => 'オオイタケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 8391421,
                    'end' => 8391421,
                ],
                [
                    'start' => 8700001,
                    'end' => 8710000,
                ],
                [
                    'start' => 8710001,
                    'end' => 8710208,
                ],
                [
                    'start' => 8710311,
                    'end' => 8710716,
                ],
                [
                    'start' => 8720000,
                    'end' => 8797885,
                ],
            ],
        ],
        45 => [
            'name_kanji' => '宮崎県',
            'name_roman' => 'miyazaki',
            'name_hiragana' => 'みやざきけん',
            'name_katakana' => 'ミヤザキケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 8800000,
                    'end' => 8894602,
                ],
            ],
        ],
        46 => [
            'name_kanji' => '鹿児島県',
            'name_roman' => 'kagoshima',
            'name_hiragana' => 'かごしまけん',
            'name_katakana' => 'カゴシマケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 8900000,
                    'end' => 8998609,
                ],
            ],
        ],
        47 => [
            'name_kanji' => '沖縄県',
            'name_roman' => 'okinawa',
            'name_hiragana' => 'おきなわけん',
            'name_katakana' => 'オキナワケン',
            'area' => '九州',
            'zip_range' => [
                [
                    'start' => 9000000,
                    'end' => 9071801,
                ],
            ],
        ],
    ];
}
