<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     Roardom <roardom@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StoreSubtitleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(Request $request): array
    {
        return [
            'subtitle_file' => [
                'required',
                'mimes:srt,ass,sup,zip',
            ],
            'language_id' => [
                'required',
                Rule::exists('media_languages', 'id'),
            ],
            'note' => [
                'required',
                'max:65535',
            ],
            'anon' => [
                'required',
                'boolean',
            ],
            'torrent_id' => [
                'required',
                'integer',
                Rule::exists('torrents', 'id'),
            ],
        ];
    }
}
