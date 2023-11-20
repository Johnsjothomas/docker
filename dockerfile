FROM php:latest

WORKDIR /usr/src/app

COPY johnsonjo100/johnsjo

RUN npm install

COPY . .

EXPOSE 3000
CMD [ "laravel"]
