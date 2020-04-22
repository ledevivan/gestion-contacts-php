CREATE TABLE IF NOT EXISTS `categories`
(
    `id`          int(11)      NOT NULL AUTO_INCREMENT,
    `name`        varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `created_at`  datetime null,
    `updated_at`  datetime null,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB