FROM php:8.1-apache

RUN docker-ph-ext-install musqli pdo pdo-mysql