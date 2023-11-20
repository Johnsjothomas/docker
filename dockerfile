FROM php:latest

WORKDIR /usr/src/app

COPY ..

RUN npm install

COPY . .

EXPOSE 3000
CMD [ "laravel"]
