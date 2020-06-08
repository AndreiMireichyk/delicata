<?php

namespace App;

use AmoCRM\Client;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function saveAmo(){
        $client = new Client(env('AMO_DOMAIN'), env('AMO_LOGIN'), env('AMO_HASH'));

        $unsorted = $client->unsorted;
        $unsorted['source'] = 'delicata';
        $unsorted['source_uid'] = null;
        $unsorted['source_data'] = [
            'data' => $this->composeUnsignedText(),
            'form_id' => 245686,
            'form_type' => 1,
            'origin' => [
                'ip' => '1.1.1.1'
            ],
            'date' => time(),
            'from' => 'delicata',
            'form_name' => $this->composeNoteText(),
        ];

        //Contact
        $contact = $client->contact;

        $contact['name'] = $this->getAttribute('name') ? $this->getAttribute('name') : 'Контакт с сайта';

        $contact->addCustomField(298265, [
            [str_replace('+', '', $this->getAttribute('phone')), 'WORK'],
        ]);



        $unsorted->addDataContact($contact);

        //Lead
        $lead = $client->lead;
        $lead['name'] = 'Заявка с сайта';

        $note = $client->note;
        $note['element_type'] = 2; // 1 - contact, 2 - lead
        $note['note_type'] = 4;
        $note['text'] = $this->composeNoteText();
        $lead['notes'] = $note;

        $unsorted->addDataLead($lead);

        $unsorted->apiAddForms();
    }

    public function composeUnsignedText()
    {
        $data = [];

        $data[] = [
            'type' => 'text',
            'id' => 'site_name',
            'element_type' => '1',
            'name' => 'Имя сайта',
            'value' => 'Delicata',
        ];

        $data[] = [
            'type' => 'text',
            'id' => 'phone',
            'element_type' => '1',
            'name' => 'Имя',
            'value' => $this->getAttribute('name'),
        ];


        $data[] = [
            'type' => 'text',
            'id' => 'phone',
            'element_type' => '1',
            'name' => 'Телефон',
            'value' => $this->getAttribute('phone'),
        ];


        return $data;

    }

    public function composeNoteText()
    {
        $text = "ВОТ ЗАЯВКА КЛИЕНТА\n";

        if ($this->getAttribute('name')) {
            $text .= "Имя: " . $this->getAttribute('name') . "\n";
        } else {
            $text .= "Имя: Контакт с сайта\n";
        }

        if ($this->getAttribute('phone')) {
            $text .= "Телефон: " . $this->getAttribute('phone') . "\n";
        }

        if ($this->getAttribute('text')) {
            $text .= "Сообщение: " . $this->getAttribute('text') . "\n";
        }

        return $text;

    }
}


