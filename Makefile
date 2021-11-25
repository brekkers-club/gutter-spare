ROOT_DIR:=$(shell dirname $(realpath $(firstword $(MAKEFILE_LIST))))

.PHONY: install

install:
	cd $(ROOT_DIR)/client && npm install
	cd $(ROOT_DIR)/api && docker run --rm -u "$(id -u):$(id -g)" -v $(ROOT_DIR)/api:/var/www/html -w /var/www/html laravelsail/php80-composer:latest composer install --ignore-platform-reqs