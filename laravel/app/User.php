<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'first_name',
        'last_name',
        'genre',
        'date_of_birth',
        'place_of_birth',
        'document',
        'document_secondary',
        'document_secondary_complement',
        'cover',
        'came_from',
        'newsletter',
        'zipcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'telephone',
        'cell',
        'appointment',
        'store',
        'blog',
        'email',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Set and Get Attr
     *
     * Role
     */

    /**
     * Set and Get Attr
     *
     * Data
     */

    /**
     * Set and Get Attr
     *
     * Address
     */

    /**
     * Set and Get Attr
     *
     * Contact
     */

    /**
     * Set and Get Attr
     *
     * Access
     */

    public function setAppointmentAttribute($value)
    {
        $this->attributes['appointment'] = ($value === true || $value === 'on' ? 1 : 0);
    }

    public function setStoreAttribute($value)
    {
        $this->attributes['store'] = ($value === true || $value === 'on' ? 1 : 0);
    }

    public function setBlogAttribute($value)
    {
        $this->attributes['blog'] = ($value === true || $value === 'on' ? 1 : 0);
    }

    /**
     * Set and Get Attr
     *
     * Status
     */

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = ($value === true || $value === 'on' ? 1 : 0);
    }


    public function setNewsletterAttribute($value)
    {
        $this->attributes['newsletter'] = ($value === true || $value === 'on' ? 1 : 0);
    }

    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = $this->clearField($value);
    }

    public function getDocumentAttribute($value)
    {
        return substr($value, 0, 3) . '.' . substr($value, 3, 3) . '.' . substr($value, 6, 3) . '-' . substr($value, 9, 2);
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $this->convertStringToDate($value);
    }

    public function getDateOfBirthAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function setIncomeAttribute($value)
    {
        $this->attributes['income'] = floatval($this->convertStringToDouble($value));
    }

    public function getIncomeAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setZipcodeAttribute($value)
    {
        $this->attributes['zipcode'] = $this->clearField($value);
    }

    public function setTelephoneAttribute($value)
    {
        $this->attributes['telephone'] = $this->clearField($value);
    }

    public function setCellAttribute($value)
    {
        $this->attributes['cell'] = $this->clearField($value);
    }

    public function getCellAttribute($value)
    {
        return '(' . substr($value, 0, 2) . ') ' . substr($value, 2, 5) . '-' . substr($value, 7, 8);
    }

    public function setPasswordAttribute($value)
    {
        if (empty($value)) {
            unset($this->attributes['password']);
            return;
        }

        $this->attributes['password'] = bcrypt($value);
    }

    private function convertStringToDouble(?string $param)
    {
        if(empty($param)){
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }

    private function convertStringToDate(?string $param)
    {
        if(empty($param)){
            return null;
        }

        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');
    }

    private function clearField(?string $param)
    {
        if(empty($param)){
            return '';
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
