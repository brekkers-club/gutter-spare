ROOT_DIR:=$(shell dirname $(realpath $(firstword $(MAKEFILE_LIST))))

install:
	cd $(ROOT_DIR)/client && npm install
	cd $(ROOT_DIR)/api && docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html \aravelsail/php80-composer:latest composer install --ignore-platform-reqs