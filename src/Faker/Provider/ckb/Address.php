<?php

namespace Faker\Provider\ckb;

class Address extends \Faker\Provider\Address
{
    protected static $streetPrefix = ['شه‌قام', 'ڕێگا'];

    /**
     * @see https://ar.wikipedia.org/wiki/%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D9%85%D8%AF%D9%86_%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9
     */
    protected static $cityName = [
        'هەولێر', 'سلێمانی', 'ئامەد', 'کرماشان', 'سنە', 'بۆکان', 'سەقز', 'ماردین', 'کەرکووک', 'زاخۆ', 'بینگۆل', 'وان', 'مەهاباد', 'ورمێ', 'باتمان', 'ئاگری', 'هەڵەبجە', 'پیرسووس', 'حەسیچە', 'قامیشلۆ', 'عەفرین', 'ڕەواندز', 'چەمچەماڵ', 'بانە', 'پێنجوێن', 'کۆیە', 'کفری', 'پاوە', 'خورماتوو', 'نەغەدە', 'پیرانشار', 'دهۆک',
    ];

    protected static $cityPrefix = ['باكوور', 'ڕۆژهه‌ڵات', 'ڕۆژئاوا', 'باشوور', 'ناوه‌ند'];

    protected static $buildingNumber = ['%####', '%###', '%#'];

    protected static $postcode = ['#####', '#####-####'];

    /**
     * @see http://www.nationsonline.org/oneworld/countrynames_arabic.htm
     */
    protected static $country = [
        'ژاپۆن', 'تایوان', 'فلیپین', 'ئیندۆنیسیا', 'سەنگافورە', 'سریلانکا', 'پاکستان', 'ئەفغانستان', 'تورکمانستان', 'ئۆزباکستان', 'عەشق ئاباد', 'تورکیا', 'ئەستەنبول', 'ئەنادۆڵ', 'سوریا', 'حەلەب', 'لوبنان', 'غەزە', 'ئەریحا', 'کوەیت', 'یەمەن', 'مۆنتینیگرۆ', 'قوبروس', 'بۆسنە', 'لیبیا', 'پاریس', 'ئیسپانیا', 'لەندەن', 'ھۆڵەندا', 'کۆبن ھاگن', 'فللەندا', 'نەرویژ', 'ئایسلەندا', 'گریلاند', 'نیویۆرک', 'مانھاتن', 'واشنتۆن', 'فیلادیڤیا', 'لۆس ئانجلۆس', 'ھندۆراس', 'کۆڵۆمبیا', 'ئیکوادۆر', 'فەنزەوێلا', 'بەرازیل', 'ئەمازۆن', 'کۆستەریکا', 'جامایکا', 'ھایتی', 'گواتیمالا', 'چیلی', 'ئەرژەنتین', 'ئسیوبیا', 'مالی', 'زەریای ناوەڕاست', 'دەریای رەش', 'دەریای سور', 'دەریای سپی ناوەراست', 'سعودییە', 'ئینگلتەرا', 'ئەڵمانیا', 'ھندستان', 'عێراق', 'ئێران', 'چین', 'مەنگۆلیا', 'مەقدۆنیا',
    ];

    protected static $cityFormats = [
        '{{cityName}}',
    ];

    protected static $streetNameFormats = [
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    ];

    protected static $streetAddressFormats = [
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
    ];

    protected static $addressFormats = [
        "{{streetAddress}}\n{{city}}",
    ];

    protected static $secondaryAddressFormats = ['ژماره‌ی هۆتێل. ##', 'باڵه‌خانه‌ی ژماره‌ ##'];

    /**
     * @example 'باکوور'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'هەولێر'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example 'ڕێگا'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'باڵه‌خانه‌ی ژماره‌. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }
}
