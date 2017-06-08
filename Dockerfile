FROM php

ENV APP_DIR /app
ENV APPLICATION_ENV development

WORKDIR $APP_DIR
VOLUME $APP_DIR

EXPOSE 8080
EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "/demo", "/demo/index.php"]
