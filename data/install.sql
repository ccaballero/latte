
DROP TABLE IF EXISTS `latte_channel`;
CREATE TABLE `latte_channel` (
    `ident`         int unsigned    NOT NULL auto_increment,
    `label`         varchar(128)    NOT NULL,
    `link`          varchar(128)    NOT NULL,
    `description`   text            NOT NULL DEFAULT '',
    `tsregister`    int unsigned    NOT NULL DEFAULT 0,
    PRIMARY KEY (`ident`)
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `latte_channel_item`;
CREATE TABLE `latte_channel_item` (
    `ident`         int unsigned    NOT NULL auto_increment,
    `channel`       int unsigned    NOT NULL,
    `title`         varchar(128)    NOT NULL DEFAULT '',
    `link`          varchar(128)    NOT NULL DEFAULT '',
    `description`   text            NOT NULL DEFAULT '',
    PRIMARY KEY (`channel`, `ident`)
) DEFAULT CHARACTER SET UTF8;

/* DATA INSERTION */
INSERT INTO `latte_channel`
(`label`, `link`)
VALUES
('9gag', 'http://9gag.com/rss/site/feed.rss'),
('meneame', 'http://www.meneame.net/rss2.php');
