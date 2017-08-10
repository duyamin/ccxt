<?php

namespace ccxt;

class CCXTError            extends \Exception {}
class ExchangeError        extends CCXTError {}
class AuthenticationError  extends CCXTError {}
class NetworkError         extends CCXTError {}
class DDoSProtection       extends NetworkError {}
class RequestTimeout       extends NetworkError {}
class ExchangeNotAvailable extends NetworkError {}

$version = '1.3.25';

$curl_errors = array (
    0 => 'CURLE_OK',
    1 => 'CURLE_UNSUPPORTED_PROTOCOL',
    2 => 'CURLE_FAILED_INIT',
    3 => 'CURLE_URL_MALFORMAT',
    4 => 'CURLE_NOT_BUILT_IN',
    5 => 'CURLE_COULDNT_RESOLVE_PROXY',
    6 => 'CURLE_COULDNT_RESOLVE_HOST',
    7 => 'CURLE_COULDNT_CONNECT',
    8 => 'CURLE_FTP_WEIRD_SERVER_REPLY',
    9 => 'CURLE_REMOTE_ACCESS_DENIED',
    10 => 'CURLE_FTP_ACCEPT_FAILED',
    11 => 'CURLE_FTP_WEIRD_PASS_REPLY',
    12 => 'CURLE_FTP_ACCEPT_TIMEOUT',
    13 => 'CURLE_FTP_WEIRD_PASV_REPLY',
    14 => 'CURLE_FTP_WEIRD_227_FORMAT',
    15 => 'CURLE_FTP_CANT_GET_HOST',
    16 => 'CURLE_HTTP2',
    17 => 'CURLE_FTP_COULDNT_SET_TYPE',
    18 => 'CURLE_PARTIAL_FILE',
    19 => 'CURLE_FTP_COULDNT_RETR_FILE',
    21 => 'CURLE_QUOTE_ERROR',
    22 => 'CURLE_HTTP_RETURNED_ERROR',
    23 => 'CURLE_WRITE_ERROR',
    25 => 'CURLE_UPLOAD_FAILED',
    26 => 'CURLE_READ_ERROR',
    27 => 'CURLE_OUT_OF_MEMORY',
    28 => 'CURLE_OPERATION_TIMEDOUT',
    30 => 'CURLE_FTP_PORT_FAILED',
    31 => 'CURLE_FTP_COULDNT_USE_REST',
    33 => 'CURLE_RANGE_ERROR',
    34 => 'CURLE_HTTP_POST_ERROR',
    35 => 'CURLE_SSL_CONNECT_ERROR',
    36 => 'CURLE_BAD_DOWNLOAD_RESUME',
    37 => 'CURLE_FILE_COULDNT_READ_FILE',
    38 => 'CURLE_LDAP_CANNOT_BIND',
    39 => 'CURLE_LDAP_SEARCH_FAILED',
    41 => 'CURLE_FUNCTION_NOT_FOUND',
    42 => 'CURLE_ABORTED_BY_CALLBACK',
    43 => 'CURLE_BAD_FUNCTION_ARGUMENT',
    45 => 'CURLE_INTERFACE_FAILED',
    47 => 'CURLE_TOO_MANY_REDIRECTS',
    48 => 'CURLE_UNKNOWN_OPTION',
    49 => 'CURLE_TELNET_OPTION_SYNTAX',
    51 => 'CURLE_PEER_FAILED_VERIFICATION',
    52 => 'CURLE_GOT_NOTHING',
    53 => 'CURLE_SSL_ENGINE_NOTFOUND',
    54 => 'CURLE_SSL_ENGINE_SETFAILED',
    55 => 'CURLE_SEND_ERROR',
    56 => 'CURLE_RECV_ERROR',
    58 => 'CURLE_SSL_CERTPROBLEM',
    59 => 'CURLE_SSL_CIPHER',
    60 => 'CURLE_SSL_CACERT',
    61 => 'CURLE_BAD_CONTENT_ENCODING',
    62 => 'CURLE_LDAP_INVALID_URL',
    63 => 'CURLE_FILESIZE_EXCEEDED',
    64 => 'CURLE_USE_SSL_FAILED',
    65 => 'CURLE_SEND_FAIL_REWIND',
    66 => 'CURLE_SSL_ENGINE_INITFAILED',
    67 => 'CURLE_LOGIN_DENIED',
    68 => 'CURLE_TFTP_NOTFOUND',
    69 => 'CURLE_TFTP_PERM',
    70 => 'CURLE_REMOTE_DISK_FULL',
    71 => 'CURLE_TFTP_ILLEGAL',
    72 => 'CURLE_TFTP_UNKNOWNID',
    73 => 'CURLE_REMOTE_FILE_EXISTS',
    74 => 'CURLE_TFTP_NOSUCHUSER',
    75 => 'CURLE_CONV_FAILED',
    76 => 'CURLE_CONV_REQD',
    77 => 'CURLE_SSL_CACERT_BADFILE',
    78 => 'CURLE_REMOTE_FILE_NOT_FOUND',
    79 => 'CURLE_SSH',
    80 => 'CURLE_SSL_SHUTDOWN_FAILED',
    81 => 'CURLE_AGAIN',
    82 => 'CURLE_SSL_CRL_BADFILE',
    83 => 'CURLE_SSL_ISSUER_ERROR',
    84 => 'CURLE_FTP_PRET_FAILED',
    85 => 'CURLE_RTSP_CSEQ_ERROR',
    86 => 'CURLE_RTSP_SESSION_ERROR',
    87 => 'CURLE_FTP_BAD_FILE_LIST',
    88 => 'CURLE_CHUNK_FAILED',
    89 => 'CURLE_NO_CONNECTION_AVAILABLE',
    90 => 'CURLE_SSL_PINNEDPUBKEYNOTMATCH',
    91 => 'CURLE_SSL_INVALIDCERTSTATUS',
    92 => 'CURLE_HTTP2_STREAM',
);

class Exchange {

    public static $exchanges = array (
        '_1broker',
        '_1btcxe',
        'anxpro',
        'bit2c',
        'bitbay',
        'bitbays',
        'bitcoincoid',
        'bitfinex',
        'bitflyer',
        'bitlish',
        'bitmarket',
        'bitmex',
        'bitso',
        'bitstamp',
        'bittrex',
        'bl3p',
        'btcchina',
        'btce',
        'btcexchange',
        'btcmarkets',
        'btctradeua',
        'btcturk',
        'btcx',
        'bter',
        'bxinth',
        'ccex',
        'cex',
        'chbtc',
        'chilebit',
        'coincheck',
        'coingi',
        'coinmarketcap',
        'coinmate',
        'coinsecure',
        'coinspot',
        'dsx',
        'exmo',
        'flowbtc',
        'foxbit',
        'fybse',
        'fybsg',
        'gatecoin',
        'gdax',
        'gemini',
        'hitbtc',
        'huobi',
        'itbit',
        'jubi',
        'kraken',
        'lakebtc',
        'livecoin',
        'liqui',
        'luno',
        'mercado',
        'okcoincny',
        'okcoinusd',
        'paymium',
        'poloniex',
        'quadrigacx',
        'quoine',
        'southxchange',
        'surbitcoin',
        'therock',
        'urdubit',
        'vaultoro',
        'vbtc',
        'virwox',
        'xbtce',
        'yobit',
        'yunbi',
        'zaif',
    );

    public static function split ($string, $delimiters = array (' ')) {
        return explode ($delimiters[0], str_replace ($delimiters, $delimiters[0], $string));
    }

    public static function decimal ($number) {
        return '' + $number;
    }

    public static function capitalize ($string) {
        return mb_strtoupper (mb_substr ($string, 0, 1)) . mb_substr ($string, 1);
    }

    public static function omit ($array, $keys) {
        $result = $array;
        if (is_array ($keys))
            foreach ($keys as $key)
                unset ($result[$key]);
        else
            unset ($result[$keys]);
        return $result;
    }

    public static function unique ($array) {
        return array_unique ($array);
    }

    public static function pluck ($array, $key) {
        $result = [];
        foreach ($array as $element)
            if (isset ($key, $element))
                $result[] = $element[$key]; 
        return $result; 
    }

    public static function index_by ($array, $key) {
        $result = array ();
        foreach ($array as $element) {
            if (isset ($element[$key])) {
                $result[$element[$key]] = $element;    
            }            
        }
        return $result;
    }

    public static function sort_by ($arrayOfArrays, $key, $descending = false) {
        $descending = $descending ? -1 : 1;
        usort ($arrayOfArrays, function ($a, $b) use ($key, $descending) {
            if ($a[$key] == $b[$key])
                return 0;
            return $a[$key] < $b[$key] ? -$descending : $descending;
        });
        return $arrayOfArrays;
    }

    public static function keysort ($array) {
        $result = $array;
        ksort ($result);
        return $result;
    }

    public static function extract_params ($string) {
        if (preg_match_all ('/{([a-z0-9_]+?)}/ui', $string, $matches))
            return $matches[1];
    }

    public static function implode_params ($string, $params) {
        foreach ($params as $key => $value)
            $string = implode ($value, mb_split ('{' . $key . '}', $string));
        return $string;
    }

    public static function indexBy ($arrayOfArrays, $key) {
        return Exchange::index_by ($arrayOfArrays, $key);
    }

    public static function sortBy ($arrayOfArrays, $key, $descending = false) {
        return Exchange::sort_by ($arrayOfArrays, $key, $descending);
    }

    public static function sum () {
        return array_sum (array_filter (func_get_args (), function ($x) { return isset ($x) ? $x : 0; }));
    }
    
    public static function extractParams ($string) {
        return Exchange::extract_params ($string);
    }
    
    public static function implodeParams ($string, $params) {
        return Exchange::implode_params ($string, $params);
    }

    public static function ordered ($array) { // for Python OrderedDicts, does nothing in PHP and JS
        return $array;
    }

    public static function urlencodeBase64 ($string) {
        return preg_replace (array ('#[=]+$#u', '#\+#u', '#\\/#'), array ('', '-', '_'), base64_encode ($string));
    }

    public static function urlencode ($string) {
        return http_build_query ($string);
    }
   
    public static function seconds () {
        return time ();
    }
    
    public static function milliseconds () { 
        list ($msec, $sec) = explode (' ', microtime ());
        return $sec . substr ($msec, 2, 3);
    }
    
    public static function microseconds () {
        list ($msec, $sec) = explode (' ', microtime ());
        return $sec . str_pad (substr ($msec, 2, 6), 6, '0');
    }

    public static function iso8601 ($timestamp) {
        $result = date ('c', (int) round ($timestamp / 1000));
        $msec = (int) $timestamp % 1000;
        return str_replace ('+', sprintf (".%03d+", $msec), $result);
    }

    public static function parse8601 ($timestamp) {
        $yyyy = '([0-9]{4})-?';
        $mm   = '([0-9]{2})-?';
        $dd   = '([0-9]{2})(?:T|[\s])?';
        $h    = '([0-9]{2}):?';
        $m    = '([0-9]{2}):?';
        $s    = '([0-9]{2})';
        $ms   = '(\.[0-9]{3})?';
        $tz = '(?:(\+|\-)([0-9]{2})\:?([0-9]{2})|Z)?';
        $regex = '/' . $yyyy . $mm . $dd . $h . $m . $s . $ms . $tz.'/';
        preg_match ($regex, $timestamp, $matches);
        array_shift ($matches);
        list ($yyyy, $mm, $dd, $h, $m, $s) = $matches;
        $ms = @$matches[6] ? $matches[6] : '.000';
        $sign = @$matches[7] ? $matches[7] : '';
        $sign = intval ($sign . '1');
        $hours = @$matches[8] ? intval ($matches[8]) * $sign : '';
        $minutes = @$matches[9] ? intval ($matches[9]) * $sign : '';
        // $ms = $ms or '.000';
        // $sign = $sign or '';
        // $sign = intval ($sign . '1');
        // $hours = (intval ($hours) or 0) * $sign;
        // $minutes = (intval ($minutes) or 0) * $sign;
        $t = mktime ($h, $m, $s, $mm, $dd, $yyyy, 0);
        $t += $hours * 3600 + $minutes * 60;
        $t *= 1000;
        return $t;
    }

    public static function yyyymmddhhmmss ($timestamp) {
        return gmdate ('Y-m-d H:i:s', (int) round ($timestamp / 1000));
    }

    public static function binary_concat () {
        return implode ('', func_get_args ());
    }

    public function binary_to_string ($binary) {
        return $binary;
    }

    public static function json ($input) {
        return json_encode ($input);
    }

    public static function encode ($input) {
        return $input;
    }

    public static function decode ($input) {
        return $input;
    }

    public function nonce () {
        return $this->seconds ();
    }

    public function __construct ($options) {

        global $version;

        $this->curl      = curl_init ();
        $this->id        = null;
        $this->rateLimit = 2000;
        $this->timeout   = 10000; // in milliseconds
        $this->proxy     = '';
        $this->markets  = null;
        $this->verbose   = false;
        $this->apiKey    = '';
        $this->secret    = '';
        $this->password  = '';
        $this->uid       = '';
        $this->twofa     = false;
        $this->marketsById = null;
        $this->markets_by_id = null;
        $this->userAgent = 'ccxt/' . $version . ' (+https://github.com/kroitor/ccxt) PHP/' . PHP_VERSION;
        $this->substituteCommonCurrencyCodes = true;

        if ($options)
            foreach ($options as $key => $value)
                $this->$key = $value;

        if ($this->api)
            foreach ($this->api as $type => $methods)
                foreach ($methods as $method => $paths)
                    foreach ($paths as $path) {

                        $splitPath = mb_split ('[^a-zA-Z0-9]', $path);
                        
                        $uppercaseMethod  = mb_strtoupper ($method);
                        $lowercaseMethod  = mb_strtolower ($method);
                        $camelcaseMethod  = Exchange::capitalize ($lowercaseMethod);
                        $camelcaseSuffix  = implode (array_map ('\ccxt\Exchange::capitalize', $splitPath));
                        $lowercasePath    = array_map ('trim', array_map ('strtolower', $splitPath));
                        $underscoreSuffix = implode ('_', array_filter ($lowercasePath));

                        if (mb_stripos ($camelcaseSuffix, $camelcaseMethod) === 0)
                            $camelcaseSuffix = mb_substr ($camelcaseSuffix, mb_strlen ($camelcaseMethod));

                        if (mb_stripos ($underscoreSuffix, $lowercaseMethod) === 0)
                            $underscoreSuffix = trim (mb_substr ($underscoreSuffix, mb_strlen ($lowercaseMethod)), '_');

                        $camelcase  = $type . $camelcaseMethod . Exchange::capitalize ($camelcaseSuffix);
                        $underscore = $type . '_' . $lowercaseMethod . '_' . mb_strtolower ($underscoreSuffix);
    
                        $f = function ($params = array ()) use ($path, $type, $uppercaseMethod) {
                            return $this->request ($path, $type, $uppercaseMethod, $params);
                        };

                        $this->$camelcase  = $f;
                        $this->$underscore = $f;
                    }

        if ($this->markets)
            $this->set_markets ($this->markets);
    }

    public function hash ($request, $type = 'md5', $digest = 'hex') {
        $base64 = ($digest === 'base64');
        $binary = ($digest === 'binary');
        $hash = hash ($type, $request, ($binary || $base64) ? true : false);
        if ($base64)
            $hash = base64_encode ($hash);
        return $hash;
    }

    public function hmac ($request, $secret, $type = 'sha256', $digest = 'hex') {
        $base64 = ($digest === 'base64');
        $binary = ($digest === 'binary');
        $hmac = hash_hmac ($type, $request, $secret, ($binary || $base64) ? true : false);
        if ($base64)
            $hmac = base64_encode ($hmac);        
        return $hmac;
    }

    public function jwt ($request, $secret, $alg = 'HS256', $hash = 'sha256') {
        $encodedHeader = $this->urlencodeBase64 (json_encode (array ('alg' => $alg, 'typ' => 'JWT')));
        $encodedData = $this->urlencodeBase64 (json_encode ($request, JSON_UNESCAPED_SLASHES));
        $token = $encodedHeader . '.' . $encodedData;
        $signature = $this->urlencodeBase64 ($this->hmac ($token, $secret, $hash, 'binary'));
        return $token . '.' . $signature;
    }

    public function raise_error ($exception_type, $url, $method = 'GET', $error = null, $details = null) {
        $exception = '\\ccxt\\' . $exception_type;
        throw new $exception (implode (' ', array (
            $this->id, 
            $method,
            $url,
            $error,
            $details,
        )));   
    }

    public function fetch ($url, $method = 'GET', $headers = null, $body = null) {
                
        if (strlen ($this->proxy))
            $headers['Origin'] = '*';

        if (!$headers)
            $headers = array ();
        elseif (is_array ($headers)) {
            $tmp = $headers;
            $headers = array ();
            foreach ($tmp as $key => $value)
                $headers[] = $key . ': ' . $value;
        }

        $url = $this->proxy . $url;

        $verbose_headers = $headers;

        curl_setopt ($this->curl, CURLOPT_URL, $url);

        if ($this->timeout) {
            $seconds = intval ($this->timeout / 1000);
            curl_setopt ($this->curl, CURLOPT_CONNECTTIMEOUT, $seconds); 
            curl_setopt ($this->curl, CURLOPT_TIMEOUT, $seconds);
        }

        curl_setopt ($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($this->curl, CURLOPT_SSL_VERIFYPEER, false);

        if ($this->userAgent)
            if (gettype ($this->userAgent) == 'string') {
                curl_setopt ($this->curl, CURLOPT_USERAGENT, $this->userAgent);
                $verbose_headers = array_merge ($verbose_headers, array ('User-Agent' => $this->userAgent));
            } else if ((gettype ($this->userAgent) == 'array') && array_key_exists ('User-Agent', $this->userAgent)) {
                curl_setopt ($this->curl, CURLOPT_USERAGENT, $this->userAgent['User-Agent']);
                $verbose_headers = array_merge ($verbose_headers, $this->userAgent);
            }

        curl_setopt ($this->curl, CURLOPT_ENCODING, '');

        if ($method == 'GET') {

            curl_setopt ($this->curl, CURLOPT_HTTPGET, true);
        
        } else if ($method == 'POST') {

            curl_setopt ($this->curl, CURLOPT_POST, true);
            curl_setopt ($this->curl, CURLOPT_POSTFIELDS, $body);

        } else if ($method == 'PUT') {

            curl_setopt ($this->curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt ($this->curl, CURLOPT_PUT, true);
            curl_setopt ($this->curl, CURLOPT_POSTFIELDS, $body);

            $headers[] = 'X-HTTP-Method-Override: PUT';

        } else if ($method == 'DELETE') {
                       
        }

        if ($headers)
            curl_setopt ($this->curl, CURLOPT_HTTPHEADER, $headers);

        if ($this->verbose)
            var_dump ($url, $method, $url, "\nRequest:\n", $verbose_headers, $body);

        $result = curl_exec ($this->curl);

        if ($result === false) {
            
            $curl_errno = curl_errno ($this->curl);
            $curl_error = curl_error ($this->curl);

            if ($curl_errno == 28) // CURLE_OPERATION_TIMEDOUT
                $this->raise_error ('RequestTimeout', $url, $method, $curl_errno, $curl_error);

            var_dump ($result);

            // all sorts of SSL problems, accessibility
            $this->raise_error ('ExchangeNotAvailable', $url, $method, $curl_errno, $curl_error);
        }

        $http_status_code = curl_getinfo ($this->curl, CURLINFO_HTTP_CODE);

        if ($http_status_code == 429) {

            $this->raise_error ('DDoSProtection', $url, $method, 
                'not accessible from this location at the moment');
        }

        if (in_array ($http_status_code, array (500, 501, 502, 404))) {

            $this->raise_error ('ExchangeNotAvailable', $url, $method, 
                'not accessible from this location at the moment');
        }

        if (in_array ($http_status_code, array (408, 504))) {

            $this->raise_error ('RequestTimeout', $url, $method, 
                'not accessible from this location at the moment');
        }

        if (in_array ($http_status_code, array (401, 422, 511))) {

            $details = '(possible reasons: ' . implode (', ', array (
                'invalid API keys',
                'bad or old nonce',
                'exchange is down or offline', 
                'on maintenance',
                'DDoS protection',
                'rate-limiting in effect',
            )) . ')';

            $this->raise_error ('AuthenticationError', $url, $method, 
                'check your API keys', $details);
        }

        if (in_array ($http_status_code, array (400, 403, 405, 503, 525))) {

            if (preg_match ('#cloudflare|incapsula#i', $result)) {
        
                $this->raise_error ('DDoSProtection', $url, $method, 
                    'not accessible from this location at the moment');
        
            } else {
        
                $details = '(possible reasons: ' . implode (', ', array (
                    'invalid API keys',
                    'bad or old nonce',
                    'exchange is down or offline', 
                    'on maintenance',
                    'DDoS protection',
                    'rate-limiting in effect',
                )) . ')';
        
                $this->raise_error ('ExchangeNotAvailable', $url, $method, 
                    'not accessible from this location at the moment', $details);
            }            
        }

        $decoded = json_decode ($result, $as_associative_array = true);
        
        if (!$decoded) {

            if (preg_match ('#offline|busy|retry|wait|unavailable|maintain|maintenance|maintenancing#i', $result)) {

                $details = '(possible reasons: ' . implode (', ', array (
                    'exchange is down or offline',
                    'on maintenance',
                    'DDoS protection',
                    'rate-limiting in effect',
                )) . ')';

                $this->raise_error ('ExchangeNotAvailable', $url, $method, 
                    'not accessible from this location at the moment', $details);
            }

            if (preg_match ('#cloudflare|incapsula#i', $result)) {
                $this->raise_error ('DDoSProtection', $url, $method, 
                    'not accessible from this location at the moment');
            }
        }
        
        return $decoded;
    }

    public function set_markets ($markets) {
        $values = array_values ($markets);
        $this->markets = $this->indexBy ($values, 'symbol');
        $this->markets_by_id = $this->indexBy ($values, 'id');
        $this->marketsById = $this->markets_by_id;
        $this->symbols = array_keys ($this->markets);
        sort ($this->symbols);
        $base = $this->pluck (array_filter ($values, function ($market) { 
            return array_key_exists ('base', $market);
        }), 'base');
        $quote = $this->pluck (array_filter ($values, function ($market) {
            return array_key_exists ('quote', $market);
        }), 'quote');
        $this->currencies = $this->unique (array_merge ($base, $quote));
        sort ($this->currencies);
        return $this->markets;
    }

    public function setMarkets ($markets) {
        return $this->set_markets ($markets);
    }

    public function loadMarkets ($reload = false) {
        return $this->load_markets ($reload);
    }

    public function load_markets ($reload = false) {
        if (!$reload && $this->markets) {
            if (!$this->markets_by_id) {
                return $this->set_markets ($this->markets);
            }
            return $this->markets;
        }
        $markets = $this->fetch_markets ();
        return $this->set_markets ($markets);
    }

    public function fetch_tickers () { // stub
        $exception = '\\ccxt\\ExchangeError';
        throw new $exception ($this->id . ' API does not allow to fetch all tickers at once with a single call to fetch_tickers () for now');
    }

    public function fetchTickers () {
        return $this->fetch_tickers ();
    }

    public function fetch_markets () { // stub
        return $this->markets; 
    }
    
    public function fetchMarkets  () {
        return $this->fetch_markets ();
    }

    public function fetchBalance () {
        return $this->fetch_balance ();
    }
    
    public function fetchOrderBook ($market) {
        return $this->fetch_order_book ($market);
    }
    
    public function fetchTicker ($market) {
        return $this->fetch_ticker ($market);
    }
    
    public function fetchTrades ($market) {
        return $this->fetch_trades ($market);
    }

    public function create_limit_buy_order ($market, $amount, $price, $params = array ()) {
        return $this->create_order ($market, 'limit', 'buy',  $amount, $price, $params);
    }

    public function create_limit_sell_order ($market, $amount, $price, $params = array ()) {
        return $this->create_order ($market, 'limit', 'sell', $amount, $price, $params);
    }

    public function create_market_buy_order ($market, $amount, $params = array ()) {
        return $this->create_order ($market, 'market', 'buy', $amount, null, $params);
    }

    public function create_market_sell_order ($market, $amount, $params = array ()) {
        return $this->create_order ($market, 'market', 'sell', $amount, null, $params);
    }

    public function createLimitBuyOrder ($market, $amount, $price, $params = array ()) {
        return $this->create_limit_buy_order ($market, $amount, $price, $params);
    }

    public function createLimitSellOrder ($market, $amount, $price, $params = array ()) {
        return $this->create_limit_sell_order ($market, $amount, $price, $params);
    }

    public function createMarketBuyOrder ($market, $amount, $params = array ()) { 
        return $this->create_market_buy_order ($market, $amount, $params);
    }

    public function createMarketSellOrder ($market, $amount, $params = array ()) {
        return $this->create_market_sell_order ($market, $amount, $params);
    }

    public function commonCurrencyCode ($currency) {
        if (!$this->substituteCommonCurrencyCodes)
            return $currency;
        if ($currency == 'XBT')
            return 'BTC';
        if ($currency == 'BCC')
            return 'BCH';
        if ($currency == 'DRK')
            return 'DASH';
        return $currency;
    }

    public function market ($market) {
        return ((gettype ($market) === 'string') && 
                   isset ($this->markets)        && 
                   isset ($this->markets[$market])) ? 
                        $this->markets[$market] : $market;
    }

    public function market_id ($market) {
        return (is_array ($market = $this->market ($market))) ? $market['id'] : $market;
    }

    public function marketId ($market) {
        return $this->market_id ($market);
    }

    public function symbol ($market) {
        return (is_array ($market = $this->market ($market))) ? $market['symbol'] : $market;
    }

    public function request ($path, $type, $method, $params, $headers = null, $body = null) { // stub
    }

    function __call ($function, $params) {

        if (array_key_exists ($function, $this))
            return call_user_func_array ($this->$function, $params);
        else {
            /* handle errors */
            echo $function . ' not found';
        }
    }
}

//=============================================================================

class _1broker extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => '_1broker',
            'name' => '1Broker',
            'countries' => 'US',
            'rateLimit' => 1500,
            'version' => 'v2',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766021-420bd9fc-5ecb-11e7-8ed6-56d0081efed2.jpg',
                'api' => 'https://1broker.com/api',
                'www' => 'https://1broker.com',
                'doc' => 'https://1broker.com/?c=en/content/api-documentation',
            ),
            'api' => array (
                'private' => array (
                    'get' => array (
                        'market/bars',
                        'market/categories',
                        'market/details',
                        'market/list',
                        'market/quotes',
                        'market/ticks',
                        'order/cancel',
                        'order/create',
                        'order/open',
                        'position/close',
                        'position/close_cancel',
                        'position/edit',
                        'position/history',
                        'position/open',
                        'position/shared/get',
                        'social/profile_statistics',
                        'social/profile_trades',
                        'user/bitcoin_deposit_address',
                        'user/details',
                        'user/overview',
                        'user/quota_status',
                        'user/transaction_log',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetchCategories () {
        $categories = $this->privateGetMarketCategories ();
        return categoriesarray ('response');
    }

    public function fetch_markets () {
        $this_ = $this; // workaround for Babel bug (not passing `this` to _recursive() call)
        $categories = $this->fetchCategories ();
        $result = array ();
        for ($c = 0; $c < count ($categories); $c++) {
            $category = categoriesarray ($c);
            $markets = $this_->privateGetMarketList (array (
                'category' => strtolower ($category),
            ));
            for ($p = 0; $p < count (marketsarray ('response')); $p++) {
                $market = marketsarray ('response')array ($p);
                $id = marketarray ('symbol');
                $symbol = null;
                $base = null;
                $quote = null;
                if (($category == 'FOREX') || ($category == 'CRYPTO')) {
                    $symbol = marketarray ('name');
                    $parts = explode ('/', $symbol);
                    $base = partsarray (0);
                    $quote = partsarray (1);
                } else {
                    $base = $id;
                    $quote = 'USD';
                    $symbol = $base . '/' . $quote;
                }
                $base = $this_->commonCurrencyCode ($base);
                $quote = $this_->commonCurrencyCode ($quote);
                $result[] = array (
                    'id' => $id,
                    'symbol' => $symbol,
                    'base' => $base,
                    'quote' => $quote,
                    'info' => $market,
                );
            }
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balance = $this->privateGetUserOverview ();
        $response = balancearray ('response');
        $result = array ( 'info' => $response );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            resultarray ($currency) = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
        }
        resultarray ('BTC')array ('free') = floatval (responsearray ('balance'));
        resultarray ('BTC')array ('total') = resultarray ('BTC')array ('free');
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $response = $this->privateGetMarketQuotes (array_merge (array (
            'symbols' => $this->market_id ($market),
        ), $params));
        $orderbook = responsearray ('response')array (0);
        $timestamp = $this->parse8601 (orderbookarray ('updated'));
        $bidPrice = floatval (orderbookarray ('bid'));
        $askPrice = floatval (orderbookarray ('ask'));
        $bid = array ($bidPrice, null);
        $ask = array ($askPrice, null);
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'bids' => array ($bid),
            'asks' => array ($ask),
        );
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $result = $this->privateGetMarketBars (array (
            'symbol' => $this->market_id ($market),
            'resolution' => 60,
            'limit' => 1,
        ));
        $orderbook = $this->fetchOrderBook ($market);
        $ticker = resultarray ('response')array (0);
        $timestamp = $this->parse8601 (tickerarray ('date'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('h')),
            'low' => floatval (tickerarray ('l')),
            'bid' => orderbookarray ('bids')array (0)array (0),
            'ask' => orderbookarray ('asks')array (0)array (0),
            'vwap' => null,
            'open' => floatval (tickerarray ('o')),
            'close' => floatval (tickerarray ('c')),
            'first' => null,
            'last' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => null,
        );
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'symbol' => $this->market_id ($market),
            'margin' => $amount,
            'direction' => ($side == 'sell') ? 'short' : 'long',
            'leverage' => 1,
            'type' => $side,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        else
            orderarray ('type') .= '_market';
        $result = $this->privateGetOrderCreate (array_merge ($order, $params));
        return array (
            'info' => $result,
            'id' => resultarray ('response')array ('order_id'),
        );
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostOrderCancel (array ( 'order_id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        if (!$this->apiKey)
            throw new AuthenticationError ($this->id . ' requires apiKey for all requests');
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $path . '.php';
        $query = array_merge (array ( 'token' => $this->apiKey ), $params);
        $url .= '?' . $this->urlencode ($query);
        $response = $this->fetch ($url, $method);
        if (array_key_exists ('warning', $response))
            if (responsearray ('warning'))
                throw new ExchangeError ($this->id . ' Warning => ' . responsearray ('warning_message'));
        if (array_key_exists ('error', $response))
            if (responsearray ('error'))
                throw new ExchangeError ($this->id . ' Error => ' . responsearray ('error_code') . responsearray ('error_message'));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class cryptocapital extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'cryptocapital',
            'name' => 'Crypto Capital',
            'comment' => 'Crypto Capital API',
            'countries' => 'PA', // Panama
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27993158-7a13f140-64ac-11e7-89cc-a3b441f0b0f8.jpg',
                'www' => 'https://cryptocapital.co',
                'doc' => 'https://github.com/cryptocap',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'stats',
                        'historical-prices',
                        'order-book',
                        'transactions',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balances-and-info',
                        'open-orders',
                        'user-transactions',
                        'btc-deposit-address/get',
                        'btc-deposit-address/new',
                        'deposits/get',
                        'withdrawals/get',
                        'orders/new',
                        'orders/edit',
                        'orders/cancel',
                        'orders/status',
                        'withdrawals/new',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostBalancesAndInfo ();
        $balance = responsearray ('balances-and-info');
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, balancearray ('available')))
                accountarray ('free') = floatval (balancearray ('available')array ($currency));
            if (array_key_exists ($currency, balancearray ('on_hold')))
                accountarray ('used') = floatval (balancearray ('on_hold')array ($currency));
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $response = $this->publicGetOrderBook (array_merge (array (
            'currency' => $this->market_id ($market),
        ), $params));
        $orderbook = responsearray ('order-book');
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'bid', 'asks' => 'ask' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $timestamp = intval (orderarray ('timestamp')) * 1000;
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('order_amount'));
                resultarray ($key)[] = array ($price, $amount, $timestamp);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetStats (array (
            'currency' => $this->market_id ($market),
        ));
        $ticker = responsearray ('stats');
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('max')),
            'low' => floatval (tickerarray ('min')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last_price')),
            'change' => floatval (tickerarray ('daily_change')),
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('total_btc_traded')),
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTransactions (array (
            'currency' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $order = array (
            'side' => $side,
            'type' => $type,
            'currency' => $this->market_id ($market),
            'amount' => $amount,
        );
        if ($type == 'limit')
            orderarray ('limit_price') = $price;
        $result = $this->privatePostOrdersNew (array_merge ($order, $params));
        return array (
            'info' => $result,
            'id' => $result,
        );
    }

    public function cancel_order ($id) {
        return $this->privatePostOrdersCancel (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        if ($this->id == 'cryptocapital')
            throw new ExchangeError ($this->id . ' is an abstract base API for _1btcxe');
        $url = $this->urlsarray ('api') . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $query = array_merge (array (
                'api_key' => $this->apiKey,
                'nonce' => $this->nonce (),
            ), $params);
            $request = $this->json ($query);
            queryarray ('signature') = $this->hmac ($this->encode ($request), $this->encode ($this->secret));
            $body = $this->json ($query);
            $headers = array ( 'Content-Type' => 'application/json' );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('errors', $response)) {
            $errors = array ();
            for ($e = 0; $e < count (responsearray ('errors')); $e++) {
                $error = responsearray ('errors')array ($e);
                $errors[] = errorarray ('code') . ' => ' . errorarray ('message');
            }
            $errors = implode (' ', $errors);
            throw new ExchangeError ($this->id . ' ' . $errors);
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class _1btcxe extends cryptocapital {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => '_1btcxe',
            'name' => '1BTCXE',
            'countries' => 'PA', // Panama
            'comment' => 'Crypto Capital API',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766049-2b294408-5ecc-11e7-85cc-adaff013dc1a.jpg',
                'api' => 'https://1btcxe.com/api',
                'www' => 'https://1btcxe.com',
                'doc' => 'https://1btcxe.com/api-docs.php',
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'USD', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD', ),
                'BTC/EUR' => array ( 'id' => 'EUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR', ),
                'BTC/CNY' => array ( 'id' => 'CNY', 'symbol' => 'BTC/CNY', 'base' => 'BTC', 'quote' => 'CNY', ),
                'BTC/RUB' => array ( 'id' => 'RUB', 'symbol' => 'BTC/RUB', 'base' => 'BTC', 'quote' => 'RUB', ),
                'BTC/CHF' => array ( 'id' => 'CHF', 'symbol' => 'BTC/CHF', 'base' => 'BTC', 'quote' => 'CHF', ),
                'BTC/JPY' => array ( 'id' => 'JPY', 'symbol' => 'BTC/JPY', 'base' => 'BTC', 'quote' => 'JPY', ),
                'BTC/GBP' => array ( 'id' => 'GBP', 'symbol' => 'BTC/GBP', 'base' => 'BTC', 'quote' => 'GBP', ),
                'BTC/CAD' => array ( 'id' => 'CAD', 'symbol' => 'BTC/CAD', 'base' => 'BTC', 'quote' => 'CAD', ),
                'BTC/AUD' => array ( 'id' => 'AUD', 'symbol' => 'BTC/AUD', 'base' => 'BTC', 'quote' => 'AUD', ),
                'BTC/AED' => array ( 'id' => 'AED', 'symbol' => 'BTC/AED', 'base' => 'BTC', 'quote' => 'AED', ),
                'BTC/BGN' => array ( 'id' => 'BGN', 'symbol' => 'BTC/BGN', 'base' => 'BTC', 'quote' => 'BGN', ),
                'BTC/CZK' => array ( 'id' => 'CZK', 'symbol' => 'BTC/CZK', 'base' => 'BTC', 'quote' => 'CZK', ),
                'BTC/DKK' => array ( 'id' => 'DKK', 'symbol' => 'BTC/DKK', 'base' => 'BTC', 'quote' => 'DKK', ),
                'BTC/HKD' => array ( 'id' => 'HKD', 'symbol' => 'BTC/HKD', 'base' => 'BTC', 'quote' => 'HKD', ),
                'BTC/HRK' => array ( 'id' => 'HRK', 'symbol' => 'BTC/HRK', 'base' => 'BTC', 'quote' => 'HRK', ),
                'BTC/HUF' => array ( 'id' => 'HUF', 'symbol' => 'BTC/HUF', 'base' => 'BTC', 'quote' => 'HUF', ),
                'BTC/ILS' => array ( 'id' => 'ILS', 'symbol' => 'BTC/ILS', 'base' => 'BTC', 'quote' => 'ILS', ),
                'BTC/INR' => array ( 'id' => 'INR', 'symbol' => 'BTC/INR', 'base' => 'BTC', 'quote' => 'INR', ),
                'BTC/MUR' => array ( 'id' => 'MUR', 'symbol' => 'BTC/MUR', 'base' => 'BTC', 'quote' => 'MUR', ),
                'BTC/MXN' => array ( 'id' => 'MXN', 'symbol' => 'BTC/MXN', 'base' => 'BTC', 'quote' => 'MXN', ),
                'BTC/NOK' => array ( 'id' => 'NOK', 'symbol' => 'BTC/NOK', 'base' => 'BTC', 'quote' => 'NOK', ),
                'BTC/NZD' => array ( 'id' => 'NZD', 'symbol' => 'BTC/NZD', 'base' => 'BTC', 'quote' => 'NZD', ),
                'BTC/PLN' => array ( 'id' => 'PLN', 'symbol' => 'BTC/PLN', 'base' => 'BTC', 'quote' => 'PLN', ),
                'BTC/RON' => array ( 'id' => 'RON', 'symbol' => 'BTC/RON', 'base' => 'BTC', 'quote' => 'RON', ),
                'BTC/SEK' => array ( 'id' => 'SEK', 'symbol' => 'BTC/SEK', 'base' => 'BTC', 'quote' => 'SEK', ),
                'BTC/SGD' => array ( 'id' => 'SGD', 'symbol' => 'BTC/SGD', 'base' => 'BTC', 'quote' => 'SGD', ),
                'BTC/THB' => array ( 'id' => 'THB', 'symbol' => 'BTC/THB', 'base' => 'BTC', 'quote' => 'THB', ),
                'BTC/TRY' => array ( 'id' => 'TRY', 'symbol' => 'BTC/TRY', 'base' => 'BTC', 'quote' => 'TRY', ),
                'BTC/ZAR' => array ( 'id' => 'ZAR', 'symbol' => 'BTC/ZAR', 'base' => 'BTC', 'quote' => 'ZAR', ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class anxpro extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'anxpro',
            'name' => 'ANXPro',
            'countries' => array ( 'JP', 'SG', 'HK', 'NZ', ),
            'version' => '2',
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27765983-fd8595da-5ec9-11e7-82e3-adb3ab8c2612.jpg',
                'api' => 'https://anxpro.com/api',
                'www' => 'https://anxpro.com',
                'doc' => array (
                    'http://docs.anxv2.apiary.io',
                    'https://anxpro.com/pages/api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{currency_pair}/money/ticker',
                        '{currency_pair}/money/depth/full',
                        '{currency_pair}/money/trade/fetch', // disabled by ANXPro
                    ),
                ),
                'private' => array (
                    'post' => array (
                        '{currency_pair}/money/order/add',
                        '{currency_pair}/money/order/cancel',
                        '{currency_pair}/money/order/quote',
                        '{currency_pair}/money/order/result',
                        '{currency_pair}/money/orders',
                        'money/{currency}/address',
                        'money/{currency}/send_simple',
                        'money/info',
                        'money/trade/list',
                        'money/wallet/history',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'BTCUSD', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'BTC/HKD' => array ( 'id' => 'BTCHKD', 'symbol' => 'BTC/HKD', 'base' => 'BTC', 'quote' => 'HKD' ),
                'BTC/EUR' => array ( 'id' => 'BTCEUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
                'BTC/CAD' => array ( 'id' => 'BTCCAD', 'symbol' => 'BTC/CAD', 'base' => 'BTC', 'quote' => 'CAD' ),
                'BTC/AUD' => array ( 'id' => 'BTCAUD', 'symbol' => 'BTC/AUD', 'base' => 'BTC', 'quote' => 'AUD' ),
                'BTC/SGD' => array ( 'id' => 'BTCSGD', 'symbol' => 'BTC/SGD', 'base' => 'BTC', 'quote' => 'SGD' ),
                'BTC/JPY' => array ( 'id' => 'BTCJPY', 'symbol' => 'BTC/JPY', 'base' => 'BTC', 'quote' => 'JPY' ),
                'BTC/GBP' => array ( 'id' => 'BTCGBP', 'symbol' => 'BTC/GBP', 'base' => 'BTC', 'quote' => 'GBP' ),
                'BTC/NZD' => array ( 'id' => 'BTCNZD', 'symbol' => 'BTC/NZD', 'base' => 'BTC', 'quote' => 'NZD' ),
                'LTC/BTC' => array ( 'id' => 'LTCBTC', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
                'DOGE/BTC' => array ( 'id' => 'DOGEBTC', 'symbol' => 'DOGE/BTC', 'base' => 'DOGE', 'quote' => 'BTC' ),
                'STR/BTC' => array ( 'id' => 'STRBTC', 'symbol' => 'STR/BTC', 'base' => 'STR', 'quote' => 'BTC' ),
                'XRP/BTC' => array ( 'id' => 'XRPBTC', 'symbol' => 'XRP/BTC', 'base' => 'XRP', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostMoneyInfo ();
        $balance = responsearray ('data');
        $currencies = array_keys (balancearray ('Wallets'));
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, balancearray ('Wallets'))) {
                $wallet = balancearray ('Wallets')array ($currency);
                accountarray ('free') = floatval (walletarray ('Available_Balance')array ('value'));
                accountarray ('total') = floatval (walletarray ('Balance')array ('value'));
                accountarray ('used') = accountarray ('total') - accountarray ('free');
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $response = $this->publicGetCurrencyPairMoneyDepthFull (array_merge (array (
            'currency_pair' => $this->market_id ($market),
        ), $params));
        $orderbook = responsearray ('data');
        $t = intval (orderbookarray ('dataUpdateTime'));
        $timestamp = intval ($t / 1000);
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('amount'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetCurrencyPairMoneyTicker (array (
            'currency_pair' => $this->market_id ($market),
        ));
        $ticker = responsearray ('data');
        $t = intval (tickerarray ('dataUpdateTime'));
        $timestamp = intval ($t / 1000);
        $bid = null;
        $ask = null;
        if (tickerarray ('buy')array ('value'))
            $bid = floatval (tickerarray ('buy')array ('value'));
        if (tickerarray ('sell')array ('value'))
            $ask = floatval (tickerarray ('sell')array ('value'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')array ('value')),
            'low' => floatval (tickerarray ('low')array ('value')),
            'bid' => $bid,
            'ask' => $ask,
            'vwap' => floatval (tickerarray ('vwap')array ('value')),
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')array ('value')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('avg')array ('value')),
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')array ('value')),
        );
    }

    public function fetch_trades ($market) {
        $error = $this->id . ' switched off the trades endpoint, see their docs at http://docs.anxv2.apiary.io/reference/$market-data/currencypairmoneytradefetch-disabled';
        throw new ExchangeError ($error);
        return $this->publicGetCurrencyPairMoneyTradeFetch (array (
            'currency_pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $order = array (
            'currency_pair' => $this->market_id ($market),
            'amount_int' => $amount,
            'type' => $side,
        );
        if ($type == 'limit')
            orderarray ('price_int') = $price;
        $result = $this->privatePostCurrencyPairOrderAdd (array_merge ($order, $params));
        return array (
            'info' => $result,
            'id' => resultarray ('data')
        );
    }

    public function cancel_order ($id) {
        return $this->privatePostCurrencyPairOrderCancel (array ( 'oid' => $id ));
    }

    public function nonce () {
        return $this->milliseconds ();
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $request;
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array ( 'nonce' => $nonce ), $query));
            $secret = base64_decode ($this->secret);
            $auth = $request . "\0" . $body;
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Rest-Key' => $this->apiKey,
                'Rest-Sign' => $this->hmac ($this->encode ($auth), $secret, 'sha512', 'base64'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('result', $response))
            if (responsearray ('result') == 'success')
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class bit2c extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bit2c',
            'name' => 'Bit2C',
            'countries' => 'IL', // Israel
            'rateLimit' => 3000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766119-3593220e-5ece-11e7-8b3a-5a041f6bcc3f.jpg',
                'api' => 'https://www.bit2c.co.il',
                'www' => 'https://www.bit2c.co.il',
                'doc' => array (
                    'https://www.bit2c.co.il/home/api',
                    'https://github.com/OferE/bit2c',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'Exchanges/{pair}/Ticker',
                        'Exchanges/{pair}/orderbook',
                        'Exchanges/{pair}/trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'Account/Balance',
                        'Account/Balance/v2',
                        'Merchant/CreateCheckout',
                        'Order/AccountHistory',
                        'Order/AddCoinFundsRequest',
                        'Order/AddFund',
                        'Order/AddOrder',
                        'Order/AddOrderMarketPriceBuy',
                        'Order/AddOrderMarketPriceSell',
                        'Order/CancelOrder',
                        'Order/MyOrders',
                        'Payment/GetMyId',
                        'Payment/Send',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/NIS' => array ( 'id' => 'BtcNis', 'symbol' => 'BTC/NIS', 'base' => 'BTC', 'quote' => 'NIS' ),
                'LTC/BTC' => array ( 'id' => 'LtcBtc', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
                'LTC/NIS' => array ( 'id' => 'LtcNis', 'symbol' => 'LTC/NIS', 'base' => 'LTC', 'quote' => 'NIS' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $balance = $this->privatePostAccountBalanceV2 ();
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $balance)) {
                $available = 'AVAILABLE_' . $currency;
                accountarray ('free') = balancearray ($available);
                accountarray ('total') = balancearray ($currency);
                accountarray ('used') = accountarray ('total') - accountarray ('free');
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetExchangesPairOrderbook (array_merge (array (
            'pair' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray (0);
                $amount = orderarray (1);
                $timestamp = orderarray (2) * 1000;
                resultarray ($side)[] = array ($price, $amount, $timestamp);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetExchangesPairTicker (array (
            'pair' => $this->market_id ($market),
        ));
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('h')),
            'low' => floatval (tickerarray ('l')),
            'bid' => null,
            'ask' => null,
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('ll')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('av')),
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('a')),
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetExchangesPairTrades (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $method = 'privatePostOrderAddOrder';
        $order = array (
            'Amount' => $amount,
            'Pair' => $this->market_id ($market),
        );
        if ($type == 'market') {
            $method .= 'MarketPrice' . $this->capitalize ($side);
        } else {
            orderarray ('Price') = $price;
            orderarray ('Total') = $amount * $price;
            orderarray ('IsBid') = ($side == 'buy');
        }
        $result = thisarray ($method) (array_merge ($order, $params));
        return array (
            'info' => $result,
            'id' => resultarray ('NewOrder')array ('id'),
        );
    }

    public function cancel_order ($id) {
        return $this->privatePostOrderCancelOrder (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->implode_params ($path, $params);
        if ($api == 'public') {
            $url .= '.json';
        } else {
            $nonce = $this->nonce ();
            $query = array_merge (array ( 'nonce' => $nonce ), $params);
            $body = $this->urlencode ($query);
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'key' => $this->apiKey,
                'sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512', 'base64'),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bitbay extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitbay',
            'name' => 'BitBay',
            'countries' => array ( 'PL', 'EU', ), // Poland
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766132-978a7bd8-5ece-11e7-9540-bc96d1e9bbb8.jpg',
                'www' => 'https://bitbay.net',
                'api' => array (
                    'public' => 'https://bitbay.net/API/Public',
                    'private' => 'https://bitbay.net/API/Trading/tradingApi.php',
                ),
                'doc' => array (
                    'https://bitbay.net/public-api',
                    'https://bitbay.net/account/tab-api',
                    'https://github.com/BitBayNet/API',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{id}/all',
                        '{id}/market',
                        '{id}/orderbook',
                        '{id}/ticker',
                        '{id}/trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'info',
                        'trade',
                        'cancel',
                        'orderbook',
                        'orders',
                        'transfer',
                        'withdraw',
                        'history',
                        'transactions',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'BTCUSD', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'BTC/EUR' => array ( 'id' => 'BTCEUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
                'BTC/PLN' => array ( 'id' => 'BTCPLN', 'symbol' => 'BTC/PLN', 'base' => 'BTC', 'quote' => 'PLN' ),
                'LTC/USD' => array ( 'id' => 'LTCUSD', 'symbol' => 'LTC/USD', 'base' => 'LTC', 'quote' => 'USD' ),
                'LTC/EUR' => array ( 'id' => 'LTCEUR', 'symbol' => 'LTC/EUR', 'base' => 'LTC', 'quote' => 'EUR' ),
                'LTC/PLN' => array ( 'id' => 'LTCPLN', 'symbol' => 'LTC/PLN', 'base' => 'LTC', 'quote' => 'PLN' ),
                'LTC/BTC' => array ( 'id' => 'LTCBTC', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
                'ETH/USD' => array ( 'id' => 'ETHUSD', 'symbol' => 'ETH/USD', 'base' => 'ETH', 'quote' => 'USD' ),
                'ETH/EUR' => array ( 'id' => 'ETHEUR', 'symbol' => 'ETH/EUR', 'base' => 'ETH', 'quote' => 'EUR' ),
                'ETH/PLN' => array ( 'id' => 'ETHPLN', 'symbol' => 'ETH/PLN', 'base' => 'ETH', 'quote' => 'PLN' ),
                'ETH/BTC' => array ( 'id' => 'ETHBTC', 'symbol' => 'ETH/BTC', 'base' => 'ETH', 'quote' => 'BTC' ),
                'LSK/USD' => array ( 'id' => 'LSKUSD', 'symbol' => 'LSK/USD', 'base' => 'LSK', 'quote' => 'USD' ),
                'LSK/EUR' => array ( 'id' => 'LSKEUR', 'symbol' => 'LSK/EUR', 'base' => 'LSK', 'quote' => 'EUR' ),
                'LSK/PLN' => array ( 'id' => 'LSKPLN', 'symbol' => 'LSK/PLN', 'base' => 'LSK', 'quote' => 'PLN' ),
                'LSK/BTC' => array ( 'id' => 'LSKBTC', 'symbol' => 'LSK/BTC', 'base' => 'LSK', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostInfo ();
        $balance = responsearray ('balances');
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $balance)) {
                accountarray ('free') = floatval (balancearray ($currency)array ('available'));
                accountarray ('used') = floatval (balancearray ($currency)array ('locked'));
                accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetIdOrderbook (array_merge (array (
            'id' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetIdTicker (array (
            'id' => $this->market_id ($market),
        ));
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('max')),
            'low' => floatval (tickerarray ('min')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('average')),
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetIdTrades (array (
            'id' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $p = $this->market ($market);
        return $this->privatePostTrade (array_merge (array (
            'type' => $side,
            'currency' => parray ('base'),
            'amount' => $amount,
            'payment_currency' => parray ('quote'),
            'rate' => $price,
        ), $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancel (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        if ($api == 'public') {
            $url .= '/' . $this->implode_params ($path, $params) . '.json';
        } else {
            $body = $this->urlencode (array_merge (array (
                'method' => $path,
                'moment' => $this->nonce (),
            ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'API-Key' => $this->apiKey,
                'API-Hash' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bitbays extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitbays',
            'name' => 'BitBays',
            'countries' => array ( 'CN', 'GB', 'HK', 'AU', 'CA' ),
            'rateLimit' => 1500,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27808599-983687d2-6051-11e7-8d95-80dfcbe5cbb4.jpg',
                'api' => 'https://bitbays.com/api',
                'www' => 'https://bitbays.com',
                'doc' => 'https://bitbays.com/help/api/',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'ticker',
                        'trades',
                        'depth',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'cancel',
                        'info',
                        'orders',
                        'order',
                        'transactions',
                        'trade',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'btc_usd', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'BTC/CNY' => array ( 'id' => 'btc_cny', 'symbol' => 'BTC/CNY', 'base' => 'BTC', 'quote' => 'CNY' ),
                'ODS/BTC' => array ( 'id' => 'ods_btc', 'symbol' => 'ODS/BTC', 'base' => 'ODS', 'quote' => 'BTC' ),
                'LSK/BTC' => array ( 'id' => 'lsk_btc', 'symbol' => 'LSK/BTC', 'base' => 'LSK', 'quote' => 'BTC' ),
                'LSK/CNY' => array ( 'id' => 'lsk_cny', 'symbol' => 'LSK/CNY', 'base' => 'LSK', 'quote' => 'CNY' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostInfo ();
        $balance = responsearray ('result')array ('wallet');
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($lowercase, $balance)) {
                accountarray ('free') = floatval (balancearray ($lowercase)array ('avail'));
                accountarray ('used') = floatval (balancearray ($lowercase)array ('lock'));
                accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $response = $this->publicGetDepth (array_merge (array (
            'market' => $this->market_id ($market),
        ), $params));
        $orderbook = responsearray ('result');
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetTicker (array (
            'market' => $this->market_id ($market),
        ));
        $ticker = responsearray ('result');
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTrades (array (
            'market' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $order = array (
            'market' => $this->market_id ($market),
            'op' => $side,
            'amount' => $amount,
        );
        if ($type == 'market') {
            orderarray ('order_type') = 1;
            orderarray ('price') = $price;
        } else {
            orderarray ('order_type') = 0;
        }
        return $this->privatePostTrade (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancel (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array (
                'nonce' => $nonce,
            ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->secret, 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('status', $response))
            if (responsearray ('status') == 200)
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class bitcoincoid extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitcoincoid',
            'name' => 'Bitcoin.co.id',
            'countries' => 'ID', // Indonesia
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766138-043c7786-5ecf-11e7-882b-809c14f38b53.jpg',
                'api' => array (
                    'public' => 'https://vip.bitcoin.co.id/api',
                    'private' => 'https://vip.bitcoin.co.id/tapi',
                ),
                'www' => 'https://www.bitcoin.co.id',
                'doc' => array (
                    'https://vip.bitcoin.co.id/downloads/BITCOINCOID-API-DOCUMENTATION.pdf',
                    'https://vip.bitcoin.co.id/trade_api',            
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{pair}/ticker',
                        '{pair}/trades',
                        '{pair}/depth',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'getInfo',
                        'transHistory',
                        'trade',
                        'tradeHistory',
                        'openOrders',
                        'cancelOrder',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/IDR' =>  array ( 'id' => 'btc_idr', 'symbol' => 'BTC/IDR', 'base' => 'BTC', 'quote' => 'IDR', 'baseId' => 'btc', 'quoteId' => 'idr' ),
                'BTS/BTC' =>  array ( 'id' => 'bts_btc', 'symbol' => 'BTS/BTC', 'base' => 'BTS', 'quote' => 'BTC', 'baseId' => 'bts', 'quoteId' => 'btc' ),
                'DASH/BTC' => array ( 'id' => 'drk_btc', 'symbol' => 'DASH/BTC', 'base' => 'DASH', 'quote' => 'BTC', 'baseId' => 'drk', 'quoteId' => 'btc' ),
                'DOGE/BTC' => array ( 'id' => 'doge_btc', 'symbol' => 'DOGE/BTC', 'base' => 'DOGE', 'quote' => 'BTC', 'baseId' => 'doge', 'quoteId' => 'btc' ),
                'ETH/BTC' =>  array ( 'id' => 'eth_btc', 'symbol' => 'ETH/BTC', 'base' => 'ETH', 'quote' => 'BTC', 'baseId' => 'eth', 'quoteId' => 'btc' ),
                'LTC/BTC' =>  array ( 'id' => 'ltc_btc', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC', 'baseId' => 'ltc', 'quoteId' => 'btc' ),
                'NXT/BTC' =>  array ( 'id' => 'nxt_btc', 'symbol' => 'NXT/BTC', 'base' => 'NXT', 'quote' => 'BTC', 'baseId' => 'nxt', 'quoteId' => 'btc' ),
                'STR/BTC' =>  array ( 'id' => 'str_btc', 'symbol' => 'STR/BTC', 'base' => 'STR', 'quote' => 'BTC', 'baseId' => 'str', 'quoteId' => 'btc' ),
                'NEM/BTC' =>  array ( 'id' => 'nem_btc', 'symbol' => 'NEM/BTC', 'base' => 'NEM', 'quote' => 'BTC', 'baseId' => 'nem', 'quoteId' => 'btc' ),
                'XRP/BTC' =>  array ( 'id' => 'xrp_btc', 'symbol' => 'XRP/BTC', 'base' => 'XRP', 'quote' => 'BTC', 'baseId' => 'xrp', 'quoteId' => 'btc' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostGetInfo ();
        $balance = responsearray ('return')array ('balance');
        $frozen = responsearray ('return')array ('balance_hold');
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($lowercase, $balance)) {
                accountarray ('free') = floatval (balancearray ($lowercase));
            }
            if (array_key_exists ($lowercase, $frozen)) {
                accountarray ('used') = floatval (frozenarray ($lowercase));
            }
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetPairDepth (array_merge (array (
            'pair' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'buy', 'asks' => 'sell' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $pair = $this->market ($market);
        $response = $this->publicGetPairTicker (array (
            'pair' => pairarray ('id'),
        ));
        $ticker = responsearray ('ticker');
        $timestamp = floatval (tickerarray ('server_time')) * 1000;
        $baseVolume = 'vol_' . strtolower (pairarray ('baseId'));
        $quoteVolume = 'vol_' . strtolower (pairarray ('quoteId'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ($baseVolume)),
            'quoteVolume' => floatval (tickerarray ($quoteVolume)),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetPairTrades (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $p = $this->market ($market);
        $order = array (
            'pair' => parray ('id'),
            'type' => $side,
            'price' => $price,
        );
        $base = strtolower (parray ('base'));
        orderarray ($base) = $amount;
        return $this->privatePostTrade (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        return $this->privatePostCancelOrder (array_merge (array (
            'id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        if ($api == 'public') {
            $url .= '/' . $this->implode_params ($path, $params);
        } else {
            $body = $this->urlencode (array_merge (array (
                'method' => $path,
                'nonce' => $this->nonce (),
            ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . responsearray ('error'));
        return $response;        
    }
}

//-----------------------------------------------------------------------------

class bitfinex extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitfinex',
            'name' => 'Bitfinex',
            'countries' => 'US',
            'version' => 'v1',
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766244-e328a50c-5ed2-11e7-947b-041416579bb3.jpg',
                'api' => 'https://api.bitfinex.com',
                'www' => 'https://www.bitfinex.com',
                'doc' => array (
                    'https://bitfinex.readme.io/v1/docs',
                    'https://bitfinex.readme.io/v2/docs',
                    'https://github.com/bitfinexcom/bitfinex-api-node',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'book/{symbol}',
                        'candles/{symbol}',
                        'lendbook/{currency}',
                        'lends/{currency}',
                        'pubticker/{symbol}',
                        'stats/{symbol}',
                        'symbols',
                        'symbols_details',
                        'today',
                        'trades/{symbol}',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'account_infos',
                        'balances',
                        'basket_manage',
                        'credits',
                        'deposit/new',
                        'funding/close',
                        'history',
                        'history/movements',
                        'key_info',
                        'margin_infos',
                        'mytrades',
                        'offer/cancel',
                        'offer/new',
                        'offer/status',
                        'offers',
                        'order/cancel',
                        'order/cancel/all',
                        'order/cancel/multi',
                        'order/cancel/replace',
                        'order/new',
                        'order/new/multi',
                        'order/status',
                        'orders',
                        'position/claim',
                        'positions',
                        'summary',
                        'taken_funds',
                        'total_taken_funds',
                        'transfer',
                        'unused_taken_funds',
                        'withdraw',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetSymbolsDetails ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = strtoupper (marketarray ('pair'));
            $baseId = mb_substr ($id, 0, 3);
            $quoteId = mb_substr ($id, 3, 6);
            $base = $baseId;
            $quote = $quoteId;
            // issue #4 Bitfinex names Dash as DSH, instead of DASH
            if ($base == 'DSH')
                $base = 'DASH';
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'baseId' => $baseId,
                'quoteId' => $quoteId,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostBalances ();
        $balances = array ();
        for ($b = 0; $b < count ($response); $b++) {
            $account = responsearray ($b);
            if (accountarray ('type') == 'exchange') {
                $currency = accountarray ('currency');
                // issue #4 Bitfinex names Dash as DSH, instead of DASH
                if ($currency == 'DSH')
                    $currency = 'DASH';
                $uppercase = strtoupper ($currency);
                balancesarray ($uppercase) = $account;
            }
        }
        $result = array ( 'info' => $response );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $balances)) {
                accountarray ('free') = floatval (balancesarray ($currency)array ('available'));
                accountarray ('total') = floatval (balancesarray ($currency)array ('amount'));
                accountarray ('used') = accountarray ('total') - accountarray ('free');
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetBookSymbol (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('amount'));
                $timestamp = intval (floatval (orderarray ('timestamp')));
                resultarray ($side)[] = array ($price, $amount, $timestamp);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $ticker = $this->publicGetPubtickerSymbol (array (
            'symbol' => $this->market_id ($market),
        ));
        $timestamp = floatval (tickerarray ('timestamp')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last_price')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('mid')),
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTradesSymbol (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'symbol' => $this->market_id ($market),
            'amount' => (string) $amount,
            'side' => $side,
            'type' => 'exchange ' . $type,
            'ocoorder' => false,
            'buy_price_oco' => 0,
            'sell_price_oco' => 0,
        );
        if ($type == 'market') {
            orderarray ('price') = (string) $this->nonce ();
        } else {
            orderarray ('price') = $price;
        }
        return $this->privatePostOrderNew (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostOrderCancel (array ( 'order_id' => $id ));
    }

    public function nonce () {
        return $this->milliseconds ();
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        $url = $this->urlsarray ('api') . $request;
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $query = array_merge (array (
                'nonce' => (string) $nonce,
                'request' => $request,
            ), $query);
            $query = $this->json ($query);
            $query = $this->encode ($query);
            $payload = base64_encode ($query);
            $secret = $this->encode ($this->secret);
            $headers = array (
                'X-BFX-APIKEY' => $this->apiKey,
                'X-BFX-PAYLOAD' => $payload,
                'X-BFX-SIGNATURE' => $this->hmac ($payload, $secret, 'sha384'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('message', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class bitflyer extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitflyer',
            'name' => 'bitFlyer',
            'countries' => 'JP',
            'version' => 'v1',
            'rateLimit' => 500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28051642-56154182-660e-11e7-9b0d-6042d1e6edd8.jpg',
                'api' => 'https://api.bitflyer.jp',
                'www' => 'https://bitflyer.jp',
                'doc' => 'https://bitflyer.jp/API',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'getmarkets',    // or 'markets'
                        'getboard',      // or 'board'
                        'getticker',     // or 'ticker'
                        'getexecutions', // or 'executions'
                        'gethealth',
                        'getchats',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'getpermissions',
                        'getbalance',
                        'getcollateral',
                        'getcollateralaccounts',
                        'getaddresses',
                        'getcoinins',
                        'getcoinouts',
                        'getbankaccounts',
                        'getdeposits',
                        'getwithdrawals',
                        'getchildorders',
                        'getparentorders',
                        'getparentorder',
                        'getexecutions',
                        'getpositions',
                        'gettradingcommission',
                    ),
                    'post' => array (
                        'sendcoin',
                        'withdraw',
                        'sendchildorder',
                        'cancelchildorder',
                        'sendparentorder',
                        'cancelparentorder',
                        'cancelallchildorders',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetMarkets ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('product_code');
            $currencies = explode ('_', $id);
            $base = null;
            $quote = null;
            $symbol = $id;
            $numCurrencies = count ($currencies);
            if ($numCurrencies == 2) {
                $base = currenciesarray (0);
                $quote = currenciesarray (1);
                $symbol = $base . '/' . $quote;
            }
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetBalance ();
        $balances = array ();
        for ($b = 0; $b < count ($response); $b++) {
            $account = responsearray ($b);
            $currency = accountarray ('currency_code');
            balancesarray ($currency) = $account;
        }
        $result = array ( 'info' => $response );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $balances)) {
                accountarray ('total') = balancesarray ($currency)array ('amount');
                accountarray ('free') = balancesarray ($currency)array ('available');                
                accountarray ('used') = accountarray ('total') - accountarray ('free');
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetBoard (array_merge (array (
            'product_code' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('size'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $ticker = $this->publicGetTicker (array (
            'product_code' => $this->market_id ($market),
        ));
        $timestamp = $this->parse8601 (tickerarray ('timestamp'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('best_bid')),
            'ask' => floatval (tickerarray ('best_ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('ltp')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('volume_by_product')),
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetExecutions (array (
            'product_code' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'product_code' => $this->market_id ($market),
            'child_order_type' => strtoupper ($type),
            'side' => strtoupper ($side),
            'price' => $price,
            'size' => $amount,
        );
        return $this->privatePostSendparentorder (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostCancelparentorder (array_merge (array (
            'parent_order_id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = '/' . $this->version . '/' . $path;
        if ($api == 'private')
            $request = '/me' . $request;
        $url = $this->urlsarray ('api') . $request;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = (string) $this->nonce ();
            $body = $this->json ($params);
            $auth = implode ('', array ($nonce, $method, $request, $body));
            $headers = array (
                'ACCESS-KEY' => $this->apiKey,
                'ACCESS-TIMESTAMP' => $nonce,
                'ACCESS-SIGN' => $this->hmac ($this->encode ($auth), $this->secret),
                'Content-Type' => 'application/json',
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bitlish extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitlish',
            'name' => 'bitlish',
            'countries' => array ( 'GB', 'EU', 'RU', ),
            'rateLimit' => 1500,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766275-dcfc6c30-5ed3-11e7-839d-00a846385d0b.jpg',
                'api' => 'https://bitlish.com/api',
                'www' => 'https://bitlish.com',
                'doc' => 'https://bitlish.com/api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'instruments',
                        'ohlcv',
                        'pairs',
                        'tickers',
                        'trades_depth',
                        'trades_history',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'accounts_operations',
                        'balance',
                        'cancel_trade',
                        'cancel_trades_by_ids',
                        'cancel_all_trades',
                        'create_bcode',
                        'create_template_wallet',
                        'create_trade',
                        'deposit',
                        'list_accounts_operations_from_ts',
                        'list_active_trades',
                        'list_bcodes',
                        'list_my_matches_from_ts',
                        'list_my_trades',
                        'list_my_trads_from_ts',
                        'list_payment_methods',
                        'list_payments',
                        'redeem_code',
                        'resign',
                        'signin',
                        'signout',
                        'trade_details',
                        'trade_options',
                        'withdraw',
                        'withdraw_by_id',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetPairs ();
        $result = array ();
        $keys = array_keys ($markets);
        for ($p = 0; $p < count ($keys); $p++) {
            $market = marketsarray ($keys[$p)];
            $id = marketarray ('id');
            $symbol = marketarray ('name');
            list ($base, $quote) = explode ('/', $symbol);
            // issue #4 bitlish names Dash as DSH, instead of DASH
            if ($base == 'DSH')
                $base = 'DASH';
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('max')),
            'low' => floatval (tickerarray ('min')),
            'bid' => null,
            'ask' => null,
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => floatval (tickerarray ('first')),
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => null,
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetTickers ();
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $tickers = $this->publicGetTickers ();
        $ticker = tickersarray ($p['id')];
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetTradesDepth (array_merge (array (
            'pair_id' => $this->market_id ($market),
        ), $params));
        $timestamp = intval (intval (orderbookarray ('last')) / 1000);
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'bid', 'asks' => 'ask' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('volume'));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTradesHistory (array (
            'pair_id' => $this->market_id ($market),
        ));
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostBalance ();
        $result = array ( 'info' => $response );
        $currencies = array_keys ($response);
        $balance = array ();
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $account = responsearray ($currency);
            $currency = strtoupper ($currency);
            // issue #4 bitlish names Dash as DSH, instead of DASH
            if ($currency == 'DSH')
                $currency = 'DASH';
            balancearray ($currency) = $account;
        }
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $balance)) {
                accountarray ('free') = floatval (balancearray ($currency)array ('funds'));
                accountarray ('used') = floatval (balancearray ($currency)array ('holded'));                
                accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function sign_in () {
        return $this->privatePostSignin (array (
            'login' => $this->login,
            'passwd' => $this->password,
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'pair_id' => $this->market_id ($market),
            'dir' => ($side == 'buy') ? 'bid' : 'ask',
            'amount' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return $this->privatePostCreateTrade (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostCancelTrade (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $body = $this->json (array_merge (array ( 'token' => $this->apiKey ), $params));
            $headers = array ( 'Content-Type' => 'application/json' );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bitmarket extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitmarket',
            'name' => 'BitMarket',
            'countries' => array ( 'PL', 'EU', ),
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27767256-a8555200-5ef9-11e7-96fd-469a65e2b0bd.jpg',
                'api' => array (
                    'public' => 'https://www.bitmarket.net',
                    'private' => 'https://www.bitmarket.pl/api2/', // last slash is critical
                ),
                'www' => array (
                    'https://www.bitmarket.pl',
                    'https://www.bitmarket.net',
                ),
                'doc' => array (
                    'https://www.bitmarket.net/docs.php?file=api_public.html',
                    'https://www.bitmarket.net/docs.php?file=api_private.html',
                    'https://github.com/bitmarket-net/api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'json/{market}/ticker',
                        'json/{market}/orderbook',
                        'json/{market}/trades',
                        'json/ctransfer',
                        'graphs/{market}/90m',
                        'graphs/{market}/6h',
                        'graphs/{market}/1d',
                        'graphs/{market}/7d',
                        'graphs/{market}/1m',
                        'graphs/{market}/3m',
                        'graphs/{market}/6m',
                        'graphs/{market}/1y',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'info',
                        'trade',
                        'cancel',
                        'orders',
                        'trades',
                        'history',
                        'withdrawals',
                        'tradingdesk',
                        'tradingdeskStatus',
                        'tradingdeskConfirm',
                        'cryptotradingdesk',
                        'cryptotradingdeskStatus',
                        'cryptotradingdeskConfirm',
                        'withdraw',
                        'withdrawFiat',
                        'withdrawPLNPP',
                        'withdrawFiatFast',
                        'deposit',
                        'transfer',
                        'transfers',
                        'marginList',
                        'marginOpen',
                        'marginClose',
                        'marginCancel',
                        'marginModify',
                        'marginBalanceAdd',
                        'marginBalanceRemove',
                        'swapList',
                        'swapOpen',
                        'swapClose',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/PLN' => array ( 'id' => 'BTCPLN', 'symbol' => 'BTC/PLN', 'base' => 'BTC', 'quote' => 'PLN' ),
                'BTC/EUR' => array ( 'id' => 'BTCEUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
                'LTC/PLN' => array ( 'id' => 'LTCPLN', 'symbol' => 'LTC/PLN', 'base' => 'LTC', 'quote' => 'PLN' ),
                'LTC/BTC' => array ( 'id' => 'LTCBTC', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
                'LiteMineX/BTC' => array ( 'id' => 'LiteMineXBTC', 'symbol' => 'LiteMineX/BTC', 'base' => 'LiteMineX', 'quote' => 'BTC' ),
                'PlnX/BTC' => array ( 'id' => 'PlnxBTC', 'symbol' => 'PlnX/BTC', 'base' => 'PlnX', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostInfo ();
        $data = responsearray ('data');
        $balance = dataarray ('balances');
        $result = array ( 'info' => $data );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, balancearray ('available')))
                accountarray ('free') = balancearray ('available')array ($currency);
            if (array_key_exists ($currency, balancearray ('blocked')))
                accountarray ('used') = balancearray ('blocked')array ($currency);
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetJsonMarketOrderbook (array_merge (array (
            'market' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;

    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetJsonMarketTicker (array (
            'market' => $this->market_id ($market),
        ));
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetJsonMarketTrades (array (
            'market' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        return $this->privatePostTrade (array_merge (array (
            'market' => $this->market_id ($market),
            'type' => $side,
            'amount' => $amount,
            'rate' => $price,
        ), $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancel (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        if ($api == 'public') {
            $url .= '/' . $this->implode_params ($path . '.json', $params);
        } else {
            $nonce = $this->nonce ();
            $query = array_merge (array (
                'tonce' => $nonce,
                'method' => $path,
            ), $params);
            $body = $this->urlencode ($query);
            $headers = array (
                'API-Key' => $this->apiKey,
                'API-Hash' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bitmex extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitmex',
            'name' => 'BitMEX',
            'countries' => 'SC', // Seychelles
            'version' => 'v1',
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766319-f653c6e6-5ed4-11e7-933d-f0bc3699ae8f.jpg',
                'api' => 'https://www.bitmex.com',
                'www' => 'https://www.bitmex.com',
                'doc' => array (
                    'https://www.bitmex.com/app/apiOverview',
                    'https://github.com/BitMEX/api-connectors/tree/master/official-http',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'announcement',
                        'announcement/urgent',
                        'funding',
                        'instrument',
                        'instrument/active',
                        'instrument/activeAndIndices',
                        'instrument/activeIntervals',
                        'instrument/compositeIndex',
                        'instrument/indices',
                        'insurance',
                        'leaderboard',
                        'liquidation',
                        'orderBook',
                        'orderBook/L2',
                        'quote',
                        'quote/bucketed',
                        'schema',
                        'schema/websocketHelp',
                        'settlement',
                        'stats',
                        'stats/history',
                        'trade',
                        'trade/bucketed',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'apiKey',
                        'chat',
                        'chat/channels',
                        'chat/connected',
                        'execution',
                        'execution/tradeHistory',
                        'notification',
                        'order',
                        'position',
                        'user',
                        'user/affiliateStatus',
                        'user/checkReferralCode',
                        'user/commission',
                        'user/depositAddress',
                        'user/margin',
                        'user/minWithdrawalFee',
                        'user/wallet',
                        'user/walletHistory',
                        'user/walletSummary',
                    ),
                    'post' => array (
                        'apiKey',
                        'apiKey/disable',
                        'apiKey/enable',
                        'chat',
                        'order',
                        'order/bulk',
                        'order/cancelAllAfter',
                        'order/closePosition',
                        'position/isolate',
                        'position/leverage',
                        'position/riskLimit',
                        'position/transferMargin',
                        'user/cancelWithdrawal',
                        'user/confirmEmail',
                        'user/confirmEnableTFA',
                        'user/confirmWithdrawal',
                        'user/disableTFA',
                        'user/logout',
                        'user/logoutAll',
                        'user/preferences',
                        'user/requestEnableTFA',
                        'user/requestWithdrawal',
                    ),
                    'put' => array (
                        'order',
                        'order/bulk',
                        'user',
                    ),
                    'delete' => array (
                        'apiKey',
                        'order',
                        'order/all',
                    ),
                )
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetInstrumentActive ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('symbol');
            $base = marketarray ('underlying');
            $quote = marketarray ('quoteCurrency');
            $isFuturesContract = $id != ($base . $quote);
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $symbol = $isFuturesContract ? $id : ($base . '/' . $quote);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetUserMargin (array ( 'currency' => 'all' ));
        $result = array ( 'info' => $response );
        for ($b = 0; $b < count ($response); $b++) {
            $balance = responsearray ($b);
            $currency = strtoupper (balancearray ('currency'));
            $currency = $this->commonCurrencyCode ($currency);
            $account = array (
                'free' => balancearray ('availableMargin'),
                'used' => null,
                'total' => balancearray ('amount'),
            );
            if ($currency == 'BTC') {
                accountarray ('free') = accountarray ('free') * 0.00000001;
                accountarray ('total') = accountarray ('total') * 0.00000001;
            }
            accountarray ('used') = accountarray ('total') - accountarray ('free');
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetOrderBookL2 (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        for ($o = 0; $o < count ($orderbook); $o++) {
            $order = orderbookarray ($o);
            $side = (orderarray ('side') == 'Sell') ? 'asks' : 'bids';
            $amount = orderarray ('size');
            $price = orderarray ('price');
            resultarray ($side)[] = array ($price, $amount);
        }
        resultarray ('bids') = $this->sort_by (resultarray ('bids'), 0, true);
        resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $request = array (
            'symbol' => $this->market_id ($market),
            'binSize' => '1d',
            'partial' => true,
            'count' => 1,
            'reverse' => true,
        );
        $quotes = $this->publicGetQuoteBucketed ($request);
        $quotesLength = count ($quotes);
        $quote = quotesarray ($quotesLength - 1);
        $tickers = $this->publicGetTradeBucketed ($request);
        $ticker = tickersarray (0);
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (quotearray ('bidPrice')),
            'ask' => floatval (quotearray ('askPrice')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => null,
            'close' => floatval (tickerarray ('close')),
            'first' => null,
            'last' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('homeNotional')),
            'quoteVolume' => floatval (tickerarray ('foreignNotional')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrade (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'symbol' => $this->market_id ($market),
            'side' => $this->capitalize ($side),
            'orderQty' => $amount,
            'ordType' => $this->capitalize ($type),
        );
        if ($type == 'limit')
            orderarray ('rate') = $price;
        return $this->privatePostOrder (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privateDeleteOrder (array ( 'orderID' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $query = '/$api/' . $this->version . '/' . $path;
        if ($params)
            $query .= '?' . $this->urlencode ($params);
        $url = $this->urlsarray ('api') . $query;
        if ($api == 'private') {
            $nonce = (string) $this->nonce ();
            if ($method == 'POST')
                if ($params)
                    $body = $this->json ($params);
            $request = implode ('', array ($method, $query, $nonce, $body || ''));
            $headers = array (
                'Content-Type' => 'application/json',
                'api-nonce' => $nonce,
                'api-key' => $this->apiKey,
                'api-signature' => $this->hmac ($this->encode ($request), $this->encode ($this->secret)),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bitso extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitso',
            'name' => 'Bitso',
            'countries' => 'MX', // Mexico
            'rateLimit' => 2000, // 30 requests per minute
            'version' => 'v3',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766335-715ce7aa-5ed5-11e7-88a8-173a27bb30fe.jpg',
                'api' => 'https://api.bitso.com',
                'www' => 'https://bitso.com',
                'doc' => 'https://bitso.com/api_info',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'available_books',
                        'ticker',
                        'order_book',
                        'trades',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'account_status',
                        'balance',
                        'fees',
                        'fundings',
                        'fundings/{fid}',
                        'funding_destination',
                        'kyc_documents',
                        'ledger',
                        'ledger/trades',
                        'ledger/fees',
                        'ledger/fundings',
                        'ledger/withdrawals',
                        'mx_bank_codes',
                        'open_orders',
                        'order_trades/{oid}',
                        'orders/{oid}',
                        'user_trades',
                        'user_trades/{tid}',
                        'withdrawals/',
                        'withdrawals/{wid}',
                    ),
                    'post' => array (
                        'bitcoin_withdrawal',
                        'debit_card_withdrawal',
                        'ether_withdrawal',
                        'orders',
                        'phone_number',
                        'phone_verification',
                        'phone_withdrawal',
                        'spei_withdrawal',
                    ),
                    'delete' => array (
                        'orders/{oid}',
                        'orders/all',
                    ),
                )
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetAvailableBooks ();
        $result = array ();
        for ($p = 0; $p < count (marketsarray ('payload')); $p++) {
            $market = marketsarray ('payload')array ($p);
            $id = marketarray ('book');
            $symbol = str_replace ('_', '/', strtoupper ($id));
            list ($base, $quote) = explode ('/', $symbol);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetBalance ();
        $balances = responsearray ('payload')array ('balances');
        $result = array ( 'info' => $response );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = strtoupper (balancearray ('currency'));
            $account = array (
                'free' => floatval (balancearray ('available')),
                'used' => floatval (balancearray ('locked')),
                'total' => floatval (balancearray ('total')),
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $response = $this->publicGetOrderBook (array_merge (array (
            'book' => $this->market_id ($market),
        ), $params));
        $orderbook = responsearray ('payload');
        $timestamp = $this->parse8601 (orderbookarray ('updated_at'));
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('amount'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $response = $this->publicGetTicker (array (
            'book' => $this->market_id ($market),
        ));
        $ticker = responsearray ('payload');
        $timestamp = $this->parse8601 (tickerarray ('created_at'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrades (array (
            'book' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'book' => $this->market_id ($market),
            'side' => $side,
            'type' => $type,
            'major' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return $this->privatePostOrders (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privateDeleteOrders (array ( 'oid' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $query = '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $url = $this->urlsarray ('api') . $query;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            if ($params)
                $body = $this->json ($params);
            $nonce = (string) $this->nonce ();
            $request = implode ('', array ($nonce, $method, $query, $body || ''));
            $signature = $this->hmac ($this->encode ($request), $this->encode ($this->secret));
            $auth = $this->apiKey . ':' . $nonce . ':' . $signature;
            $headers = array ( 'Authorization' => "Bitso " . $auth );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('success', $response))
            if (responsearray ('success'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class bitstamp extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bitstamp',
            'name' => 'Bitstamp',
            'countries' => 'GB',
            'rateLimit' => 1000,
            'version' => 'v2',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27786377-8c8ab57e-5fe9-11e7-8ea4-2b05b6bcceec.jpg',
                'api' => 'https://www.bitstamp.net/api',
                'www' => 'https://www.bitstamp.net',
                'doc' => 'https://www.bitstamp.net/api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'order_book/{id}/',
                        'ticker_hour/{id}/',
                        'ticker/{id}/',
                        'transactions/{id}/',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balance/',
                        'balance/{id}/',
                        'buy/{id}/',
                        'buy/market/{id}/',
                        'cancel_order/',
                        'liquidation_address/info/',
                        'liquidation_address/new/',
                        'open_orders/all/',
                        'open_orders/{id}/',
                        'sell/{id}/',
                        'sell/market/{id}/',
                        'transfer-from-main/',
                        'transfer-to-main/',
                        'user_transactions/',
                        'user_transactions/{id}/',
                        'withdrawal/cancel/',
                        'withdrawal/open/',
                        'withdrawal/status/',
                        'xrp_address/',
                        'xrp_withdrawal/',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'btcusd', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'BTC/EUR' => array ( 'id' => 'btceur', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
                'EUR/USD' => array ( 'id' => 'eurusd', 'symbol' => 'EUR/USD', 'base' => 'EUR', 'quote' => 'USD' ),
                'XRP/USD' => array ( 'id' => 'xrpusd', 'symbol' => 'XRP/USD', 'base' => 'XRP', 'quote' => 'USD' ),
                'XRP/EUR' => array ( 'id' => 'xrpeur', 'symbol' => 'XRP/EUR', 'base' => 'XRP', 'quote' => 'EUR' ),
                'XRP/BTC' => array ( 'id' => 'xrpbtc', 'symbol' => 'XRP/BTC', 'base' => 'XRP', 'quote' => 'BTC' ),
                'LTC/USD' => array ( 'id' => 'ltcusd', 'symbol' => 'LTC/USD', 'base' => 'LTC', 'quote' => 'USD' ),
                'LTC/EUR' => array ( 'id' => 'ltceur', 'symbol' => 'LTC/EUR', 'base' => 'LTC', 'quote' => 'EUR' ),
                'LTC/BTC' => array ( 'id' => 'ltcbtc', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetOrderBookId (array_merge (array (
            'id' => $this->market_id ($market),
        ), $params));
        $timestamp = intval (orderbookarray ('timestamp')) * 1000;
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetTickerId (array (
            'id' => $this->market_id ($market),
        ));
        $timestamp = intval (tickerarray ('timestamp')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTransactionsId (array (
            'id' => $this->market_id ($market),
        ));
    }

    public function fetch_balance () {
        $balance = $this->privatePostBalance ();
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $total = $lowercase . '_balance';
            $free = $lowercase . '_available';
            $used = $lowercase . '_reserved';
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($free, $balance))
                accountarray ('free') = floatval (balancearray ($free));
            if (array_key_exists ($used, $balance))
                accountarray ('used') = floatval (balancearray ($used));
            if (array_key_exists ($total, $balance))
                accountarray ('total') = floatval (balancearray ($total));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $method = 'privatePost' . $this->capitalize ($side);
        $order = array (
            'id' => $this->market_id ($market),
            'amount' => $amount,
        );
        if ($type == 'market')
            $method .= 'Market';
        else
            orderarray ('price') = $price;
        $method .= 'Id';
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancelOrder (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            if (!$this->uid)
                throw new AuthenticationError ($this->id . ' requires `' . $this->id . '.uid` property for authentication');
            $nonce = (string) $this->nonce ();
            $auth = $nonce . $this->uid . $this->apiKey;
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($this->secret));
            $query = array_merge (array (
                'key' => $this->apiKey,
                'signature' => strtoupper ($signature),
                'nonce' => $nonce,
            ), $query);
            $body = $this->urlencode ($query);
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bittrex extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bittrex',
            'name' => 'Bittrex',
            'countries' => 'US',
            'version' => 'v1.1',
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766352-cf0b3c26-5ed5-11e7-82b7-f3826b7a97d8.jpg',
                'api' => 'https://bittrex.com/api',
                'www' => 'https://bittrex.com',
                'doc' => array (
                    'https://bittrex.com/Home/Api',
                    'https://www.npmjs.org/package/node.bittrex.api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'currencies',
                        'markethistory',
                        'markets',
                        'marketsummaries',
                        'marketsummary',
                        'orderbook',
                        'ticker',
                    ),
                ),
                'account' => array (
                    'get' => array (
                        'balance',
                        'balances',
                        'depositaddress',
                        'deposithistory',
                        'order',
                        'orderhistory',
                        'withdrawalhistory',
                        'withdraw',
                    ),
                ),
                'market' => array (
                    'get' => array (
                        'buylimit',
                        'buymarket',
                        'cancel',
                        'openorders',
                        'selllimit',
                        'sellmarket',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetMarkets ();
        $result = array ();
        for ($p = 0; $p < count (marketsarray ('result')); $p++) {
            $market = marketsarray ('result')array ($p);
            $id = marketarray ('MarketName');
            $base = marketarray ('MarketCurrency');
            $quote = marketarray ('BaseCurrency');
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->accountGetBalances ();
        $balances = responsearray ('result');
        $result = array ( 'info' => $balances );
        $indexed = $this->index_by ($balances, 'Currency');
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $indexed)) {
                $balance = indexedarray ($currency);
                accountarray ('free') = balancearray ('Available');
                accountarray ('used') = balancearray ('Balance') - balancearray ('Available');
                accountarray ('total') = balancearray ('Balance');
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function parse_bidask ($bidask) {
        $price = floatval (bidaskarray ('Rate'));
        $amount = floatval (bidaskarray ('Quantity'));
        return array ($price, $amount);
    }

    public function parse_bidasks ($bidasks) {
        $result = array ();
        for ($i = 0; $i < count ($bidasks); $i++) {
            $result[] = $this->parse_bidask (bidasksarray ($i));
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $response = $this->publicGetOrderbook (array_merge (array (
            'market' => $this->market_id ($market),
            'type' => 'both',
            'depth' => 50,
        ), $params));
        $orderbook = responsearray ('result');
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'buy', 'asks' => 'sell' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            resultarray ($key) = $this->parse_bidasks (orderbookarray ($side));
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->parse8601 (tickerarray ('TimeStamp'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('High')),
            'low' => floatval (tickerarray ('Low')),
            'bid' => floatval (tickerarray ('Bid')),
            'ask' => floatval (tickerarray ('Ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('Last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('BaseVolume')),
            'quoteVolume' => floatval (tickerarray ('Volume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $response = $this->publicGetMarketsummaries ();
        $tickers = responsearray ('result');
        $result = array ();
        for ($t = 0; $t < count ($tickers); $t++) {
            $ticker = tickersarray ($t);
            $id = tickerarray ('MarketName');
            $market = null;
            $symbol = $id;
            if (array_key_exists ($id, $this->markets_by_id)) {
                $market = $this->markets_by_idarray ($id);
                $symbol = marketarray ('symbol');
            } else {
                list ($quote, $base) = explode ('-', $id);
                $base = $this->commonCurrencyCode ($base);
                $quote = $this->commonCurrencyCode ($quote);
                $symbol = $base . '/' . $quote;                
            }
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $m = $this->market ($market);
        $response = $this->publicGetMarketsummary (array (
            'market' => marray ('id'),
        ));
        $ticker = responsearray ('result')array (0);
        return $this->parse_ticker ($ticker, $m);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetMarkethistory (array (
            'market' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $method = 'marketGet' . $this->capitalize ($side) . $type;
        $order = array (
            'market' => $this->market_id ($market),
            'quantity' => $amount,
        );
        if ($type == 'limit')
            orderarray ('rate') = $price;
        $response = thisarray ($method) (array_merge ($order, $params));
        $result = array (
            'info' => $response,
            'id' => responsearray ('result')array ('uuid'),
        );
        return $result;
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->marketGetCancel (array ( 'uuid' => $id ));
    }

    public function fetchOrder ($id) {
        $this->loadMarkets ();
        $response = $this->accountGetOrder (array ( 'uuid' => $id ));
        $orderInfo = responsearray ('result');
        $orderType = (orderInfoarray ('Type') == 'LIMIT_BUY') ? 'buy' : 'sell';
        $result = array (
            'info' => $response,
            'type' => $orderType,
            'rate' => orderInfoarray ('PricePerUnit'),
            'startingAmount' => orderInfoarray ('Quantity'),
            'remaining' => orderInfoarray ('QuantityRemaining'),
            'isOpen' => orderInfoarray ('IsOpen'),
            'isCanceled' => orderInfoarray ('CancelInitiated'),
        );
        return $result;
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/';
        if ($api == 'public') {
            $url .= $api . '/' . strtolower ($method) . $path;
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = $this->nonce ();
            $url .= $api . '/';
            if ((($api == 'account') && ($path != 'withdraw')) || ($path == 'openorders'))
                $url .= strtolower ($method);
            $url .= $path . '?' . $this->urlencode (array_merge (array (
                'nonce' => $nonce,
                'apikey' => $this->apiKey,
            ), $params));
            $signature = $this->hmac ($this->encode ($url), $this->encode ($this->secret), 'sha512');
            $headers = array ( 'apisign' => $signature );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('success', $response))
            if (responsearray ('success'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class blinktrade extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'blinktrade',
            'name' => 'BlinkTrade',
            'countries' => array ( 'US', 'VE', 'VN', 'BR', 'PK', 'CL' ),
            'rateLimit' => 1000,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27990968-75d9c884-6470-11e7-9073-46756c8e7e8c.jpg',
                'api' => array (
                    'public' => 'https://api.blinktrade.com/api',
                    'private' => 'https://api.blinktrade.com/tapi',
                ),
                'www' => 'https://blinktrade.com',
                'doc' => 'https://blinktrade.com/docs',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{currency}/ticker',    // ?crypto_currency=BTC
                        '{currency}/orderbook', // ?crypto_currency=BTC
                        '{currency}/trades',    // ?crypto_currency=BTC&since=<TIMESTAMP>&limit=<NUMBER>
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'D',   // order
                        'F',   // cancel order
                        'U2',  // balance
                        'U4',  // my orders
                        'U6',  // withdraw
                        'U18', // deposit
                        'U24', // confirm withdrawal
                        'U26', // list withdrawals
                        'U30', // list deposits
                        'U34', // ledger
                        'U70', // cancel withdrawal
                    ),
                ),
            ),
            'markets' => array (
                'BTC/VEF' => array ( 'id' => 'BTCVEF', 'symbol' => 'BTC/VEF', 'base' => 'BTC', 'quote' => 'VEF', 'brokerId' => 1, 'broker' => 'SurBitcoin', ),
                'BTC/VND' => array ( 'id' => 'BTCVND', 'symbol' => 'BTC/VND', 'base' => 'BTC', 'quote' => 'VND', 'brokerId' => 3, 'broker' => 'VBTC', ),
                'BTC/BRL' => array ( 'id' => 'BTCBRL', 'symbol' => 'BTC/BRL', 'base' => 'BTC', 'quote' => 'BRL', 'brokerId' => 4, 'broker' => 'FoxBit', ),
                'BTC/PKR' => array ( 'id' => 'BTCPKR', 'symbol' => 'BTC/PKR', 'base' => 'BTC', 'quote' => 'PKR', 'brokerId' => 8, 'broker' => 'UrduBit', ),
                'BTC/CLP' => array ( 'id' => 'BTCCLP', 'symbol' => 'BTC/CLP', 'base' => 'BTC', 'quote' => 'CLP', 'brokerId' => 9, 'broker' => 'ChileBit', ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        return $this->privatePostU2 (array (
            'BalanceReqID' => $this->nonce (),
        ));
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $orderbook = $this->publicGetCurrencyOrderbook (array_merge (array (
            'currency' => parray ('quote'),
            'crypto_currency' => parray ('base'),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $p = $this->market ($market);
        $ticker = $this->publicGetCurrencyTicker (array (
            'currency' => parray ('quote'),
            'crypto_currency' => parray ('base'),
        ));
        $timestamp = $this->milliseconds ();
        $lowercaseQuote = strtolower (parray ('quote'));
        $quoteVolume = 'vol_' . $lowercaseQuote;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('vol')),
            'quoteVolume' => floatval (tickerarray ($quoteVolume)),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $p = $this->market ($market);
        return $this->publicGetCurrencyTrades (array (
            'currency' => parray ('quote'),
            'crypto_currency' => parray ('base'),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $p = $this->market ($market);
        $order = array (
            'ClOrdID' => $this->nonce (),
            'Symbol' => parray ('id'),
            'Side' => $this->capitalize ($side),
            'OrdType' => 2,
            'Price' => $price,
            'OrderQty' => $amount,
            'BrokerID' => parray ('brokerId'),
        );
        return $this->privatePostD (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        return $this->privatePostF (array_merge (array (
            'ClOrdID' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api) . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = (string) $this->nonce ();
            $request = array_merge (array ( 'MsgType' => $path ), $query);
            $body = $this->json ($request);
            $headers = array (
                'APIKey' => $this->apiKey,
                'Nonce' => $nonce,
                'Signature' => $this->hmac ($this->encode ($nonce), $this->encode ($this->secret)),
                'Content-Type' => 'application/json',
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class bl3p extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bl3p',
            'name' => 'BL3P',
            'countries' => array ( 'NL', 'EU' ), // Netherlands, EU
            'rateLimit' => 1000,
            'version' => '1',
            'comment' => 'An exchange market by BitonicNL',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28501752-60c21b82-6feb-11e7-818b-055ee6d0e754.jpg',
                'api' => 'https://api.bl3p.eu',
                'www' => array (
                    'https://bl3p.eu',
                    'https://bitonic.nl',
                ),
                'doc' => array (
                    'https://github.com/BitonicNL/bl3p-api/tree/master/docs',
                    'https://bl3p.eu/api',
                    'https://bitonic.nl/en/api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{market}/ticker',
                        '{market}/orderbook',
                        '{market}/trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        '{market}/money/depth/full',
                        '{market}/money/order/add',
                        '{market}/money/order/cancel',
                        '{market}/money/order/result',
                        '{market}/money/orders',
                        '{market}/money/orders/history',
                        '{market}/money/trades/fetch',
                        'GENMKT/money/info',
                        'GENMKT/money/deposit_address',
                        'GENMKT/money/new_deposit_address',
                        'GENMKT/money/wallet/history',
                        'GENMKT/money/withdraw',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/EUR' => array ( 'id' => 'BTCEUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
                'LTC/EUR' => array ( 'id' => 'LTCEUR', 'symbol' => 'LTC/EUR', 'base' => 'LTC', 'quote' => 'EUR' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostGENMKTMoneyInfo ();
        $data = responsearray ('data');
        $balance = dataarray ('wallets');
        $result = array ( 'info' => $data );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $balance)) {
                if (array_key_exists ('available', balancearray ($currency))) {
                    accountarray ('free') = floatval (balancearray ($currency)array ('available')array ('value'));
                }
            }
            if (array_key_exists ($currency, $balance)) {
                if (array_key_exists ('balance', balancearray ($currency))) {
                    accountarray ('total') = floatval (balancearray ($currency)array ('balance')array ('value'));
                }
            }
            if (accountarray ('total')) {
                if (accountarray ('free')) {
                    accountarray ('used') = accountarray ('total') - accountarray ('free');
                }
            }
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $response = $this->publicGetMarketOrderbook (array_merge (array (
            'market' => parray ('id'),
        ), $params));
        $orderbook = responsearray ('data');
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray ('price_int') / 100000;
                $amount = orderarray ('amount_int') / 100000000;
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetMarketTicker (array (
            'market' => $this->market_id ($market),
        ));        
        $timestamp = tickerarray ('timestamp') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')array ('24h')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetMarketTrades (array (
            'market' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $p = $this->market ($market);
        $order = array (
            'market' => parray ('id'),
            'amount_int' => $amount,
            'fee_currency' => parray ('quote'),
            'type' => ($side == 'buy') ? 'bid' : 'ask',
        );
        if ($type == 'limit')
            orderarray ('price_int') = $price;
        return $this->privatePostMarketMoneyOrderAdd (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostMarketMoneyOrderCancel (array ( 'order_id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = $this->implode_params ($path, $params);
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $request;
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array ( 'nonce' => $nonce ), $query));
            $secret = base64_decode ($this->secret);
            $auth = $request . "\0" . $body;
            $signature = $this->hmac ($this->encode ($auth), $secret, 'sha512', 'base64');
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Rest-Key' => $this->apiKey,
                'Rest-Sign' => $signature,
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class btcchina extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btcchina',
            'name' => 'BTCChina',
            'countries' => 'CN',
            'rateLimit' => 1500,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766368-465b3286-5ed6-11e7-9a11-0f6467e1d82b.jpg',
                'api' => array (
                    'public' => 'https://data.btcchina.com/data',
                    'private' => 'https://api.btcchina.com/api_trade_v1.php',
                ),
                'www' => 'https://www.btcchina.com',
                'doc' => 'https://www.btcchina.com/apidocs'
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'historydata',
                        'orderbook',
                        'ticker',
                        'trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'BuyIcebergOrder',
                        'BuyOrder',
                        'BuyOrder2',
                        'BuyStopOrder',
                        'CancelIcebergOrder',
                        'CancelOrder',
                        'CancelStopOrder',
                        'GetAccountInfo',
                        'getArchivedOrder',
                        'getArchivedOrders',
                        'GetDeposits',
                        'GetIcebergOrder',
                        'GetIcebergOrders',
                        'GetMarketDepth',
                        'GetMarketDepth2',
                        'GetOrder',
                        'GetOrders',
                        'GetStopOrder',
                        'GetStopOrders',
                        'GetTransactions',
                        'GetWithdrawal',
                        'GetWithdrawals',
                        'RequestWithdrawal',
                        'SellIcebergOrder',
                        'SellOrder',
                        'SellOrder2',
                        'SellStopOrder',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetTicker (array (
            'market' => 'all',
        ));
        $result = array ();
        $keys = array_keys ($markets);
        for ($p = 0; $p < count ($keys); $p++) {
            $key = keysarray ($p);
            $market = marketsarray ($key);
            $parts = explode ('_', $key);
            $id = partsarray (1);
            $base = mb_substr ($id, 0, 3);
            $quote = mb_substr ($id, 3, 6);
            $base = strtoupper ($base);
            $quote = strtoupper ($quote);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostGetAccountInfo ();
        $balances = responsearray ('result');
        $result = array ( 'info' => $balances );

        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($lowercase, balancesarray ('balance')))
                accountarray ('total') = floatval (balancesarray ('balance')array ($lowercase)array ('amount'));
            if (array_key_exists ($lowercase, balancesarray ('frozen')))
                accountarray ('used') = floatval (balancesarray ('frozen')array ($lowercase)array ('amount'));
            accountarray ('free') = accountarray ('total') - accountarray ('used');
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetOrderbook (array_merge (array (
            'market' => $this->market_id ($market),
        ), $params));
        $timestamp = orderbookarray ('date') * 1000;;
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $tickers = $this->publicGetTicker (array (
            'market' => parray ('id'),
        ));
        $ticker = tickersarray ('ticker');
        $timestamp = tickerarray ('date') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => floatval (tickerarray ('open')),
            'close' => floatval (tickerarray ('prev_close')),
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrades (array (
            'market' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $method = 'privatePost' . $this->capitalize ($side) . 'Order2';
        $order = array ();
        $id = strtoupper (parray ('id'));
        if ($type == 'market') {
            orderarray ('params') = array (null, $amount, $id);
        } else {
            orderarray ('params') = array ($price, $amount, $id);
        }
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        $market = paramsarray ('market'); // TODO fixme
        return $this->privatePostCancelOrder (array_merge (array (
            'params' => array ($id, $market), 
        ), $params));
    }

    public function nonce () {
        return $this->microseconds ();
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api) . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            if (!$this->apiKey)
                throw new AuthenticationError ($this->id . ' requires `' . $this->id . '.apiKey` property for authentication');
            if (!$this->secret)
                throw new AuthenticationError ($this->id . ' requires `' . $this->id . '.secret` property for authentication');
            $p = array ();
            if (array_key_exists ('params', $params))
                $p = paramsarray ('params');
            $nonce = $this->nonce ();
            $request = array (
                'method' => $path,
                'id' => $nonce,
                'params' => $p,
            );
            $p = implode (',', $p);
            $body = $this->json ($request);
            $query = (
                'tonce=' . $nonce +
                '&accesskey=' . $this->apiKey +
                '&requestmethod=' . strtolower ($method) +
                '&id=' . $nonce +
                '&$method=' . $path +
                '&$params=' . $p
            );
            $signature = $this->hmac ($this->encode ($query), $this->encode ($this->secret), 'sha1');
            $auth = $this->apiKey . ':' . $signature;
            $headers = array (
                'Content-Length' => strlen ($body),
                'Authorization' => 'Basic ' . base64_encode ($auth),
                'Json-Rpc-Tonce' => $nonce,
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class btce extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btce',
            'name' => 'BTC-e',
            'countries' => array ( 'BG', 'RU' ), // Bulgaria, Russia
            'version' => '3',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27843225-1b571514-611a-11e7-9208-2641a560b561.jpg',
                'api' => array (
                    'public' => 'https://btc-e.com/api',
                    'private' => 'https://btc-e.com/tapi',
                ),
                'www' => 'https://btc-e.com',
                'doc' => array (
                    'https://btc-e.com/api/3/docs',
                    'https://btc-e.com/tapi/docs',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'info',
                        'ticker/{pair}',
                        'depth/{pair}',
                        'trades/{pair}',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'getInfo',
                        'Trade',
                        'ActiveOrders',
                        'OrderInfo',
                        'CancelOrder',
                        'TradeHistory',
                        'TransHistory',
                        'CoinDepositAddress',
                        'WithdrawCoin',
                        'CreateCoupon',
                        'RedeemCoupon',
                    ),
                )
            ),
        ), $options));
    }

    public function fetch_markets () {
        $response = $this->publicGetInfo ();
        $markets = responsearray ('pairs');
        $keys = array_keys ($markets);
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $id = keysarray ($p);
            $market = marketsarray ($id);
            list ($base, $quote) = explode ('_', $id);
            $base = strtoupper ($base);
            $quote = strtoupper ($quote);
            if ($base == 'DSH')
                $base = 'DASH';
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostGetInfo ();
        $balances = responsearray ('return');
        $result = array ( 'info' => $balances );
        $funds = balancesarray ('funds');
        $currencies = array_keys ($funds);
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $uppercase = strtoupper ($currency);
            // they misspell DASH as dsh :/
            if ($uppercase == 'DSH')
                $uppercase = 'DASH';
            $account = array (
                'free' => fundsarray ($currency),
                'used' => null,
                'total' => fundsarray ($currency),
            );
            resultarray ($uppercase) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->publicGetDepthPair (array_merge (array (
            'pair' => parray ('id'),
        ), $params));
        if (parray (array_key_exists ('id'), $response)) {
            $orderbook = responsearray ($p['id')];
            $timestamp = $this->milliseconds ();
            $result = array (
                'bids' => orderbookarray ('bids'),
                'asks' => orderbookarray ('asks'),
                'timestamp' => $timestamp,
                'datetime' => $this->iso8601 ($timestamp),
            );
            resultarray ('bids') = $this->sort_by (resultarray ('bids'), 0, true);
            resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
            return $result;
        }
        throw new ExchangeError ($this->id . ' ' . parray ('symbol') . ' order book is empty or not available');
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $tickers = $this->publicGetTickerPair (array (
            'pair' => parray ('id'),
        ));
        $ticker = tickersarray ($p['id')];
        $timestamp = tickerarray ('updated') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => tickerarray ('high') ? tickerarray ('high') : null,
            'low' => tickerarray ('low') ? tickerarray ('low') : null,
            'bid' => tickerarray ('sell') ? tickerarray ('buy') : null,
            'ask' => tickerarray ('buy') ? tickerarray ('sell') : null,
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => tickerarray ('last') ? tickerarray ('last') : null,
            'change' => null,
            'percentage' => null,
            'average' => tickerarray ('avg') ? tickerarray ('avg') : null,
            'baseVolume' => tickerarray ('vol_cur') ? tickerarray ('vol_cur') : null,
            'quoteVolume' => tickerarray ('vol') ? tickerarray ('vol') : null,
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTradesPair (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'pair' => $this->market_id ($market),
            'type' => $side,
            'amount' => $amount,
            'rate' => $price,
        );
        $response = $this->privatePostTrade (array_merge ($order, $params));
        $result = array (
            'info' => $response,
            'id' => responsearray ('return')array ('order_id'),
        );
        return $result;
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array ( 'order_id' => $id ));
    }

    public function fetchOrder ($id) {
        $this->loadMarkets ();
        $response = $this->privatePostOrderInfo (array ( 'order_id' => $id ));
        $orderInfo = responsearray ('return')array ($id);
        $isCanceled = false;
        $canceled = array (2, 3);
        if (orderInfoarray (array_key_exists ('status'), $canceled))
            $isCanceled = true;
        $result = array (
            'info' => $response,
            'type' => orderInfoarray ('type'),
            'rate' => orderInfoarray ('rate'),
            'startingAmount' => orderInfoarray ('start_amount'),
            'remaining' => orderInfoarray ('amount'),
            'isOpen' => orderInfoarray ('status') == 0,
            'isCanceled' => $isCanceled,
        );
        return $result;
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api) . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array (
                'nonce' => $nonce,
                'method' => $path,
            ), $query));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class btcmarkets extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btcmarkets',
            'name' => 'BTC Markets',
            'countries' => 'AU', // Australia
            'rateLimit' => 1000, // market data cached for 1 second (trades cached for 2 seconds)
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/29142911-0e1acfc2-7d5c-11e7-98c4-07d9532b29d7.jpg',
                'api' => 'https://api.btcmarkets.net',
                'www' => 'https://btcmarkets.net/',
                'doc' => 'https://github.com/BTCMarkets/API',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'market/{id}/tick',
                        'market/{id}/orderbook',
                        'market/{id}/trades',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'account/balance',
                        'account/{id}/tradingfee',
                    ),
                    'post' => array (
                        'fundtransfer/withdrawCrypto',
                        'fundtransfer/withdrawEFT',
                        'order/create',
                        'order/cancel',
                        'order/history',
                        'order/open',
                        'order/trade/history',
                        'order/createBatch', // they promise it's coming soon...
                        'order/detail',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/AUD' => array ( 'id' => 'BTC/AUD', 'symbol' => 'BTC/AUD', 'base' => 'BTC', 'quote' => 'AUD' ),
                'LTC/AUD' => array ( 'id' => 'LTC/AUD', 'symbol' => 'LTC/AUD', 'base' => 'LTC', 'quote' => 'AUD' ),
                'ETH/AUD' => array ( 'id' => 'ETH/AUD', 'symbol' => 'ETH/AUD', 'base' => 'ETH', 'quote' => 'AUD' ),
                'ETC/AUD' => array ( 'id' => 'ETC/AUD', 'symbol' => 'ETC/AUD', 'base' => 'ETC', 'quote' => 'AUD' ),
                'XRP/AUD' => array ( 'id' => 'XRP/AUD', 'symbol' => 'XRP/AUD', 'base' => 'XRP', 'quote' => 'AUD' ),
                'BCH/AUD' => array ( 'id' => 'BCH/AUD', 'symbol' => 'BCH/AUD', 'base' => 'BCH', 'quote' => 'AUD' ),
                'LTC/BTC' => array ( 'id' => 'LTC/BTC', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
                'ETH/BTC' => array ( 'id' => 'ETH/BTC', 'symbol' => 'ETH/BTC', 'base' => 'ETH', 'quote' => 'BTC' ),
                'ETC/BTC' => array ( 'id' => 'ETC/BTC', 'symbol' => 'ETC/BTC', 'base' => 'ETC', 'quote' => 'BTC' ),
                'XRP/BTC' => array ( 'id' => 'XRP/BTC', 'symbol' => 'XRP/BTC', 'base' => 'XRP', 'quote' => 'BTC' ),
                'BCH/BTC' => array ( 'id' => 'BCH/BTC', 'symbol' => 'BCH/BTC', 'base' => 'BCH', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privateGetAccountBalance ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency');
            $multiplier = 100000000;
            $free = floatval (balancearray ('balance') / $multiplier);
            $used = floatval (balancearray ('pendingFunds') / $multiplier);
            $account = array (
                'free' => $free,
                'used' => $used,
                'total' => $this->sum ($free, $used),
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function parse_bidask ($bidask) {
        $price = bidaskarray (0);
        $amount = bidaskarray (1);
        return array ($price, $amount);
    }

    public function parse_bidasks ($bidasks) {
        $result = array ();
        for ($i = 0; $i < count ($bidasks); $i++) {
            $result[] = $this->parse_bidask (bidasksarray ($i));
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $m = $this->market ($market);
        $orderbook = $this->publicGetMarketIdOrderbook (array_merge (array (
            'id' => marray ('id'),
        ), $params));
        $timestamp = orderbookarray ('timestamp') * 1000;
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            resultarray ($side) = $this->parse_bidasks (orderbookarray ($side));
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = tickerarray ('timestamp') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('bestBid')),
            'ask' => floatval (tickerarray ('bestAsk')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('lastPrice')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume24h')),
            'info' => $ticker,
        );
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $m = $this->market ($market);
        $ticker = $this->publicGetMarketIdTick (array (
            'id' => marray ('id'),
        ));
        return $this->parse_ticker ($ticker, $m);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetMarketIdTrades (array (
            // 'since' => 59868345231,
            'id' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $m = $this->market ($market);
        $multiplier = 100000000; // for $price and volume
        // does BTC Markets support $market orders at all?
        $orderSide = ($side == 'buy') ? 'Bid' : 'Ask';
        $order = $this->ordered (array (
            'currency' => marray ('quote'),
            'instrument' => marray ('base'),
            'price' => $price * $multiplier,
            'volume' => $amount * $multiplier,
            'orderSide' => $orderSide,
            'ordertype' => $this->capitalize ($type),
            'clientRequestId' => (string) $this->nonce (),
        ));
        return $this->privatePostOrderCreate (array_merge ($order, $params));
    }

    public function cancel_orders ($ids) {
        $this->loadMarkets ();
        return $this->privatePostOrderCancel (array ( 'order_ids' => $ids ));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->cancelOrders (array ($id));
    }

    public function nonce () {
        return $this->milliseconds ();
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $uri = '/' . $this->implode_params ($path, $params);
        $url = $this->urlsarray ('api') . $uri;
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = (string) $this->nonce ();
            $auth = $uri . "\n" . $nonce . "\n";
            $headers = array (
                'Content-Type' => 'application/json',
                'apikey' => $this->apiKey,
                'timestamp' => $nonce,
            );
            if ($method == 'POST') {
                $body = $this->urlencode ($query);
                headersarray ('Content-Length') = count ($body);
                $auth .= $body;
            }
            $secret = base64_decode ($this->secret);
            $signature = $this->hmac ($this->encode ($auth), $secret, 'sha512', 'base64');
            headersarray ('signature') = $signature;
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'private') {
            if (array_key_exists ('success', $response))
                if (!responsearray ('success'))
                    throw new ExchangeError ($this->id . ' ' . $this->json ($response));
            return $response;            
        }
        return $response;
    }
}

//-----------------------------------------------------------------------------

class btctrader extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btctrader',
            'name' => 'BTCTrader',
            'countries' => array ( 'TR', 'GR', 'PH' ), // Turkey, Greece, Philippines
            'rateLimit' => 1000,
            'comment' => 'base API for BTCExchange, BTCTurk',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27992404-cda1e386-649c-11e7-8dc1-40bbd2897768.jpg',
                'api' => 'https://www.btctrader.com/api',
                'www' => 'https://www.btctrader.com',
                'doc' => 'https://github.com/BTCTrader/broker-api-docs',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'ohlcdata', // ?last=COUNT
                        'orderbook',
                        'ticker',
                        'trades',   // ?last=COUNT (max 50)
        
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'balance',
                        'openOrders',
                        'userTransactions', // ?offset=0&limit=25&sort=asc
        
                    ),
                    'post' => array (
                        'buy',
                        'cancelOrder',
                        'sell',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privateGetBalance ();
        $result = array ( 'info' => $response );
        $base = array ( 
            'free' => responsearray ('bitcoin_available'),
            'used' => responsearray ('bitcoin_reserved'),
            'total' => responsearray ('bitcoin_balance'),
        );
        $quote = array (
            'free' => responsearray ('money_available'),
            'used' => responsearray ('money_reserved'),
            'total' => responsearray ('money_balance'),
        );
        $symbol = $this->symbolsarray (0);
        $market = $this->marketsarray ($symbol);
        resultarray ($market['base')] = $base;
        resultarray ($market['quote')] = $quote;
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetOrderbook ($params);
        $timestamp = intval (orderbookarray ('timestamp') * 1000);
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetTicker ();
        $timestamp = intval (tickerarray ('timestamp') * 1000);
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('average')),
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $maxCount = 50;
        return $this->publicGetTrades ();
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $method = 'privatePost' . $this->capitalize ($side);
        $order = array (
            'Type' => ($side == 'buy') ? 'BuyBtc' : 'SelBtc',
            'IsMarketOrder' => ($type == 'market') ? 1 : 0,
        );
        if ($type == 'market') {
            if ($side == 'buy')
                orderarray ('Total') = $amount;
            else
                orderarray ('Amount') = $amount;
        } else {
            orderarray ('Price') = $price;
            orderarray ('Amount') = $amount;
        }
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancelOrder (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        if ($this->id == 'btctrader')
            throw new ExchangeError ($this->id . ' is an abstract base API for BTCExchange, BTCTurk');
        $url = $this->urlsarray ('api') . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = $this->nonce ().toString;
            $body = $this->urlencode ($params);
            $secret = $this->base64ToString ($this->secret);
            $auth = $this->apiKey . $nonce;
            $headers = array (
                'X-PCK' => $this->apiKey,
                'X-Stamp' => (string) $nonce,
                'X-Signature' => $this->hmac ($this->encode ($auth), $secret, 'sha256', 'base64'),
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class btcexchange extends btctrader {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btcexchange',
            'name' => 'BTCExchange',
            'countries' => 'PH', // Philippines
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27993052-4c92911a-64aa-11e7-96d8-ec6ac3435757.jpg',
                'api' => 'https://www.btcexchange.ph/api',
                'www' => 'https://www.btcexchange.ph',
                'doc' => 'https://github.com/BTCTrader/broker-api-docs',
            ),
            'markets' => array (
                'BTC/PHP' => array ( 'id' => 'BTC/PHP', 'symbol' => 'BTC/PHP', 'base' => 'BTC', 'quote' => 'PHP' ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class btctradeua extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btctradeua',
            'name' => 'BTC Trade UA',
            'countries' => 'UA', // Ukraine,
            'rateLimit' => 3000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27941483-79fc7350-62d9-11e7-9f61-ac47f28fcd96.jpg',
                'api' => 'https://btc-trade.com.ua/api',
                'www' => 'https://btc-trade.com.ua',
                'doc' => 'https://docs.google.com/document/d/1ocYA0yMy_RXd561sfG3qEPZ80kyll36HUxvCRe5GbhE/edit',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'deals/{symbol}',
                        'trades/sell/{symbol}',
                        'trades/buy/{symbol}',
                        'japan_stat/high/{symbol}',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'auth',
                        'ask/{symbol}',
                        'balance',
                        'bid/{symbol}',
                        'buy/{symbol}',
                        'my_orders/{symbol}',
                        'order/status/{id}',
                        'remove/order/{id}',
                        'sell/{symbol}',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/UAH' => array ( 'id' => 'btc_uah', 'symbol' => 'BTC/UAH', 'base' => 'BTC', 'quote' => 'UAH' ),
                'ETH/UAH' => array ( 'id' => 'eth_uah', 'symbol' => 'ETH/UAH', 'base' => 'ETH', 'quote' => 'UAH' ),
                'LTC/UAH' => array ( 'id' => 'ltc_uah', 'symbol' => 'LTC/UAH', 'base' => 'LTC', 'quote' => 'UAH' ),
                'DOGE/UAH' => array ( 'id' => 'doge_uah', 'symbol' => 'DOGE/UAH', 'base' => 'DOGE', 'quote' => 'UAH' ),
                'DASH/UAH' => array ( 'id' => 'dash_uah', 'symbol' => 'DASH/UAH', 'base' => 'DASH', 'quote' => 'UAH' ),
                'SIB/UAH' => array ( 'id' => 'sib_uah', 'symbol' => 'SIB/UAH', 'base' => 'SIB', 'quote' => 'UAH' ),
                'KRB/UAH' => array ( 'id' => 'krb_uah', 'symbol' => 'KRB/UAH', 'base' => 'KRB', 'quote' => 'UAH' ),
                'NVC/UAH' => array ( 'id' => 'nvc_uah', 'symbol' => 'NVC/UAH', 'base' => 'NVC', 'quote' => 'UAH' ),
                'LTC/BTC' => array ( 'id' => 'ltc_btc', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
                'NVC/BTC' => array ( 'id' => 'nvc_btc', 'symbol' => 'NVC/BTC', 'base' => 'NVC', 'quote' => 'BTC' ),
                'ITI/UAH' => array ( 'id' => 'iti_uah', 'symbol' => 'ITI/UAH', 'base' => 'ITI', 'quote' => 'UAH' ),
                'DOGE/BTC' => array ( 'id' => 'doge_btc', 'symbol' => 'DOGE/BTC', 'base' => 'DOGE', 'quote' => 'BTC' ),
                'DASH/BTC' => array ( 'id' => 'dash_btc', 'symbol' => 'DASH/BTC', 'base' => 'DASH', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function sign_in () {
        return $this->privatePostAuth ();
    }

    public function fetch_balance () {
        $response = $this->privatePostBalance ();
        $accounts = responsearray ('accounts');
        $result = array ( 'info' => $response );
        for ($b = 0; $b < count ($accounts); $b++) {
            $account = accountsarray ($b);
            $currency = accountarray ('currency');
            $balance = floatval (accountarray ('balance'));
            resultarray ($currency) = array (
                'free' => $balance,
                'used' => null,
                'total' => $balance,
            );
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $bids = $this->publicGetTradesBuySymbol (array_merge (array (
            'symbol' => parray ('id'),
        ), $params));
        $asks = $this->publicGetTradesSellSymbol (array_merge (array (
            'symbol' => parray ('id'),
        ), $params));
        $orderbook = array (
            'bids' => array (),
            'asks' => array (),
        );
        if ($bids) {
            if (array_key_exists ('list', $bids))
                orderbookarray ('bids') = bidsarray ('list');
        }
        if ($asks) {
            if (array_key_exists ('list', $asks))
                orderbookarray ('asks') = asksarray ('list');
        }
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('currency_trade'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetJapanStatHighSymbol (array (
            'symbol' => $this->market_id ($market),
        ));
        $ticker = responsearray ('trades');
        $timestamp = $this->milliseconds ();
        $result = array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => null,
            'ask' => null,
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => null,
            'info' => $ticker,
        );
        $tickerLength = count ($ticker);
        if ($tickerLength > 0) {
            $start = max ($tickerLength - 48, 0);
            for ($t = $start; $t < count ($ticker); $t++) {
                $candle = tickerarray ($t);
                if (resultarray ('open') == null)
                    resultarray ('open') = candlearray (1);
                if ((resultarray ('high') == null) || (resultarray ('high') < candlearray (2)))
                    resultarray ('high') = candlearray (2);
                if ((resultarray ('low') == null) || (resultarray ('low') > candlearray (3)))
                    resultarray ('low') = candlearray (3);
                if (resultarray ('quoteVolume') == null)
                    resultarray ('quoteVolume') = -candlearray (5);
                else
                    resultarray ('quoteVolume') -= candlearray (5);
            }
            $last = $tickerLength - 1;
            resultarray ('close') = tickerarray ($last)array (4);
            resultarray ('quoteVolume') = -1 * resultarray ('quoteVolume');
        }
        return $result;
    }

    public function fetch_trades ($market) {
        return $this->publicGetDealsSymbol (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $p = $this->market ($market);
        $method = 'privatePost' . $this->capitalize ($side) . 'Id';
        $order = array (
            'count' => $amount,
            'currency1' => parray ('quote'),
            'currency' => parray ('base'),
            'price' => $price,
        );
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostRemoveOrderId (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= $this->implode_params ($path, $query);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array (
                'out_order_id' => $nonce,
                'nonce' => $nonce,
            ), $query));
            $auth = $body . $this->secret;
            $headers = array (
                'public-key' => $this->apiKey,
                'api-sign' => $this->hash ($this->encode ($auth), 'sha256'),
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class btcturk extends btctrader {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btcturk',
            'name' => 'BTCTurk',
            'countries' => 'TR', // Turkey
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27992709-18e15646-64a3-11e7-9fa2-b0950ec7712f.jpg',
                'api' => 'https://www.btcturk.com/api',
                'www' => 'https://www.btcturk.com',
                'doc' => 'https://github.com/BTCTrader/broker-api-docs',
            ),
            'markets' => array (
                'BTC/TRY' => array ( 'id' => 'BTC/TRY', 'symbol' => 'BTC/TRY', 'base' => 'BTC', 'quote' => 'TRY' ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class btcx extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'btcx',
            'name' => 'BTCX',
            'countries' => array ( 'IS', 'US', 'EU', ),
            'rateLimit' => 1500, // support in english is very poor, unable to tell rate limits
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766385-9fdcc98c-5ed6-11e7-8f14-66d5e5cd47e6.jpg',
                'api' => 'https://btc-x.is/api',
                'www' => 'https://btc-x.is',
                'doc' => 'https://btc-x.is/custom/api-document.html',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'depth/{id}/{limit}',
                        'ticker/{id}',
                        'trade/{id}/{limit}',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balance',
                        'cancel',
                        'history',
                        'order',
                        'redeem',
                        'trade',
                        'withdraw',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'btc/usd', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'BTC/EUR' => array ( 'id' => 'btc/eur', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $balances = $this->privatePostBalance ();
        $result = array ( 'info' => $balances );
        $currencies = array_keys ($balances);
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $uppercase = strtoupper ($currency);
            $account = array (
                'free' => balancesarray ($currency),
                'used' => null,
                'total' => balancesarray ($currency),
            );
            resultarray ($uppercase) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetDepthIdLimit (array_merge (array (
            'id' => $this->market_id ($market),
            'limit' => 1000,
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray ('price');
                $amount = orderarray ('amount');
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetTickerId (array (
            'id' => $this->market_id ($market),
        ));
        $timestamp = tickerarray ('time') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('sell')),
            'ask' => floatval (tickerarray ('buy')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTradeIdLimit (array (
            'id' => $this->market_id ($market),
            'limit' => 100,
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        return $this->privatePostTrade (array_merge (array (
            'type' => strtoupper ($side),
            'market' => $this->market_id ($market),
            'amount' => $amount,
            'price' => $price,
        ), $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancel (array ( 'order' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/';
        if ($api == 'public') {
            $url .= $this->implode_params ($path, $params);
        } else {
            $nonce = $this->nonce ();
            $url .= $api;
            $body = $this->urlencode (array_merge (array (
                'Method' => strtoupper ($path),
                'Nonce' => $nonce,
            ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Key' => $this->apiKey,
                'Signature' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json (responsearray ('error')));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class bter extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bter',
            'name' => 'Bter',
            'countries' => array ( 'VG', 'CN' ), // British Virgin Islands, China
            'version' => '2',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27980479-cfa3188c-6387-11e7-8191-93fc4184ba5c.jpg',
                'api' => array (
                    'public' => 'https://data.bter.com/api',
                    'private' => 'https://api.bter.com/api',
                ),
                'www' => 'https://bter.com',
                'doc' => 'https://bter.com/api2',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'pairs',
                        'marketinfo',
                        'marketlist',
                        'tickers',
                        'ticker/{id}',
                        'orderBook/{id}',
                        'trade/{id}',
                        'tradeHistory/{id}',
                        'tradeHistory/{id}/{tid}',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balances',
                        'depositAddress',
                        'newAddress',
                        'depositsWithdrawals',
                        'buy',
                        'sell',
                        'cancelOrder',
                        'cancelAllOrders',
                        'getOrder',
                        'openOrders',
                        'tradeHistory',
                        'withdraw',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $response = $this->publicGetMarketlist ();
        $markets = responsearray ('data');
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('pair');
            $base = marketarray ('curr_a');
            $quote = marketarray ('curr_b');
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balance = $this->privatePostBalances ();
        $result = array ( 'info' => $balance );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ('available', $balance)) {
                if (array_key_exists ($currency, balancearray ('available'))) {
                    accountarray ('free') = floatval (balancearray ('available')array ($currency));
                }
            }
            if (array_key_exists ('locked', $balance)) {
                if (array_key_exists ($currency, balancearray ('locked'))) {
                    accountarray ('used') = floatval (balancearray ('locked')array ($currency));
                }
            }
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetOrderBookId (array_merge (array (
            'id' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high24hr')),
            'low' => floatval (tickerarray ('low24hr')),
            'bid' => floatval (tickerarray ('highestBid')),
            'ask' => floatval (tickerarray ('lowestAsk')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => floatval (tickerarray ('percentChange')),
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('baseVolume')),
            'quoteVolume' => floatval (tickerarray ('quoteVolume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetTickers ();
        $result = array ();
        $ids = array_keys ($tickers);
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            list ($baseId, $quoteId) = explode ('_', $id);
            $base = strtoupper ($baseId);
            $quote = strtoupper ($quoteId);
            $symbol = $base . '/' . $quote;
            $ticker = tickersarray ($id);
            $market = $this->marketsarray ($symbol);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetTickerId (array (
            'id' => parray ('id'),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTradeHistoryId (array (
            'id' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $method = 'privatePost' . $this->capitalize ($side);
        $order = array (
            'currencyPair' => $this->symbol ($market),
            'rate' => $price,
            'amount' => $amount,
        );
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array ( 'orderNumber' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $prefix = ($api == 'private') ? ($api . '/') : '';
        $url = $this->urlsarray ('api')array ($api) . $this->version . '/1/' . $prefix . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $request = array ( 'nonce' => $nonce );
            $body = $this->urlencode (array_merge ($request, $query));
            $headers = array (
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('result', $response))
            if (responsearray ('result') != 'true')
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;        
    }
}

//-----------------------------------------------------------------------------

class bxinth extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'bxinth',
            'name' => 'BX.in.th',
            'countries' => 'TH', // Thailand
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766412-567b1eb4-5ed7-11e7-94a8-ff6a3884f6c5.jpg',
                'api' => 'https://bx.in.th/api',
                'www' => 'https://bx.in.th',
                'doc' => 'https://bx.in.th/info/api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '', // ticker
                        'options',
                        'optionbook',
                        'orderbook',
                        'pairing',
                        'trade',
                        'tradehistory',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balance',
                        'biller',
                        'billgroup',
                        'billpay',
                        'cancel',
                        'deposit',
                        'getorders',
                        'history',
                        'option-issue',
                        'option-bid',
                        'option-sell',
                        'option-myissue',
                        'option-mybid',
                        'option-myoptions',
                        'option-exercise',
                        'option-cancel',
                        'option-history',
                        'order',
                        'withdrawal',
                        'withdrawal-history',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetPairing ();
        $keys = array_keys ($markets);
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $market = marketsarray ($keys[$p)];
            $id = marketarray ('pairing_id');
            $base = marketarray ('primary_currency');
            $quote = marketarray ('secondary_currency');
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function commonCurrencyCode ($currency) {
        // why would they use three letters instead of four for $currency codes
        if ($currency == 'DAS')
            return 'DASH';
        if ($currency == 'DOG')
            return 'DOGE';
        return $currency;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostBalance ();
        $balance = responsearray ('balance');
        $result = array ( 'info' => $balance );
        $currencies = array_keys ($balance);
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $code = $this->commonCurrencyCode ($currency);
            $account = array (
                'free' => floatval (balancearray ($currency)array ('available')),
                'used' => null,
                'total' => floatval (balancearray ($currency)array ('total')),
            );
            accountarray ('used') = accountarray ('total') - accountarray ('free');
            resultarray ($code) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetOrderbook (array_merge (array (
            'pairing' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('orderbook')array ('bids')array ('highbid')),
            'ask' => floatval (tickerarray ('orderbook')array ('asks')array ('highbid')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last_price')),
            'change' => floatval (tickerarray ('change')),
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume_24hours')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGet ();
        $result = array ();
        $ids = array_keys ($tickers);
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $ticker = tickersarray ($id);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $tickers = $this->publicGet (array ( 'pairing' => parray ('id') ));
        $id = (string) parray ('id');
        $ticker = tickersarray ($id);
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrade (array (
            'pairing' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostOrder (array_merge (array (
            'pairing' => $this->market_id ($market),
            'type' => $side,
            'amount' => $amount,
            'rate' => $price,
        ), $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        $pairing = null; // TODO fixme
        return $this->privatePostCancel (array (
            'order_id' => $id,
            'pairing' => $pairing,
        ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/';
        if ($path)
            $url .= $path . '/';
        if ($params)
            $url .= '?' . $this->urlencode ($params);
        if ($api == 'private') {
            $nonce = $this->nonce ();
            $auth = $this->apiKey . (string) $nonce . $this->secret;
            $signature = $this->hash ($this->encode ($auth), 'sha256');
            $body = $this->urlencode (array_merge (array (
                'key' => $this->apiKey,
                'nonce' => $nonce,
                'signature' => $signature,
                // twofa => $this->twofa,
            ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'public')
            return $response;
        if (array_key_exists ('success', $response))
            if (responsearray ('success'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class ccex extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'ccex',
            'name' => 'C-CEX',
            'countries' => array ( 'DE', 'EU', ),
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766433-16881f90-5ed8-11e7-92f8-3d92cc747a6c.jpg',
                'api' => array (
                    'tickers' => 'https://c-cex.com/t',
                    'public' => 'https://c-cex.com/t/api_pub.html',
                    'private' => 'https://c-cex.com/t/api.html',
                ),
                'www' => 'https://c-cex.com',
                'doc' => 'https://c-cex.com/?id=api',
            ),
            'api' => array (
                'tickers' => array (
                    'get' => array (
                        'coinnames',
                        '{market}',
                        'pairs',
                        'prices',
                        'volume_{coin}',
                    ),
                ),
                'public' => array (
                    'get' => array (
                        'balancedistribution',
                        'markethistory',
                        'markets',
                        'marketsummaries',
                        'orderbook',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'buylimit',
                        'cancel',
                        'getbalance',
                        'getbalances',
                        'getopenorders',
                        'getorder',
                        'getorderhistory',
                        'mytrades',
                        'selllimit',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetMarkets ();
        $result = array ();
        for ($p = 0; $p < count (marketsarray ('result')); $p++) {
            $market = marketsarray ('result')array ($p);
            $id = marketarray ('MarketName');
            $base = marketarray ('MarketCurrency');
            $quote = marketarray ('BaseCurrency');
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetBalances ();
        $balances = responsearray ('result');
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('Currency');
            $account = array (
                'free' => balancearray ('Available'),
                'used' => balancearray ('Pending'),
                'total' => balancearray ('Balance'),
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $response = $this->publicGetOrderbook (array_merge (array (
            'market' => $this->market_id ($market),
            'type' => 'both',
            'depth' => 100,
        ), $params));
        $orderbook = responsearray ('result');
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'buy', 'asks' => 'sell' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('Rate'));
                $amount = floatval (orderarray ('Quantity'));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = tickerarray ('updated') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('lastprice')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('avg')),
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('buysupport')),
            'info' => $ticker,
        );
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->tickersGetMarket (array (
            'market' => strtolower (parray ('id')),
        ));
        $ticker = responsearray ('ticker');
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetMarkethistory (array (
            'market' => $this->market_id ($market),
            'type' => 'both',
            'depth' => 100,
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $method = 'privateGet' . $this->capitalize ($side) . $type;
        return thisarray ($method) (array_merge (array (
            'market' => $this->market_id ($market),
            'quantity' => $amount,
            'rate' => $price,
        ), $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privateGetCancel (array ( 'uuid' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        if ($api == 'private') {
            $nonce = (string) $this->nonce ();
            $query = $this->keysort (array_merge (array (
                'a' => $path,
                'apikey' => $this->apiKey,
                'nonce' => $nonce,
            ), $params));
            $url .= '?' . $this->urlencode ($query);
            $headers = array ( 'apisign' => $this->hmac ($this->encode ($url), $this->encode ($this->secret), 'sha512') );
        } else if ($api == 'public') {
            $url .= '?' . $this->urlencode (array_merge (array (
                'a' => 'get' . $path,
            ), $params));
        } else {
            $url .= '/' . $this->implode_params ($path, $params) . '.json';
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'tickers')
            return $response;
        if (array_key_exists ('success', $response))
            if (responsearray ('success'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class cex extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'cex',
            'name' => 'CEX.IO',
            'countries' => array ( 'GB', 'EU', 'CY', 'RU', ),
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766442-8ddc33b0-5ed8-11e7-8b98-f786aef0f3c9.jpg',
                'api' => 'https://cex.io/api',
                'www' => 'https://cex.io',
                'doc' => 'https://cex.io/cex-api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'currency_limits',
                        'last_price/{pair}',
                        'last_prices/{currencies}',
                        'ohlcv/hd/{yyyymmdd}/{pair}',
                        'order_book/{pair}',
                        'ticker/{pair}',
                        'tickers/{currencies}',
                        'trade_history/{pair}',
                    ),
                    'post' => array (
                        'convert/{pair}',
                        'price_stats/{pair}',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'active_orders_status/',
                        'archived_orders/{pair}',
                        'balance/',
                        'cancel_order/',
                        'cancel_orders/{pair}',
                        'cancel_replace_order/{pair}',
                        'close_position/{pair}',
                        'get_address/',
                        'get_myfee/',
                        'get_order/',
                        'get_order_tx/',
                        'open_orders/{pair}',
                        'open_orders/',
                        'open_position/{pair}',
                        'open_positions/{pair}',
                        'place_order/{pair}',
                        'place_order/{pair}',
                    ),
                )
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetCurrencyLimits ();
        $result = array ();
        for ($p = 0; $p < count (marketsarray ('data')array ('pairs')); $p++) {
            $market = marketsarray ('data')array ('pairs')array ($p);
            $id = marketarray ('symbol1') . '/' . marketarray ('symbol2');
            $symbol = $id;
            list ($base, $quote) = explode ('/', $symbol);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privatePostBalance ();
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => floatval (balancesarray ($currency)array ('available')),
                'used' => floatval (balancesarray ($currency)array ('orders')),
                'total' => null,
            );
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook =  $this->publicGetOrderBookPair (array_merge (array (
            'pair' => $this->market_id ($market),
        ), $params));
        $timestamp = orderbookarray ('timestamp') * 1000;
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = intval (tickerarray ('timestamp')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $currencies = implode ('/', $this->currencies);
        $response = $this->publicGetTickersCurrencies (array (
            'currencies' => $currencies,
        ));
        $tickers = responsearray ('data');
        $result = array ();
        for ($t = 0; $t < count ($tickers); $t++) {
            $ticker = tickersarray ($t);
            $symbol = str_replace (':', '/', tickerarray ('pair'));
            $market = $this->marketsarray ($symbol);            
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetTickerPair (array (
            'pair' => parray ('id'),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTradeHistoryPair (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'pair' => $this->market_id ($market),
            'type' => $side,
            'amount' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        else
            orderarray ('order_type') = $type;
        return $this->privatePostPlaceOrderPair (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            if (!$this->uid)
                throw new AuthenticationError ($this->id . ' requires `' . $this->id . '.uid` property for authentication');
            $nonce = (string) $this->nonce ();
            $auth = $nonce . $this->uid . $this->apiKey;
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($this->secret));
            $body = $this->urlencode (array_merge (array (
                'key' => $this->apiKey,
                'signature' => strtoupper ($signature),
                'nonce' => $nonce,
            ), $query));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('e', $response)) {
            if (array_key_exists ('ok', $response))
                if (responsearray ('ok') == 'ok')
                    return $response;
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        }
        return $response;
    }
}

//-----------------------------------------------------------------------------

class chbtc extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'chbtc',
            'name' => 'CHBTC',
            'countries' => 'CN',
            'rateLimit' => 1000,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28555659-f0040dc2-7109-11e7-9d99-688a438bf9f4.jpg',
                'api' => array (
                    'public' => 'http://api.chbtc.com/data', // no https for public API
                    'private' => 'https://trade.chbtc.com/api',
                ),
                'www' => 'https://trade.chbtc.com/api',
                'doc' => 'https://www.chbtc.com/i/developer',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'ticker',
                        'depth',
                        'trades',
                        'kline',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'order',
                        'cancelOrder',
                        'getOrder',
                        'getOrders',
                        'getOrdersNew',
                        'getOrdersIgnoreTradeType',
                        'getUnfinishedOrdersIgnoreTradeType',
                        'getAccountInfo',
                        'getUserAddress',
                        'getWithdrawAddress',
                        'getWithdrawRecord',
                        'getChargeRecord',
                        'getCnyWithdrawRecord',
                        'getCnyChargeRecord',
                        'withdraw',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/CNY' => array ( 'id' => 'btc_cny', 'symbol' => 'BTC/CNY', 'base' => 'BTC', 'quote' => 'CNY', ),
                'LTC/CNY' => array ( 'id' => 'ltc_cny', 'symbol' => 'LTC/CNY', 'base' => 'LTC', 'quote' => 'CNY', ),
                'ETH/CNY' => array ( 'id' => 'eth_cny', 'symbol' => 'ETH/CNY', 'base' => 'ETH', 'quote' => 'CNY', ),
                'ETC/CNY' => array ( 'id' => 'etc_cny', 'symbol' => 'ETC/CNY', 'base' => 'ETC', 'quote' => 'CNY', ),
                'BTS/CNY' => array ( 'id' => 'bts_cny', 'symbol' => 'BTS/CNY', 'base' => 'BTS', 'quote' => 'CNY', ),
                'EOS/CNY' => array ( 'id' => 'eos_cny', 'symbol' => 'EOS/CNY', 'base' => 'EOS', 'quote' => 'CNY', ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostGetAccountInfo ();
        $balances = responsearray ('result');
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, balancesarray ('balance')))
                accountarray ('free') = balancesarray ('balance')array ($currency)array ('amount');
            if (array_key_exists ($currency, balancesarray ('frozen')))
                accountarray ('used') = balancesarray ('frozen')array ($currency)array ('amount');
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $orderbook = $this->publicGetDepth (array_merge (array (
            'currency' => parray ('id'),
        ), $params));
        $timestamp = $this->milliseconds ();
        $bids = null;
        $asks = null;
        if (array_key_exists ('bids', $orderbook))
            $bids = orderbookarray ('bids');
        if (array_key_exists ('asks', $orderbook))
            $asks = orderbookarray ('asks');
        $result = array (
            'bids' => $bids,
            'asks' => $asks,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        if (resultarray ('bids'))
            resultarray ('bids') = $this->sort_by (resultarray ('bids'), 0, true);
        if (resultarray ('asks'))
            resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetTicker (array (
            'currency' => $this->market_id ($market),
        ));
        $ticker = responsearray ('ticker');
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTrades (array (
            'currency' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $paramString = '&$price=' . (string) $price;
        $paramString .= '&$amount=' . (string) $amount;
        $tradeType = ($side == 'buy') ? '1' : '0';
        $paramString .= '&$tradeType=' . $tradeType;
        $paramString .= '&currency=' . $this->market_id ($market);
        return $this->privatePostOrder ($paramString);
    }

    public function cancel_order ($id, $params = array ()) {
        $paramString = '&$id=' . (string) $id;
        if (array_key_exists ('currency', $params))
            $paramString .= '&currency=' . paramsarray ('currency');
        return $this->privatePostCancelOrder ($paramString);
    }

    public function fetchOrder ($id, $params = array ()) {
        $paramString = '&$id=' . (string) $id;
        if (array_key_exists ('currency', $params))
            $paramString .= '&currency=' . paramsarray ('currency');
        return $this->privatePostGetOrder ($paramString);
    }

    public function nonce () {
        return $this->milliseconds ();
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api); 
        if ($api == 'public') {
            $url .= '/' . $this->version . '/' . $path;
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $paramsLength = count ($params); // $params should be a string here!
            $nonce = $this->nonce ();            
            $auth = 'method=' . $path;            
            $auth .= '&accesskey=' . $this->apiKey;            
            $auth .= $paramsLength ? $params : '';
            $secret = $this->hash ($this->encode ($this->secret), 'sha1');
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($secret), 'md5');
            $suffix = 'sign=' . $signature . '&reqTime=' . (string) $nonce;
            $url .= '/' . $path . '?' . $auth . '&' . $suffix;
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'private')
            if (array_key_exists ('code', $response))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class chilebit extends blinktrade {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'chilebit',
            'name' => 'ChileBit',
            'countries' => 'CL',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27991414-1298f0d8-647f-11e7-9c40-d56409266336.jpg',
                'api' => array (
                    'public' => 'https://api.blinktrade.com/api',
                    'private' => 'https://api.blinktrade.com/tapi',
                ),
                'www' => 'https://chilebit.net',
                'doc' => 'https://blinktrade.com/docs',
            ),
            'comment' => 'Blinktrade API',
            'markets' => array (
                'BTC/CLP' => array ( 'id' => 'BTCCLP', 'symbol' => 'BTC/CLP', 'base' => 'BTC', 'quote' => 'CLP', 'brokerId' => 9, 'broker' => 'ChileBit', ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class coincheck extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'coincheck',
            'name' => 'coincheck',
            'countries' => array ( 'JP', 'ID', ),
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766464-3b5c3c74-5ed9-11e7-840e-31b32968e1da.jpg',
                'api' => 'https://coincheck.com/api',
                'www' => 'https://coincheck.com',
                'doc' => 'https://coincheck.com/documents/exchange/api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'exchange/orders/rate',
                        'order_books',
                        'rate/{pair}',
                        'ticker',
                        'trades',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'accounts',
                        'accounts/balance',
                        'accounts/leverage_balance',
                        'bank_accounts',
                        'deposit_money',
                        'exchange/orders/opens',
                        'exchange/orders/transactions',
                        'exchange/orders/transactions_pagination',
                        'exchange/leverage/positions',
                        'lending/borrows/matches',
                        'send_money',
                        'withdraws',
                    ),
                    'post' => array (
                        'bank_accounts',
                        'deposit_money/{id}/fast',
                        'exchange/orders',
                        'exchange/transfers/to_leverage',
                        'exchange/transfers/from_leverage',
                        'lending/borrows',
                        'lending/borrows/{id}/repay',
                        'send_money',
                        'withdraws',
                    ),
                    'delete' => array (
                        'bank_accounts/{id}',
                        'exchange/orders/{id}',
                        'withdraws/{id}',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/JPY' =>  array ( 'id' => 'btc_jpy',  'symbol' => 'BTC/JPY',  'base' => 'BTC',  'quote' => 'JPY' ), // the only real pair
                'ETH/JPY' =>  array ( 'id' => 'eth_jpy',  'symbol' => 'ETH/JPY',  'base' => 'ETH',  'quote' => 'JPY' ),
                'ETC/JPY' =>  array ( 'id' => 'etc_jpy',  'symbol' => 'ETC/JPY',  'base' => 'ETC',  'quote' => 'JPY' ),
                'DAO/JPY' =>  array ( 'id' => 'dao_jpy',  'symbol' => 'DAO/JPY',  'base' => 'DAO',  'quote' => 'JPY' ),
                'LSK/JPY' =>  array ( 'id' => 'lsk_jpy',  'symbol' => 'LSK/JPY',  'base' => 'LSK',  'quote' => 'JPY' ),
                'FCT/JPY' =>  array ( 'id' => 'fct_jpy',  'symbol' => 'FCT/JPY',  'base' => 'FCT',  'quote' => 'JPY' ),
                'XMR/JPY' =>  array ( 'id' => 'xmr_jpy',  'symbol' => 'XMR/JPY',  'base' => 'XMR',  'quote' => 'JPY' ),
                'REP/JPY' =>  array ( 'id' => 'rep_jpy',  'symbol' => 'REP/JPY',  'base' => 'REP',  'quote' => 'JPY' ),
                'XRP/JPY' =>  array ( 'id' => 'xrp_jpy',  'symbol' => 'XRP/JPY',  'base' => 'XRP',  'quote' => 'JPY' ),
                'ZEC/JPY' =>  array ( 'id' => 'zec_jpy',  'symbol' => 'ZEC/JPY',  'base' => 'ZEC',  'quote' => 'JPY' ),
                'XEM/JPY' =>  array ( 'id' => 'xem_jpy',  'symbol' => 'XEM/JPY',  'base' => 'XEM',  'quote' => 'JPY' ),
                'LTC/JPY' =>  array ( 'id' => 'ltc_jpy',  'symbol' => 'LTC/JPY',  'base' => 'LTC',  'quote' => 'JPY' ),
                'DASH/JPY' => array ( 'id' => 'dash_jpy', 'symbol' => 'DASH/JPY', 'base' => 'DASH', 'quote' => 'JPY' ),
                'ETH/BTC' =>  array ( 'id' => 'eth_btc',  'symbol' => 'ETH/BTC',  'base' => 'ETH',  'quote' => 'BTC' ),
                'ETC/BTC' =>  array ( 'id' => 'etc_btc',  'symbol' => 'ETC/BTC',  'base' => 'ETC',  'quote' => 'BTC' ),
                'LSK/BTC' =>  array ( 'id' => 'lsk_btc',  'symbol' => 'LSK/BTC',  'base' => 'LSK',  'quote' => 'BTC' ),
                'FCT/BTC' =>  array ( 'id' => 'fct_btc',  'symbol' => 'FCT/BTC',  'base' => 'FCT',  'quote' => 'BTC' ),
                'XMR/BTC' =>  array ( 'id' => 'xmr_btc',  'symbol' => 'XMR/BTC',  'base' => 'XMR',  'quote' => 'BTC' ),
                'REP/BTC' =>  array ( 'id' => 'rep_btc',  'symbol' => 'REP/BTC',  'base' => 'REP',  'quote' => 'BTC' ),
                'XRP/BTC' =>  array ( 'id' => 'xrp_btc',  'symbol' => 'XRP/BTC',  'base' => 'XRP',  'quote' => 'BTC' ),
                'ZEC/BTC' =>  array ( 'id' => 'zec_btc',  'symbol' => 'ZEC/BTC',  'base' => 'ZEC',  'quote' => 'BTC' ),
                'XEM/BTC' =>  array ( 'id' => 'xem_btc',  'symbol' => 'XEM/BTC',  'base' => 'XEM',  'quote' => 'BTC' ),
                'LTC/BTC' =>  array ( 'id' => 'ltc_btc',  'symbol' => 'LTC/BTC',  'base' => 'LTC',  'quote' => 'BTC' ),
                'DASH/BTC' => array ( 'id' => 'dash_btc', 'symbol' => 'DASH/BTC', 'base' => 'DASH', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $balances = $this->privateGetAccountsBalance ();
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($lowercase, $balances))
                accountarray ('free') = floatval (balancesarray ($lowercase));
            $reserved = $lowercase . '_reserved';
            if (array_key_exists ($reserved, $balances))
                accountarray ('used') = floatval (balancesarray ($reserved));
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook =  $this->publicGetOrderBooks ($params);
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetTicker ();
        $timestamp = tickerarray ('timestamp') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTrades ();
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $prefix = '';
        $order = array (
            'pair' => $this->market_id ($market),
        );
        if ($type == 'market') {
            $order_type = $type . '_' . $side;
            orderarray ('order_type') = $order_type;
            $prefix = ($side == buy) ? ($order_type . '_') : '';
            orderarray ($prefix . 'amount') = $amount;
        } else {
            orderarray ('order_type') = $side;
            orderarray ('rate') = $price;
            orderarray ('amount') = $amount;
        }
        return $this->privatePostExchangeOrders (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->privateDeleteExchangeOrdersId (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = (string) $this->nonce ();
            $length = 0;
            if ($query) {
                $body = $this->urlencode ($this->keysort ($query));
                $length = count ($body);
            }
            $auth = $nonce . $url . ($body || '');
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => $length,
                'ACCESS-KEY' => $this->apiKey,
                'ACCESS-NONCE' => $nonce,
                'ACCESS-SIGNATURE' => $this->hmac ($this->encode ($auth), $this->encode ($this->secret)),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'public')
            return $response;
        if (array_key_exists ('success', $response))
            if (responsearray ('success'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class coingi extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'coingi',
            'name' => 'Coingi',
            'rateLimit' => 1000,
            'countries' => array ( 'PA', 'BG', 'CN', 'US' ), // Panama, Bulgaria, China, US
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28619707-5c9232a8-7212-11e7-86d6-98fe5d15cc6e.jpg',
                'api' => 'https://api.coingi.com',
                'www' => 'https://coingi.com',
                'doc' => 'http://docs.coingi.apiary.io/',
            ),
            'api' => array (
                'current' => array (
                    'get' => array (
                        'order-book/{pair}/{askCount}/{bidCount}/{depth}',
                        'transactions/{pair}/{maxCount}',
                        '24hour-rolling-aggregation',
                    ),
                ),
                'user' => array (
                    'post' => array (
                        'balance',
                        'add-order',
                        'cancel-order',
                        'orders',
                        'transactions',
                        'create-crypto-withdrawal',
                    ),
                ),
            ),
            'markets' => array (
                'LTC/BTC' => array ( 'id' => 'ltc-btc', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC' ),
                'PPC/BTC' => array ( 'id' => 'ppc-btc', 'symbol' => 'PPC/BTC', 'base' => 'PPC', 'quote' => 'BTC' ),
                'DOGE/BTC' => array ( 'id' => 'doge-btc', 'symbol' => 'DOGE/BTC', 'base' => 'DOGE', 'quote' => 'BTC' ),
                'VTC/BTC' => array ( 'id' => 'vtc-btc', 'symbol' => 'VTC/BTC', 'base' => 'VTC', 'quote' => 'BTC' ),
                'FTC/BTC' => array ( 'id' => 'ftc-btc', 'symbol' => 'FTC/BTC', 'base' => 'FTC', 'quote' => 'BTC' ),
                'NMC/BTC' => array ( 'id' => 'nmc-btc', 'symbol' => 'NMC/BTC', 'base' => 'NMC', 'quote' => 'BTC' ),
                'DASH/BTC' => array ( 'id' => 'dash-btc', 'symbol' => 'DASH/BTC', 'base' => 'DASH', 'quote' => 'BTC' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $currencies = array ();
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = strtolower ($this->currenciesarray ($c));
            $currencies[] = $currency;
        }
        $balances = $this->userPostBalance (array (
            'currencies' => implode (',', $currencies)
        ));
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency')array ('name');
            $currency = strtoupper ($currency);
            $account = array (
                'free' => balancearray ('available'),
                'used' => balancearray ('blocked') . balancearray ('inOrders') . balancearray ('withdrawing'),
                'total' => null,
            );
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $orderbook = $this->currentGetOrderBookPairAskCountBidCountDepth (array_merge (array (
            'pair' => parray ('id'),
            'askCount' => 512, // maximum returned number of asks 1-512
            'bidCount' => 512, // maximum returned number of bids 1-512
            'depth' => 32, // maximum number of depth range steps 1-32
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray ('price');
                $amount = orderarray ('baseAmount');
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => tickerarray ('high'),
            'low' => tickerarray ('low'),
            'bid' => tickerarray ('highestBid'),
            'ask' => tickerarray ('lowestAsk'),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => tickerarray ('baseVolume'),
            'quoteVolume' => tickerarray ('counterVolume'),
            'info' => $ticker,
        );
        return $ticker;
    }

    public function fetch_tickers () {
        $response = $this->currentGet24hourRollingAggregation ();
        $result = array ();
        for ($t = 0; $t < count ($response); $t++) {
            $ticker = responsearray ($t);
            $base = strtoupper (tickerarray ('currencyPair')array ('base'));
            $quote = strtoupper (tickerarray ('currencyPair')array ('counter'));
            $symbol = $base . '/' . $quote;
            $market = $this->marketsarray ($symbol);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->currentGet24hourRollingAggregation ();
        $tickers = array ();
        for ($t = 0; $t < count ($response); $t++) {
            $ticker = responsearray ($t);
            $base = strtoupper (tickerarray ('currencyPair')array ('base'));
            $quote = strtoupper (tickerarray ('currencyPair')array ('counter'));
            $symbol = $base . '/' . $quote;
            tickersarray ($symbol) = $ticker;
        }        
        $p = $this->market ($market);
        $symbol = parray ('symbol');
        if (array_key_exists ($symbol, $tickers)) {
            $ticker = tickersarray ($symbol);
            return $this->parse_ticker ($ticker, $p);
        }
        throw new ExchangeError ($this->id . ' ' . $symbol . ' $ticker not found');
    }

    public function fetch_trades ($market) {
        return $this->publicGetTransactionsPairMaxCount (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $order = array (
            'currencyPair' => $this->market_id ($market),
            'volume' => $amount,
            'price' => $price,
            'orderType' => ($side == 'buy') ? 0 : 1,
        );
        return $this->userPostAddOrder (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->userPostCancelOrder (array ( 'orderId' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $api . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'current') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $request = array_merge (array (
                'token' => $this->apiKey,
                'nonce' => $nonce,
            ), $query);
            $auth = (string) $nonce . '$' . $this->apiKey;
            requestarray ('signature') = $this->hmac ($this->encode ($auth), $this->encode ($this->secret));
            $body = $this->json ($request);            
            $headers = array (
                'Content-Type' => 'application/json',
                'Content-Length' => strlen ($body),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('errors', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class coinmarketcap extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'coinmarketcap',
            'name' => 'CoinMarketCap',
            'rateLimit' => 10000,
            'version' => 'v1',
            'countries' => 'US',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28244244-9be6312a-69ed-11e7-99c1-7c1797275265.jpg',
                'api' => 'https://api.coinmarketcap.com',
                'www' => 'https://coinmarketcap.com',
                'doc' => 'https://coinmarketcap.com/api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'ticker/',
                        'ticker/{id}/',
                        'global/',
                    ),
                ),
            ),
            'currencies' => array (
                'AUD',
                'BRL',
                'CAD',
                'CHF',
                'CNY',
                'EUR',
                'GBP',
                'HKD',
                'IDR',
                'INR',
                'JPY',
                'KRW',
                'MXN',
                'RUB',
                'USD',
            ),
        ), $options));
    }

    public function fetch_order_book ($market, $params = array ()) {
        throw new ExchangeError ('Fetching order books is not supported by the API of ' . $this->id);
    }

    public function fetch_markets () {
        $markets = $this->publicGetTicker ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            for ($c = 0; $c < count ($this->currencies); $c++) {
                $base = marketarray ('symbol');                
                $baseId = marketarray ('id');
                $quote = $this->currenciesarray ($c);
                $quoteId = strtolower ($quote);
                $symbol = $base . '/' . $quote;
                $id = $baseId . '/' . $quote;
                $result[] = array (
                    'id' => $id,
                    'symbol' => $symbol,
                    'base' => $base,
                    'quote' => $quote,
                    'baseId' => $baseId,
                    'quoteId' => $quoteId,
                    'info' => $market,
                );
            }
        }
        return $result;
    }

    public function fetchGlobal ($currency = 'USD') {
        $this->loadMarkets ();
        $request = array ();
        if ($currency)
            requestarray ('convert') = $currency;
        return $this->publicGetGlobal ($request);
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        if (array_key_exists ('last_updated', $ticker))
            if (tickerarray ('last_updated'))
                $timestamp = intval (tickerarray ('last_updated')) * 1000;
        $volume = null;
        $volumeKey = '24h_volume_' . marketarray ('quoteId');
        if (tickerarray ($volumeKey))
            $volume = floatval (tickerarray ($volumeKey));
        $price = 'price_' . marketarray ('quoteId');
        $change = null;
        $changeKey = 'percent_change_24h';
        if (tickerarray ($changeKey))
            $change = floatval (tickerarray ($changeKey));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => null,
            'ask' => null,
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ($price)),
            'change' => $change,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => $volume,
            'info' => $ticker,
        );
    }

    public function fetch_tickers ($currency = 'USD') {
        $this->loadMarkets ();
        $request = array ();
        if ($currency) 
            requestarray ('convert') = $currency;
        $response = $this->publicGetTicker ($request);
        $tickers = array ();
        for ($t = 0; $t < count ($response); $t++) {
            $ticker = responsearray ($t);
            $id = tickerarray ('id') . '/' . $currency;
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            tickersarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $tickers;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $request = array (
            'convert' => parray ('quote'),
            'id' => parray ('baseId'),
        );
        $response = $this->publicGetTickerId ($request);
        $ticker = responsearray (0);
        return $this->parse_ticker ($ticker, $p);
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($query)
            $url .= '?' . $this->urlencode ($query);
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class coinmate extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'coinmate',
            'name' => 'CoinMate',
            'countries' => array ( 'GB', 'CZ' ), // UK, Czech Republic
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27811229-c1efb510-606c-11e7-9a36-84ba2ce412d8.jpg',
                'api' => 'https://coinmate.io/api',
                'www' => 'https://coinmate.io',
                'doc' => array (
                    'http://docs.coinmate.apiary.io',
                    'https://coinmate.io/developers',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'orderBook',
                        'ticker',
                        'transactions',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balances',
                        'bitcoinWithdrawal',
                        'bitcoinDepositAddresses',
                        'buyInstant',
                        'buyLimit',
                        'cancelOrder',
                        'cancelOrderWithInfo',
                        'createVoucher',
                        'openOrders',
                        'redeemVoucher',
                        'sellInstant',
                        'sellLimit',
                        'transactionHistory',
                        'unconfirmedBitcoinDeposits',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/EUR' => array ( 'id' => 'BTC_EUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR'  ),
                'BTC/CZK' => array ( 'id' => 'BTC_CZK', 'symbol' => 'BTC/CZK', 'base' => 'BTC', 'quote' => 'CZK'  ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostBalances ();
        $balances = responsearray ('data');
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, $balances)) {
                accountarray ('free') = balancesarray ($currency)array ('available');
                accountarray ('used') = balancesarray ($currency)array ('reserved');
                accountarray ('total') = balancesarray ($currency)array ('balance');
            }            
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $response = $this->publicGetOrderBook (array_merge (array (
            'currencyPair' => $this->market_id ($market),
            'groupByPriceLimit' => 'False',
        ), $params));
        $orderbook = responsearray ('data');
        $timestamp = orderbookarray ('timestamp') * 1000;
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray ('price');
                $amount = orderarray ('amount');
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetTicker (array (
            'currencyPair' => $this->market_id ($market),
        ));
        $ticker = responsearray ('data');
        $timestamp = tickerarray ('timestamp') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('amount')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTransactions (array (
            'currencyPair' => $this->market_id ($market),
            'minutesIntoHistory' => 10,
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $method = 'privatePost' . $this->capitalize ($side);
        $order = array (
            'currencyPair' => $this->market_id ($market),
        );
        if ($type == 'market') {
            if ($side == 'buy')
                orderarray ('total') = $amount; // $amount in fiat
            else
                orderarray ('amount') = $amount; // $amount in fiat
            $method .= 'Instant';
        } else {
            orderarray ('amount') = $amount; // $amount in crypto
            orderarray ('price') = $price;
            $method .= $this->capitalize ($type);
        }
        return thisarray ($method) (self.extend ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancelOrder (array ( 'orderId' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            if (!$this->uid)
                throw new AuthenticationError ($this->id . ' requires `' . $this->id . '.uid` property for authentication');
            $nonce = (string) $this->nonce ();
            $auth = $nonce . $this->uid . $this->apiKey;
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($this->secret));
            $body = $this->urlencode (array_merge (array (
                'clientId' => $this->uid,
                'nonce' => $nonce,
                'publicKey' => $this->apiKey,
                'signature' => strtoupper ($signature),
            ), $params));
            $headers = array (
                'Content-Type' =>  'application/x-www-form-urlencoded',
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            if (responsearray ('error'))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class coinsecure extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'coinsecure',
            'name' => 'Coinsecure',
            'countries' => 'IN', // India
            'rateLimit' => 1000,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766472-9cbd200a-5ed9-11e7-9551-2267ad7bac08.jpg',
                'api' => 'https://api.coinsecure.in',
                'www' => 'https://coinsecure.in',
                'doc' => array (
                    'https://api.coinsecure.in',
                    'https://github.com/coinsecure/plugins',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'bitcoin/search/confirmation/{txid}',
                        'exchange/ask/low',
                        'exchange/ask/orders',
                        'exchange/bid/high',
                        'exchange/bid/orders',
                        'exchange/lastTrade',
                        'exchange/max24Hr',
                        'exchange/min24Hr',
                        'exchange/ticker',
                        'exchange/trades',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'mfa/authy/call',
                        'mfa/authy/sms',
                        'netki/search/{netkiName}',
                        'user/bank/otp/{number}',
                        'user/kyc/otp/{number}',
                        'user/profile/phone/otp/{number}',
                        'user/wallet/coin/address/{id}',
                        'user/wallet/coin/deposit/confirmed/all',
                        'user/wallet/coin/deposit/confirmed/{id}',
                        'user/wallet/coin/deposit/unconfirmed/all',
                        'user/wallet/coin/deposit/unconfirmed/{id}',
                        'user/wallet/coin/wallets',
                        'user/exchange/bank/fiat/accounts',
                        'user/exchange/bank/fiat/balance/available',
                        'user/exchange/bank/fiat/balance/pending',
                        'user/exchange/bank/fiat/balance/total',
                        'user/exchange/bank/fiat/deposit/cancelled',
                        'user/exchange/bank/fiat/deposit/unverified',
                        'user/exchange/bank/fiat/deposit/verified',
                        'user/exchange/bank/fiat/withdraw/cancelled',
                        'user/exchange/bank/fiat/withdraw/completed',
                        'user/exchange/bank/fiat/withdraw/unverified',
                        'user/exchange/bank/fiat/withdraw/verified',
                        'user/exchange/ask/cancelled',
                        'user/exchange/ask/completed',
                        'user/exchange/ask/pending',
                        'user/exchange/bid/cancelled',
                        'user/exchange/bid/completed',
                        'user/exchange/bid/pending',
                        'user/exchange/bank/coin/addresses',
                        'user/exchange/bank/coin/balance/available',
                        'user/exchange/bank/coin/balance/pending',
                        'user/exchange/bank/coin/balance/total',
                        'user/exchange/bank/coin/deposit/cancelled',
                        'user/exchange/bank/coin/deposit/unverified',
                        'user/exchange/bank/coin/deposit/verified',
                        'user/exchange/bank/coin/withdraw/cancelled',
                        'user/exchange/bank/coin/withdraw/completed',
                        'user/exchange/bank/coin/withdraw/unverified',
                        'user/exchange/bank/coin/withdraw/verified',
                        'user/exchange/bank/summary',
                        'user/exchange/coin/fee',
                        'user/exchange/fiat/fee',
                        'user/exchange/kycs',
                        'user/exchange/referral/coin/paid',
                        'user/exchange/referral/coin/successful',
                        'user/exchange/referral/fiat/paid',
                        'user/exchange/referrals',
                        'user/exchange/trade/summary',
                        'user/login/token/{token}',
                        'user/summary',
                        'user/wallet/summary',
                        'wallet/coin/withdraw/cancelled',
                        'wallet/coin/withdraw/completed',
                        'wallet/coin/withdraw/unverified',
                        'wallet/coin/withdraw/verified',
                    ),
                    'post' => array (
                        'login',
                        'login/initiate',
                        'login/password/forgot',
                        'mfa/authy/initiate',
                        'mfa/ga/initiate',
                        'signup',
                        'user/netki/update',
                        'user/profile/image/update',
                        'user/exchange/bank/coin/withdraw/initiate',
                        'user/exchange/bank/coin/withdraw/newVerifycode',
                        'user/exchange/bank/fiat/withdraw/initiate',
                        'user/exchange/bank/fiat/withdraw/newVerifycode',
                        'user/password/change',
                        'user/password/reset',
                        'user/wallet/coin/withdraw/initiate',
                        'wallet/coin/withdraw/newVerifycode',
                    ),
                    'put' => array (
                        'signup/verify/{token}',
                        'user/exchange/kyc',
                        'user/exchange/bank/fiat/deposit/new',
                        'user/exchange/ask/new',
                        'user/exchange/bid/new',
                        'user/exchange/instant/buy',
                        'user/exchange/instant/sell',
                        'user/exchange/bank/coin/withdraw/verify',
                        'user/exchange/bank/fiat/account/new',
                        'user/exchange/bank/fiat/withdraw/verify',
                        'user/mfa/authy/initiate/enable',
                        'user/mfa/ga/initiate/enable',
                        'user/netki/create',
                        'user/profile/phone/new',
                        'user/wallet/coin/address/new',
                        'user/wallet/coin/new',
                        'user/wallet/coin/withdraw/sendToExchange',
                        'user/wallet/coin/withdraw/verify',
                    ),
                    'delete' => array (
                        'user/gcm/{code}',
                        'user/logout',
                        'user/exchange/bank/coin/withdraw/unverified/cancel/{withdrawID}',
                        'user/exchange/bank/fiat/deposit/cancel/{depositID}',
                        'user/exchange/ask/cancel/{orderID}',
                        'user/exchange/bid/cancel/{orderID}',
                        'user/exchange/bank/fiat/withdraw/unverified/cancel/{withdrawID}',
                        'user/mfa/authy/disable/{code}',
                        'user/mfa/ga/disable/{code}',
                        'user/profile/phone/delete',
                        'user/profile/image/delete/{netkiName}',
                        'user/wallet/coin/withdraw/unverified/cancel/{withdrawID}',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/INR' => array ( 'id' => 'BTC/INR', 'symbol' => 'BTC/INR', 'base' => 'BTC', 'quote' => 'INR' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privateGetUserExchangeBankSummary ();
        $balance = responsearray ('message');
        $coin = array (
            'free' => balancearray ('availableCoinBalance'),
            'used' => balancearray ('pendingCoinBalance'),
            'total' => balancearray ('totalCoinBalance'),
        );
        $fiat = array (
            'free' => balancearray ('availableFiatBalance'),
            'used' => balancearray ('pendingFiatBalance'),
            'total' => balancearray ('totalFiatBalance'),
        );
        $result = array (
            'info' => $balance,
            'BTC' => $coin,
            'INR' => $fiat,
        );
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $bids = $this->publicGetExchangeBidOrders ($params);
        $asks = $this->publicGetExchangeAskOrders ($params);
        $orderbook = array (
            'bids' => bidsarray ('message'),
            'asks' => asksarray ('message'),
        );
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray ('rate');
                $amount = orderarray ('vol');
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetExchangeTicker ();
        $ticker = responsearray ('message');
        $timestamp = tickerarray ('timestamp');
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('lastPrice')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('coinvolume')),
            'quoteVolume' => floatval (tickerarray ('fiatvolume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetExchangeTrades ();
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $method = 'privatePutUserExchange';
        $order = array ();
        if (api == 'market') {
            $method .= 'Instant' . $this->capitalize ($side);
            if ($side == 'buy')
                orderarray ('maxFiat') = $amount;
            else
                orderarray ('maxVol') = $amount;
        } else {
            $direction = ($side == 'buy') ? 'Bid' : 'Ask';
            $method .= $direction . 'New';
            orderarray ('rate') = $price;
            orderarray ('vol') = $amount;
        }
        return thisarray ($method) (self.extend ($order, $params));
    }

    public function cancel_order ($id) {
        throw new ExchangeError ($this->id . ' cancelOrder () is not fully implemented yet');
        $method = 'privateDeleteUserExchangeAskCancelOrderId'; // TODO fixme, have to specify order side here
        return thisarray ($method) (array ( 'orderID' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'private') {
            $headers = array ( 'Authorization' => $this->apiKey );
            if ($query) {
                $body = $this->json ($query);
                headersarray ('Content-Type') = 'application/json';
            }
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('success', $response))
            if (responsearray ('success'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class coinspot extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'coinspot',
            'name' => 'CoinSpot',
            'countries' => 'AU', // Australia
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28208429-3cacdf9a-6896-11e7-854e-4c79a772a30f.jpg',
                'api' => array (
                    'public' => 'https://www.coinspot.com.au/pubapi',
                    'private' => 'https://www.coinspot.com.au/api',
                ),
                'www' => 'https://www.coinspot.com.au',
                'doc' => 'https://www.coinspot.com.au/api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'latest',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'orders',
                        'orders/history',
                        'my/coin/deposit',
                        'my/coin/send',
                        'quote/buy',
                        'quote/sell',
                        'my/balances',
                        'my/orders',
                        'my/buy',
                        'my/sell',
                        'my/buy/cancel',
                        'my/sell/cancel',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/AUD' => array ( 'id' => 'BTC', 'symbol' => 'BTC/AUD', 'base' => 'BTC', 'quote' => 'AUD', ),
                'LTC/AUD' => array ( 'id' => 'LTC', 'symbol' => 'LTC/AUD', 'base' => 'LTC', 'quote' => 'AUD', ),
                'DOGE/AUD' => array ( 'id' => 'DOGE', 'symbol' => 'DOGE/AUD', 'base' => 'DOGE', 'quote' => 'AUD', ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $response = $this->privatePostMyBalances ();
        $result = array ( 'info' => $response );
        if (array_key_exists ('balance', $response)) {
            $balances = responsearray ('balance');
            $currencies = array_keys ($balances);
            for ($c = 0; $c < count ($currencies); $c++) {
                $currency = currenciesarray ($c);
                $uppercase = strtoupper ($currency);
                $account = array (
                    'free' => balancesarray ($currency),
                    'used' => null,
                    'total' => balancesarray ($currency),
                );
                if ($uppercase == 'DRK')
                    $uppercase = 'DASH';
                resultarray ($uppercase) = $account;
            }
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $orderbook = $this->privatePostOrders (array_merge (array (
            'cointype' => parray ('id'),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'buyorders', 'asks' => 'sellorders' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('rate'));
                $amount = floatval (orderarray ('amount'));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        resultarray ('bids') = $this->sort_by (resultarray ('bids'), 0, true);
        resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetLatest ();
        $id = $this->market_id ($market);
        $id = strtolower ($id);
        $ticker = responsearray ('prices')array ($id);
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => null,
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->privatePostOrdersHistory (array (
            'cointype' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $method = 'privatePostMy' . $this->capitalize ($side);
        if ($type =='market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $order = array (
            'cointype' => $this->market_id ($market),
            'amount' => $amount,
            'rate' => $price,
        );
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        throw new ExchangeError ($this->id . ' cancelOrder () is not fully implemented yet');
        $method = 'privatePostMyBuy';
        return thisarray ($method) (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        if (!$this->apiKey)
            throw new AuthenticationError ($this->id . ' requires apiKey for all requests');
        $url = $this->urlsarray ('api')array ($api) . '/' . $path;
        if ($api == 'private') {
            $nonce = $this->nonce ();
            $body = $this->json (array_merge (array ( 'nonce' => $nonce ), $params));
            $headers = array (
                'Content-Type' => 'application/json',
                'Content-Length' => strlen ($body),
                'key' => $this->apiKey,
                'sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class dsx extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'dsx',
            'name' => 'DSX',
            'countries' => 'UK',
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27990275-1413158a-645a-11e7-931c-94717f7510e3.jpg',
                'api' => array (
                    'mapi' => 'https://dsx.uk/mapi',  // market data
                    'tapi' => 'https://dsx.uk/tapi',  // trading
                    'dwapi' => 'https://dsx.uk/dwapi', // deposit/withdraw
                ),
                'www' => 'https://dsx.uk',
                'doc' => array (
                    'https://api.dsx.uk',
                    'https://dsx.uk/api_docs/public',
                    'https://dsx.uk/api_docs/private',
                    '',
                ),
            ),
            'api' => array (
                'mapi' => array ( // market data (public)
                    'get' => array (
                        'barsFromMoment/{id}/{period}/{start}', // empty reply :\
                        'depth/{id}',
                        'info',
                        'lastBars/{id}/{period}/{amount}', // period is (m, h or d)
                        'periodBars/{id}/{period}/{start}/{end}',
                        'ticker/{id}',
                        'trades/{id}',
                    ),
                ),
                'tapi' => array ( // trading (private)
                    'post' => array (
                        'getInfo',
                        'TransHistory',
                        'TradeHistory',
                        'OrderHistory',
                        'ActiveOrders',
                        'Trade',
                        'CancelOrder',
                    ),
                ),
                'dwapi' => array ( // deposit / withdraw (private)
                    'post' => array (
                        'getCryptoDepositAddress',
                        'cryptoWithdraw',
                        'fiatWithdraw',
                        'getTransactionStatus',
                        'getTransactions',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $response = $this->mapiGetInfo ();
        $keys = array_keys (responsearray ('pairs'));
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $id = keysarray ($p);
            $market = responsearray ('pairs')array ($id);
            $base = mb_substr ($id, 0, 3);
            $quote = mb_substr ($id, 3, 6);
            $base = strtoupper ($base);
            $quote = strtoupper ($quote);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->tapiPostGetInfo ();
        $balances = responsearray ('return');
        $result = array ( 'info' => $balances );
        $currencies = array_keys (balancesarray ('total'));
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $account = array (
                'free' => balancesarray ('funds')array ($currency),
                'used' => null,
                'total' => balancesarray ('total')array ($currency),
            );
            accountarray ('used') = accountarray ('total') - accountarray ('free');
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->mapiGetDepthId (array_merge (array (
            'id' => parray ('id'),
        ), $params));
        $orderbook = responsearray ($p['id')];
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray (0);
                $amount = orderarray (1);
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->mapiGetTickerId (array (
            'id' => parray ('id'),
        ));
        $ticker = responsearray ($p['id')];
        $timestamp = tickerarray ('updated') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('avg')),
            'baseVolume' => floatval (tickerarray ('vol')),
            'quoteVolume' => floatval (tickerarray ('vol_cur')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->mapiGetTradesId (array (
            'id' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $order = array (
            'pair' => $this->market_id ($market),
            'type' => $side,
            'rate' => $price,
            'amount' => $amount,
        );
        return $this->tapiPostTrade (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->tapiPostCancelOrder (array ( 'orderId' => $id ));
    }

    public function request ($path, $api = 'mapi', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        if (($api == 'mapi') || ($api == 'dwapi'))
            $url .= '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'mapi') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $method = $path;
            $body = $this->urlencode (array_merge (array (
                'method' => $path,
                'nonce' => $nonce,
            ), $query));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512', 'base64'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'mapi')
            return $response;
        if (array_key_exists ('success', $response))
            if (responsearray ('success'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response)); 
    }
}

//-----------------------------------------------------------------------------

class exmo extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'exmo',
            'name' => 'EXMO',
            'countries' => array ( 'ES', 'RU', ), // Spain, Russia
            'rateLimit' => 1000, // once every 350 ms ≈ 180 requests per minute ≈ 3 requests per second
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766491-1b0ea956-5eda-11e7-9225-40d67b481b8d.jpg',
                'api' => 'https://api.exmo.com',
                'www' => 'https://exmo.me',
                'doc' => array (
                    'https://exmo.me/ru/api_doc',
                    'https://github.com/exmo-dev/exmo_api_lib/tree/master/nodejs',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'currency',
                        'order_book',
                        'pair_settings',
                        'ticker',
                        'trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'user_info',
                        'order_create',
                        'order_cancel',
                        'user_open_orders',
                        'user_trades',
                        'user_cancelled_orders',
                        'order_trades',
                        'required_amount',
                        'deposit_address',
                        'withdraw_crypt',
                        'withdraw_get_txid',
                        'excode_create',
                        'excode_load',
                        'wallet_history',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetPairSettings ();
        $keys = array_keys ($markets);
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $id = keysarray ($p);
            $market = marketsarray ($id);
            $symbol = str_replace ('_', '/', $id);
            list ($base, $quote) = explode ('/', $symbol);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostUserInfo ();
        $result = array ( 'info' => $response );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($currency, responsearray ('balances')))
                accountarray ('free') = floatval (responsearray ('balances')array ($currency));
            if (array_key_exists ($currency, responsearray ('reserved')))
                accountarray ('used') = floatval (responsearray ('reserved')array ($currency));
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->publicGetOrderBook (array_merge (array (
            'pair' => parray ('id'),
        ), $params));
        $orderbook = responsearray ($p['id')];
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'bid', 'asks' => 'ask' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = tickerarray ('updated') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy_price')),
            'ask' => floatval (tickerarray ('sell_price')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last_trade')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('avg')),
            'baseVolume' => floatval (tickerarray ('vol')),
            'quoteVolume' => floatval (tickerarray ('vol_curr')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers ($currency = 'USD') {
        $this->loadMarkets ();
        $response = $this->publicGetTicker ();
        $result = array ();
        $ids = array_keys ($response);
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = responsearray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $response = $this->publicGetTicker ();
        $p = $this->market ($market);
        return $this->parse_ticker (responsearray ($p['id')], $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrades (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $prefix = '';
        if ($type =='market')
            $prefix = 'market_';
        $order = array (
            'pair' => $this->market_id ($market),
            'quantity' => $amount,
            'price' => $price || 0,
            'type' => $prefix . $side,
        );
        return $this->privatePostOrderCreate (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostOrderCancel (array ( 'order_id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array ( 'nonce' => $nonce ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'public')
            return $response;
        if (array_key_exists ('result', $response))
            if (responsearray ('result'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class flowbtc extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'flowbtc',
            'name' => 'flowBTC',
            'countries' => 'BR', // Brazil
            'version' => 'v1',
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28162465-cd815d4c-67cf-11e7-8e57-438bea0523a2.jpg',
                'api' => 'https://api.flowbtc.com:8400/ajax',
                'www' => 'https://trader.flowbtc.com',
                'doc' => 'http://www.flowbtc.com.br/api/',
            ),
            'api' => array (
                'public' => array (
                    'post' => array (
                        'GetTicker',
                        'GetTrades',
                        'GetTradesByDate',
                        'GetOrderBook',
                        'GetProductPairs',
                        'GetProducts',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'CreateAccount',
                        'GetUserInfo',
                        'SetUserInfo',
                        'GetAccountInfo',
                        'GetAccountTrades',
                        'GetDepositAddresses',
                        'Withdraw',
                        'CreateOrder',
                        'ModifyOrder',
                        'CancelOrder',
                        'CancelAllOrders',
                        'GetAccountOpenOrders',
                        'GetOrderFee',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $response = $this->publicPostGetProductPairs ();
        $markets = responsearray ('productPairs');
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('name');
            $base = marketarray ('product1Label');
            $quote = marketarray ('product2Label');
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostGetAccountInfo ();
        $balances = responsearray ('currencies');
        $result = array ( 'info' => $response );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('name');
            $account = array (
                'free' => balancearray ('balance'),
                'used' => balancearray ('hold'),
                'total' => null,
            );
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $orderbook = $this->publicPostGetOrderBook (array_merge (array (
            'productPair' => parray ('id'),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('px'));
                $amount = floatval (orderarray ('qty'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicPostGetTicker (array (
            'productPair' => parray ('id'),
        ));
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('volume24hr')),
            'quoteVolume' => floatval (tickerarray ('volume24hrProduct2')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicPostGetTrades (array (
            'productPair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $orderType = ($type == 'market') ? 1 : 0;
        $order = array (
            'ins' => $this->market_id ($market),
            'side' => $side,
            'orderType' => $orderType,
            'qty' => $amount,
            'px' => $price,
        );
        return $this->privatePostCreateOrder (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        if (array_key_exists ('ins', $params)) {
            return $this->privatePostCancelOrder (array_merge (array (
                'serverOrderId' => $id,
            ), $params));            
        }
        throw new ExchangeError ($this->id . ' requires `ins` symbol parameter for cancelling an order');
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $path;
        if ($api == 'public') {
            if ($params) {
                $body = $this->json ($params);
            }
        } else {
            if (!$this->uid)
                throw new AuthenticationError ($this->id . ' requires `' . $this->id . '.uid` property for authentication');
            $nonce = $this->nonce ();
            $auth = (string) $nonce . $this->uid . $this->apiKey;
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($this->secret));
            $body = $this->json (array_merge (array (
                'apiKey' => $this->apiKey,
                'apiNonce' => $nonce,
                'apiSig' => strtoupper ($signature),
            ), $params));
            $headers = array (
                'Content-Type' => 'application/json',
                'Content-Length' => strlen ($body),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('isAccepted', $response))
            if (responsearray ('isAccepted'))
                return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class foxbit extends blinktrade {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'foxbit',
            'name' => 'FoxBit',
            'countries' => 'BR',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27991413-11b40d42-647f-11e7-91ee-78ced874dd09.jpg',
                'api' => array (
                    'public' => 'https://api.blinktrade.com/api',
                    'private' => 'https://api.blinktrade.com/tapi',
                ),
                'www' => 'https://foxbit.exchange',
                'doc' => 'https://blinktrade.com/docs',
            ),
            'comment' => 'Blinktrade API',
            'markets' => array (
                'BTC/BRL' => array ( 'id' => 'BTCBRL', 'symbol' => 'BTC/BRL', 'base' => 'BTC', 'quote' => 'BRL', 'brokerId' => 4, 'broker' => 'FoxBit', ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class fyb extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'rateLimit' => 1500,
            'api' => array (
                'public' => array (
                    'get' => array (
                        'ticker',
                        'tickerdetailed',
                        'orderbook',
                        'trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'test',
                        'getaccinfo',
                        'getpendingorders',
                        'getorderhistory',
                        'cancelpendingorder',
                        'placeorder',
                        'withdraw',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $balance = $this->privatePostGetaccinfo ();
        $btc = floatval (balancearray ('btcBal'));
        $symbol = $this->symbolsarray (0);
        $quote = $this->marketsarray ($symbol)array ('quote');
        $lowercase = strtolower ($quote) . 'Bal';
        $fiat = floatval (balancearray ($lowercase));
        $crypto = array (
            'free' => $btc,
            'used' => null,
            'total' => $btc,
        );
        $accounts = array ( 'BTC' => $crypto );
        accountsarray ($quote) = array (
            'free' => $fiat,
            'used' => null,
            'total' => $fiat,
        );
        accountsarray ('info') = $balance;
        return $accounts;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetOrderbook ($params);
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetTickerdetailed ();
        $timestamp = $this->milliseconds ();
        $last = null;
        $volume = null;
        if (array_key_exists ('last', $ticker))
            $last = floatval (tickerarray ('last'));
        if (array_key_exists ('vol', $ticker))
            $volume = floatval (tickerarray ('vol'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => $last,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => $volume,
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTrades ();
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        return $this->privatePostPlaceorder (array_merge (array (
            'qty' => $amount,
            'price' => $price,
            'type' => strtoupper (sidearray (0))
        ), $params));
    }

    public function cancel_order ($id) {
        return $this->privatePostCancelpendingorder (array ( 'orderNo' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $path;
        if ($api == 'public') {
            $url .= '.json';
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array ( 'timestamp' => $nonce ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'key' => $this->apiKey,
                'sig' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha1')
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if ($api == 'private')
            if (array_key_exists ('error', $response))
                if (responsearray ('error'))
                    throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class fybse extends fyb {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'fybse',
            'name' => 'FYB-SE',
            'countries' => 'SE', // Sweden
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766512-31019772-5edb-11e7-8241-2e675e6797f1.jpg',
                'api' => 'https://www.fybse.se/api/SEK',
                'www' => 'https://www.fybse.se',
                'doc' => 'http://docs.fyb.apiary.io',
            ),
            'markets' => array (
                'BTC/SEK' => array ( 'id' => 'SEK', 'symbol' => 'BTC/SEK', 'base' => 'BTC', 'quote' => 'SEK' ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class fybsg extends fyb {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'fybsg',
            'name' => 'FYB-SG',
            'countries' => 'SG', // Singapore
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766513-3364d56a-5edb-11e7-9e6b-d5898bb89c81.jpg',
                'api' => 'https://www.fybsg.com/api/SGD',
                'www' => 'https://www.fybsg.com',
                'doc' => 'http://docs.fyb.apiary.io',
            ),
            'markets' => array (
                'BTC/SGD' => array ( 'id' => 'SGD', 'symbol' => 'BTC/SGD', 'base' => 'BTC', 'quote' => 'SGD' ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class gatecoin extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'gatecoin',
            'name' => 'Gatecoin',
            'rateLimit' => 2000,
            'countries' => 'HK', // Hong Kong
            'comment' => 'a regulated/licensed exchange',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28646817-508457f2-726c-11e7-9eeb-3528d2413a58.jpg',
                'api' => 'https://api.gatecoin.com',
                'www' => 'https://gatecoin.com',
                'doc' => array (
                    'https://gatecoin.com/api',
                    'https://github.com/Gatecoin/RESTful-API-Implementation',
                    'https://api.gatecoin.com/swagger-ui/index.html',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'Public/ExchangeRate', // Get the exchange rates
                        'Public/LiveTicker', // Get live ticker for all currency
                        'Public/LiveTicker/{CurrencyPair}', // Get live ticker by currency
                        'Public/LiveTickers', // Get live ticker for all currency
                        'Public/MarketDepth/{CurrencyPair}', // Gets prices and market depth for the currency pair.
                        'Public/NetworkStatistics/{DigiCurrency}', // Get the network status of a specific digital currency
                        'Public/StatisticHistory/{DigiCurrency}/{Typeofdata}', // Get the historical data of a specific digital currency
                        'Public/TickerHistory/{CurrencyPair}/{Timeframe}', // Get ticker history
                        'Public/Transactions/{CurrencyPair}', // Gets recent transactions
                        'Public/TransactionsHistory/{CurrencyPair}', // Gets all transactions
                        'Reference/BusinessNatureList', // Get the business nature list.
                        'Reference/Countries', // Get the country list.
                        'Reference/Currencies', // Get the currency list.
                        'Reference/CurrencyPairs', // Get the currency pair list.
                        'Reference/CurrentStatusList', // Get the current status list.
                        'Reference/IdentydocumentTypes', // Get the different types of identity documents possible.
                        'Reference/IncomeRangeList', // Get the income range list.
                        'Reference/IncomeSourceList', // Get the income source list.
                        'Reference/VerificationLevelList', // Get the verif level list.
                        'Stream/PublicChannel', // Get the public pubnub channel list
                    ),
                    'post' => array (
                        'Export/Transactions', // Request a export of all trades from based on currencypair, start date and end date
                        'Ping', // Post a string, then get it back.
                        'Public/Unsubscribe/{EmailCode}', // Lets the user unsubscribe from emails
                        'RegisterUser', // Initial trader registration.
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'Account/CorporateData', // Get corporate account data
                        'Account/DocumentAddress', // Check if residence proof uploaded
                        'Account/DocumentCorporation', // Check if registered document uploaded
                        'Account/DocumentID', // Check if ID document copy uploaded
                        'Account/DocumentInformation', // Get Step3 Data
                        'Account/Email', // Get user email
                        'Account/FeeRate', // Get fee rate of logged in user
                        'Account/Level', // Get verif level of logged in user
                        'Account/PersonalInformation', // Get Step1 Data
                        'Account/Phone', // Get user phone number
                        'Account/Profile', // Get trader profile
                        'Account/Questionnaire', // Fill the questionnaire
                        'Account/Referral', // Get referral information
                        'Account/ReferralCode', // Get the referral code of the logged in user
                        'Account/ReferralNames', // Get names of referred traders
                        'Account/ReferralReward', // Get referral reward information
                        'Account/ReferredCode', // Get referral code
                        'Account/ResidentInformation', // Get Step2 Data
                        'Account/SecuritySettings', // Get verif details of logged in user
                        'Account/User', // Get all user info
                        'APIKey/APIKey', // Get API Key for logged in user
                        'Auth/ConnectionHistory', // Gets connection history of logged in user
                        'Balance/Balances', // Gets the available balance for each currency for the logged in account.
                        'Balance/Balances/{Currency}', // Gets the available balance for s currency for the logged in account.
                        'Balance/Deposits', // Get all account deposits, including wire and digital currency, of the logged in user
                        'Balance/Withdrawals', // Get all account withdrawals, including wire and digital currency, of the logged in user
                        'Bank/Accounts/{Currency}/{Location}', // Get internal bank account for deposit
                        'Bank/Transactions', // Get all account transactions of the logged in user
                        'Bank/UserAccounts', // Gets all the bank accounts related to the logged in user.
                        'Bank/UserAccounts/{Currency}', // Gets all the bank accounts related to the logged in user.
                        'ElectronicWallet/DepositWallets', // Gets all crypto currency addresses related deposits to the logged in user.
                        'ElectronicWallet/DepositWallets/{DigiCurrency}', // Gets all crypto currency addresses related deposits to the logged in user by currency.
                        'ElectronicWallet/Transactions', // Get all digital currency transactions of the logged in user
                        'ElectronicWallet/Transactions/{DigiCurrency}', // Get all digital currency transactions of the logged in user
                        'ElectronicWallet/UserWallets', // Gets all external digital currency addresses related to the logged in user.
                        'ElectronicWallet/UserWallets/{DigiCurrency}', // Gets all external digital currency addresses related to the logged in user by currency.
                        'Info/ReferenceCurrency', // Get user's reference currency
                        'Info/ReferenceLanguage', // Get user's reference language
                        'Notification/Messages', // Get from oldest unread + 3 read message to newest messages
                        'Trade/Orders', // Gets open orders for the logged in trader.
                        'Trade/Orders/{OrderID}', // Gets an order for the logged in trader.
                        'Trade/StopOrders', // Gets all stop orders for the logged in trader. Max 1000 record.
                        'Trade/StopOrdersHistory', // Gets all stop orders for the logged in trader. Max 1000 record.
                        'Trade/Trades', // Gets all transactions of logged in user
                        'Trade/UserTrades', // Gets all transactions of logged in user            
                    ),
                    'post' => array (
                        'Account/DocumentAddress', // Upload address proof document
                        'Account/DocumentCorporation', // Upload registered document document
                        'Account/DocumentID', // Upload ID document copy
                        'Account/Email/RequestVerify', // Request for verification email
                        'Account/Email/Verify', // Verification email
                        'Account/GoogleAuth', // Enable google auth
                        'Account/Level', // Request verif level of logged in user
                        'Account/Questionnaire', // Fill the questionnaire
                        'Account/Referral', // Post a referral email
                        'APIKey/APIKey', // Create a new API key for logged in user
                        'Auth/ChangePassword', // Change password.
                        'Auth/ForgotPassword', // Request reset password
                        'Auth/ForgotUserID', // Request user id
                        'Auth/Login', // Trader session log in.
                        'Auth/Logout', // Logout from the current session.
                        'Auth/LogoutOtherSessions', // Logout other sessions.
                        'Auth/ResetPassword', // Reset password
                        'Bank/Transactions', // Request a transfer from the traders account of the logged in user. This is only available for bank account
                        'Bank/UserAccounts', // Add an account the logged in user
                        'ElectronicWallet/DepositWallets/{DigiCurrency}', // Add an digital currency addresses to the logged in user.
                        'ElectronicWallet/Transactions/Deposits/{DigiCurrency}', // Get all internal digital currency transactions of the logged in user
                        'ElectronicWallet/Transactions/Withdrawals/{DigiCurrency}', // Get all external digital currency transactions of the logged in user
                        'ElectronicWallet/UserWallets/{DigiCurrency}', // Add an external digital currency addresses to the logged in user.
                        'ElectronicWallet/Withdrawals/{DigiCurrency}', // Request a transfer from the traders account to an external address. This is only available for crypto currencies.
                        'Notification/Messages', // Mark all as read
                        'Notification/Messages/{ID}', // Mark as read
                        'Trade/Orders', // Place an order at the exchange.
                        'Trade/StopOrders', // Place a stop order at the exchange.
                    ),
                    'put' => array (
                        'Account/CorporateData', // Update user company data for corporate account
                        'Account/DocumentID', // Update ID document meta data
                        'Account/DocumentInformation', // Update Step3 Data
                        'Account/Email', // Update user email
                        'Account/PersonalInformation', // Update Step1 Data
                        'Account/Phone', // Update user phone number
                        'Account/Questionnaire', // update the questionnaire
                        'Account/ReferredCode', // Update referral code
                        'Account/ResidentInformation', // Update Step2 Data
                        'Account/SecuritySettings', // Update verif details of logged in user
                        'Account/User', // Update all user info
                        'Bank/UserAccounts', // Update the label of existing user bank accounnt
                        'ElectronicWallet/DepositWallets/{DigiCurrency}/{AddressName}', // Update the name of an address
                        'ElectronicWallet/UserWallets/{DigiCurrency}', // Update the name of an external address
                        'Info/ReferenceCurrency', // User's reference currency
                        'Info/ReferenceLanguage', // Update user's reference language
                    ),
                    'delete' => array (
                        'APIKey/APIKey/{PublicKey}', // Remove an API key
                        'Bank/Transactions/{RequestID}', // Delete pending account withdraw of the logged in user
                        'Bank/UserAccounts/{Currency}/{Label}', // Delete an account of the logged in user
                        'ElectronicWallet/DepositWallets/{DigiCurrency}/{AddressName}', // Delete an digital currency addresses related to the logged in user.
                        'ElectronicWallet/UserWallets/{DigiCurrency}/{AddressName}', // Delete an external digital currency addresses related to the logged in user.
                        'Trade/Orders', // Cancels all existing order
                        'Trade/Orders/{OrderID}', // Cancels an existing order
                        'Trade/StopOrders', // Cancels all existing stop orders
                        'Trade/StopOrders/{ID}', // Cancels an existing stop order
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $response = $this->publicGetPublicLiveTickers ();
        $markets = responsearray ('tickers');
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('currencyPair');
            $base = mb_substr ($id, 0, 3);
            $quote = mb_substr ($id, 3, 6);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetBalanceBalances ();
        $balances = responsearray ('balances');
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency');
            $account = array (
                'free' => balancearray ('availableBalance'),
                'used' => $this->sum (
                    balancearray ('pendingIncoming'), 
                    balancearray ('pendingOutgoing'),
                    balancearray ('openOrder')),
                'total' => balancearray ('balance'),
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $orderbook = $this->publicGetPublicMarketDepthCurrencyPair (array_merge (array (
            'CurrencyPair' => parray ('id'),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('volume'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = intval (tickerarray ('createDateTime')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $response = $this->publicGetPublicLiveTickers ();
        $tickers = responsearray ('tickers');
        $result = array ();
        for ($t = 0; $t < count ($tickers); $t++) {
            $ticker = tickersarray ($t);
            $id = tickerarray ('currencyPair');
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->publicGetPublicLiveTickerCurrencyPair (array (
            'CurrencyPair' => parray ('id'),
        ));
        $ticker = responsearray ('ticker');
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetPublicTransactionsCurrencyPair (array (
            'CurrencyPair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'Code' => $this->market_id ($market),
            'Way' => ($side == 'buy') ? 'Bid' : 'Ask',
            'Amount' => $amount,
        );
        if ($type == 'limit')
            orderarray ('Price') = $price;
        if ($this->twofa) {
            if (array_key_exists ('ValidationCode', $params))
                orderarray ('ValidationCode') = paramsarray ('ValidationCode');
            else
                throw new AuthenticationError ($this->id . ' two-factor authentication requires a missing ValidationCode parameter');
        }
        return $this->privatePostTradeOrders (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privateDeleteTradeOrdersOrderID (array ( 'OrderID' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $contentType = ($method == 'GET') ? '' : 'application/json';
            $auth = $method . $url . $contentType . (string) $nonce;
            $auth = strtolower ($auth);
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($this->secret), 'sha256', 'base64');
            $headers = array (
                'API_PUBLIC_KEY' => $this->apiKey,
                'API_REQUEST_SIGNATURE' => $signature,
                'API_REQUEST_DATE' => $nonce,
            );
            if ($method != 'GET') {
                headersarray ('Content-Type') = $contentType;
                $body = $this->json (array_merge (array ( 'nonce' => $nonce ), $params));
            }
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('responseStatus', $response))
            if (array_key_exists ('message', responsearray ('responseStatus')))
                if (responsearray ('responseStatus')array ('message') == 'OK')
                    return $response;
        throw new ExchangeError ($this->id . ' ' . $this->json ($response));
    }
}

//-----------------------------------------------------------------------------

class gdax extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'gdax',
            'name' => 'GDAX',
            'countries' => 'US',
            'rateLimit' => 1000,
            'urls' => array (
                'test' => 'https://api-public.sandbox.gdax.com',
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766527-b1be41c6-5edb-11e7-95f6-5b496c469e2c.jpg',
                'api' => 'https://api.gdax.com',
                'www' => 'https://www.gdax.com',
                'doc' => 'https://docs.gdax.com',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'currencies',
                        'products',
                        'products/{id}/book',
                        'products/{id}/candles',
                        'products/{id}/stats',
                        'products/{id}/ticker',
                        'products/{id}/trades',
                        'time',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'accounts',
                        'accounts/{id}',
                        'accounts/{id}/holds',
                        'accounts/{id}/ledger',
                        'coinbase-accounts',
                        'fills',
                        'funding',
                        'orders',
                        'orders/{id}',
                        'payment-methods',
                        'position',
                        'reports/{id}',
                        'users/self/trailing-volume',
                    ),
                    'post' => array (
                        'deposits/coinbase-account',
                        'deposits/payment-method',
                        'funding/repay',
                        'orders',
                        'position/close',
                        'profiles/margin-transfer',
                        'reports',
                        'withdrawals/coinbase',
                        'withdrawals/crypto',
                        'withdrawals/payment-method',
                    ),
                    'delete' => array (
                        'orders',
                        'orders/{id}',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetProducts ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('id');
            $base = marketarray ('base_currency');
            $quote = marketarray ('quote_currency');
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privateGetAccounts ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency');
            $account = array (
                'free' => floatval (balancearray ('available')),
                'used' => floatval (balancearray ('hold')),
                'total' => floatval (balancearray ('balance')),
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetProductsIdBook (array_merge (array (
            'id' => $this->market_id ($market),
            'level' => 2, // 1 best bidask, 2 aggregated, 3 full
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetProductsIdTicker (array (
            'id' => parray ('id'),
        ));
        $quote = $this->publicGetProductsIdStats (array (
            'id' => parray ('id'),
        ));
        $timestamp = $this->parse8601 (tickerarray ('time'));
        $bid = null;
        $ask = null;
        if (array_key_exists ('bid', $ticker))
            $bid = floatval (tickerarray ('bid'));
        if (array_key_exists ('ask', $ticker))
            $ask = floatval (tickerarray ('ask'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (quotearray ('high')),
            'low' => floatval (quotearray ('low')),
            'bid' => $bid,
            'ask' => $ask,
            'vwap' => null,
            'open' => floatval (quotearray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (quotearray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetProductsIdTrades (array (
            'id' => $this->market_id ($market), // fixes issue #2
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $oid = (string) $this->nonce ();
        $order = array (
            'product_id' => $this->market_id ($market),
            'side' => $side,
            'size' => $amount,
            'type' => $type,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return $this->privatePostOrders (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privateDeleteOrdersId (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = '/' . $this->implode_params ($path, $params);
        $url = $this->urlsarray ('api') . $request;
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            if (!$this->apiKey)
                throw new AuthenticationError ($this->id . ' requires apiKey property for authentication and trading');
            if (!$this->secret)
                throw new AuthenticationError ($this->id . ' requires $secret property for authentication and trading');
            if (!$this->password)
                throw new AuthenticationError ($this->id . ' requires password property for authentication and trading');
            $nonce = (string) $this->nonce ();
            if ($query)
                $body = $this->json ($query);
            $what = $nonce . $method . $request . ($body || '');
            $secret = base64_decode ($this->secret);
            $signature = $this->hmac ($this->encode ($what), $secret, 'sha256', 'base64');
            $headers = array (
                'CB-ACCESS-KEY' => $this->apiKey,
                'CB-ACCESS-SIGN' => $signature,
                'CB-ACCESS-TIMESTAMP' => $nonce,
                'CB-ACCESS-PASSPHRASE' => $this->password,
                'Content-Type' => 'application/json',
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('message', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class gemini extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'gemini',
            'name' => 'Gemini',
            'countries' => 'US',
            'rateLimit' => 1500, // 200 for private API
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27816857-ce7be644-6096-11e7-82d6-3c257263229c.jpg',
                'api' => 'https://api.gemini.com',
                'www' => 'https://gemini.com',
                'doc' => 'https://docs.gemini.com/rest-api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'symbols',
                        'pubticker/{symbol}',
                        'book/{symbol}',
                        'trades/{symbol}',
                        'auction/{symbol}',
                        'auction/{symbol}/history',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'order/new',
                        'order/cancel',
                        'order/cancel/session',
                        'order/cancel/all',
                        'order/status',
                        'orders',
                        'mytrades',
                        'tradevolume',
                        'balances',
                        'deposit/{currency}/newAddress',
                        'withdraw/{currency}',
                        'heartbeat',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetSymbols ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $id = marketsarray ($p);
            $market = $id;
            $uppercase = strtoupper ($market);
            $base = mb_substr ($uppercase, 0, 3);
            $quote = mb_substr ($uppercase, 3, 6);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetBookSymbol (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('amount'));
                $timestamp = intval (orderarray ('timestamp')) * 1000;
                resultarray ($side)[] = array ($price, $amount, $timestamp);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetPubtickerSymbol (array (
            'symbol' => parray ('id'),
        ));
        $timestamp = tickerarray ('volume')array ('timestamp');
        $baseVolume = parray ('base');
        $quoteVolume = parray ('quote');
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('volume')array ($baseVolume)),
            'quoteVolume' => floatval (tickerarray ('volume')array ($quoteVolume)),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTradesSymbol (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privatePostBalances ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency');
            $account = array (
                'free' => floatval (balancearray ('available')),
                'used' => null,
                'total' => floatval (balancearray ('amount')),
            );
            accountarray ('used') = accountarray ('total') - accountarray ('free');
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $order = array (
            'client_order_id' => $this->nonce (),
            'symbol' => $this->market_id ($market),
            'amount' => (string) $amount,
            'price' => (string) $price,
            'side' => $side,
            'type' => 'exchange limit', // gemini allows limit orders only
        );
        return $this->privatePostOrderNew (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array ( 'order_id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $request = array_merge (array (
                'request' => $url,
                'nonce' => $nonce,
            ), $query);
            $payload = $this->json ($request);
            $payload = base64_encode ($payload);
            $payload = $this->encode ($payload);
            $signature = $this->hmac ($payload, $this->encode ($this->secret), 'sha384');
            $headers = array (
                'Content-Type' => 'text/plain',
                'Content-Length' => 0,
                'X-GEMINI-APIKEY' => $this->apiKey,
                'X-GEMINI-PAYLOAD' => $payload,
                'X-GEMINI-SIGNATURE' => $signature,
            );
        }
        $url = $this->urlsarray ('api') . $url;
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('result', $response))
            if (responsearray ('result') == 'error')
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class hitbtc extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'hitbtc',
            'name' => 'HitBTC',
            'countries' => 'HK', // Hong Kong
            'rateLimit' => 1500,
            'version' => '1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766555-8eaec20e-5edc-11e7-9c5b-6dc69fc42f5e.jpg',
                'api' => 'http://api.hitbtc.com',
                'www' => 'https://hitbtc.com',
                'doc' => array (
                    'https://hitbtc.com/api',
                    'http://hitbtc-com.github.io/hitbtc-api',
                    'http://jsfiddle.net/bmknight/RqbYB',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{symbol}/orderbook',
                        '{symbol}/ticker',
                        '{symbol}/trades',
                        '{symbol}/trades/recent',
                        'symbols',
                        'ticker',
                        'time,'
                    ),
                ),
                'trading' => array (
                    'get' => array (
                        'balance',
                        'orders/active',
                        'orders/recent',
                        'order',
                        'trades/by/order',
                        'trades',
                    ),
                    'post' => array (
                        'new_order',
                        'cancel_order',
                        'cancel_orders',
                    ),
                ),
                'payment' => array (
                    'get' => array (
                        'balance',
                        'address/{currency}',
                        'transactions',
                        'transactions/{transaction}',
                    ),
                    'post' => array (
                        'transfer_to_trading',
                        'transfer_to_main',
                        'address/{currency}',
                        'payout',
                    ),
                )
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetSymbols ();
        $result = array ();
        for ($p = 0; $p < count (marketsarray ('symbols')); $p++) {
            $market = marketsarray ('symbols')array ($p);
            $id = marketarray ('symbol');
            $base = marketarray ('commodity');
            $quote = marketarray ('currency');
            $lot = floatval (marketarray ('lot'));
            $step = floatval (marketarray ('step'));
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            // looks like they now have it correct
            // if ($base == 'DSH')
            //     $base = 'DASH';
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'lot' => $lot,
                'step' => $step,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->tradingGetBalance ();
        $balances = responsearray ('balance');
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency_code');
            $account = array (
                'free' => floatval (balancearray ('cash')),
                'used' => floatval (balancearray ('reserved')),
                'total' => null,
            );
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetSymbolOrderbook (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = tickerarray ('timestamp');
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('volume')),
            'quoteVolume' => floatval (tickerarray ('volume_quote')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetTicker ();
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetSymbolTicker (array (
            'symbol' => parray ('id'),
        ));
        if (array_key_exists ('message', $ticker))
            throw new ExchangeError ($this->id . ' ' . tickerarray ('message'));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetSymbolTrades (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        // check if $amount can be evenly divided into lots
        // they want integer $quantity in lot units
        $quantity = floatval ($amount) / parray ('lot');
        $wholeLots = (int) round ($quantity);
        $difference = $quantity - $wholeLots;
        if (abs ($difference) > parray ('step'))
            throw new ExchangeError ($this->id . ' $order $amount should be evenly divisible by lot unit size of ' . (string) parray ('lot'));
        $order = array (
            'clientOrderId' => $this->nonce (),
            'symbol' => parray ('id'),
            'side' => $side,
            'quantity' => (string) $wholeLots, // $quantity in integer lot units
            'type' => $type,
        );
        if ($type == 'limit')
            orderarray ('price') = $this->decimal ($price);
        return $this->tradingPostNewOrder (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->tradingPostCancelOrder (array ( 'clientOrderId' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = '/' . 'api' . '/' . $this->version . '/' . $api . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $query = array_merge (array ( 'nonce' => $nonce, 'apikey' => $this->apiKey ), $query);
            if ($method == 'POST')
                if ($query)
                    $body = $this->urlencode ($query);
            if ($query)
                $url .= '?' . $this->urlencode ($query);
            $auth = $url . ($body || '');
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'X-Signature' => strtolower ($this->hmac ($this->encode ($auth), $this->encode ($this->secret), 'sha512')),
            );
        }
        $url = $this->urlsarray ('api') . $url;
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('code', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class huobi extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'huobi',
            'name' => 'Huobi',
            'countries' => 'CN',
            'rateLimit' => 2000,
            'version' => 'v3',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766569-15aa7b9a-5edd-11e7-9e7f-44791f4ee49c.jpg',
                'api' => 'http://api.huobi.com',
                'www' => 'https://www.huobi.com',
                'doc' => 'https://github.com/huobiapi/API_Docs_en/wiki',
            ),
            'api' => array (
                'staticmarket' => array (
                    'get' => array (
                        '{id}_kline_{period}',
                        'ticker_{id}',
                        'depth_{id}',
                        'depth_{id}_{length}',
                        'detail_{id}',
                    ),
                ),
                'usdmarket' => array (
                    'get' => array (
                        '{id}_kline_{period}',
                        'ticker_{id}',
                        'depth_{id}',
                        'depth_{id}_{length}',
                        'detail_{id}',
                    ),
                ),
                'trade' => array (
                    'post' => array (
                        'get_account_info',
                        'get_orders',
                        'order_info',
                        'buy',
                        'sell',
                        'buy_market',
                        'sell_market',
                        'cancel_order',
                        'get_new_deal_orders',
                        'get_order_id_by_trade_id',
                        'withdraw_coin',
                        'cancel_withdraw_coin',
                        'get_withdraw_coin_result',
                        'transfer',
                        'loan',
                        'repayment',
                        'get_loan_available',
                        'get_loans',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/CNY' => array ( 'id' => 'btc', 'symbol' => 'BTC/CNY', 'base' => 'BTC', 'quote' => 'CNY', 'type' => 'staticmarket', 'coinType' => 1, ),
                'LTC/CNY' => array ( 'id' => 'ltc', 'symbol' => 'LTC/CNY', 'base' => 'LTC', 'quote' => 'CNY', 'type' => 'staticmarket', 'coinType' => 2, ),
                'BTC/USD' => array ( 'id' => 'btc', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD', 'type' => 'usdmarket',    'coinType' => 1, ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $balances = $this->tradePostGetAccountInfo ();
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            $available = 'available_' . $lowercase . '_display';
            $frozen = 'frozen_' . $lowercase . '_display';
            $loan = 'loan_' . $lowercase . '_display';
            if (array_key_exists ($available, $balances))
                accountarray ('free') = floatval (balancesarray ($available));
            if (array_key_exists ($frozen, $balances))
                accountarray ('used') = floatval (balancesarray ($frozen));
            if (array_key_exists ($loan, $balances))
                accountarray ('used') = $this->sum (accountarray ('used'), floatval (balancesarray ($loan)));
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $method = parray ('type') . 'GetDepthId';
        $orderbook = thisarray ($method) (array_merge (array ( 'id' => parray ('id') ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;
    }

    public function fetch_ticker ($market) {
        $p = $this->market ($market);
        $method = parray ('type') . 'GetTickerId';
        $response = thisarray ($method) (array ( 'id' => parray ('id') ));
        $ticker = responsearray ('ticker');
        $timestamp = intval (responsearray ('time')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $p = $this->market ($market);
        $method = parray ('type') . 'GetDetailId';
        return thisarray ($method) (array ( 'id' => parray ('id') ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $p = $this->market ($market);
        $method = 'tradePost' . $this->capitalize ($side);
        $order = array (
            'coin_type' => parray ('coinType'),
            'amount' => $amount,
            'market' => strtolower (parray ('quote')),
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        else
            $method .= $this->capitalize ($type);
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        return $this->tradePostCancelOrder (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'trade', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api');
        if ($api == 'trade') {
            $url .= '/api' . $this->version;
            $query = $this->keysort (array_merge (array (
                'method' => $path,
                'access_key' => $this->apiKey,
                'created' => $this->nonce (),
            ), $params));
            $queryString = $this->urlencode ($this->omit ($query, 'market'));
            // secret key must be at the end of $query to be signed
            $queryString .= '&secret_key=' . $this->secret;
            queryarray ('sign') = $this->hash ($this->encode ($queryString));
            $body = $this->urlencode ($query);
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        } else {
            $url .= '/' . $api . '/' . $this->implode_params ($path, $params) . '_json.js';
            $query = $this->omit ($params, $this->extract_params ($path));
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('status', $response))
            if (responsearray ('status') == 'error')
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        if (array_key_exists ('code', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class itbit extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'itbit',
            'name' => 'itBit',
            'countries' => 'US',
            'rateLimit' => 2000,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27822159-66153620-60ad-11e7-89e7-005f6d7f3de0.jpg',
                'api' => 'https://api.itbit.com',
                'www' => 'https://www.itbit.com',
                'doc' => array (
                    'https://api.itbit.com/docs',
                    'https://www.itbit.com/api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'markets/{symbol}/ticker',
                        'markets/{symbol}/order_book',
                        'markets/{symbol}/trades',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'wallets',
                        'wallets/{walletId}',
                        'wallets/{walletId}/balances/{currencyCode}',
                        'wallets/{walletId}/funding_history',
                        'wallets/{walletId}/trades',
                        'wallets/{walletId}/orders/{id}',
                    ),
                    'post' => array (
                        'wallet_transfers',
                        'wallets',
                        'wallets/{walletId}/cryptocurrency_deposits',
                        'wallets/{walletId}/cryptocurrency_withdrawals',
                        'wallets/{walletId}/orders',
                        'wire_withdrawal',
                    ),
                    'delete' => array (
                        'wallets/{walletId}/orders/{id}',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'XBTUSD', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'BTC/SGD' => array ( 'id' => 'XBTSGD', 'symbol' => 'BTC/SGD', 'base' => 'BTC', 'quote' => 'SGD' ),
                'BTC/EUR' => array ( 'id' => 'XBTEUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
            ),
        ), $options));
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetMarketsSymbolOrderBook (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetMarketsSymbolTicker (array (
            'symbol' => $this->market_id ($market),
        ));
        $timestamp = $this->parse8601 (tickerarray ('serverTimeUTC'));
        $bid = null;
        $ask = null;
        if (array_key_exists ('bid', $ticker))
            if (tickerarray ('bid'))
                $bid = floatval (tickerarray ('bid'));
        if (array_key_exists ('ask', $ticker))
            if (tickerarray ('ask'))
                $ask = floatval (tickerarray ('ask'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high24h')),
            'low' => floatval (tickerarray ('low24h')),
            'bid' => $bid,
            'ask' => $ask,
            'vwap' => floatval (tickerarray ('vwap24h')),
            'open' => floatval (tickerarray ('openToday')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('lastPrice')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume24h')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetMarketsSymbolTrades (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function fetch_balance () {
        $response = $this->privateGetBalances ();
        $balances = responsearray ('balances');
        $result = array ( 'info' => $response );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency');
            $account = array (
                'free' => floatval (balancearray ('availableBalance')),
                'used' => null,
                'total' => floatval (balancearray ('totalBalance')),
            );
            accountarray ('used') = accountarray ('total') - accountarray ('free');
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetchWallets () {
        return $this->privateGetWallets ();
    }

    public function nonce () {
        return $this->milliseconds ();
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $amount = (string) $amount;
        $price = (string) $price;
        $p = $this->market ($market);
        $order = array (
            'side' => $side,
            'type' => $type,
            'currency' => parray ('base'),
            'amount' => $amount,
            'display' => $amount,
            'price' => $price,
            'instrument' => parray ('id'),
        );
        return $this->privatePostTradeAdd (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        return $this->privateDeleteWalletsWalletIdOrdersId (array_merge (array (
            'id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            if ($query)
                $body = $this->json ($query);
            else
                $body = '';
            $nonce = (string) $this->nonce ();
            $timestamp = $nonce;
            $auth = array ($method, $url, $body, $nonce, $timestamp);
            $message = $nonce . $this->json ($auth);
            $hash = $this->hash ($this->encode ($message), 'sha256', 'binary');
            $binhash = $this->binary_concat ($url, $hash);
            $signature = $this->hmac ($binhash, $this->encode ($this->secret), 'sha512', 'base64');
            $headers = array (
                'Authorization' => self.apiKey . ':' . $signature,
                'Content-Type' => 'application/json',
                'X-Auth-Timestamp' => $timestamp,
                'X-Auth-Nonce' => $nonce,
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('code', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class jubi extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'jubi',
            'name' => 'jubi.com',
            'countries' => 'CN',
            'rateLimit' => 1500,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766581-9d397d9a-5edd-11e7-8fb9-5d8236c0e692.jpg',
                'api' => 'https://www.jubi.com/api',
                'www' => 'https://www.jubi.com',
                'doc' => 'https://www.jubi.com/help/api.html',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'depth',
                        'orders',
                        'ticker',
                        'allticker',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balance',
                        'trade_add',
                        'trade_cancel',
                        'trade_list',
                        'trade_view',
                        'wallet',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetAllticker ();
        $keys = array_keys ($markets);
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $id = keysarray ($p);
            $base = strtoupper ($id);
            $quote = 'CNY';
            $symbol = $base . '/' . $quote;
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $id,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privatePostBalance ();
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            if ($lowercase == 'dash')
                $lowercase = 'drk';
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            $free = $lowercase . '_balance';
            $used = $lowercase . '_lock';
            if (array_key_exists ($free, $balances))
                accountarray ('free') = floatval (balancesarray ($free));
            if (array_key_exists ($used, $balances))
                accountarray ('used') = floatval (balancesarray ($used));
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetDepth (array_merge (array (
            'coin' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('vol')),
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetAllticker ();
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetTicker (array (
            'coin' => parray ('id'),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetOrders (array (
            'coin' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostTradeAdd (array_merge (array (
            'amount' => $amount,
            'price' => $price,
            'type' => $side,
            'coin' => $this->market_id ($market),
        ), $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privateDeleteWalletsWalletIdOrdersId (array_merge (array (
            'id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = (string) $this->nonce ();
            $query = array_merge (array (
                'key' => $this->apiKey,
                'nonce' => $nonce,
            ), $params);
            $request = $this->urlencode ($query);
            $secret = $this->hash ($this->encode ($this->secret));
            queryarray ('signature') = $this->hmac ($this->encode ($request), $this->encode ($secret));
            $body = $this->urlencode ($query);
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('result', $response))
            if (!responsearray ('result'))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class kraken extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'kraken',
            'name' => 'Kraken',
            'countries' => 'US',
            'version' => '0',
            'rateLimit' => 1500,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766599-22709304-5ede-11e7-9de1-9f33732e1509.jpg',
                'api' => 'https://api.kraken.com',
                'www' => 'https://www.kraken.com',
                'doc' => array (
                    'https://www.kraken.com/en-us/help/api',
                    'https://github.com/nothingisdead/npm-kraken-api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'Assets',
                        'AssetPairs',
                        'Depth',
                        'OHLC',
                        'Spread',
                        'Ticker',
                        'Time',
                        'Trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'AddOrder',
                        'Balance',
                        'CancelOrder',
                        'ClosedOrders',
                        'DepositAddresses',
                        'DepositMethods',
                        'DepositStatus',
                        'Ledgers',
                        'OpenOrders',
                        'OpenPositions',
                        'QueryLedgers',
                        'QueryOrders',
                        'QueryTrades',
                        'TradeBalance',
                        'TradesHistory',
                        'TradeVolume',
                        'Withdraw',
                        'WithdrawCancel',
                        'WithdrawInfo',
                        'WithdrawStatus',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetAssetPairs ();
        $keys = array_keys (marketsarray ('result'));
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $id = keysarray ($p);
            $market = marketsarray ('result')array ($id);
            $base = marketarray ('base');
            $quote = marketarray ('quote');
            if ((basearray (0) == 'X') || (basearray (0) == 'Z'))
                $base = mb_substr ($base, 1);
            if ((quotearray (0) == 'X') || (quotearray (0) == 'Z'))
                $quote = mb_substr ($quote, 1);
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $darkpool = mb_strpos ($id, '.d') !== false;
            $symbol = $darkpool ? marketarray ('altname') : ($base . '/' . $quote);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'darkpool' => $darkpool,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $darkpool = mb_strpos ($market, '.d') !== false;
        if ($darkpool)
            throw new ExchangeError ($this->id . ' does not provide an $order book for $darkpool symbol ' . $market);
        $p = $this->market ($market);
        $response = $this->publicGetDepth  (array_merge (array (
            'pair' => parray ('id'),
        ), $params));
        $orderbook = responsearray ('result')array ($p['id')];
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                $timestamp = orderarray (2) * 1000;
                resultarray ($side)[] = array ($price, $amount, $timestamp);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('h')array (1)),
            'low' => floatval (tickerarray ('l')array (1)),
            'bid' => floatval (tickerarray ('b')array (0)),
            'ask' => floatval (tickerarray ('a')array (0)),
            'vwap' => floatval (tickerarray ('p')array (1)),
            'open' => floatval (tickerarray ('o')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('c')array (0)),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('v')array (1)),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $pairs = array ();
        for ($s = 0; $s < count ($this->symbols); $s++) {
            $symbol = $this->symbolsarray ($s);
            $market = $this->marketsarray ($symbol);
            if (!marketarray ('darkpool'))
                $pairs[] = marketarray ('id');
        }
        $filter = implode (',', $pairs);
        $response = $this->publicGetTicker (array (
            'pair' => $filter,
        ));
        $tickers = responsearray ('result');
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $darkpool = mb_strpos ($market, '.d') !== false;
        if ($darkpool)
            throw new ExchangeError ($this->id . ' does not provide a $ticker for $darkpool symbol ' . $market);
        $p = $this->market ($market);
        $response = $this->publicGetTicker (array (
            'pair' => parray ('id'),
        ));
        $ticker = responsearray ('result')array ($p['id')];
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrades (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostBalance ();
        $balances = responsearray ('result');
        $result = array ( 'info' => $balances );
        $currencies = array_keys ($balances);
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $code = $currency;
            // X-ISO4217-A3 standard $currency codes
            if (codearray (0) == 'X') {
                $code = mb_substr ($code, 1);
            } else if (codearray (0) == 'Z') {
                $code = mb_substr ($code, 1);
            }
            $code = $this->commonCurrencyCode ($code);
            $balance = floatval (balancesarray ($currency));
            $account = array (
                'free' => $balance,
                'used' => null,
                'total' => $balance,
            );
            resultarray ($code) = $account;
        }
        return $result;
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'pair' => $this->market_id ($market),
            'type' => $side,
            'ordertype' => $type,
            'volume' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return $this->privatePostAddOrder (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array ( 'txid' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = '/' . $this->version . '/' . $api . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = (string) $this->nonce ();
            $body = $this->urlencode (array_merge (array ( 'nonce' => $nonce ), $params));
            $auth = $this->encode ($nonce . $body);
            $hash = $this->hash ($auth, 'sha256', 'binary');
            $binary = $this->encode ($url);
            $binhash = $this->binary_concat ($binary, $hash);
            $secret = base64_decode ($this->secret);
            $signature = $this->hmac ($binhash, $secret, 'sha512', 'base64');
            $headers = array (
                'API-Key' => $this->apiKey,
                'API-Sign' => $signature,
                'Content-Type' => 'application/x-www-form-urlencoded',
            );
        }
        $url = $this->urlsarray ('api') . $url;
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response)) {
            $numErrors = count (responsearray ('error'));
            if ($numErrors)
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        }
        return $response;
    }
}

//-----------------------------------------------------------------------------

class lakebtc extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'lakebtc',
            'name' => 'LakeBTC',
            'countries' => 'US',
            'version' => 'api_v2',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28074120-72b7c38a-6660-11e7-92d9-d9027502281d.jpg',
                'api' => 'https://api.lakebtc.com',
                'www' => 'https://www.lakebtc.com',
                'doc' => array (
                    'https://www.lakebtc.com/s/api',
                    'https://www.lakebtc.com/s/api_v2',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'bcorderbook',
                        'bctrades',
                        'ticker',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'buyOrder',
                        'cancelOrders',
                        'getAccountInfo',
                        'getExternalAccounts',
                        'getOrders',
                        'getTrades',
                        'openOrders',
                        'sellOrder',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetTicker ();
        $result = array ();
        $keys = array_keys ($markets);
        for ($k = 0; $k < count ($keys); $k++) {
            $id = keysarray ($k);
            $market = marketsarray ($id);
            $base = mb_substr ($id, 0, 3);
            $quote = mb_substr ($id, 3, 6);
            $base = strtoupper ($base);
            $quote = strtoupper ($quote);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostGetAccountInfo ();
        $balances = responsearray ('balance');
        $result = array ( 'info' => $response );
        $currencies = array_keys ($balances);
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $balance = floatval (balancesarray ($currency));
            $account = array (
                'free' => $balance,
                'used' => null,
                'total' => $balance,
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetBcorderbook (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $tickers = $this->publicGetTicker (array (
            'symbol' => parray ('id'),
        ));
        $ticker = tickersarray ($p['id')];
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetBctrades (array (
            'symbol' => $this->market_id ($market)
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $method = 'privatePost' . $this->capitalize ($side) . 'Order';
        $marketId = $this->market_id ($market);
        $order = array (
            'params' => array ($price, $amount, $marketId),
        );
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array ( 'params' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version;
        if ($api == 'public') {
            $url .= '/' . $path;
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $nonce = $this->nonce ();
            if ($params)
                $params = implode (',', $params);
            else
                $params = '';
            $query = $this->urlencode (array (
                'tonce' => $nonce,
                'accesskey' => $this->apiKey,
                'requestmethod' => strtolower ($method),
                'id' => $nonce,
                'method' => $path,
                'params' => $params,
            ));
            $body = $this->json (array (
                'method' => $path,
                'params' => $params,
                'id' => $nonce,
            ));
            $signature = $this->hmac ($this->encode ($query), $this->secret, 'sha1', 'base64');
            $headers = array (
                'Json-Rpc-Tonce' => $nonce,
                'Authorization' => "Basic " . $this->apiKey . ':' . $signature,
                'Content-Length' => strlen ($body),
                'Content-Type' => 'application/json',
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class livecoin extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'livecoin',
            'name' => 'LiveCoin',
            'countries' => array ( 'US', 'UK', 'RU' ),
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27980768-f22fc424-638a-11e7-89c9-6010a54ff9be.jpg',
                'api' => 'https://api.livecoin.net',
                'www' => 'https://www.livecoin.net',
                'doc' => 'https://www.livecoin.net/api?lang=en',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'exchange/all/order_book',
                        'exchange/last_trades',
                        'exchange/maxbid_minask',
                        'exchange/order_book',
                        'exchange/restrictions',
                        'exchange/ticker', // omit params to get all tickers at once
                        'info/coinInfo',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'exchange/client_orders',
                        'exchange/order',
                        'exchange/trades',
                        'exchange/commission',
                        'exchange/commissionCommonInfo',
                        'payment/balances',
                        'payment/balance',
                        'payment/get/address',
                        'payment/history/size',
                        'payment/history/transactions',
                    ),
                    'post' => array (
                        'exchange/buylimit',
                        'exchange/buymarket',
                        'exchange/cancellimit',
                        'exchange/selllimit',
                        'exchange/sellmarket',
                        'payment/out/capitalist',
                        'payment/out/card',
                        'payment/out/coin',
                        'payment/out/okpay',
                        'payment/out/payeer',
                        'payment/out/perfectmoney',
                        'payment/voucher/amount',
                        'payment/voucher/make',
                        'payment/voucher/redeem',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetExchangeTicker ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('symbol');
            $symbol = $id;
            list ($base, $quote) = explode ('/', $symbol);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privateGetPaymentBalances ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($this->currencies); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency');
            $account = null;
            if (array_key_exists ($currency, $result))
                $account = resultarray ($currency);
            else
                $account = array (
                    'free' => null,
                    'used' => null,
                    'total' => null,
                );
            if (balancearray ('type') == 'total')
                accountarray ('total') = floatval (balancearray ('value'));
            if (balancearray ('type') == 'available')
                accountarray ('free') = floatval (balancearray ('value'));
            if (balancearray ('type') == 'trade')
                accountarray ('used') = floatval (balancearray ('value'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetExchangeOrderBook (array_merge (array (
            'currencyPair' => $this->market_id ($market),
            'groupByPrice' => 'false',
            'depth' => 100,
        ), $params));
        $timestamp = orderbookarray ('timestamp');
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('best_bid')),
            'ask' => floatval (tickerarray ('best_ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $response = $this->publicGetExchangeTicker ();
        $tickers = $this->index_by ($response, 'symbol');
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetExchangeTicker (array (
            'currencyPair' => parray ('id'),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetExchangeLastTrades (array (
            'currencyPair' => $this->market_id ($market)
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $method = 'privatePostExchange' . $this->capitalize ($side) . $type;
        $order = array (
            'currencyPair' => $this->market_id ($market),
            'quantity' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostExchangeCancellimit (array_merge (array (
            'orderId' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $path;
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $query = $this->urlencode ($this->keysort ($params));
            if ($method == 'GET')
                if ($query)
                    $url .= '?' . $query;
            else
                if ($query)
                    $body = $query;
            $signature = $this->hmac ($this->encode ($query), $this->encode ($this->secret), 'sha256');            
            $headers = array (
                'Api-Key' => $this->apiKey,
                'Sign' => strtoupper ($signature),
                'Content-Type' => 'application/x-www-form-urlencoded',
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('success', $response))
            if (!responsearray ('success'))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class liqui extends btce {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'liqui',
            'name' => 'Liqui',
            'countries' => array ( 'UA', ),
            'rateLimit' => 1000,
            'version' => '3',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27982022-75aea828-63a0-11e7-9511-ca584a8edd74.jpg',
                'api' => array (
                    'public' => 'https://api.liqui.io/api',
                    'private' => 'https://api.liqui.io/tapi',
                ),
                'www' => 'https://liqui.io',
                'doc' => 'https://liqui.io/api',
            ),
        ), $options));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            $url .=  '/' . $this->version . '/' . $this->implode_params ($path, $params);
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array (
                'nonce' => $nonce,
                'method' => $path,
            ), $query));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('success', $response))
            if (!responsearray ('success'))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class luno extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'luno',
            'name' => 'luno',
            'countries' => array ( 'GB', 'SG', 'ZA', ),
            'rateLimit' => 3000,
            'version' => '1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766607-8c1a69d8-5ede-11e7-930c-540b5eb9be24.jpg',
                'api' => 'https://api.mybitx.com/api',
                'www' => 'https://www.luno.com',
                'doc' => array (
                    'https://www.luno.com/en/api',
                    'https://npmjs.org/package/bitx',
                    'https://github.com/bausmeier/node-bitx',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'orderbook',
                        'ticker',
                        'tickers',
                        'trades',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'accounts/{id}/pending',
                        'accounts/{id}/transactions',
                        'balance',
                        'fee_info',
                        'funding_address',
                        'listorders',
                        'listtrades',
                        'orders/{id}',
                        'quotes/{id}',
                        'withdrawals',
                        'withdrawals/{id}',
                    ),
                    'post' => array (
                        'accounts',
                        'postorder',
                        'marketorder',
                        'stoporder',
                        'funding_address',
                        'withdrawals',
                        'send',
                        'quotes',
                        'oauth2/grant',
                    ),
                    'put' => array (
                        'quotes/{id}',
                    ),
                    'delete' => array (
                        'quotes/{id}',
                        'withdrawals/{id}',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetTickers ();
        $result = array ();
        for ($p = 0; $p < count (marketsarray ('tickers')); $p++) {
            $market = marketsarray ('tickers')array ($p);
            $id = marketarray ('pair');
            $base = mb_substr ($id, 0, 3);
            $quote = mb_substr ($id, 3, 6);
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetBalance ();
        $balances = responsearray ('balance');
        $result = array ( 'info' => $response );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = $this->commonCurrencyCode (balancearray ('asset'));
            $reserved = floatval (balancearray ('reserved'));
            $unconfirmed = floatval (balancearray ('unconfirmed'));
            $account = array (
                'free' => floatval (balancearray ('balance')),
                'used' => $this->sum ($reserved, $unconfirmed),
                'total' => null,
            );
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetOrderbook (array_merge (array (
            'pair' => $this->market_id ($market),
        ), $params));
        $timestamp = orderbookarray ('timestamp');
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('volume'));
                // $timestamp = orderarray (2) * 1000;
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = tickerarray ('timestamp');
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last_trade')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('rolling_24_hour_volume')),
            'info' => $ticker,
        );        
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $response = $this->publicGetTickers ();
        $tickers = $this->index_by (responsearray ('tickers'), 'pair');
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetTicker (array (
            'pair' => parray ('id'),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrades (array (
            'pair' => $this->market_id ($market)
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $method = 'privatePost';
        $order = array ( 'pair' => $this->market_id ($market) );
        if ($type == 'market') {
            $method .= 'Marketorder';
            orderarray ('type') = strtoupper ($side);
            if ($side == 'buy')
                orderarray ('counter_volume') = $amount;
            else
                orderarray ('base_volume') = $amount;
        } else {
            $method .= 'Order';
            orderarray ('volume') = $amount;
            orderarray ('price') = $price;
            if ($side == 'buy')
                orderarray ('type') = 'BID';
            else
                orderarray ('type') = 'ASK';
        }
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostStoporder (array ( 'order_id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($query)
            $url .= '?' . $this->urlencode ($query);
        if ($api == 'private') {
            $auth = $this->encode ($this->apiKey . ':' . $this->secret);
            $auth = base64_encode ($auth);
            $headers = array ( 'Authorization' => 'Basic ' . $this->decode ($auth) );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class mercado extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'mercado',
            'name' => 'Mercado Bitcoin',
            'countries' => 'BR', // Brazil
            'rateLimit' => 1000,
            'version' => 'v3',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27837060-e7c58714-60ea-11e7-9192-f05e86adb83f.jpg',
                'api' => array (
                    'public' => 'https://www.mercadobitcoin.net/api',
                    'private' => 'https://www.mercadobitcoin.net/tapi',
                ),
                'www' => 'https://www.mercadobitcoin.com.br',
                'doc' => array (
                    'https://www.mercadobitcoin.com.br/api-doc',
                    'https://www.mercadobitcoin.com.br/trade-api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array ( // last slash critical
                        'orderbook/',
                        'orderbook_litecoin/',
                        'ticker/',
                        'ticker_litecoin/',
                        'trades/',
                        'trades_litecoin/',
                        'v2/ticker/',
                        'v2/ticker_litecoin/',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'cancel_order',
                        'get_account_info',
                        'get_order',
                        'get_withdrawal',
                        'list_system_messages',
                        'list_orders',
                        'list_orderbook',
                        'place_buy_order',
                        'place_sell_order',
                        'withdraw_coin',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/BRL' => array ( 'id' => 'BRLBTC', 'symbol' => 'BTC/BRL', 'base' => 'BTC', 'quote' => 'BRL', 'suffix' => '' ),
                'LTC/BRL' => array ( 'id' => 'BRLLTC', 'symbol' => 'LTC/BRL', 'base' => 'LTC', 'quote' => 'BRL', 'suffix' => 'Litecoin' ),
            ),
        ), $options));
    }

    public function fetch_order_book ($market, $params = array ()) {
        $p = $this->market ($market);
        $method = 'publicGetOrderbook' . $this->capitalize (parray ('suffix'));
        $orderbook = thisarray ($method) ($params);
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;
    }

    public function fetch_ticker ($market) {
        $p = $this->market ($market);
        $method = 'publicGetV2Ticker' . $this->capitalize (parray ('suffix'));
        $response = thisarray ($method) ();
        $ticker = responsearray ('ticker');
        $timestamp = intval (tickerarray ('date')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $p = $this->market ($market);
        $method = 'publicGetTrades' . $this->capitalize (parray ('suffix'));
        return thisarray ($method) ();
    }

    public function fetch_balance () {
        $response = $this->privatePostGetAccountInfo ();
        $balances = responsearray ('balance');
        $result = array ( 'info' => $response );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($lowercase, $balances)) {
                accountarray ('free') = floatval (balancesarray ($lowercase)array ('available'));
                accountarray ('total') = floatval (balancesarray ($lowercase)array ('total'));
                accountarray ('used') = accountarray ('total') - accountarray ('free');
            }           
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $method = 'privatePostPlace' . $this->capitalize ($side) . 'Order';
        $order = array (
            'coin_pair' => $this->market_id ($market),
            'quantity' => $amount,
            'limit_price' => $price,
        );
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        return $this->privatePostCancelOrder (array_merge (array (
            'order_id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api) . '/';
        if ($api == 'public') {
            $url .= $path;
        } else {
            $url .= $this->version . '/';
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array (
                'tapi_method' => $path,
                'tapi_nonce' => $nonce,
            ), $params));
            $auth = '/tapi/' . $this->version  . '/' . '?' . $body;
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'TAPI-ID' => $this->apiKey,
                'TAPI-MAC' => $this->hmac ($this->encode ($auth), $this->secret, 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error_message', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class okcoin extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'version' => 'v1',
            'rateLimit' => 1000, // up to 3000 requests per 5 minutes ≈ 600 requests per minute ≈ 10 requests per second ≈ 100 ms
            'api' => array (
                'public' => array (
                    'get' => array (
                        'depth',
                        'exchange_rate',
                        'future_depth',
                        'future_estimated_price',
                        'future_hold_amount',
                        'future_index',
                        'future_kline',
                        'future_price_limit',
                        'future_ticker',
                        'future_trades',
                        'kline',
                        'otcs',
                        'ticker',
                        'trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'account_records',
                        'batch_trade',
                        'borrow_money',
                        'borrow_order_info',
                        'borrows_info',
                        'cancel_borrow',
                        'cancel_order',
                        'cancel_otc_order',
                        'cancel_withdraw',
                        'future_batch_trade',
                        'future_cancel',
                        'future_devolve',
                        'future_explosive',
                        'future_order_info',
                        'future_orders_info',
                        'future_position',
                        'future_position_4fix',
                        'future_trade',
                        'future_trades_history',
                        'future_userinfo',
                        'future_userinfo_4fix',
                        'lend_depth',
                        'order_fee',
                        'order_history',
                        'order_info',
                        'orders_info',
                        'otc_order_history',
                        'otc_order_info',
                        'repayment',
                        'submit_otc_order',
                        'trade',
                        'trade_history',
                        'trade_otc_order',
                        'withdraw',
                        'withdraw_info',
                        'unrepayments_info',
                        'userinfo',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetDepth (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => $this->sort_by (orderbookarray ('asks'), 0),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;
    }

    public function fetch_ticker ($market) {
        $response = $this->publicGetTicker (array (
            'symbol' => $this->market_id ($market),
        ));
        $ticker = responsearray ('ticker');
        $timestamp = intval (responsearray ('date')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTrades (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function fetch_balance () {
        $response = $this->privatePostUserinfo ();
        $balances = responsearray ('info')array ('funds');
        $result = array ( 'info' => $response );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ($lowercase, balancesarray ('free')))
                accountarray ('free') = floatval (balancesarray ('free')array ($lowercase));
            if (array_key_exists ($lowercase, balancesarray ('freezed')))
                accountarray ('used') = floatval (balancesarray ('freezed')array ($lowercase));
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $order = array (
            'symbol' => $this->market_id ($market),
            'type' => $side,
            'amount' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        else
            orderarray ('type') .= '_market';
        return $this->privatePostTrade (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        return $this->privatePostCancelOrder (array_merge (array (
            'order_id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = '/$api/' . $this->version . '/' . $path . '.do';
        if ($api == 'public') {
            if ($params)
                $url .= '?' . $this->urlencode ($params);
        } else {
            $query = $this->keysort (array_merge (array (
                'api_key' => $this->apiKey,
            ), $params));
            // secret key must be at the end of $query
            $queryString = $this->urlencode ($query) . '&secret_key=' . $this->secret;
            strtoupper (queryarray ('sign') = $this->hash ($this->encode ($queryString)));
            $body = $this->urlencode ($query);
            $headers = array ( 'Content-Type' => 'application/x-www-form-urlencoded' );
        }
        $url = $this->urlsarray ('api') . $url;
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('result', $response))
            if (!responsearray ('result'))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class okcoincny extends okcoin {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'okcoincny',
            'name' => 'OKCoin CNY',
            'countries' => 'CN',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766792-8be9157a-5ee5-11e7-926c-6d69b8d3378d.jpg',
                'api' => 'https://www.okcoin.cn',
                'www' => 'https://www.okcoin.cn',
                'doc' => 'https://www.okcoin.cn/rest_getStarted.html',
            ),
            'markets' => array (
                'BTC/CNY' => array ( 'id' => 'btc_cny', 'symbol' => 'BTC/CNY', 'base' => 'BTC', 'quote' => 'CNY' ),
                'LTC/CNY' => array ( 'id' => 'ltc_cny', 'symbol' => 'LTC/CNY', 'base' => 'LTC', 'quote' => 'CNY' ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class okcoinusd extends okcoin {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'okcoinusd',
            'name' => 'OKCoin USD',
            'countries' => array ( 'CN', 'US' ),
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766791-89ffb502-5ee5-11e7-8a5b-c5950b68ac65.jpg',
                'api' => 'https://www.okcoin.com',
                'www' => 'https://www.okcoin.com',
                'doc' => array (
                    'https://www.okcoin.com/rest_getStarted.html',
                    'https://www.npmjs.com/package/okcoin.com',
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'btc_usd', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'LTC/USD' => array ( 'id' => 'ltc_usd', 'symbol' => 'LTC/USD', 'base' => 'LTC', 'quote' => 'USD' ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class paymium extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'paymium',
            'name' => 'Paymium',
            'countries' => array ( 'FR', 'EU', ),
            'rateLimit' => 2000,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27790564-a945a9d4-5ff9-11e7-9d2d-b635763f2f24.jpg',
                'api' => 'https://paymium.com/api',
                'www' => 'https://www.paymium.com',
                'doc' => array (
                    'https://github.com/Paymium/api-documentation',
                    'https://www.paymium.com/page/developers',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'countries',
                        'data/{id}/ticker',
                        'data/{id}/trades',
                        'data/{id}/depth',
                        'bitcoin_charts/{id}/trades',
                        'bitcoin_charts/{id}/depth',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'merchant/get_payment/{UUID}',
                        'user',
                        'user/addresses',
                        'user/addresses/{btc_address}',
                        'user/orders',
                        'user/orders/{UUID}',
                        'user/price_alerts',
                    ),
                    'post' => array (
                        'user/orders',
                        'user/addresses',
                        'user/payment_requests',
                        'user/price_alerts',
                        'merchant/create_payment',
                    ),
                    'delete' => array (
                        'user/orders/{UUID}/cancel',
                        'user/price_alerts/{id}',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/EUR' => array ( 'id' => 'eur', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $balances = $this->privateGetUser ();
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            $balance = 'balance_' . $lowercase;
            $locked = 'locked_' . $lowercase;
            if (array_key_exists ($balance, $balances))
                accountarray ('free') = balancesarray ($balance);
            if (array_key_exists ($locked, $balances))
                accountarray ('used') = balancesarray ($locked);
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetDataIdDepth  (array_merge (array (
            'id' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray ('price');
                $amount = orderarray ('amount');
                $timestamp = orderarray ('timestamp') * 1000;
                resultarray ($side)[] = array ($price, $amount, $timestamp);
            }
        }
        resultarray ('bids') = $this->sort_by (resultarray ('bids'), 0, true);
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetDataIdTicker (array (
            'id' => $this->market_id ($market),
        ));
        $timestamp = tickerarray ('at') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => floatval (tickerarray ('open')),
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('price')),
            'change' => null,
            'percentage' => floatval (tickerarray ('variation')),
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetDataIdTrades (array (
            'id' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $order = array (
            'type' => $this->capitalize ($type) . 'Order',
            'currency' => $this->market_id ($market),
            'direction' => $side,
            'amount' => $amount,
        );
        if ($type == 'market')
            orderarray ('price') = $price;
        return $this->privatePostUserOrders (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        return $this->privatePostCancelOrder (array_merge (array (
            'orderNumber' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $body = $this->json ($params);
            $nonce = (string) $this->nonce ();
            $auth = $nonce . $url . $body;
            $headers = array (
                'Api-Key' => $this->apiKey,
                'Api-Signature' => $this->hmac ($this->encode ($auth), $this->secret),
                'Api-Nonce' => $nonce,
                'Content-Type' => 'application/json',
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('errors', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class poloniex extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'poloniex',
            'name' => 'Poloniex',
            'countries' => 'US',
            'rateLimit' => 500, // 6 calls per second
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766817-e9456312-5ee6-11e7-9b3c-b628ca5626a5.jpg',
                'api' => array (
                    'public' => 'https://poloniex.com/public',
                    'private' => 'https://poloniex.com/tradingApi',
                ),
                'www' => 'https://poloniex.com',
                'doc' => array (
                    'https://poloniex.com/support/api/',
                    'http://pastebin.com/dMX7mZE0',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'return24hVolume',
                        'returnChartData',
                        'returnCurrencies',
                        'returnLoanOrders',
                        'returnOrderBook',
                        'returnTicker',
                        'returnTradeHistory',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'buy',
                        'cancelLoanOffer',
                        'cancelOrder',
                        'closeMarginPosition',
                        'createLoanOffer',
                        'generateNewAddress',
                        'getMarginPosition',
                        'marginBuy',
                        'marginSell',
                        'moveOrder',
                        'returnActiveLoans',
                        'returnAvailableAccountBalances',
                        'returnBalances',
                        'returnCompleteBalances',
                        'returnDepositAddresses',
                        'returnDepositsWithdrawals',
                        'returnFeeInfo',
                        'returnLendingHistory',
                        'returnMarginAccountSummary',
                        'returnOpenLoanOffers',
                        'returnOpenOrders',
                        'returnOrderTrades',
                        'returnTradableBalances',
                        'returnTradeHistory',
                        'sell',
                        'toggleAutoRenew',
                        'transferBalance',
                        'withdraw',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetReturnTicker ();
        $keys = array_keys ($markets);
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $id = keysarray ($p);
            $market = marketsarray ($id);
            list ($quote, $base) = explode ('_', $id);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privatePostReturnCompleteBalances (array (
            'account' => 'all',
        ));
        $result = array ( 'info' => $balances );
        $currencies = array_keys ($balances);
        for ($c = 0; $c < count ($currencies); $c++) {
            $currency = currenciesarray ($c);
            $balance = balancesarray ($currency);
            $account = array (
                'free' => floatval (balancearray ('available')),
                'used' => floatval (balancearray ('onOrders')),
                'total' => null,
            );
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function parse_bidask ($bidask) {
        $price = floatval (bidaskarray (0));
        $amount = floatval (bidaskarray (1));
        return array ($price, $amount);
    }

    public function parse_bidasks ($bidasks) {
        $result = array ();
        for ($i = 0; $i < count ($bidasks); $i++) {
            $result[] = $this->parse_bidask (bidasksarray ($i));
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetReturnOrderBook (array_merge (array (
            'currencyPair' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            resultarray ($side) = $this->parse_bidasks (orderbookarray ($side));
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high24hr')),
            'low' => floatval (tickerarray ('low24hr')),
            'bid' => floatval (tickerarray ('highestBid')),
            'ask' => floatval (tickerarray ('lowestAsk')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => floatval (tickerarray ('percentChange')),
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('baseVolume')),
            'quoteVolume' => floatval (tickerarray ('quoteVolume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetReturnTicker ();
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $m = $this->market ($market);
        $tickers = $this->publicGetReturnTicker ();
        $ticker = tickersarray ($m['id')];
        return $this->parse_ticker ($ticker, $m);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetReturnTradeHistory (array (
            'currencyPair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $method = 'privatePost' . $this->capitalize ($side);
        $response = thisarray ($method) (array_merge (array (
            'currencyPair' => $this->market_id ($market),
            'rate' => $price,
            'amount' => $amount,
        ), $params));
        $result = array (
            'info' => $response,
            'id' => responsearray ('orderNumber'),
        );
        return $result;
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array_merge (array (
            'orderNumber' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        $query = array_merge (array ( 'command' => $path ), $params);
        if ($api == 'public') {
            $url .= '?' . $this->urlencode ($query);
        } else {
            queryarray ('nonce') = $this->nonce ();
            $body = $this->urlencode ($query);
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class quadrigacx extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'quadrigacx',
            'name' => 'QuadrigaCX',
            'countries' => 'CA',
            'rateLimit' => 1000,
            'version' => 'v2',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766825-98a6d0de-5ee7-11e7-9fa4-38e11a2c6f52.jpg',
                'api' => 'https://api.quadrigacx.com',
                'www' => 'https://www.quadrigacx.com',
                'doc' => 'https://www.quadrigacx.com/api_info',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'order_book',
                        'ticker',
                        'transactions',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'balance',
                        'bitcoin_deposit_address',
                        'bitcoin_withdrawal',
                        'buy',
                        'cancel_order',
                        'ether_deposit_address',
                        'ether_withdrawal',
                        'lookup_order',
                        'open_orders',
                        'sell',
                        'user_transactions',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/CAD' => array ( 'id' => 'btc_cad', 'symbol' => 'BTC/CAD', 'base' => 'BTC', 'quote' => 'CAD' ),
                'BTC/USD' => array ( 'id' => 'btc_usd', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD' ),
                'ETH/BTC' => array ( 'id' => 'eth_btc', 'symbol' => 'ETH/BTC', 'base' => 'ETH', 'quote' => 'BTC' ),
                'ETH/CAD' => array ( 'id' => 'eth_cad', 'symbol' => 'ETH/CAD', 'base' => 'ETH', 'quote' => 'CAD' ),
            ),
        ), $options));
    }

    public function fetch_balance () {
        $balances = $this->privatePostBalance ();
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => floatval (balancesarray ($lowercase . '_available')),
                'used' => floatval (balancesarray ($lowercase . '_reserved')),
                'total' => floatval (balancesarray ($lowercase . '_balance')),
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $orderbook = $this->publicGetOrderBook (array_merge (array (
            'book' => $this->market_id ($market),
        ), $params));
        $timestamp = intval (orderbookarray ('timestamp')) * 1000;
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $ticker = $this->publicGetTicker (array (
            'book' => $this->market_id ($market),
        ));
        $timestamp = intval (tickerarray ('timestamp')) * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => floatval (tickerarray ('vwap')),
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        return $this->publicGetTransactions (array (
            'book' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $method = 'privatePost' . $this->capitalize ($side);
        $order = array (
            'amount' => $amount,
            'book' => $this->market_id ($market),
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return thisarray ($method) (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        return $this->privatePostCancelOrder (array_merge (array (
            'id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $path;
        if ($api == 'public') {
            $url .= '?' . $this->urlencode ($params);
        } else {
            if (!$this->uid)
                throw new AuthenticationError ($this->id . ' requires `' . $this->id . '.uid` property for authentication');
            $nonce = $this->nonce ();
            $request = implode ('', array ((string) $nonce, $this->uid, $this->apiKey));
            $signature = $this->hmac ($this->encode ($request), $this->encode ($this->secret));
            $query = array_merge (array (
                'key' => $this->apiKey,
                'nonce' => $nonce,
                'signature' => $signature,
            ), $params);
            $body = $this->json ($query);
            $headers = array (
                'Content-Type' => 'application/json',
                'Content-Length' => strlen ($body),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class quoine extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'quoine',
            'name' => 'QUOINE',
            'countries' => array ( 'JP', 'SG', 'VN' ),
            'version' => '2',
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766844-9615a4e8-5ee8-11e7-8814-fcd004db8cdd.jpg',
                'api' => 'https://api.quoine.com',
                'www' => 'https://www.quoine.com',
                'doc' => 'https://developers.quoine.com',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'products',
                        'products/{id}',
                        'products/{id}/price_levels',
                        'executions',
                        'ir_ladders/{currency}',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'accounts/balance',
                        'crypto_accounts',
                        'executions/me',
                        'fiat_accounts',
                        'loan_bids',
                        'loans',
                        'orders',
                        'orders/{id}',
                        'orders/{id}/trades',
                        'trades',
                        'trades/{id}/loans',
                        'trading_accounts',
                        'trading_accounts/{id}',
                    ),
                    'post' => array (
                        'fiat_accounts',
                        'loan_bids',
                        'orders',
                    ),
                    'put' => array (
                        'loan_bids/{id}/close',
                        'loans/{id}',
                        'orders/{id}',
                        'orders/{id}/cancel',
                        'trades/{id}',
                        'trades/{id}/close',
                        'trades/close_all',
                        'trading_accounts/{id}',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetProducts ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('id');
            $base = marketarray ('base_currency');
            $quote = marketarray ('quoted_currency');
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privateGetAccountsBalance ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);            
            $currency = balancearray ('currency');
            $total = floatval (balancearray ('balance'));
            $account = array (
                'free' => $total,
                'used' => null,
                'total' => $total,
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetProductsIdPriceLevels (array_merge (array (
            'id' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'buy_price_levels', 'asks' => 'sell_price_levels' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high_market_ask')),
            'low' => floatval (tickerarray ('low_market_bid')),
            'bid' => floatval (tickerarray ('market_bid')),
            'ask' => floatval (tickerarray ('market_ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last_traded_price')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('volume_24h')),
            'quoteVolume' => null,
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetProducts ();
        $result = array ();
        for ($t = 0; $t < count ($tickers); $t++) {
            $ticker = tickersarray ($t);
            $base = tickerarray ('base_currency');
            $quote = tickerarray ('quoted_currency');
            $symbol = $base . '/' . $quote;
            $market = $this->marketsarray ($symbol);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetProductsId (array (
            'id' => parray ('id'),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetExecutions (array (
            'market_id' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'order_type' => $type,
            'product_id' => $this->market_id ($market),
            'side' => $side,
            'quantity' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return $this->privatePostOrders (array_merge (array (
            'order' => $order,
        ), $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePutOrdersIdCancel (array_merge (array (
            'id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        $headers = array (
            'X-Quoine-API-Version' => $this->version,
            'Content-Type' => 'application/json',
        );
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $request = array (
                'path' => $url,
                'nonce' => $nonce,
                'token_id' => $this->apiKey,
                'iat' => (int) floor ($nonce / 1000), // issued at
            );
            if ($query)
                $body = $this->json ($query);
            headersarray ('X-Quoine-Auth') = $this->jwt ($request, $this->secret);
        }
        $response = $this->fetch ($this->urlsarray ('api') . $url, $method, $headers, $body);
        if (array_key_exists ('message', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class southxchange extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'southxchange',
            'name' => 'SouthXchange',
            'countries' => 'AR', // Argentina
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27838912-4f94ec8a-60f6-11e7-9e5d-bbf9bd50a559.jpg',
                'api' => 'https://www.southxchange.com/api',
                'www' => 'https://www.southxchange.com',
                'doc' => 'https://www.southxchange.com/Home/Api',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'markets',
                        'price/{symbol}',
                        'prices',
                        'book/{symbol}',
                        'trades/{symbol}',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'cancelMarketOrders',
                        'cancelOrder',
                        'generatenewaddress',
                        'listOrders',
                        'listBalances',
                        'placeOrder',
                        'withdraw',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetMarkets ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $base = marketarray (0);
            $quote = marketarray (1);
            $symbol = $base . '/' . $quote;
            $id = $symbol;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privatePostListBalances ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);            
            $currency = balancearray ('Currency');
            $uppercase = $currency.uppercase;
            $free = floatval (balancearray ('Available'));
            $used = floatval (balancearray ('Unconfirmed'));
            $total = $this->sum ($free, $used);
            $account = array (
                'free' => $free,
                'used' => $used,
                'total' => $total,
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetBookSymbol (array_merge (array (
            'symbol' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'BuyOrders', 'asks' => 'SellOrders' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('Price'));
                $amount = floatval (orderarray ('Amount'));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => null,
            'low' => null,
            'bid' => floatval (tickerarray ('Bid')),
            'ask' => floatval (tickerarray ('Ask')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('Last')),
            'change' => floatval (tickerarray ('Variation24Hr')),
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('Volume24Hr')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $response = $this->publicGetPrices ();
        $tickers = $this->index_by ($response, 'Market');
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetPriceSymbol (array (
            'symbol' => $this->market_id ($market),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTradesSymbol (array (
            'symbol' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $order = array (
            'listingCurrency' => parray ('base'),
            'referenceCurrency' => parray ('quote'),
            'type' => $side,
            'amount' => $amount,
        );
        if ($type == 'limit')
            orderarray ('limitPrice') = $price;
        return $this->privatePostPlaceOrder (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array_merge (array (
            'orderCode' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'private') {
            $nonce = $this->nonce ();
            $query = array_merge (array (
                'key' => $this->apiKey,
                'nonce' => $nonce,
            ), $query);
            $body = $this->json ($query);
            $headers = array (
                'Content-Type' => 'application/json',
                'Hash' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (!$response)
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class surbitcoin extends blinktrade {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'surbitcoin',
            'name' => 'SurBitcoin',
            'countries' => 'VE',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27991511-f0a50194-6481-11e7-99b5-8f02932424cc.jpg',
                'api' => array (
                    'public' => 'https://api.blinktrade.com/api',
                    'private' => 'https://api.blinktrade.com/tapi',
                ),
                'www' => 'https://surbitcoin.com',
                'doc' => 'https://blinktrade.com/docs',
            ),
            'comment' => 'Blinktrade API',
            'markets' => array (
                'BTC/VEF' => array ( 'id' => 'BTCVEF', 'symbol' => 'BTC/VEF', 'base' => 'BTC', 'quote' => 'VEF', 'brokerId' => 1, 'broker' => 'SurBitcoin', ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class therock extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'therock',
            'name' => 'TheRockTrading',
            'countries' => 'MT',
            'rateLimit' => 1000,
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766869-75057fa2-5ee9-11e7-9a6f-13e641fa4707.jpg',
                'api' => 'https://api.therocktrading.com',
                'www' => 'https://therocktrading.com',
                'doc' => array (
                    'https://api.therocktrading.com/doc/v1/index.html',
                    'https://api.therocktrading.com/doc/',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'funds/{id}/orderbook',
                        'funds/{id}/ticker',
                        'funds/{id}/trades',
                        'funds/tickers',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'balances',
                        'balances/{id}',
                        'discounts',
                        'discounts/{id}',
                        'funds',
                        'funds/{id}',
                        'funds/{id}/trades',
                        'funds/{fund_id}/orders',
                        'funds/{fund_id}/orders/{id}',
                        'funds/{fund_id}/position_balances',
                        'funds/{fund_id}/positions',
                        'funds/{fund_id}/positions/{id}',
                        'transactions',
                        'transactions/{id}',
                        'withdraw_limits/{id}',
                        'withdraw_limits',
                    ),
                    'post' => array (
                        'atms/withdraw',
                        'funds/{fund_id}/orders',
                    ),
                    'delete' => array (
                        'funds/{fund_id}/orders/{id}',
                        'funds/{fund_id}/orders/remove_all',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetFundsTickers ();
        $result = array ();
        for ($p = 0; $p < count (marketsarray ('tickers')); $p++) {
            $market = marketsarray ('tickers')array ($p);
            $id = marketarray ('fund_id');
            $base = mb_substr ($id, 0, 3);
            $quote = mb_substr ($id, 3, 6);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetBalances ();
        $balances = responsearray ('balances');
        $result = array ( 'info' => $response );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);            
            $currency = balancearray ('currency');
            $free = balancearray ('trading_balance');
            $total = balancearray ('balance');
            $used = $total - $free;            
            $account = array (
                'free' => $free,
                'used' => $used,
                'total' => $total,
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->publicGetFundsIdOrderbook (array_merge (array (
            'id' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->parse8601 (orderbookarray ('date'));
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('amount'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = $this->parse8601 (tickerarray ('date'));
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('bid')),
            'ask' => floatval (tickerarray ('ask')),
            'vwap' => null,
            'open' => floatval (tickerarray ('open')),
            'close' => floatval (tickerarray ('close')),
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('volume_traded')),
            'quoteVolume' => floatval (tickerarray ('volume')),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $response = $this->publicGetFundsTickers ();
        $tickers = $this->index_by (responsearray ('tickers'), 'fund_id');
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $ticker = $this->publicGetFundsIdTicker (array (
            'id' => parray ('id'),
        ));
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetFundsIdTrades (array (
            'id' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        return $this->privatePostFundsFundIdOrders (array_merge (array (
            'fund_id' => $this->market_id ($market),
            'side' => $side,
            'amount' => $amount,
            'price' => $price,
        ), $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privateDeleteFundsFundIdOrdersId (array_merge (array (
            'id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $this->version . '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'private') {
            $nonce = (string) $this->nonce ();
            $auth = $nonce . $url;
            $headers = array (
                'X-TRT-KEY' => $this->apiKey,
                'X-TRT-NONCE' => $nonce,
                'X-TRT-SIGN' => $this->hmac ($this->encode ($auth), $this->encode ($this->secret), 'sha512'),
            );
            if ($query) {
                $body = $this->json ($query);
                headersarray ('Content-Type') = 'application/json';
            }
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('errors', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class urdubit extends blinktrade {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'urdubit',
            'name' => 'UrduBit',
            'countries' => 'PK',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27991453-156bf3ae-6480-11e7-82eb-7295fe1b5bb4.jpg',
                'api' => array (
                    'public' => 'https://api.blinktrade.com/api',
                    'private' => 'https://api.blinktrade.com/tapi',
                ),
                'www' => 'https://urdubit.com',
                'doc' => 'https://blinktrade.com/docs',
            ),
            'comment' => 'Blinktrade API',
            'markets' => array (
                'BTC/PKR' => array ( 'id' => 'BTCPKR', 'symbol' => 'BTC/PKR', 'base' => 'BTC', 'quote' => 'PKR', 'brokerId' => 8, 'broker' => 'UrduBit', ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class vaultoro extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'vaultoro',
            'name' => 'Vaultoro',
            'countries' => 'CH',
            'rateLimit' => 1000,
            'version' => '1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766880-f205e870-5ee9-11e7-8fe2-0d5b15880752.jpg',
                'api' => 'https://api.vaultoro.com',
                'www' => 'https://www.vaultoro.com',
                'doc' => 'https://api.vaultoro.com',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'bidandask',
                        'buyorders',
                        'latest',
                        'latesttrades',
                        'markets',
                        'orderbook',
                        'sellorders',
                        'transactions/day',
                        'transactions/hour',
                        'transactions/month',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'balance',
                        'mytrades',
                        'orders',
                    ),
                    'post' => array (
                        'buy/{symbol}/{type}',
                        'cancel/{id}',
                        'sell/{symbol}/{type}',
                        'withdraw',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $result = array ();
        $markets = $this->publicGetMarkets ();
        $market = marketsarray ('data');
        $base = marketarray ('BaseCurrency');
        $quote = marketarray ('MarketCurrency');
        $symbol = $base . '/' . $quote;
        $baseId = $base;
        $quoteId = $quote;
        $id = marketarray ('MarketName');
        $result[] = array (
            'id' => $id,
            'symbol' => $symbol,
            'base' => $base,
            'quote' => $quote,
            'baseId' => $baseId,
            'quoteId' => $quoteId,
            'info' => $market,
        );
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetBalance ();
        $balances = responsearray ('data');
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);            
            $currency = balancearray ('currency_code');
            $uppercase = strtoupper ($currency);
            $free = balancearray ('cash');
            $used = balancearray ('reserved');
            $total = $this->sum ($free, $used);
            $account = array (
                'free' => $free,
                'used' => $used,
                'total' => $total,
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $response = $this->publicGetOrderbook ($params);
        $orderbook = array (
            'bids' => responsearray ('data')array (0)array ('b'),
            'asks' => responsearray ('data')array (1)array ('s'),
        );
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = orderarray ('Gold_Price');
                $amount = orderarray ('Gold_Amount');
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        resultarray ('bids') = $this->sort_by (resultarray ('bids'), 0, true);
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $quote = $this->publicGetBidandask ();
        $bidsLength = count (quotearray ('bids'));
        $bid = quotearray ('bids')array ($bidsLength - 1);
        $ask = quotearray ('asks')array (0);
        $response = $this->publicGetMarkets ();
        $ticker = responsearray ('data');
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('24hHigh')),
            'low' => floatval (tickerarray ('24hLow')),
            'bid' => bidarray (0),
            'ask' => askarray (0),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('LastPrice')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('24hVolume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTransactionsDay ();
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $method = 'privatePost' . $this->capitalize ($side) . 'SymbolType';
        return thisarray ($method) (array_merge (array (
            'symbol' => strtolower (parray ('quoteId')),
            'type' => $type,
            'gld' => $amount,
            'price' => $price || 1,
        ), $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostCancelId (array_merge (array (
            'id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/';
        if ($api == 'public') {
            $url .= $path;
        } else {
            $nonce = $this->nonce ();
            $url .= $this->version . '/' . $this->implode_params ($path, $params);
            $query = array_merge (array (
                'nonce' => $nonce,
                'apikey' => $this->apiKey,
            ), $this->omit ($params, $this->extract_params ($path)));
            $url .= '?' . $this->urlencode ($query);
            $headers = array (
                'Content-Type' => 'application/json',
                'X-Signature' => $this->hmac ($this->encode ($url), $this->encode ($this->secret))
            );
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class vbtc extends blinktrade {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'vbtc',
            'name' => 'VBTC',
            'countries' => 'VN',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27991481-1f53d1d8-6481-11e7-884e-21d17e7939db.jpg',
                'api' => array (
                    'public' => 'https://api.blinktrade.com/api',
                    'private' => 'https://api.blinktrade.com/tapi',
                ),
                'www' => 'https://vbtc.exchange',
                'doc' => 'https://blinktrade.com/docs',
            ),
            'comment' => 'Blinktrade API',
            'markets' => array (
                'BTC/VND' => array ( 'id' => 'BTCVND', 'symbol' => 'BTC/VND', 'base' => 'BTC', 'quote' => 'VND', 'brokerId' => 3, 'broker' => 'VBTC', ),
            ),
        ), $options));
    }
}

//-----------------------------------------------------------------------------

class virwox extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'virwox',
            'name' => 'VirWoX',
            'countries' => 'AT',
            'rateLimit' => 1000,
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766894-6da9d360-5eea-11e7-90aa-41f2711b7405.jpg',
                'api' => array (
                    'public' => 'http://api.virwox.com/api/json.php',
                    'private' => 'https://www.virwox.com/api/trading.php',
                ),
                'www' => 'https://www.virwox.com',
                'doc' => 'https://www.virwox.com/developers.php',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'getInstruments',
                        'getBestPrices',
                        'getMarketDepth',
                        'estimateMarketOrder',
                        'getTradedPriceVolume',
                        'getRawTradeData',
                        'getStatistics',
                        'getTerminalList',
                        'getGridList',
                        'getGridStatistics',
                    ),
                    'post' => array (
                        'getInstruments',
                        'getBestPrices',
                        'getMarketDepth',
                        'estimateMarketOrder',
                        'getTradedPriceVolume',
                        'getRawTradeData',
                        'getStatistics',
                        'getTerminalList',
                        'getGridList',
                        'getGridStatistics',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'cancelOrder',
                        'getBalances',
                        'getCommissionDiscount',
                        'getOrders',
                        'getTransactions',
                        'placeOrder',
                    ),
                    'post' => array (
                        'cancelOrder',
                        'getBalances',
                        'getCommissionDiscount',
                        'getOrders',
                        'getTransactions',
                        'placeOrder',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetInstruments ();
        $keys = array_keys (marketsarray ('result'));
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $market = marketsarray ('result')array ($keys[$p)];
            $id = marketarray ('instrumentID');
            $symbol = marketarray ('symbol');
            $base = marketarray ('longCurrency');
            $quote = marketarray ('shortCurrency');
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privatePostGetBalances ();
        $balances = responsearray ('result')array ('accountList');
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);            
            $currency = balancearray ('currency');
            $total = balancearray ('balance');
            $account = array (
                'free' => $total,
                'used' => null,
                'total' => $total,
            );
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetchBestPrices ($market) {
        $this->loadMarkets ();
        return $this->publicPostGetBestPrices (array (
            'symbols' => array ($this->symbol ($market)),
        ));
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $response = $this->publicPostGetMarketDepth (array_merge (array (
            'symbols' => array ($this->symbol ($market)),
            'buyDepth' => 100,
            'sellDepth' => 100,
        ), $params));
        $orderbook = responsearray ('result')array (0);
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ( 'bids' => 'buy', 'asks' => 'sell' );
        $keys = array_keys ($sides);
        for ($k = 0; $k < count ($keys); $k++) {
            $key = keysarray ($k);
            $side = sidesarray ($key);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('price'));
                $amount = floatval (orderarray ('volume'));
                resultarray ($key)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $end = $this->milliseconds ();
        $start = $end - 86400000;
        $response = $this->publicGetTradedPriceVolume (array (
            'instrument' => $this->symbol ($market),
            'endDate' => $this->yyyymmddhhmmss ($end),
            'startDate' => $this->yyyymmddhhmmss ($start),
            'HLOC' => 1,
        ));
        $tickers = responsearray ('result')array ('priceVolumeList');
        $keys = array_keys ($tickers);
        $length = count ($keys);
        $lastKey = keysarray ($length - 1);
        $ticker = tickersarray ($lastKey);
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => null,
            'ask' => null,
            'vwap' => null,
            'open' => floatval (tickerarray ('open')),
            'close' => floatval (tickerarray ('close')),
            'first' => null,
            'last' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => floatval (tickerarray ('longVolume')),
            'quoteVolume' => floatval (tickerarray ('shortVolume')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetRawTradeData (array (
            'instrument' => $this->symbol ($market),
            'timespan' => 3600,
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'instrument' => $this->symbol ($market),
            'orderType' => strtoupper ($side),
            'amount' => $amount,
        );
        if ($type == 'limit')
            orderarray ('price') = $price;
        return $this->privatePostPlaceOrder (array_merge ($order, $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privatePostCancelOrder (array_merge (array (
            'orderID' => $id,
        ), $params));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api')array ($api);
        $auth = array ();
        if ($api == 'private') {
            autharray ('key') = $this->apiKey;
            autharray ('user') = $this->login;
            autharray ('pass') = $this->password;
        }
        $nonce = $this->nonce ();
        if ($method == 'GET') {
            $url .= '?' . $this->urlencode (array_merge (array (
                'method' => $path,
                'id' => $nonce,
            ), $auth, $params));
        } else {
            $headers = array ( 'Content-Type' => 'application/json' );
            $body = $this->json (array (
                'method' => $path,
                'params' => array_merge ($auth, $params),
                'id' => $nonce,
            ));
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            if (responsearray ('error'))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class xbtce extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'xbtce',
            'name' => 'xBTCe',
            'countries' => 'RU',
            'rateLimit' => 2000, // responses are cached every 2 seconds
            'version' => 'v1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28059414-e235970c-662c-11e7-8c3a-08e31f78684b.jpg',
                'api' => 'https://cryptottlivewebapi.xbtce.net:8443/api',
                'www' => 'https://www.xbtce.com',
                'doc' => array (
                    'https://www.xbtce.com/tradeapi',
                    'https://support.xbtce.info/Knowledgebase/Article/View/52/25/xbtce-exchange-api',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'currency',
                        'currency/{filter}',
                        'level2',
                        'level2/{filter}',
                        'quotehistory/{symbol}/{periodicity}/bars/ask',
                        'quotehistory/{symbol}/{periodicity}/bars/bid',
                        'quotehistory/{symbol}/level2',
                        'quotehistory/{symbol}/ticks',
                        'symbol',
                        'symbol/{filter}',
                        'tick',
                        'tick/{filter}',
                        'ticker',
                        'ticker/{filter}',
                        'tradesession',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'tradeserverinfo',
                        'tradesession',
                        'currency',
                        'currency/{filter}',
                        'level2',
                        'level2/{filter}',
                        'symbol',
                        'symbol/{filter}',
                        'tick',
                        'tick/{filter}',
                        'account',
                        'asset',
                        'asset/{id}',
                        'position',
                        'position/{id}',
                        'trade',
                        'trade/{id}',
                        'quotehistory/{symbol}/{periodicity}/bars/ask',
                        'quotehistory/{symbol}/{periodicity}/bars/ask/info',
                        'quotehistory/{symbol}/{periodicity}/bars/bid',
                        'quotehistory/{symbol}/{periodicity}/bars/bid/info',
                        'quotehistory/{symbol}/level2',
                        'quotehistory/{symbol}/level2/info',
                        'quotehistory/{symbol}/periodicities',
                        'quotehistory/{symbol}/ticks',
                        'quotehistory/{symbol}/ticks/info',
                        'quotehistory/cache/{symbol}/{periodicity}/bars/ask',
                        'quotehistory/cache/{symbol}/{periodicity}/bars/bid',
                        'quotehistory/cache/{symbol}/level2',
                        'quotehistory/cache/{symbol}/ticks',
                        'quotehistory/symbols',
                        'quotehistory/version',
                    ),
                    'post' => array (
                        'trade',
                        'tradehistory',
                    ),
                    'put' => array (
                        'trade',
                    ),
                    'delete' => array (
                        'trade',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->privateGetSymbol ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('Symbol');
            $base = marketarray ('MarginCurrency');
            $quote = marketarray ('ProfitCurrency');
            if ($base == 'DSH')
                $base = 'DASH';
            $symbol = $base . '/' . $quote;
            $symbol = marketarray ('IsTradeAllowed') ? $symbol : $id;
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $balances = $this->privateGetAsset ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);            
            $currency = balancearray ('Currency');
            $uppercase = strtoupper ($currency);
            // xbtce names DASH incorrectly as DSH
            if ($uppercase == 'DSH')
                $uppercase = 'DASH';
            $total = balancearray ('balance');
            $account = array (
                'free' => balancearray ('FreeAmount'),
                'used' => balancearray ('LockedAmount'),
                'total' => balancearray ('Amount'),
            );
            resultarray ($uppercase) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $orderbook = $this->privateGetLevel2Filter (array_merge (array (
            'filter' => parray ('id'),
        ), $params));
        $orderbook = orderbookarray (0);
        $timestamp = orderbookarray ('Timestamp');
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $Side = $this->capitalize ($side);
            $orders = orderbookarray ($Side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray ('Price'));
                $amount = floatval (orderarray ('Volume'));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = 0;
        $last = null;
        if (array_key_exists ('LastBuyTimestamp', $ticker))
            if ($timestamp < tickerarray ('LastBuyTimestamp')) {
                $timestamp = tickerarray ('LastBuyTimestamp');
                $last = tickerarray ('LastBuyPrice');
            }
        if (array_key_exists ('LastSellTimestamp', $ticker))
            if ($timestamp < tickerarray ('LastSellTimestamp')) {
                $timestamp = tickerarray ('LastSellTimestamp');
                $last = tickerarray ('LastSellPrice');
            }
        if (!$timestamp)
            $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => tickerarray ('DailyBestBuyPrice'),
            'low' => tickerarray ('DailyBestSellPrice'),
            'bid' => tickerarray ('BestBid'),
            'ask' => tickerarray ('BestAsk'),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => $last,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => tickerarray ('DailyTradedTotalVolume'),
            'info' => $ticker,
        );
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetTicker ();
        $tickers = $this->index_by ($tickers, 'Symbol');
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = $this->markets_by_idarray ($id);
            $symbol = marketarray ('symbol');
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $tickers = $this->publicGetTickerFilter (array (
            'filter' => parray ('id'),
        ));
        $tickers = $this->index_by ($tickers, 'Symbol');
        $ticker = tickersarray ($p['id')];
        return $this->parse_ticker ($ticker, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        // no method for trades?
        return $this->privateGetTrade ();
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        return $this->tapiPostTrade (array_merge (array (
            'pair' => $this->market_id ($market),
            'type' => $side,
            'amount' => $amount,
            'rate' => $price,
        ), $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->privateDeleteTrade (array_merge (array (
            'Type' => 'Cancel',
            'Id' => $id,
        ), $params));
    }

    public function nonce () {
        return $this->milliseconds ();
    }

    public function request ($path, $api = 'api', $method = 'GET', $params = array (), $headers = null, $body = null) {
        if (!$this->apiKey)
            throw new AuthenticationError ($this->id . ' requires apiKey for all requests, their public API is always busy');
        if (!$this->uid)
            throw new AuthenticationError ($this->id . ' requires uid property for authentication and trading');
        $url = $this->urlsarray ('api') . '/' . $this->version;
        if ($api == 'public')
            $url .= '/' . $api;
        $url .= '/' . $this->implode_params ($path, $params);
        $query = $this->omit ($params, $this->extract_params ($path));
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $headers = array ( 'Accept-Encoding' => 'gzip, deflate' );
            $nonce = (string) $this->nonce ();
            if ($method == 'POST') {
                if ($query) {
                    headersarray ('Content-Type') = 'application/json';
                    $body = $this->json ($query);
                }
                else
                    $url .= '?' . $this->urlencode ($query);                
            }
            $auth = $nonce . $this->uid . $this->apiKey . $method . $url;
            if ($body)
                $auth .= $body;
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($this->secret), 'sha256', 'base64');
            $credentials = $this->uid . ':' . $this->apiKey . ':' . $nonce . ':' . $this->binary_to_string ($signature);
            headersarray ('Authorization') = 'HMAC ' . $credentials;
        }
        return $this->fetch ($url, $method, $headers, $body);
    }
}

//-----------------------------------------------------------------------------

class yobit extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'yobit',
            'name' => 'YoBit',
            'countries' => 'RU',
            'rateLimit' => 2000, // responses are cached every 2 seconds
            'version' => '3',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766910-cdcbfdae-5eea-11e7-9859-03fea873272d.jpg',
                'api' => 'https://yobit.net',
                'www' => 'https://www.yobit.net',
                'doc' => 'https://www.yobit.net/en/api/',
            ),
            'api' => array (
                'api' => array (
                    'get' => array (
                        'depth/{pairs}',
                        'info',
                        'ticker/{pairs}',
                        'trades/{pairs}',
                    ),
                ),
                'tapi' => array (
                    'post' => array (
                        'ActiveOrders',
                        'CancelOrder',
                        'GetDepositAddress',
                        'getInfo',
                        'OrderInfo',
                        'Trade',
                        'TradeHistory',
                        'WithdrawCoinsToAddress',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->apiGetInfo ();
        $keys = array_keys (marketsarray ('pairs'));
        $result = array ();
        for ($p = 0; $p < count ($keys); $p++) {
            $id = keysarray ($p);
            $market = marketsarray ('pairs')array ($id);
            $symbol = str_replace ('_', '/', strtoupper ($id));
            list ($base, $quote) = explode ('/', $symbol);
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->tapiPostGetInfo ();
        $balances = responsearray ('return');
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ('funds', $balances))
                if (array_key_exists ($lowercase, balancesarray ('funds')))
                    accountarray ('free') = balancesarray ('funds')array ($lowercase);
            if (array_key_exists ('funds_incl_orders', $balances))
                if (array_key_exists ($lowercase, balancesarray ('funds_incl_orders')))
                    accountarray ('total') = balancesarray ('funds_incl_orders')array ($lowercase);
            if (accountarray ('total') && accountarray ('free'))
                accountarray ('used') = accountarray ('total') - accountarray ('free');
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->apiGetDepthPairs (array_merge (array (
            'pairs' => parray ('id'),
        ), $params));
        $orderbook = responsearray ($p['id')];
        $timestamp = $this->milliseconds ();
        $bids = (array_key_exists ('bids', $orderbook)) ? orderbookarray ('bids') : array ();
        $asks = (array_key_exists ('asks', $orderbook)) ? orderbookarray ('asks') : array ();
        $result = array (
            'bids' => $bids,
            'asks' => $asks,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $tickers = $this->apiGetTickerPairs (array (
            'pairs' => parray ('id'),
        ));
        $ticker = tickersarray ($p['id')];
        $timestamp = tickerarray ('updated') * 1000;
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => floatval (tickerarray ('avg')),
            'baseVolume' => floatval (tickerarray ('vol_cur')),
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->apiGetTradesPairs (array (
            'pairs' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        return $this->tapiPostTrade (array_merge (array (
            'pair' => $this->market_id ($market),
            'type' => $side,
            'amount' => $amount,
            'rate' => $price,
        ), $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->tapiPostCancelOrder (array_merge (array (
            'order_id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'api', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $api;
        if ($api == 'api') {
            $url .= '/' . $this->version . '/' . $this->implode_params ($path, $params);
            $query = $this->omit ($params, $this->extract_params ($path));
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = $this->nonce ();
            $query = array_merge (array ( 'method' => $path, 'nonce' => $nonce ), $params);
            $body = $this->urlencode ($query);
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'key' => $this->apiKey,
                'sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class yunbi extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'yunbi',
            'name' => 'YUNBI',
            'countries' => 'CN',
            'rateLimit' => 1000,
            'version' => 'v2',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/28570548-4d646c40-7147-11e7-9cf6-839b93e6d622.jpg',
                'api' => 'https://yunbi.com',
                'www' => 'https://yunbi.com',
                'doc' => array (
                    'https://yunbi.com/documents/api/guide',
                    'https://yunbi.com/swagger/',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'tickers',
                        'tickers/{market}',
                        'markets',
                        'order_book',
                        'k',
                        'depth',
                        'trades',
                        'k_with_pending_trades',
                        'timestamp',
                        'addresses/{address}',
                        'partners/orders/{id}/trades',
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'deposits',
                        'members/me',
                        'deposit',
                        'deposit_address',
                        'order',
                        'orders',
                        'trades/my',
                    ),
                    'post' => array (
                        'order/delete',
                        'orders',
                        'orders/multi',
                        'orders/clear',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->publicGetMarkets ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('id');
            $symbol = marketarray ('name');
            list ($base, $quote) = explode ('/', $symbol);
            $base = $this->commonCurrencyCode ($base);
            $quote = $this->commonCurrencyCode ($quote);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->privateGetMembersMe ();
        $balances = responsearray ('accounts');
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = balancesarray ($b);
            $currency = balancearray ('currency');
            $uppercase = strtoupper ($currency);
            $account = array (
                'free' => floatval (balancearray ('balance')),
                'used' => floatval (balancearray ('locked')),
                'total' => null,
            );
            accountarray ('total') = $this->sum (accountarray ('free'), accountarray ('used'));
            resultarray ($uppercase) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $orderbook = $this->publicGetDepth (array_merge (array (
            'market' => parray ('id'),
            'limit' => 300,
        ), $params));
        $timestamp = orderbookarray ('timestamp') * 1000;
        $result = array (
            'bids' => array (),
            'asks' => array (),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        $sides = array ('bids', 'asks');
        for ($s = 0; $s < count ($sides); $s++) {
            $side = sidesarray ($s);
            $orders = orderbookarray ($side);
            for ($i = 0; $i < count ($orders); $i++) {
                $order = ordersarray ($i);
                $price = floatval (orderarray (0));
                $amount = floatval (orderarray (1));
                resultarray ($side)[] = array ($price, $amount);
            }
        }
        resultarray ('bids') = $this->sort_by (resultarray ('bids'), 0, true);
        resultarray ('asks') = $this->sort_by (resultarray ('asks'), 0);
        return $result;
    }

    public function parse_ticker ($ticker, $market) {
        $timestamp = tickerarray ('at') * 1000;
        $ticker = tickerarray ('ticker');
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval (tickerarray ('high')),
            'low' => floatval (tickerarray ('low')),
            'bid' => floatval (tickerarray ('buy')),
            'ask' => floatval (tickerarray ('sell')),
            'vwap' => null,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => floatval (tickerarray ('last')),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => floatval (tickerarray ('vol')),
            'info' => $ticker,
        );        
    }

    public function fetch_tickers () {
        $this->loadMarkets ();
        $tickers = $this->publicGetTickers ();
        $ids = array_keys ($tickers);
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = idsarray ($i);
            $market = null;
            $symbol = $id;
            if (array_key_exists ($id, $this->markets_by_id)) {
                $market = $this->markets_by_idarray ($id);
                $symbol = marketarray ('symbol');
            } else {
                $base = mb_substr ($id, 0, 3);
                $quote = mb_substr ($id, 3, 6);
                $base = strtoupper ($base);
                $quote = strtoupper ($quote);
                $base = $this->commonCurrencyCode ($base);
                $quote = $this->commonCurrencyCode ($quote);
                $symbol = $base . '/' . $quote;
            }
            $ticker = tickersarray ($id);
            resultarray ($symbol) = $this->parse_ticker ($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $p = $this->market ($market);
        $response = $this->publicGetTickersMarket (array (
            'market' => parray ('id'),
        ));
        return $this->parse_ticker ($response, $p);
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->publicGetTrades (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        $order = array (
            'market' => $this->market_id ($market),
            'side' => $side,
            'volume' => (string) $amount,
            'ord_type' => $type,
        );
        if ($type == 'limit') {
            orderarray ('price') = (string) $price;
        }
        return $this->privatePostOrders (array_merge ($order, $params));
    }

    public function cancel_order ($id) {
        $this->loadMarkets ();
        return $this->privatePostOrderDelete (array ( 'id' => $id ));
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = '/$api/' . $this->version . '/' . $this->implode_params ($path, $params) . '.json';
        $query = $this->omit ($params, $this->extract_params ($path));
        $url = $this->urlsarray ('api') . $request;
        if ($api == 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $nonce = (string) $this->nonce ();
            $query = $this->urlencode ($this->keysort (array_merge (array (
                'access_key' => $this->apiKey,
                'tonce' => $nonce,
            ), $params)));
            $auth = $method . '|' . $request . '|' . $query;
            $signature = $this->hmac ($this->encode ($auth), $this->encode ($this->secret));
            $suffix = $query . '&$signature=' . $signature;
            if ($method == 'GET') {
                $url .= '?' . $suffix;
            } else {
                $body = $suffix;
                $headers = array (
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Content-Length' => strlen ($body),
                );
            }
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

//-----------------------------------------------------------------------------

class zaif extends Exchange {

    public function __construct ($options = array ()) {
        parent::__construct (array_merge (array (
            'id' => 'zaif',
            'name' => 'Zaif',
            'countries' => 'JP',
            'rateLimit' => 2000,
            'version' => '1',
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766927-39ca2ada-5eeb-11e7-972f-1b4199518ca6.jpg',
                'api' => 'https://api.zaif.jp',
                'www' => 'https://zaif.jp',
                'doc' => array (
                    'http://techbureau-api-document.readthedocs.io/ja/latest/index.html',
                    'https://corp.zaif.jp/api-docs',
                    'https://corp.zaif.jp/api-docs/api_links',
                    'https://www.npmjs.com/package/zaif.jp',
                    'https://github.com/you21979/node-zaif',
                ),
            ),
            'api' => array (
                'api' => array (
                    'get' => array (
                        'depth/{pair}',
                        'currencies/{pair}',
                        'currencies/all',
                        'currency_pairs/{pair}',
                        'currency_pairs/all',
                        'last_price/{pair}',
                        'ticker/{pair}',
                        'trades/{pair}',
                    ),
                ),
                'tapi' => array (
                    'post' => array (
                        'active_orders',
                        'cancel_order',
                        'deposit_history',
                        'get_id_info',
                        'get_info',
                        'get_info2',
                        'get_personal_info',
                        'trade',
                        'trade_history',
                        'withdraw',
                        'withdraw_history',
                    ),
                ),
                'ecapi' => array (
                    'post' => array (
                        'createInvoice',
                        'getInvoice',
                        'getInvoiceIdsByOrderNumber',
                        'cancelInvoice',
                    ),
                ),
            ),
        ), $options));
    }

    public function fetch_markets () {
        $markets = $this->apiGetCurrencyPairsAll ();
        $result = array ();
        for ($p = 0; $p < count ($markets); $p++) {
            $market = marketsarray ($p);
            $id = marketarray ('currency_pair');
            $symbol = marketarray ('name');
            list ($base, $quote) = explode ('/', $symbol);
            $result[] = array (
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_balance () {
        $this->loadMarkets ();
        $response = $this->tapiPostGetInfo ();
        $balances = responsearray ('return');
        $result = array ( 'info' => $balances );
        for ($c = 0; $c < count ($this->currencies); $c++) {
            $currency = $this->currenciesarray ($c);
            $lowercase = strtolower ($currency);
            $account = array (
                'free' => null,
                'used' => null,
                'total' => null,
            );
            if (array_key_exists ('funds', $balances))
                if (array_key_exists ($lowercase, balancesarray ('funds')))
                    accountarray ('free') = balancesarray ('funds')array ($lowercase);
            if (array_key_exists ('funds_incl_orders', $balances))
                if (array_key_exists ($lowercase, balancesarray ('funds_incl_orders')))
                    accountarray ('total') = balancesarray ('funds_incl_orders')array ($lowercase);
            if (accountarray ('total') && accountarray ('free'))
                accountarray ('used') = accountarray ('total') - accountarray ('free');
            resultarray ($currency) = $account;
        }
        return $result;
    }

    public function fetch_order_book ($market, $params = array ()) {
        $this->loadMarkets ();
        $orderbook = $this->apiGetDepthPair  (array_merge (array (
            'pair' => $this->market_id ($market),
        ), $params));
        $timestamp = $this->milliseconds ();
        $result = array (
            'bids' => orderbookarray ('bids'),
            'asks' => orderbookarray ('asks'),
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
        );
        return $result;
    }

    public function fetch_ticker ($market) {
        $this->loadMarkets ();
        $ticker = $this->apiGetTickerPair (array (
            'pair' => $this->market_id ($market),
        ));
        $timestamp = $this->milliseconds ();
        return array (
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => tickerarray ('high'),
            'low' => tickerarray ('low'),
            'bid' => tickerarray ('bid'),
            'ask' => tickerarray ('ask'),
            'vwap' => tickerarray ('vwap'),
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => tickerarray ('last'),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => null,
            'quoteVolume' => tickerarray ('volume'),
            'info' => $ticker,
        );
    }

    public function fetch_trades ($market) {
        $this->loadMarkets ();
        return $this->apiGetTradesPair (array (
            'pair' => $this->market_id ($market),
        ));
    }

    public function create_order ($market, $type, $side, $amount, $price = null, $params = array ()) {
        $this->loadMarkets ();
        if ($type == 'market')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        return $this->tapiPostTrade (array_merge (array (
            'currency_pair' => $this->market_id ($market),
            'action' => ($side == 'buy') ? 'bid' : 'ask',
            'amount' => $amount,
            'price' => $price,
        ), $params));
    }

    public function cancel_order ($id, $params = array ()) {
        $this->loadMarkets ();
        return $this->tapiPostCancelOrder (array_merge (array (
            'order_id' => $id,
        ), $params));
    }

    public function request ($path, $api = 'api', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urlsarray ('api') . '/' . $api;
        if ($api == 'api') {
            $url .= '/' . $this->version . '/' . $this->implode_params ($path, $params);
        } else {
            $nonce = $this->nonce ();
            $body = $this->urlencode (array_merge (array (
                'method' => $path,
                'nonce' => $nonce,
            ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Content-Length' => strlen ($body),
                'Key' => $this->apiKey,
                'Sign' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        $response = $this->fetch ($url, $method, $headers, $body);
        if (array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . responsearray ('error'));
        if (array_key_exists ('success', $response))
            if (!responsearray ('success'))
                throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

?>