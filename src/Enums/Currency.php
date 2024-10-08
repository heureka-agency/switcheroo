<?php

namespace HeurekaAgency\Switcheroo\Enums;

enum Currency: string
{
    case AED = 'AED';
    case AFN = 'AFN';
    case ALL = 'ALL';
    case AMD = 'AMD';
    case ANG = 'ANG';
    case AOA = 'AOA';
    case ARS = 'ARS';
    case AUD = 'AUD';
    case AWG = 'AWG';
    case AZN = 'AZN';
    case BAM = 'BAM';
    case BBD = 'BBD';
    case BDT = 'BDT';
    case BGN = 'BGN';
    case BHD = 'BHD';
    case BIF = 'BIF';
    case BMD = 'BMD';
    case BND = 'BND';
    case BOB = 'BOB';
    case BRL = 'BRL';
    case BSD = 'BSD';
    case BTN = 'BTN';
    case BWP = 'BWP';
    case BYN = 'BYN';
    case BZD = 'BZD';
    case CAD = 'CAD';
    case CDF = 'CDF';
    case CHF = 'CHF';
    case CLP = 'CLP';
    case CNY = 'CNY';
    case COP = 'COP';
    case CRC = 'CRC';
    case CUC = 'CUC';
    case CUP = 'CUP';
    case CVE = 'CVE';
    case CZK = 'CZK';
    case DJF = 'DJF';
    case DKK = 'DKK';
    case DOP = 'DOP';
    case DZD = 'DZD';
    case EGP = 'EGP';
    case ERN = 'ERN';
    case ETB = 'ETB';
    case EUR = 'EUR';
    case FJD = 'FJD';
    case FKP = 'FKP';
    case GBP = 'GBP';
    case GEL = 'GEL';
    case GHS = 'GHS';
    case GIP = 'GIP';
    case GMD = 'GMD';
    case GNF = 'GNF';
    case GTQ = 'GTQ';
    case GYD = 'GYD';
    case HKD = 'HKD';
    case HNL = 'HNL';
    case HRK = 'HRK';
    case HTG = 'HTG';
    case HUF = 'HUF';
    case IDR = 'IDR';
    case ILS = 'ILS';
    case INR = 'INR';
    case IQD = 'IQD';
    case IRR = 'IRR';
    case ISK = 'ISK';
    case JMD = 'JMD';
    case JOD = 'JOD';
    case JPY = 'JPY';
    case KES = 'KES';
    case KGS = 'KGS';
    case KHR = 'KHR';
    case KMF = 'KMF';
    case KPW = 'KPW';
    case KRW = 'KRW';
    case KWD = 'KWD';
    case KYD = 'KYD';
    case KZT = 'KZT';
    case LAK = 'LAK';
    case LBP = 'LBP';
    case LKR = 'LKR';
    case LRD = 'LRD';
    case LSL = 'LSL';
    case LYD = 'LYD';
    case MAD = 'MAD';
    case MDL = 'MDL';
    case MGA = 'MGA';
    case MKD = 'MKD';
    case MMK = 'MMK';
    case MNT = 'MNT';
    case MOP = 'MOP';
    case MRU = 'MRU';
    case MUR = 'MUR';
    case MVR = 'MVR';
    case MWK = 'MWK';
    case MXN = 'MXN';
    case MYR = 'MYR';
    case MZN = 'MZN';
    case NAD = 'NAD';
    case NGN = 'NGN';
    case NIO = 'NIO';
    case NOK = 'NOK';
    case NPR = 'NPR';
    case NZD = 'NZD';
    case OMR = 'OMR';
    case PAB = 'PAB';
    case PEN = 'PEN';
    case PGK = 'PGK';
    case PHP = 'PHP';
    case PKR = 'PKR';
    case PLN = 'PLN';
    case PYG = 'PYG';
    case QAR = 'QAR';
    case RON = 'RON';
    case RSD = 'RSD';
    case RUB = 'RUB';
    case RWF = 'RWF';
    case SAR = 'SAR';
    case SBD = 'SBD';
    case SCR = 'SCR';
    case SDG = 'SDG';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case SHP = 'SHP';
    case SLL = 'SLL';
    case SOS = 'SOS';
    case SRD = 'SRD';
    case SSP = 'SSP';
    case STN = 'STN';
    case SVC = 'SVC';
    case SYP = 'SYP';
    case SZL = 'SZL';
    case THB = 'THB';
    case TJS = 'TJS';
    case TMT = 'TMT';
    case TND = 'TND';
    case TOP = 'TOP';
    case TRY = 'TRY';
    case TTD = 'TTD';
    case TWD = 'TWD';
    case TZS = 'TZS';
    case UAH = 'UAH';
    case UGX = 'UGX';
    case USD = 'USD';
    case UYU = 'UYU';
    case UZS = 'UZS';
    case VES = 'VES';
    case VND = 'VND';
    case VUV = 'VUV';
    case WST = 'WST';
    case XAF = 'XAF';
    case XCD = 'XCD';
    case XOF = 'XOF';
    case XPF = 'XPF';
    case YER = 'YER';
    case ZAR = 'ZAR';
    case ZMW = 'ZMW';
    case ZWL = 'ZWL';

    public static function all(): array
    {
        return array_map(fn($case) => [
            'code' => $case->value,
            'symbol' => $case->symbol(),
            'flag' => $case->flag(),
        ], self::cases());
    }

    public function symbol(): string
    {
        return match($this) {
            self::AED => 'د.إ',
            self::AFN => '؋',
            self::ALL => 'L',
            self::AMD => '֏',
            self::ANG => 'ƒ',
            self::AOA => 'Kz',
            self::ARS => '$',
            self::AUD => 'A$',
            self::AWG => 'ƒ',
            self::AZN => '₼',
            self::BAM => 'KM',
            self::BBD => 'Bds$',
            self::BDT => '৳',
            self::BGN => 'лв',
            self::BHD => '.د.ب',
            self::BIF => 'FBu',
            self::BMD => 'BD$',
            self::BND => 'B$',
            self::BOB => 'Bs.',
            self::BRL => 'R$',
            self::BSD => 'B$',
            self::BTN => 'Nu.',
            self::BWP => 'P',
            self::BYN => 'Br',
            self::BZD => 'BZ$',
            self::CAD => 'C$',
            self::CDF => 'FC',
            self::CHF => 'Fr.',
            self::CLP => '$',
            self::CNY => '¥',
            self::COP => '$',
            self::CRC => '₡',
            self::CUC => 'CUC$',
            self::CUP => '₱',
            self::CVE => '$',
            self::CZK => 'Kč',
            self::DJF => 'Fdj',
            self::DKK => 'kr',
            self::DOP => 'RD$',
            self::DZD => 'دج',
            self::EGP => 'E£',
            self::ERN => 'Nfk',
            self::ETB => 'Br',
            self::EUR => '€',
            self::FJD => 'FJ$',
            self::FKP => '£',
            self::GBP => '£',
            self::GEL => '₾',
            self::GHS => '₵',
            self::GIP => '£',
            self::GMD => 'D',
            self::GNF => 'FG',
            self::GTQ => 'Q',
            self::GYD => 'G$',
            self::HKD => 'HK$',
            self::HNL => 'L',
            self::HRK => 'kn',
            self::HTG => 'G',
            self::HUF => 'Ft',
            self::IDR => 'Rp',
            self::ILS => '₪',
            self::INR => '₹',
            self::IQD => 'ع.د',
            self::IRR => '﷼',
            self::ISK => 'kr',
            self::JMD => 'J$',
            self::JOD => 'د.ا',
            self::JPY => '¥',
            self::KES => 'KSh',
            self::KGS => 'с',
            self::KHR => '៛',
            self::KMF => 'CF',
            self::KPW => '₩',
            self::KRW => '₩',
            self::KWD => 'د.ك',
            self::KYD => 'CI$',
            self::KZT => '₸',
            self::LAK => '₭',
            self::LBP => 'ل.ل',
            self::LKR => '₨',
            self::LRD => 'L$',
            self::LSL => 'L',
            self::LYD => 'ل.د',
            self::MAD => 'د.م.',
            self::MDL => 'L',
            self::MGA => 'Ar',
            self::MKD => 'ден',
            self::MMK => 'K',
            self::MNT => '₮',
            self::MOP => 'MOP$',
            self::MRU => 'UM',
            self::MUR => '₨',
            self::MVR => 'Rf',
            self::MWK => 'MK',
            self::MXN => '$',
            self::MYR => 'RM',
            self::MZN => 'MT',
            self::NAD => 'N$',
            self::NGN => '₦',
            self::NIO => 'C$',
            self::NOK => 'kr',
            self::NPR => '₨',
            self::NZD => 'NZ$',
            self::OMR => 'ر.ع.',
            self::PAB => 'B/.',
            self::PEN => 'S/',
            self::PGK => 'K',
            self::PHP => '₱',
            self::PKR => '₨',
            self::PLN => 'zł',
            self::PYG => '₲',
            self::QAR => 'ر.ق',
            self::RON => 'lei',
            self::RSD => 'дин.',
            self::RUB => '₽',
            self::RWF => 'FRw',
            self::SAR => 'ر.س',
            self::SBD => 'SI$',
            self::SCR => '₨',
            self::SDG => 'ج.س.',
            self::SEK => 'kr',
            self::SGD => 'S$',
            self::SHP => '£',
            self::SLL => 'Le',
            self::SOS => 'Sh',
            self::SRD => '$',
            self::SSP => '£',
            self::STN => 'Db',
            self::SVC => '₡',
            self::SYP => '£S',
            self::SZL => 'E',
            self::THB => '฿',
            self::TJS => 'ЅМ',
            self::TMT => 'm',
            self::TND => 'د.ت',
            self::TOP => 'T$',
            self::TRY => '₺',
            self::TTD => 'TT$',
            self::TWD => 'NT$',
            self::TZS => 'TSh',
            self::UAH => '₴',
            self::UGX => 'USh',
            self::USD => '$',
            self::UYU => '$U',
            self::UZS => 'so\'m',
            self::VES => 'Bs.S',
            self::VND => '₫',
            self::VUV => 'VT',
            self::WST => 'WS$',
            self::XAF => 'FCFA',
            self::XCD => 'EC$',
            self::XOF => 'CFA',
            self::XPF => '₣',
            self::YER => '﷼',
            self::ZAR => 'R',
            self::ZMW => 'ZK',
            self::ZWL => 'Z$',
    };
}

    public function flag(): string
    {
        $code = strtolower($this->value);

        $codeMap = [
            'eur' => 'eu',
            'gbp' => 'gb',
            'usd' => 'us',
            'aud' => 'au',
            'cad' => 'ca',
            'chf' => 'ch',
            'cny' => 'cn',
            'jpy' => 'jp',
            'nzd' => 'nz',
            'aed' => 'ae',
            'afn' => 'af',
            'all' => 'al',
            'amd' => 'am',
            'ang' => 'nl',
            'aoa' => 'ao',
            'ars' => 'ar',
            'awg' => 'aw',
            'azn' => 'az',
            'bam' => 'ba',
            'bbd' => 'bb',
            'bdt' => 'bd',
            'bgn' => 'bg',
            'bhd' => 'bh',
            'bif' => 'bi',
            'bmd' => 'bm',
            'bnd' => 'bn',
            'bob' => 'bo',
            'brl' => 'br',
            'bsd' => 'bs',
            'btn' => 'bt',
            'bwp' => 'bw',
            'byn' => 'by',
            'bzd' => 'bz',
            'cdf' => 'cd',
            'clp' => 'cl',
            'cop' => 'co',
            'crc' => 'cr',
            'cuc' => 'cu',
            'cup' => 'cu',
            'cve' => 'cv',
            'czk' => 'cz',
            'djf' => 'dj',
            'dkk' => 'dk',
            'dop' => 'do',
            'dzd' => 'dz',
            'egp' => 'eg',
            'ern' => 'er',
            'etb' => 'et',
            'fjd' => 'fj',
            'fkp' => 'fk',
            'gel' => 'ge',
            'ghs' => 'gh',
            'gip' => 'gi',
            'gmd' => 'gm',
            'gnf' => 'gn',
            'gtq' => 'gt',
            'gyd' => 'gy',
            'hkd' => 'hk',
            'hnl' => 'hn',
            'hrk' => 'hr',
            'htg' => 'ht',
            'huf' => 'hu',
            'idr' => 'id',
            'ils' => 'il',
            'inr' => 'in',
            'iqd' => 'iq',
            'irr' => 'ir',
            'isk' => 'is',
            'jmd' => 'jm',
            'jod' => 'jo',
            'kes' => 'ke',
            'kgs' => 'kg',
            'khr' => 'kh',
            'kmf' => 'km',
            'kpw' => 'kp',
            'krw' => 'kr',
            'kwd' => 'kw',
            'kyd' => 'ky',
            'kzt' => 'kz',
            'lak' => 'la',
            'lbp' => 'lb',
            'lkr' => 'lk',
            'lrd' => 'lr',
            'lsl' => 'ls',
            'lyd' => 'ly',
            'mad' => 'ma',
            'mdl' => 'md',
            'mga' => 'mg',
            'mkd' => 'mk',
            'mmk' => 'mm',
            'mnt' => 'mn',
            'mop' => 'mo',
            'mru' => 'mr',
            'mur' => 'mu',
            'mvr' => 'mv',
            'mwk' => 'mw',
            'mxn' => 'mx',
            'myr' => 'my',
            'mzn' => 'mz',
            'nad' => 'na',
            'ngn' => 'ng',
            'nio' => 'ni',
            'nok' => 'no',
            'npr' => 'np',
            'omr' => 'om',
            'pab' => 'pa',
            'pen' => 'pe',
            'pgk' => 'pg',
            'php' => 'ph',
            'pkr' => 'pk',
            'pln' => 'pl',
            'pyg' => 'py',
            'qar' => 'qa',
            'ron' => 'ro',
            'rsd' => 'rs',
            'rub' => 'ru',
            'rwf' => 'rw',
            'sar' => 'sa',
            'sbd' => 'sb',
            'scr' => 'sc',
            'sdg' => 'sd',
            'sek' => 'se',
            'sgd' => 'sg',
            'shp' => 'sh',
            'sll' => 'sl',
            'sos' => 'so',
            'srd' => 'sr',
            'ssp' => 'ss',
            'stn' => 'st',
            'svc' => 'sv',
            'syp' => 'sy',
            'szl' => 'sz',
            'thb' => 'th',
            'tjs' => 'tj',
            'tmt' => 'tm',
            'tnd' => 'tn',
            'top' => 'to',
            'try' => 'tr',
            'ttd' => 'tt',
            'twd' => 'tw',
            'tzs' => 'tz',
            'uah' => 'ua',
            'ugx' => 'ug',
            'uyu' => 'uy',
            'uzs' => 'uz',
            'ves' => 've',
            'vnd' => 'vn',
            'vuv' => 'vu',
            'wst' => 'ws',
            'xaf' => 'cf',
            'xcd' => 'ag',
            'xof' => 'bj',
            'xpf' => 'pf',
            'yer' => 'ye',
            'zar' => 'za',
            'zmw' => 'zm',
            'zwl' => 'zw'
        ];

        return $codeMap[$code] ?? $code;
    }
}
