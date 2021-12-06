<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Giphy Mirror</title>
</head>

<body>
    <?php

        define('MAX_OFFSET', 100);


        require_once(__DIR__ . '/vendor/autoload.php');

        $api_instance = new GPH\Api\DefaultApi();
        $api_key = "EMnm5fpUKYhxn6dIpYuXzCW5s6YiEtyb"; // string | Giphy API Key.
        $q = "highland cows"; // string | Search query term or prhase.
        $limit = 50; // int | The maximum number of records to return.
        $offset = 0; // int | An optional results offset. Defaults to 0.
        $rating = "g"; // string | Filters results by specified rating.
        $lang = "en"; // string | Specify default country for regional content; use a 2-letter ISO 639-1 country code. See list of supported languages <a href = \"../language-support\">here</a>.
        $fmt = "json"; // string | Used to indicate the expected response format. Default is Json.
        $num = 0;


        try {
            $result = $api_instance->gifsSearchGet($api_key, $q, $limit, $offset, $rating, $lang, $fmt);

            echo '<iframe src="' .$result["data"][0]["embed_url"].'" width="480" height="300" frameBorder="0" class ="giphy-embed" loading = "lazy" allowFullScreen></iframe>';
            echo '<iframe src="' .$result["data"][1]["embed_url"].'" width="480" height="300" frameBorder="0" class ="giphy-embed" loading = "lazy" allowFullScreen></iframe>';
            echo '<iframe src="' .$result["data"][2]["embed_url"].'" width="480" height="300" frameBorder="0" class ="giphy-embed" loading = "lazy" allowFullScreen></iframe>';

            $dataResult = $result["data"];

            while ($offset <= 10) {
                $offset++; 
                echo $offset;
            } 
        
        } catch (Exception $e) {
            echo 'Exception when calling DefaultApi->gifsSearchGet: ', $e->getMessage(), PHP_EOL;
        }


    ?>
</body>
</html>
