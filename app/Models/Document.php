<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    protected $fillable = [
        'doc_number',
        'ref_number',
        'category',
        'subject',
        'dari',
        'isi',
        'status',
        'created_by'
    ];
}
