
-- STUDIO WIDGET

INSERT INTO `sys_std_pages`(`index`, `name`, `header`, `caption`, `icon`) VALUES
(3, 'vnd_test', '_vnd_test', '_vnd_test', 'vnd_test@modules/vendor/test/|std-pi.png');

SET @iPageId = LAST_INSERT_ID();
SET @iParentPageId = (SELECT `id` FROM `sys_std_pages` WHERE `name` = 'home');
SET @iParentPageOrder = (SELECT IFNULL(MAX(`order`), 0) + 1 FROM `sys_std_pages_widgets` WHERE `page_id` = @iParentPageId);

INSERT INTO `sys_std_widgets` (`page_id`, `module`, `url`, `click`, `icon`, `caption`, `cnt_notices`, `cnt_actions`) VALUES
(@iPageId, 'vnd_test', '{url_studio}module.php?name=vnd_test', '', 'vnd_test@modules/vendor/test/|std-wi.png', '_vnd_test', '', 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:11:"get_actions";s:6:"params";a:0:{}s:5:"class";s:18:"TemplStudioModules";}');

INSERT INTO `sys_std_pages_widgets` (`page_id`, `widget_id`, `order`) VALUES
(@iParentPageId, LAST_INSERT_ID(), @iParentPageOrder);

