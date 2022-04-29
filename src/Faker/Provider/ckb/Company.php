<?php

namespace Faker\Provider\ckb;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    ];

    protected static $bsWords = [
        [],
    ];

    protected static $catchPhraseWords = [
        ['خزمه‌تگوزاری', 'چارسه‌ر', 'ڕێكخراو'],
        ['زێڕی', 'زیره‌كی', 'گه‌شپێدراو', 'پێشكه‌وتوو', 'نێوده‌وڵه‌تی', 'تایبه‌ت', 'ڕوون'],
    ];

    protected static $companyPrefix = ['كۆمپانیا', 'دامه‌زراوه‌', 'گرووپ', 'نووسینگه‌', 'ناوه‌ندی ئه‌كادیمی', 'پێشانگا'];

    protected static $companySuffix = ['موڵكایه‌تی', 'بازرگانی سنووردار', 'بازرگانی گشتی', 'وه‌ هاوبه‌شانی'];

    /**
     * @example 'كۆمپانیا'
     *
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

    /**
     * @example 'نێوده‌وڵه‌تی'
     */
    public function catchPhrase()
    {
        $result = [];

        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        $result = [];

        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * example 7001010101
     */
    public static function companyIdNumber()
    {
        $partialValue = static::numerify(700 . str_repeat('#', 6));

        return Luhn::generateLuhnNumber($partialValue);
    }
}
