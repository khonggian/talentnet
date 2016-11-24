ALTER TABLE `wz_contact`   
  ADD COLUMN `howknow` VARCHAR(255) DEFAULT ''  NULL AFTER `message`,
  ADD COLUMN `serviceoffer` VARCHAR(255 DEFAULT ''  NULL AFTER `howknow`;
  
ALTER TABLE `wz_who_download_brochure`   
  ADD COLUMN `howknow` VARCHAR(255) DEFAULT ''  NULL AFTER `action`,
  ADD COLUMN `serviceoffer` VARCHAR(255) DEFAULT ''  NULL AFTER `howknow`;