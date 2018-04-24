<?php
/*
 -------------------------------------------------------------------------
 MessengerBot plugin for GLPI
 Copyright (C) 2017 by the MessengerBot Development Team.

 https://github.com/jurinva/messengerbot
 -------------------------------------------------------------------------

 LICENSE

 This file is part of MessengerBot.

 MessengerBot is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 MessengerBot is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with MessengerBot. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

class PluginMessengerbotNotificationEventWebsocket
      extends NotificationEventAbstract
      implements NotificationEventInterface {

   static public function getTargetFieldName() {
      return 'users_id';
   }

   static public function getTargetField(&$data) {
      $field = self::getTargetFieldName();

      if (!isset($data[$field])) {
         $data[$field] = null;
      }

      return $field;
   }

   static public function canCron() {
      return false;
   }

   static public function getAdminData() {
      return false;
   }

   static public function getEntityAdminsData($entity) {
      return false;
   }

   static public function send(array $data) {
      Toolbox::logDebug(__METHOD__ . ' should not be called!');
      return false;
   }

}
