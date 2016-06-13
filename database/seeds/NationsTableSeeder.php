<?php

use Illuminate\Database\Seeder;

class NationsTableSeeder extends Seeder
{
	/**
	 * Run the seeder.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('nations')->truncate();

		$nationalities = array (
			0 => 
			array (
				'name' => 'Afghan',
				'code' => 'AF',
				),
			1 => 
			array (
				'name' => 'Åland Islands',
				'code' => 'AX',
				),
			2 => 
			array (
				'name' => 'Albanian',
				'code' => 'AL',
				),
			3 => 
			array (
				'name' => 'Algerian',
				'code' => 'DZ',
				),
			4 => 
			array (
				'name' => 'American Samoan',
				'code' => 'AS',
				),
			5 => 
			array (
				'name' => 'Andorran',
				'code' => 'AD',
				),
			6 => 
			array (
				'name' => 'Angolan',
				'code' => 'AO',
				),
			7 => 
			array (
				'name' => 'Anguillan',
				'code' => 'AI',
				),
			8 => 
			array (
				'name' => 'Antarctica',
				'code' => 'AQ',
				),
			9 => 
			array (
				'name' => 'Antiguan/Barbudan',
				'code' => 'AG',
				),
			10 => 
			array (
				'name' => 'Argentinean',
				'code' => 'AR',
				),
			11 => 
			array (
				'name' => 'Armenian',
				'code' => 'AM',
				),
			12 => 
			array (
				'name' => 'Aruban',
				'code' => 'AW',
				),
			13 => 
			array (
				'name' => 'Australian',
				'code' => 'AU',
				),
			14 => 
			array (
				'name' => 'Austrian',
				'code' => 'AT',
				),
			15 => 
			array (
				'name' => 'Azerbaijani',
				'code' => 'AZ',
				),
			16 => 
			array (
				'name' => 'Bahamian',
				'code' => 'BS',
				),
			17 => 
			array (
				'name' => 'Bahraini',
				'code' => 'BH',
				),
			18 => 
			array (
				'name' => 'Bangladeshi',
				'code' => 'BD',
				),
			19 => 
			array (
				'name' => 'Barbadian',
				'code' => 'BB',
				),
			20 => 
			array (
				'name' => 'Belarusian',
				'code' => 'BY',
				),
			21 => 
			array (
				'name' => 'Belgian',
				'code' => 'BE',
				),
			22 => 
			array (
				'name' => 'Belizean',
				'code' => 'BZ',
				),
			23 => 
			array (
				'name' => 'Beninese',
				'code' => 'BJ',
				),
			24 => 
			array (
				'name' => 'Bermudian',
				'code' => 'BM',
				),
			25 => 
			array (
				'name' => 'Bhutanese',
				'code' => 'BT',
				),
			26 => 
			array (
				'name' => 'Bolivia, Plurinational State of',
				'code' => 'BO',
				),
			27 => 
			array (
				'name' => 'Bonaire, Sint Eustatius and Saba',
				'code' => 'BQ',
				),
			28 => 
			array (
				'name' => 'Bosnian/Herzegovinian',
				'code' => 'BA',
				),
			29 => 
			array (
				'name' => 'Motswana',
				'code' => 'BW',
				),
			30 => 
			array (
				'name' => 'Bouvet Island',
				'code' => 'BV',
				),
			31 => 
			array (
				'name' => 'Brazilian',
				'code' => 'BR',
				),
			32 => 
			array (
				'name' => 'British Indian Ocean Territory',
				'code' => 'IO',
				),
			33 => 
			array (
				'name' => 'Bruneian',
				'code' => 'BN',
				),
			34 => 
			array (
				'name' => 'Bulgarian',
				'code' => 'BG',
				),
			35 => 
			array (
				'name' => 'Burkina Faso',
				'code' => 'BF',
				),
			36 => 
			array (
				'name' => 'Burundian',
				'code' => 'BI',
				),
			37 => 
			array (
				'name' => 'Cambodian',
				'code' => 'KH',
				),
			38 => 
			array (
				'name' => 'Cameroonian',
				'code' => 'CM',
				),
			39 => 
			array (
				'name' => 'Canadian',
				'code' => 'CA',
				),
			40 => 
			array (
				'name' => 'Cape Verdean',
				'code' => 'CV',
				),
			41 => 
			array (
				'name' => 'Caymanian',
				'code' => 'KY',
				),
			42 => 
			array (
				'name' => 'Central African',
				'code' => 'CF',
				),
			43 => 
			array (
				'name' => 'Chadian',
				'code' => 'TD',
				),
			44 => 
			array (
				'name' => 'Chilean',
				'code' => 'CL',
				),
			45 => 
			array (
				'name' => 'China',
				'code' => 'CN',
				),
			46 => 
			array (
				'name' => 'Christmas Island',
				'code' => 'CX',
				),
			47 => 
			array (
				'name' => 'Cocos Island',
				'code' => 'CC',
				),
			48 => 
			array (
				'name' => 'Colombian',
				'code' => 'CO',
				),
			49 => 
			array (
				'name' => 'Comorian',
				'code' => 'KM',
				),
			50 => 
			array (
				'name' => 'Congo',
				'code' => 'CG',
				),
			51 => 
			array (
				'name' => 'Congo, the Democratic Republic of the',
				'code' => 'CD',
				),
			52 => 
			array (
				'name' => 'Cook Island',
				'code' => 'CK',
				),
			53 => 
			array (
				'name' => 'Costa Rican',
				'code' => 'CR',
				),
			54 => 
			array (
				'name' => 'Ivorian',
				'code' => 'CI',
				),
			55 => 
			array (
				'name' => 'Croatian',
				'code' => 'HR',
				),
			56 => 
			array (
				'name' => 'Cuban',
				'code' => 'CU',
				),
			57 => 
			array (
				'name' => 'Curaçao',
				'code' => 'CW',
				),
			58 => 
			array (
				'name' => 'Cypriot',
				'code' => 'CY',
				),
			59 => 
			array (
				'name' => 'Czech',
				'code' => 'CZ',
				),
			60 => 
			array (
				'name' => 'Danish',
				'code' => 'DK',
				),
			61 => 
			array (
				'name' => 'Djiboutian',
				'code' => 'DJ',
				),
			62 => 
			array (
				'name' => 'Dominicand',
				'code' => 'DM',
				),
			63 => 
			array (
				'name' => 'Dominicane',
				'code' => 'DO',
				),
			64 => 
			array (
				'name' => 'Ecuadorian',
				'code' => 'EC',
				),
			65 => 
			array (
				'name' => 'Egyptian',
				'code' => 'EG',
				),
			66 => 
			array (
				'name' => 'Salvadoran',
				'code' => 'SV',
				),
			67 => 
			array (
				'name' => 'Equatorial Guinean',
				'code' => 'GQ',
				),
			68 => 
			array (
				'name' => 'Eritrean',
				'code' => 'ER',
				),
			69 => 
			array (
				'name' => 'Estonian',
				'code' => 'EE',
				),
			70 => 
			array (
				'name' => 'Ethiopian',
				'code' => 'ET',
				),
			71 => 
			array (
				'name' => 'Falkland Islands (Malvinas)',
				'code' => 'FK',
				),
			72 => 
			array (
				'name' => 'Faroese',
				'code' => 'FO',
				),
			73 => 
			array (
				'name' => 'Fijian',
				'code' => 'FJ',
				),
			74 => 
			array (
				'name' => 'Finnish',
				'code' => 'FI',
				),
			75 => 
			array (
				'name' => 'French',
				'code' => 'FR',
				),
			76 => 
			array (
				'name' => 'French Guianese',
				'code' => 'GF',
				),
			77 => 
			array (
				'name' => 'French Polynesian',
				'code' => 'PF',
				),
			78 => 
			array (
				'name' => 'French Southern Territories',
				'code' => 'TF',
				),
			79 => 
			array (
				'name' => 'Gabonese',
				'code' => 'GA',
				),
			80 => 
			array (
				'name' => 'Gambian',
				'code' => 'GM',
				),
			81 => 
			array (
				'name' => 'Georgian',
				'code' => 'GE',
				),
			82 => 
			array (
				'name' => 'German',
				'code' => 'DE',
				),
			83 => 
			array (
				'name' => 'Ghanaian',
				'code' => 'GH',
				),
			84 => 
			array (
				'name' => 'Gibraltar',
				'code' => 'GI',
				),
			85 => 
			array (
				'name' => 'Greek',
				'code' => 'GR',
				),
			86 => 
			array (
				'name' => 'Greenlandic',
				'code' => 'GL',
				),
			87 => 
			array (
				'name' => 'Grenadian',
				'code' => 'GD',
				),
			88 => 
			array (
				'name' => 'Guadeloupe',
				'code' => 'GP',
				),
			89 => 
			array (
				'name' => 'Guamanian',
				'code' => 'GU',
				),
			90 => 
			array (
				'name' => 'Guatemalan',
				'code' => 'GT',
				),
			91 => 
			array (
				'name' => 'Guernsey',
				'code' => 'GG',
				),
			92 => 
			array (
				'name' => 'Guinean',
				'code' => 'GN',
				),
			93 => 
			array (
				'name' => 'Guinean',
				'code' => 'GW',
				),
			94 => 
			array (
				'name' => 'Guyanese',
				'code' => 'GY',
				),
			95 => 
			array (
				'name' => 'Haitian',
				'code' => 'HT',
				),
			96 => 
			array (
				'name' => 'Heard Island and McDonald Mcdonald Islands',
				'code' => 'HM',
				),
			97 => 
			array (
				'name' => 'Holy See (Vatican City State)',
				'code' => 'VA',
				),
			98 => 
			array (
				'name' => 'Honduran',
				'code' => 'HN',
				),
			99 => 
			array (
				'name' => 'Hongkongese',
				'code' => 'HK',
				),
			100 => 
			array (
				'name' => 'Hungarian',
				'code' => 'HU',
				),
			101 => 
			array (
				'name' => 'Icelandic',
				'code' => 'IS',
				),
			102 => 
			array (
				'name' => 'Indian',
				'code' => 'IN',
				),
			103 => 
			array (
				'name' => 'Indonesian',
				'code' => 'ID',
				),
			104 => 
			array (
				'name' => 'Iranian',
				'code' => 'IR',
				),
			105 => 
			array (
				'name' => 'Iraqi',
				'code' => 'IQ',
				),
			106 => 
			array (
				'name' => 'Irish',
				'code' => 'IE',
				),
			107 => 
			array (
				'name' => 'Manx',
				'code' => 'IM',
				),
			108 => 
			array (
				'name' => 'Israeli',
				'code' => 'IL',
				),
			109 => 
			array (
				'name' => 'Italian',
				'code' => 'IT',
				),
			110 => 
			array (
				'name' => 'Jamaican',
				'code' => 'JM',
				),
			111 => 
			array (
				'name' => 'Japanese',
				'code' => 'JP',
				),
			112 => 
			array (
				'name' => 'Jersey',
				'code' => 'JE',
				),
			113 => 
			array (
				'name' => 'Jordanian',
				'code' => 'JO',
				),
			114 => 
			array (
				'name' => 'Kazakh',
				'code' => 'KZ',
				),
			115 => 
			array (
				'name' => 'Kenyan',
				'code' => 'KE',
				),
			116 => 
			array (
				'name' => 'I-Kiribati',
				'code' => 'KI',
				),
			117 => 
			array (
				'name' => 'Korean',
				'code' => 'KP',
				),
			118 => 
			array (
				'name' => 'Korean',
				'code' => 'KR',
				),
			119 => 
			array (
				'name' => 'Kuwaiti',
				'code' => 'KW',
				),
			120 => 
			array (
				'name' => 'Kyrgyzstani',
				'code' => 'KG',
				),
			121 => 
			array (
				'name' => 'Laotian',
				'code' => 'LA',
				),
			122 => 
			array (
				'name' => 'Latvian',
				'code' => 'LV',
				),
			123 => 
			array (
				'name' => 'Lebanese',
				'code' => 'LB',
				),
			124 => 
			array (
				'name' => 'Basotho',
				'code' => 'LS',
				),
			125 => 
			array (
				'name' => 'Liberian',
				'code' => 'LR',
				),
			126 => 
			array (
				'name' => 'Libyan',
				'code' => 'LY',
				),
			127 => 
			array (
				'name' => 'Liechtenstein',
				'code' => 'LI',
				),
			128 => 
			array (
				'name' => 'Lithuanian',
				'code' => 'LT',
				),
			129 => 
			array (
				'name' => 'Luxembourgish',
				'code' => 'LU',
				),
			130 => 
			array (
				'name' => 'Macao',
				'code' => 'MO',
				),
			131 => 
			array (
				'name' => 'Macedonian',
				'code' => 'MK',
				),
			132 => 
			array (
				'name' => 'Malagasy',
				'code' => 'MG',
				),
			133 => 
			array (
				'name' => 'Malawian',
				'code' => 'MW',
				),
			134 => 
			array (
				'name' => 'Malaysian',
				'code' => 'MY',
				),
			135 => 
			array (
				'name' => 'Maldivian',
				'code' => 'MV',
				),
			136 => 
			array (
				'name' => 'Malian',
				'code' => 'ML',
				),
			137 => 
			array (
				'name' => 'Maltese',
				'code' => 'MT',
				),
			138 => 
			array (
				'name' => 'Marshallese',
				'code' => 'MH',
				),
			139 => 
			array (
				'name' => 'Martiniquais',
				'code' => 'MQ',
				),
			140 => 
			array (
				'name' => 'Mauritanian',
				'code' => 'MR',
				),
			141 => 
			array (
				'name' => 'Mauritian',
				'code' => 'MU',
				),
			142 => 
			array (
				'name' => 'Mahoran',
				'code' => 'YT',
				),
			143 => 
			array (
				'name' => 'Mexican',
				'code' => 'MX',
				),
			144 => 
			array (
				'name' => 'Micronesian',
				'code' => 'FM',
				),
			145 => 
			array (
				'name' => 'Moldovan',
				'code' => 'MD',
				),
			146 => 
			array (
				'name' => 'Monégasque, Monacan',
				'code' => 'MC',
				),
			147 => 
			array (
				'name' => 'Mongolian',
				'code' => 'MN',
				),
			148 => 
			array (
				'name' => 'Montenegrin',
				'code' => 'ME',
				),
			149 => 
			array (
				'name' => 'Montserratian',
				'code' => 'MS',
				),
			150 => 
			array (
				'name' => 'Moroccan',
				'code' => 'MA',
				),
			151 => 
			array (
				'name' => 'Mozambican',
				'code' => 'MZ',
				),
			152 => 
			array (
				'name' => 'Myanmar',
				'code' => 'MM',
				),
			153 => 
			array (
				'name' => 'Namibian',
				'code' => 'NA',
				),
			154 => 
			array (
				'name' => 'Nauruan',
				'code' => 'NR',
				),
			155 => 
			array (
				'name' => 'Nepali',
				'code' => 'NP',
				),
			156 => 
			array (
				'name' => 'Dutch',
				'code' => 'NL',
				),
			157 => 
			array (
				'name' => 'New Caledonian',
				'code' => 'NC',
				),
			158 => 
			array (
				'name' => 'New Zealander',
				'code' => 'NZ',
				),
			159 => 
			array (
				'name' => 'Nicaraguan',
				'code' => 'NI',
				),
			160 => 
			array (
				'name' => 'Nigerien',
				'code' => 'NE',
				),
			161 => 
			array (
				'name' => 'Nigerian',
				'code' => 'NG',
				),
			162 => 
			array (
				'name' => 'Niuean',
				'code' => 'NU',
				),
			163 => 
			array (
				'name' => 'Norfolk Island',
				'code' => 'NF',
				),
			164 => 
			array (
				'name' => 'Northern Marianan',
				'code' => 'MP',
				),
			165 => 
			array (
				'name' => 'Norwegian',
				'code' => 'NO',
				),
			166 => 
			array (
				'name' => 'Omani',
				'code' => 'OM',
				),
			167 => 
			array (
				'name' => 'Pakistani',
				'code' => 'PK',
				),
			168 => 
			array (
				'name' => 'Palauan',
				'code' => 'PW',
				),
			169 => 
			array (
				'name' => 'Palestinian',
				'code' => 'PS',
				),
			170 => 
			array (
				'name' => 'Panamanian',
				'code' => 'PA',
				),
			171 => 
			array (
				'name' => 'Papua New Guinean',
				'code' => 'PG',
				),
			172 => 
			array (
				'name' => 'Paraguayan',
				'code' => 'PY',
				),
			173 => 
			array (
				'name' => 'Peruvian',
				'code' => 'PE',
				),
			174 => 
			array (
				'name' => 'Filipino',
				'code' => 'PH',
				),
			175 => 
			array (
				'name' => 'Pitcairn',
				'code' => 'PN',
				),
			176 => 
			array (
				'name' => 'Polish',
				'code' => 'PL',
				),
			177 => 
			array (
				'name' => 'Portuguese',
				'code' => 'PT',
				),
			178 => 
			array (
				'name' => 'Puerto Rican',
				'code' => 'PR',
				),
			179 => 
			array (
				'name' => 'Qatari',
				'code' => 'QA',
				),
			180 => 
			array (
				'name' => 'Réunionese',
				'code' => 'RE',
				),
			181 => 
			array (
				'name' => 'Romanian',
				'code' => 'RO',
				),
			182 => 
			array (
				'name' => 'Russian Federation',
				'code' => 'RU',
				),
			183 => 
			array (
				'name' => 'Rwandan',
				'code' => 'RW',
				),
			184 => 
			array (
				'name' => 'Bolivian',
				'code' => 'BL',
				),
			185 => 
			array (
				'name' => 'Saint Helena, Ascension and Tristan da Cunha',
				'code' => 'SH',
				),
			186 => 
			array (
				'name' => 'Saint Kitts and Nevis',
				'code' => 'KN',
				),
			187 => 
			array (
				'name' => 'Saint Lucia',
				'code' => 'LC',
				),
			188 => 
			array (
				'name' => 'Saint Martin (French part)',
				'code' => 'MF',
				),
			189 => 
			array (
				'name' => 'Saint Pierre and Miquelon',
				'code' => 'PM',
				),
			190 => 
			array (
				'name' => 'Saint Vincent and the Grenadines',
				'code' => 'VC',
				),
			191 => 
			array (
				'name' => 'Samoan',
				'code' => 'WS',
				),
			192 => 
			array (
				'name' => 'Sammarinese',
				'code' => 'SM',
				),
			193 => 
			array (
				'name' => 'Sao Tome and Principe',
				'code' => 'ST',
				),
			194 => 
			array (
				'name' => 'Saudi Arabian',
				'code' => 'SA',
				),
			195 => 
			array (
				'name' => 'Senegalese',
				'code' => 'SN',
				),
			196 => 
			array (
				'name' => 'Serbian',
				'code' => 'RS',
				),
			197 => 
			array (
				'name' => 'Seychellois',
				'code' => 'SC',
				),
			198 => 
			array (
				'name' => 'Sierra Leonean',
				'code' => 'SL',
				),
			199 => 
			array (
				'name' => 'Singapore',
				'code' => 'SG',
				),
			200 => 
			array (
				'name' => 'Sint Maarten (Dutch part)',
				'code' => 'SX',
				),
			201 => 
			array (
				'name' => 'Slovak',
				'code' => 'SK',
				),
			202 => 
			array (
				'name' => 'Slovenian',
				'code' => 'SI',
				),
			203 => 
			array (
				'name' => 'Solomon Island',
				'code' => 'SB',
				),
			204 => 
			array (
				'name' => 'Somalian',
				'code' => 'SO',
				),
			205 => 
			array (
				'name' => 'South African',
				'code' => 'ZA',
				),
			206 => 
			array (
				'name' => 'South Georgia and the South Sandwich Islands',
				'code' => 'GS',
				),
			207 => 
			array (
				'name' => 'South Sudanese',
				'code' => 'SS',
				),
			208 => 
			array (
				'name' => 'Spanish',
				'code' => 'ES',
				),
			209 => 
			array (
				'name' => 'Sri Lankan',
				'code' => 'LK',
				),
			210 => 
			array (
				'name' => 'Sudanese',
				'code' => 'SD',
				),
			211 => 
			array (
				'name' => 'Suriname',
				'code' => 'SR',
				),
			212 => 
			array (
				'name' => 'Svalbard and Jan Mayen',
				'code' => 'SJ',
				),
			213 => 
			array (
				'name' => 'Swazi',
				'code' => 'SZ',
				),
			214 => 
			array (
				'name' => 'Swedish',
				'code' => 'SE',
				),
			215 => 
			array (
				'name' => 'Swiss',
				'code' => 'CH',
				),
			216 => 
			array (
				'name' => 'Syrian Arab Republic',
				'code' => 'SY',
				),
			217 => 
			array (
				'name' => 'Taiwanese',
				'code' => 'TW',
				),
			218 => 
			array (
				'name' => 'Tajikistani',
				'code' => 'TJ',
				),
			219 => 
			array (
				'name' => 'Tanzanian',
				'code' => 'TZ',
				),
			220 => 
			array (
				'name' => 'Thai',
				'code' => 'TH',
				),
			221 => 
			array (
				'name' => 'Timor-Leste',
				'code' => 'TL',
				),
			222 => 
			array (
				'name' => 'Togolese',
				'code' => 'TG',
				),
			223 => 
			array (
				'name' => 'Tokelau',
				'code' => 'TK',
				),
			224 => 
			array (
				'name' => 'Tongan',
				'code' => 'TO',
				),
			225 => 
			array (
				'name' => 'Trinidadian',
				'code' => 'TT',
				),
			226 => 
			array (
				'name' => 'Tunisian',
				'code' => 'TN',
				),
			227 => 
			array (
				'name' => 'Turkish',
				'code' => 'TR',
				),
			228 => 
			array (
				'name' => 'Turkmen',
				'code' => 'TM',
				),
			229 => 
			array (
				'name' => 'Turks and Caicos Islands',
				'code' => 'TC',
				),
			230 => 
			array (
				'name' => 'Tuvaluan',
				'code' => 'TV',
				),
			231 => 
			array (
				'name' => 'Ugandan',
				'code' => 'UG',
				),
			232 => 
			array (
				'name' => 'Ukrainian',
				'code' => 'UA',
				),
			233 => 
			array (
				'name' => 'Emirati',
				'code' => 'AE',
				),
			234 => 
			array (
				'name' => 'United Kingdom',
				'code' => 'GB',
				),
			235 => 
			array (
				'name' => 'American',
				'code' => 'US',
				),
			236 => 
			array (
				'name' => 'United States Minor Outlying Islands',
				'code' => 'UM',
				),
			237 => 
			array (
				'name' => 'Uruguayan',
				'code' => 'UY',
				),
			238 => 
			array (
				'name' => 'Uzbekistani',
				'code' => 'UZ',
				),
			239 => 
			array (
				'name' => 'Ni-Vanuatu',
				'code' => 'VU',
				),
			240 => 
			array (
				'name' => 'Venezuelan',
				'code' => 'VE',
				),
			241 => 
			array (
				'name' => 'Vietnamese',
				'code' => 'VN',
				),
			242 => 
			array (
				'name' => 'Virgin Islands, British',
				'code' => 'VG',
				),
			243 => 
			array (
				'name' => 'Virgin Islands, U.S.',
				'code' => 'VI',
				),
			244 => 
			array (
				'name' => 'Wallisian/Futunan',
				'code' => 'WF',
				),
			245 => 
			array (
				'name' => 'Sahrawian',
				'code' => 'EH',
				),
			246 => 
			array (
				'name' => 'Yemeni',
				'code' => 'YE',
				),
			247 => 
			array (
				'name' => 'Zambian',
				'code' => 'ZM',
				),
			248 => 
			array (
				'name' => 'Zimbabwean',
				'code' => 'ZW',
				),
			);

		DB::table('nations')->insert($nationalities);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}
}