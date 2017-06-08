# Dockerfile
FROM nimmis/apache-php5

MAINTAINER Manjul Pathak

# Set the working directory to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
ADD . /app

CMD ["php", "-S", "0.0.0.0:80", "-t", "./demo", "./demo/index.php"]

EXPOSE 80
EXPOSE 443


