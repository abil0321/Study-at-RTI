<?php

namespace Legion\StudyCode;

use GuzzleHttp\Client;

class WeatherService
{
  private Client $client;
  public function __construct(
    private readonly string $apiKey = '0a290fc117649221a61eae0305150c1a',
    private readonly string $url = 'https://api.openweathermap.org/data/2.5/weather'
  ) {
    $this->client = new Client();
  }

  public function getWeather(string $city): array
  {
    $response = $this->client->get($this->url, [
      'query' => [
        'q' => $city,
        'appid' => $this->apiKey,
        'units' => 'metric'
      ]
    ]);

    $weatherData = json_decode($response->getBody()->getContents(), true);
    return [
      'city' => $weatherData['name'],
      'temperature' => $weatherData['main']['temp'],
      'description' => $weatherData['weather'][0]['description'],
      'humidity' => $weatherData['main']['humidity']
    ];
  }
}
