<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EditRequest extends Model
{
    protected $fillable = [
        'faculty_id', 
        'field_name', 
        'new_value', 
        'request_status', 
        'requested_by'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requested_by');
    }
}
?>