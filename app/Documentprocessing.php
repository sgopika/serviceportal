<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentprocessing extends Model
{
	
    protected $fillable = [
       'documents_id', 'currentowner','contributor_status', 'contributor_id', 'contributor_timestamp', 'contributor_remarks','moderator_status','moderator_id','moderator_timestamp','moderator_remarks','approver_status','approver_id', 'approver_timestamp', 'approver_remarks', 'status'
    ];
}
