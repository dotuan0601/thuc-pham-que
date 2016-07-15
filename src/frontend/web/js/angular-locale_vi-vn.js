'use strict';
angular.module("ngLocale", [], ["$provide", function ($provide) {
    var PLURAL_CATEGORY = {ZERO: "zero", ONE: "one", TWO: "two", FEW: "few", MANY: "many", OTHER: "other"};
    $provide.value("$locale", {
        "DATETIME_FORMATS": {
            "AMPMS": [
                "SA",
                "CH"
            ],
            "DAY": [
                "Ch\u1ee7 Nh\u1eadt",
                "Th\u1ee9 Hai",
                "Th\u1ee9 Ba",
                "Th\u1ee9 T\u01b0",
                "Th\u1ee9 N\u0103m",
                "Th\u1ee9 S\u00e1u",
                "Th\u1ee9 B\u1ea3y"
            ],
            "ERANAMES": [
                "tr. CN",
                "sau CN"
            ],
            "ERAS": [
                "tr. CN",
                "sau CN"
            ],
            "FIRSTDAYOFWEEK": 0,
            "MONTH": [
                "Th\u00e1ng 1",
                "Th\u00e1ng 2",
                "Th\u00e1ng 3",
                "Th\u00e1ng 4",
                "Th\u00e1ng 5",
                "Th\u00e1ng 6",
                "Th\u00e1ng 7",
                "Th\u00e1ng 8",
                "Th\u00e1ng 9",
                "Th\u00e1ng 10",
                "Th\u00e1ng 11",
                "Th\u00e1ng 12"
            ],
            "SHORTDAY": [
                "CN",
                "T2",
                "T3",
                "T4",
                "T5",
                "T6",
                "T7"
            ],
            "SHORTMONTH": [
                "Thg 1",
                "Thg 2",
                "Thg 3",
                "Thg 4",
                "Thg 5",
                "Thg 6",
                "Thg 7",
                "Thg 8",
                "Thg 9",
                "Thg 10",
                "Thg 11",
                "Thg 12"
            ],
            "STANDALONEMONTH": [
                "Th\u00e1ng 1",
                "Th\u00e1ng 2",
                "Th\u00e1ng 3",
                "Th\u00e1ng 4",
                "Th\u00e1ng 5",
                "Th\u00e1ng 6",
                "Th\u00e1ng 7",
                "Th\u00e1ng 8",
                "Th\u00e1ng 9",
                "Th\u00e1ng 10",
                "Th\u00e1ng 11",
                "Th\u00e1ng 12"
            ],
            "WEEKENDRANGE": [
                5,
                6
            ],
            "fullDate": "EEEE, 'ng\u00e0y' dd MMMM 'n\u0103m' y",
            "longDate": "'Ng\u00e0y' dd 'th\u00e1ng' MM 'n\u0103m' y",
            "medium": "d MMM, y HH:mm:ss",
            "mediumDate": "d MMM, y",
            "mediumTime": "HH:mm:ss",
            "short": "dd/MM/y HH:mm",
            "shortDate": "dd/MM/y",
            "shortTime": "HH:mm"
        },
        "NUMBER_FORMATS": {
            "CURRENCY_SYM": "\u20ab",
            "DECIMAL_SEP": ",",
            "GROUP_SEP": ".",
            "PATTERNS": [
                {
                    "gSize": 3,
                    "lgSize": 3,
                    "maxFrac": 3,
                    "minFrac": 0,
                    "minInt": 1,
                    "negPre": "-",
                    "negSuf": "",
                    "posPre": "",
                    "posSuf": ""
                },
                {
                    "gSize": 3,
                    "lgSize": 3,
                    "maxFrac": 2,
                    "minFrac": 2,
                    "minInt": 1,
                    "negPre": "-\u00a4\u00a0",
                    "negSuf": "",
                    "posPre": "\u00a4\u00a0",
                    "posSuf": ""
                }
            ]
        },
        "id": "vi-vn",
        "localeID": "vi_VN",
        "pluralCat": function (n, opt_precision) {
            return PLURAL_CATEGORY.OTHER;
        }
    });
}]);