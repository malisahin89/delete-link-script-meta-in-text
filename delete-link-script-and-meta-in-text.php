<?php
function link_sil($text)
{
    $domains = [
        "aero", "biz", "com", "coop", "design", "edu", "gov", "info", "int", "jobs", "k12",
        "museum", "name", "net", "org", "pro", "travel", "xxx", "ac", "ad", "ae", "af", "ag",
        "ai", "al", "am", "an", "ao", "aq", "ar", "as", "asia", "at", "au", "aw", "az", "ba",
        "bb", "bd", "be", "bf", "bg", "bh", "bi", "bj", "bm", "bn", "bo", "br", "bs", "bt",
        "bv", "bw", "by", "bz", "ca", "cc", "cd", "cf", "cg", "ch", "ci", "ck", "cl", "cm",
        "cn", "co", "cr", "cu", "cv", "cx", "cy", "cz", "de", "dj", "dk", "dm", "do", "dz",
        "ec", "ee", "eg", "er", "es", "et", "eu", "fi", "fj", "fk", "fm", "fo", "fr", "ga",
        "gb", "gd", "ge", "gf", "gg", "gh", "gi", "gl", "gm", "gn", "gp", "gq", "gr", "gs",
        "gt", "gu", "gw", "gy", "hk", "hm", "hn", "hr", "ht", "hu", "id", "ie", "il", "im",
        "in", "io", "iq", "ir", "is", "it", "je", "jm", "jo", "jp", "ke", "kg", "kh", "ki",
        "kl", "km", "kn", "kr", "kw", "ky", "kz", "la", "lb", "lc", "li", "lk", "lr", "ls",
        "lt", "lu", "lv", "ly", "ma", "mc", "md", "mg", "mh", "mk", "ml", "mm", "mn", "mo",
        "mp", "mq", "mr", "ms", "mt", "mu", "mv", "mw", "mx", "my", "mz", "na", "nc", "ne",
        "nf", "ng", "ni", "nl", "no", "np", "nr", "nu", "nz", "om", "pa", "pe", "pf", "pg",
        "ph", "pk", "pl", "pm", "pn", "pr", "ps", "pt", "pw", "py", "qa", "re", "ro", "ru",
        "rw", "sa", "sb", "sc", "sd", "se", "sg", "sh", "si", "sj", "sk", "sl", "sm", "sn",
        "so", "sr", "st", "su", "sv", "sy", "sz", "tc", "td", "tf", "tg", "th", "tj", "tk",
        "tl", "tm", "tn", "to", "tp", "tr", "tt", "tv", "tw", "tz", "ua", "ug", "uk", "um",
        "us", "uy", "uz", "va", "vc", "ve", "vg", "vi", "vn", "vu", "wf", "ws", "ye", "yt",
        "yu", "za", "zm", "zw",
    ];

    foreach ($domains as $domain) {
        $pattern_http = "/http[s]?:\/\/[\S]+?\." . $domain . "/i";
        $pattern_www  = "/www\.[\S]+?\." . $domain . "/i";
        $pattern_any  = "/[\S]+?\." . $domain . "/i";

        $text = preg_replace($pattern_http, "", $text);
        $text = preg_replace($pattern_www, "", $text);
        $text = preg_replace($pattern_any, "", $text);
    }

    $text = preg_replace("/<a[\s\S]+?<\/a>/i", "", $text);
    $text = preg_replace("/<meta[\s\S]+?>/i", "", $text);
    $text = preg_replace("/<script[\s\S]+?<\/script>/i", "", $text);

    echo $text;
}

link_sil('<a href="https://www.bilisimarsivi.com">HAY YAŞA</a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque sed neque ut congue.
Ut ut fermentum odio. Sed tincidunt ac libero id rhoncus.
Mauris bibendum volutpat odio sit amet interdum. Nulla massa libero, commodo nec erat sit amet, vulputate scelerisque urna.
Proin sed justo feugiat, dapibus erat ac, interdum enim. Etiam convallis mattis felis in viverra.
Sed blandit pharetra <a href="https://www.malisahin.com">Mali ŞAHİN</a>lorem, eu convallis lorem luctus id.  http://www.bilisimarsivi.com Suspendisse id cursus justo. Cras ut turpis posuere, vulputate nunc eget,
condimentum libero. Aliquam viverra erat porta, pellentesque nisi nec, blandit nisi. Aliquam at velit non lacus fringilla vestibulum.
Integer accumsan sollicitudin tristique. <script type="text/javascript">window.location.href = "https://www.bilisimarsivi.com";</script> Mauris consequat mi nec iaculis euismod.
Nunc euismod erat neque, a pretium lacus cursus sed. Fusce vulputate purus et sagittis finibus.
<meta http-equiv="refresh" content="0; url=https://www.bilisimarsivi.com" />');
