<?php

/**
 * Initialize a cURL session.
 */
$ch = curl_init();

/**
 * Set multiple options for the cURL session.
 * - CURLOPT_URL: The URL to fetch.
 * - CURLOPT_RETURNTRANSFER: Return the transfer as a string instead of outputting it directly.
 */
curl_setopt_array($ch, [
    CURLOPT_URL => "https://randomuser.me/api",
    CURLOPT_RETURNTRANSFER => true
]);

/**
 * Execute the cURL session and store the response.
 *
 * @var string|false $response The response from the cURL session, or false on failure.
 */
$response = curl_exec($ch);

/**
 * Close the cURL session to free up resources.
 */
curl_close($ch);

/**
 * Output the response.
 */
echo $response, "\n";