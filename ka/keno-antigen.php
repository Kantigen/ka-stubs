<?php

namespace KA;

require_once __DIR__ . '/body/get-buildings.php';
require_once __DIR__ . '/body/get-status.php';
require_once __DIR__ . '/buildings/view.php';
require_once __DIR__ . '/empire/get-boosts.php';
require_once __DIR__ . '/empire/get-invite-friend-url.php';
require_once __DIR__ . '/empire/get-own-profile.php';
require_once __DIR__ . '/empire/get-status.php';
require_once __DIR__ . '/empire/invite-friend.php';
require_once __DIR__ . '/empire/login.php';
require_once __DIR__ . '/empire/logout.php';
require_once __DIR__ . '/inbox/view-archived.php';
require_once __DIR__ . '/inbox/view-inbox.php';
require_once __DIR__ . '/inbox/view-sent.php';
require_once __DIR__ . '/inbox/view-trashed.php';
require_once __DIR__ . '/inbox/view-unread.php';
require_once __DIR__ . '/map/get-star-map.php';
require_once __DIR__ . '/server/get-status.php';
require_once __DIR__ . '/spaceport/get-ships-for.php';
require_once __DIR__ . '/stats/alliance-rank.php';
require_once __DIR__ . '/stats/colony-rank.php';
require_once __DIR__ . '/stats/credits.php';
require_once __DIR__ . '/stats/empire-rank.php';
require_once __DIR__ . '/stats/spy-rank.php';
require_once __DIR__ . '/stats/weekly-medal-winners.php';

class KenoAntigen {
  static $OLD_DATE_FORMAT = 'm d Y H:i:s O'; // TODO: is this relevant anywhere?
  static $DATE_FORMAT = 'Y m d H:i:s O';

  //
  // For the moment, this is effectively a list of all buildings. As I progressively
  // add more stubs, the items in this list will reduce.
  //
  static $GENERIC_BUILDINGS = [
    'algae',
    'algaepond',
    'alliance',
    'amalgusmeadow',
    'apple',
    'archaeology',
    'artmuseum',
    'atmosphericevaporator',
    'beach',
    'bean',
    'beeldeban',
    'beeldebannest',
    'blackholegenerator',
    'bread',
    'burger',
    'capitol',
    'captcha',
    'cheese',
    'chip',
    'cider',
    'citadelofknope',
    'cloakinglab',
    'corn',
    'cornmeal',
    'crashedshipsite',
    'crater',
    'culinaryinstitute',
    'dairy',
    'denton',
    'dentonbrambles',
    'deployedbleeder',
    'development',
    'distributioncenter',
    'embassy',
    'energyreserve',
    'entertainment',
    'espionage',
    'essentiavein',
    'fission',
    'fissure',
    'foodreserve',
    'fusion',
    'gasgiantlab',
    'gasgiantplatform',
    'geneticslab',
    'geo',
    'geothermalvent',
    'gratchsgauntlet',
    'greatballofjunk',
    'grove',
    'hallsofvrbansk',
    'hydrocarbon',
    'ibs',
    'intelligence',
    'inteltraining',
    'interdimensionalrift',
    'junkhengesculpture',
    'kalavianruins',
    'kasternskeep',
    'lagoon',
    'lake',
    'lapis',
    'lapisforest',
    'lcota',
    'lcotb',
    'lcotc',
    'lcotd',
    'lcote',
    'lcotf',
    'lcotg',
    'lcoth',
    'lcoti',
    'libraryofjith',
    'luxuryhousing',
    'malcud',
    'malcudfield',
    'massadshenge',
    'mayhemtraining',
    'mercenariesguild',
    'metaljunkarches',
    'mine',
    'miningministry',
    'missioncommand',
    'munitionslab',
    'naturalspring',
    'network19',
    'observatory',
    'operahouse',
    'oracleofanid',
    'orerefinery',
    'orestorage',
    'oversight',
    'pancake',
    'pantheonofhagness',
    'park',
    'parliament',
    'pie',
    'pilottraining',
    'planetarycommand',
    'policestation',
    'politicstraining',
    'potato',
    'propulsion',
    'pyramidjunksculpture',
    'ravine',
    'rockyoutcrop',
    'sand',
    'saw',
    'security',
    'shake',
    'shipyard',
    'singularity',
    'soup',
    'spacejunkpark',
    'spaceport',
    'ssla',
    'sslb',
    'sslc',
    'ssld',
    'stationcommand',
    'stats',
    'stockpile',
    'subspacesupplydepot',
    'supplypod',
    'syrup',
    'templeofthedrajilites',
    'terraforminglab',
    'terraformingplatform',
    'thedillonforge',
    'thefttraining',
    'themepark',
    'trade',
    'transporter',
    'university',
    'volcano',
    'warehouse',
    'wastedigester',
    'wasteenergy',
    'wasteexchanger',
    'wasterecycling',
    'wastesequestration',
    'wastetreatment',
    'waterproduction',
    'waterpurification',
    'waterreclamation',
    'waterstorage',
    'wheat',
  ];

  public static function handle_request($module, $method, $params) {
    $result = self::get_result($module, $method, $params);

    if (isset($result)) {
      echo json_encode([
        'jsonrpc' => '2.0',
        'id' => 1,
        'result' => $result,
      ]);
    } else {
      echo json_encode([
        'jsonrpc' => '2.0',
        'id' => 1,
        'error' => [
          'message' => 'Invalid request.',
          'data' => null,
        ],
      ]);
    }
  }

  public static function get_result($module, $method, $params) {
    if ($module == 'body') {
      switch ($method) {
        case 'get_buildings': return Body\get_buildings();
        case 'get_status':  return Body\get_status();
      }
    }

    else if ($module == 'empire') {
      switch ($method) {
        case 'login': return Empire\login();
        case 'logout': return Empire\logout();
        case 'get_status': return Empire\get_status();
        case 'get_boosts': return Empire\get_boosts();
        case 'get_invite_friend_url': return Empire\get_invite_friend_url();
        case 'invite_friend': return Empire\invite_friend();
        case 'get_own_profile': return Empire\get_own_profile();
        case 'edit_profile': return Empire\edit_profile();
      }
    }

    else if ($module == 'inbox') {
      switch ($method) {
        case 'view_archived': return Inbox\view_archived();
        case 'view_inbox': return Inbox\view_inbox();
        case 'view_sent': return Inbox\view_sent();
        case 'view_trashed': return Inbox\view_trashed();
        case 'view_unread': return Inbox\view_unread();
      }
    }

    else if ($module == 'map') {
      switch ($method) {
        case 'get_star_map': return Map\get_star_map();
      }
    }

    else if ($module == 'spaceport') {
      switch ($method) {
        case 'get_ships_for': return Spaceport\get_ships_for();
        case 'view': return Buildings\view();
      }
    }

    else if ($module == 'stats') {
      switch ($method) {
        case 'credits': return Stats\credits();
        case 'empire_rank': return Stats\empire_rank();
        case 'alliance_rank': return Stats\alliance_rank();
        case 'colony_rank': return Stats\colony_rank();
        case 'spy_rank': return Stats\spy_rank();
        case 'weekly_medal_winners': return Stats\weekly_medal_winners();
      }
    }

    else if (in_array($module, self::$GENERIC_BUILDINGS)) {
      switch ($method) {
        case 'view': return Buildings\view();
      }
    }
  }
}
