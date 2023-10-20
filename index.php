<?php

require_once 'vendor/autoload.php';
use App\Api;
use GuzzleHttp\Exception\GuzzleException;

$api = new Api();
try {
    $activityData = $api->fetchRandomActivity();
} catch (GuzzleException|JsonException $e) {
}
echo "--------------------------------" . PHP_EOL;
echo "Random Activity: " . PHP_EOL;
echo $activityData->getActivityWithUppercaseFirstLetter() . PHP_EOL;
echo "Type: " . $activityData->getType() . PHP_EOL;
echo "Participants: " . $activityData->getParticipants() . PHP_EOL;
echo "Price: $" . number_format($activityData->getPrice(), 2) . PHP_EOL;
if ($activityData->getLink()) {
    echo "Link: " . $activityData->getLink() . PHP_EOL;
}
echo "--------------------------------" . PHP_EOL;