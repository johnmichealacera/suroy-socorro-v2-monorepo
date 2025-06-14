# Use an official PHP runtime as a parent image
FROM php:7.4-cli

# Set the working directory
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app

# Make port 8000 available to the world outside this container
EXPOSE 8000

# Run the PHP built-in server when the container launches
CMD ["php", "-S", "0.0.0.0:8000", "-t", "/app"]
