# Stage One Task - Backend Track

## Task Description

This project is a basic web server set up as part of the HNG Backend Track Stage One task. The server is deployed on a free hosting platform and exposes an API endpoint that returns a greeting message along with the client's IP address and location-based temperature information.

## API Endpoint

### Endpoint
`[GET] http://smithkruz.free.nf/api/hello?visitor_name="Mark"`

### Response
The API endpoint returns a JSON object with the following structure:
```json
{
  "client_ip": "127.0.0.1",
  "location": "New York",
  "greeting": "Hello, Mark!, the temperature is 11 degrees Celsius in New York"
}
