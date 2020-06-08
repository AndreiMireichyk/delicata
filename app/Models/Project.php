<?php

namespace App\Models;

use Armetiz\AirtableSDK\Airtable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $casts = ['images' => 'array'];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getCover()
    {
        return $this->getAttribute('images')[0]['url'] ?? '';
    }

    public static function syncAirtable()
    {
        $sdk = new Airtable(env('AIRTABLE_KEY'), env('AIRTABLE_BASE_ID'));

        $table = $sdk->findRecords(env('TABLE_NAME'));

        collect($table)->each(function ($row) {

            $id = $row->getId();

            $fields = $row->getFields();

            if (!empty($fields['site_title'])) {
                Project::updateOrCreate(
                    ['hash' => $id],
                    [
                        'title' => $fields['site_title'] ?? '',
                        'description' => $fields['site_text'] ?? '',
                        'images' => $fields['photos'] ?? ''
                    ]
                );
            }
        });


    }
}
