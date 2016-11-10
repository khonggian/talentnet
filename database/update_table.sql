-- ALTER TABLE `wz_personal` ADD `email` VARCHAR(255) NULL AFTER `fullname`; 

ALTER TABLE `wz_personal` CHANGE `country_id` `country_id` VARCHAR(255) NULL DEFAULT '', CHANGE `city_id` `city_id` VARCHAR(255) NULL DEFAULT '';
ALTER TABLE `wz_personal` CHANGE `gender` `gender` VARCHAR(255) NULL DEFAULT '', CHANGE `marital` `marital` VARCHAR(255) NULL DEFAULT '' COMMENT '';
ALTER TABLE `wz_work_experience` CHANGE `country_id` `country_id` VARCHAR(255) NULL DEFAULT '', CHANGE `city_id` `city_id` VARCHAR(255) NULL DEFAULT '';
ALTER TABLE `wz_education` CHANGE `degree_id` `degree_id` VARCHAR(255) NULL DEFAULT '', CHANGE `location_id` `location_id` VARCHAR(255) NULL DEFAULT '';
ALTER TABLE `wz_skill_language` CHANGE `level_id` `level_id` VARCHAR(255) NULL DEFAULT '';
ALTER TABLE `wz_skill_language` CHANGE `category` `category` VARCHAR(255) NULL ;
ALTER TABLE `wz_partners` ADD `content_vi` TEXT NULL AFTER `image`; 
ALTER TABLE `wz_partners` ADD `content_en` TEXT NULL AFTER `content_vi`; 
ALTER TABLE `wz_about_award` ADD `image` VARCHAR(255) NULL AFTER `parent_id`; 

