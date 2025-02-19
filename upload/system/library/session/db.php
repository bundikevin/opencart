<?php
/*
CREATE TABLE IF NOT EXISTS `session` (
  `session_id` varchar(32) NOT NULL,
  `data` text NOT NULL,
  `expire` datetime NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
*/
namespace Opencart\System\Library\Session;
#[\AllowDynamicProperties]
final class DB {
	public function __construct(\Opencart\System\Engine\Registry $registry) {
		$this->db = $registry->get('db');
		$this->config = $registry->get('config');
	}

	public function read(string $session_id): array {
		$query = $this->db->query("SELECT `data` FROM `" . DB_PREFIX . "session` WHERE `session_id` = '" . $this->db->escape($session_id) . "' AND `expire` > '" . $this->db->escape(date('Y-m-d H:i:s'))  . "'");

		if ($query->num_rows) {
			return json_decode($query->row['data'], true);
		} else {
			return [];
		}
	}

	public function write(string $session_id, array $data): bool {
		if ($session_id) {
			$this->db->query("REPLACE INTO `" . DB_PREFIX . "session` SET `session_id` = '" . $this->db->escape($session_id) . "', `data` = '" . $this->db->escape($data ? json_encode($data) : '') . "', `expire` = '" . $this->db->escape(date('Y-m-d H:i:s', time() + $this->config->get('session_expire'))) . "'");
		}

		return true;
	}

	public function destroy(string $session_id): bool {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE `session_id` = '" . $this->db->escape($session_id) . "'");

		return true;
	}

	public function gc(): bool {
		if (round(rand(1, $this->config->get('session_divisor') / $this->config->get('session_probability'))) == 1) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE `expire` < '" . $this->db->escape(date('Y-m-d H:i:s', time())) . "'");
		}

		return true;
	}
}
