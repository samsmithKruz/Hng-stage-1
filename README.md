# Stage One Task - Backend Track

## Task Description

This project is a basic API server created as part of the HNG Backend Track Stage One task. The server utilizes PHP to fetch weather information based on the client's IP address and provides a greeting message with temperature details. The weather data is fetched from the WeatherAPI.com service.

## Project Structure

The project consists of the following components:

- **routes/hello.php**: Contains PHP classes and methods to handle API requests.
- **index.php**: Main entry point for routing API requests.
- **.htaccess**: Apache configuration file for URL rewriting.
- **README.md**: Project documentation summarizing its functionality.

## API Endpoint

### `GET /api/hello`

#### Parameters
- `visitor_name`: (optional) Visitor's name for personalized greeting.

#### Example Usage
`GET http://smithkruz.free.nf/api/hello?visitor_name="Mark"`

#### Response
The API endpoint returns a JSON object with the following structure:
{
  "client_ip": "127.0.0.1",
  "location": "New York",
  "greeting": "Hello, Mark!, the temperature is 11 degrees Celsius in New York"
}

## Usage

1. **Deploying**: Upload the project files to a web server.
2. **Accessing**: Make GET requests to the `/api/hello` endpoint with optional `visitor_name` parameter.

## Dependencies

- **WeatherAPI.com**: Used to fetch current weather data based on client IP address.

## Notes

- Ensure proper handling of visitor inputs and API responses for robust functionality.
- Secure sensitive information such as API keys and ensure they are stored securely or fetched from environment variables.
