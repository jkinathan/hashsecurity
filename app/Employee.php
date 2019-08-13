<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'ename', 'photo', 'sex','age','nssf','race'
        ,'nationality','tribe','dateofbirth', 'village', 'parish','subcounty','county','district'
        ,'nearesttown','lc1','physicaladdress', 'maritalstatus', 'spousename','fathername','mothername','addressandphone'
        ,'nameofchildres','nextofkin','schoolple', 'schooluce', 'schooluace','schooluni','yearple','yearuce'
        ,'yearuace','yearuni','namer1', 'namer2', 'namer3','phoner1','phoner2','phoner3'
        ,'relationr1','relationr2','relationr3', 'addressr1', 'addressr2','address3','yearr1','yearr2'
        ,'yearr3','companyr1','companyr2', 'companyr3', 'positionr1','positionr2','positionr3','addskills'
        
    ];
}
