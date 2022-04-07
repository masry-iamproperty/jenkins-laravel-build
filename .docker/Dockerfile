FROM docker:dind

COPY apk_repositories /etc/apk/repositories

RUN apk update && apk add docker-compose
