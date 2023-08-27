<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    private $permissions;

    public function __construct()
    {
        $this->permissions = $this->getPermissions();
    }

    /**
     * Auto generated seed file.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::updateOrCreate($permission);
        }
    }

    private function getPermissions(): array
    {
        return [
            [
                'id'          => 1,
                'forum_id'    => 1,
                'group_id'    => 1,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 2,
                'forum_id'    => 1,
                'group_id'    => 2,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 3,
                'forum_id'    => 1,
                'group_id'    => 3,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 4,
                'forum_id'    => 1,
                'group_id'    => 4,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 5,
                'forum_id'    => 1,
                'group_id'    => 5,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 6,
                'forum_id'    => 1,
                'group_id'    => 6,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 7,
                'forum_id'    => 1,
                'group_id'    => 7,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 8,
                'forum_id'    => 1,
                'group_id'    => 8,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 9,
                'forum_id'    => 1,
                'group_id'    => 9,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 10,
                'forum_id'    => 1,
                'group_id'    => 10,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 11,
                'forum_id'    => 1,
                'group_id'    => 11,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 12,
                'forum_id'    => 1,
                'group_id'    => 12,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 13,
                'forum_id'    => 1,
                'group_id'    => 13,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 14,
                'forum_id'    => 1,
                'group_id'    => 14,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 15,
                'forum_id'    => 1,
                'group_id'    => 15,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 16,
                'forum_id'    => 1,
                'group_id'    => 16,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 17,
                'forum_id'    => 1,
                'group_id'    => 17,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 18,
                'forum_id'    => 1,
                'group_id'    => 18,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 19,
                'forum_id'    => 2,
                'group_id'    => 1,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 20,
                'forum_id'    => 2,
                'group_id'    => 2,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 21,
                'forum_id'    => 2,
                'group_id'    => 3,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 22,
                'forum_id'    => 2,
                'group_id'    => 4,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 23,
                'forum_id'    => 2,
                'group_id'    => 5,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 24,
                'forum_id'    => 2,
                'group_id'    => 6,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 25,
                'forum_id'    => 2,
                'group_id'    => 7,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 26,
                'forum_id'    => 2,
                'group_id'    => 8,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 27,
                'forum_id'    => 2,
                'group_id'    => 9,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 28,
                'forum_id'    => 2,
                'group_id'    => 10,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 29,
                'forum_id'    => 2,
                'group_id'    => 11,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 30,
                'forum_id'    => 2,
                'group_id'    => 12,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 31,
                'forum_id'    => 2,
                'group_id'    => 13,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 32,
                'forum_id'    => 2,
                'group_id'    => 14,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 33,
                'forum_id'    => 2,
                'group_id'    => 15,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 34,
                'forum_id'    => 2,
                'group_id'    => 16,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 35,
                'forum_id'    => 2,
                'group_id'    => 17,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 36,
                'forum_id'    => 2,
                'group_id'    => 18,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 37,
                'forum_id'    => 1,
                'group_id'    => 19,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 38,
                'forum_id'    => 2,
                'group_id'    => 19,
                'show_forum'  => true,
                'read_topic'  => true,
                'reply_topic' => true,
                'start_topic' => true,
            ],
            [
                'id'          => 39,
                'forum_id'    => 1,
                'group_id'    => 20,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 40,
                'forum_id'    => 1,
                'group_id'    => 21,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 41,
                'forum_id'    => 2,
                'group_id'    => 20,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
            [
                'id'          => 42,
                'forum_id'    => 2,
                'group_id'    => 21,
                'show_forum'  => false,
                'read_topic'  => false,
                'reply_topic' => false,
                'start_topic' => false,
            ],
        ];
    }
}
