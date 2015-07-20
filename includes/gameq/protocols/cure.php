<?php
/**
 * This file is part of GameQ.
 *
 * GameQ is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * GameQ is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Codename CURE Protocol Class
 */
class GameQ_Protocols_Cure extends GameQ_Protocols_Source
{
	protected $name = "cure";
	protected $name_long = "Codename CURE";
	protected function process_details() {
		$result = parent::process_details();
		$result['steamappid'] = 355180;
		return $result;
	}
}