ALTER TABLE `vland_member`
	ADD COLUMN `rp_token` VARCHAR(256) NULL DEFAULT NULL AFTER `last_login`,
	ADD COLUMN `rp_token_expired` BIGINT NULL DEFAULT NULL AFTER `rp_token`;

-- Thêm cột chứa token register và thời gian hết hạn của token này
ALTER TABLE `vland_member`
	ADD COLUMN `token` VARCHAR(256) NULL DEFAULT NULL AFTER `password`,
	ADD COLUMN `token_expired` BIGINT NULL DEFAULT NULL AFTER `token`;