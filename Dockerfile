FROM devopsedu/webapp

ADD src /var/www/html

RUN rm /var/www/html/index.html

CMD apachectl -D FOREGROUND
