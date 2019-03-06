ALTER TABLE `vland_member`
	ADD COLUMN `rp_token` VARCHAR(256) NULL DEFAULT NULL AFTER `last_login`,
	ADD COLUMN `rp_token_expired` BIGINT NULL DEFAULT NULL AFTER `rp_token`;
