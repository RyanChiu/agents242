ALTER TABLE  `t_stats` 
ADD  `sales_type5` INT NOT NULL AFTER  `sales_type4` ,
ADD  `sales_type6` INT NOT NULL AFTER  `sales_type5` ,
ADD  `sales_type7` INT NOT NULL AFTER  `sales_type6` ,
ADD  `sales_type8` INT NOT NULL AFTER  `sales_type7` ,
ADD  `sales_type9` INT NOT NULL AFTER  `sales_type8` ,
ADD  `sales_type10` INT NOT NULL AFTER  `sales_type9`;

ALTER TABLE  `t_stats` 
ADD  `sales_type5_payout` DECIMAL( 8 ) NOT NULL AFTER  `sales_type4_earning` ,
ADD  `sales_type5_earning` DECIMAL( 8 ) NOT NULL AFTER  `sales_type5_payout` ,
ADD  `sales_type6_payout` DECIMAL( 8 ) NOT NULL AFTER  `sales_type5_earning` ,
ADD  `sales_type6_earning` DECIMAL( 8 ) NOT NULL AFTER  `sales_type6_payout` ,
ADD  `sales_type7_payout` DECIMAL( 8 ) NOT NULL AFTER  `sales_type6_earning` ,
ADD  `sales_type7_earning` DECIMAL( 8 ) NOT NULL AFTER  `sales_type7_payout` ,
ADD  `sales_type8_payout` DECIMAL( 8 ) NOT NULL AFTER  `sales_type7_earning` ,
ADD  `sales_type8_earning` DECIMAL( 8 ) NOT NULL AFTER  `sales_type8_payout` ,
ADD  `sales_type9_payout` DECIMAL( 8 ) NOT NULL AFTER  `sales_type8_earning` ,
ADD  `sales_type9_earning` DECIMAL( 8 ) NOT NULL AFTER  `sales_type9_payout` ,
ADD  `sales_type10_payout` DECIMAL( 8 ) NOT NULL AFTER  `sales_type9_earning` ,
ADD  `sales_type10_earning` DECIMAL( 8 ) NOT NULL AFTER  `sales_type10_payout`;