# OSUcybersecurity

## Docker
### Starting Nginx
To start nginx and php-fpm you simply need to navigate to the root directory of this repo in terminal and run
```
docker compose up -d
```
If you are running an older version of docker the command may be
```
docker-compose up -d
```
### Changing Port
By default nginx will bind to port 80 it can be changed by changing the following line.
```
- 80:80
```
to
```
- [YOUR PORT]:80
```
under the nginx configuration in docker-compose.yaml.