<?php

/**
 * Initialize a cURL session.
 */
$ch = curl_init();

/**
 * Set the headers for the cURL session.
 *
 * @var array $headers The headers to be sent with the request.
 */
$headers = [
    "Authorization: Client-ID YOUR_ACCESS_KEY"
];

/**
 * Set multiple options for the cURL session.
 * - CURLOPT_URL: The URL to fetch.
 * - CURLOPT_RETURNTRANSFER: Return the transfer as a string instead of outputting it directly.
 * - CURLOPT_HTTPHEADER: An array of HTTP header fields to set.
 * - CURLOPT_HEADER: Include the header in the output.
 */
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADER => true
]);

/**
 * Execute the cURL session and store the response.
 *
 * @var string|false $response The response from the cURL session, or false on failure.
 */
$response = curl_exec($ch);

/**
 * Get the HTTP status code from the cURL session.
 *
 * @var int $status_code The HTTP status code of the response.
 */
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

/**
 * Get the content type from the cURL session.
 *
 * @var string $content_type The content type of the response.
 */
$content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

/**
 * Get the content length from the cURL session.
 *
 * @var int $content_length The content length of the response.
 */
$content_length = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

/**
 * Close the cURL session to free up resources.
 */
curl_close($ch);

/**
 * Output the HTTP status code.
 */
echo $status_code, "\n";

/**
 * Output the content type.
 */
echo $content_type, "\n";

/**
 * Output the content length.
 */
echo $content_length, "\n";

/**
 * Output the response.
 */
echo $response, "\n";