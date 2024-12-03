<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function getLevelNameAttribute()
    {
        $score = $this->score;

        if ($score >= 0 && $score <= 10) {
            return 'تازه وارد';
        } elseif ($score >= 11 && $score <= 99) {
            return 'شهروند';
        } elseif ($score >= 100 && $score <= 199) {
            return 'خبرنگار';
        } elseif ($score >= 200 && $score <= 499) {
            return 'مشارکت کننده';
        } elseif ($score >= 500 && $score <= 999) {
            return 'توسعه دهنده';
        } elseif ($score >= 1000 && $score <= 2999) {
            return 'بازرس';
        } elseif ($score >= 3000 && $score <= 4999) {
            return 'تاجر';
        } elseif ($score >= 5000 && $score <= 9999) {
            return 'وکیل';
        } elseif ($score >= 10000 && $score <= 19999) {
            return 'شورای شهر';
        } elseif ($score >= 20000 && $score <= 29999) {
            return 'شهردار';
        } elseif ($score >= 30000 && $score <= 49999) {
            return 'فرماندار';
        } elseif ($score >= 50000 && $score <= 99999) {
            return 'وزیر';
        } elseif ($score >= 100000 && $score <= 199999) {
            return 'قاضی';
        } elseif ($score >= 200000) {
            return 'قانون گذار';
        } else {
            return 'نامشخص';
        }
    }

    public function getLevelSlugAttribute()
    {
        $score = $this->score;

        if ($score >= 0 && $score <= 10) {
            return 'L0';
        } elseif ($score >= 11 && $score <= 990) {
            return 'L1';
        } elseif ($score >= 991 && $score <= 3000) {
            return 'L2';
        } elseif ($score >= 3001 && $score <= 8000) {
            return 'L3';
        } elseif ($score >= 8001 && $score <= 18000) {
            return 'L4';
        } elseif ($score >= 18001 && $score <= 36000) {
            return 'L5';
        } elseif ($score >= 36001 && $score <= 76000) {
            return 'L6';
        } elseif ($score >= 76001 && $score <= 166000) {
            return 'L7';
        } elseif ($score >= 166001 && $score <= 366000) {
            return 'L8';
        } elseif ($score >= 366001 && $score <= 796000) {
            return 'L9';
        } elseif ($score >= 796001 && $score <= 1696000) {
            return 'L10';
        } elseif ($score >= 1696001 && $score <= 3696000) {
            return 'L11';
        } elseif ($score >= 3696001 && $score <= 7896000) {
            return 'L12';
        } elseif ($score >= 7896000) {
            return 'L13';
        } else {
            return 'نامشخص';
        }
    }

    public function getLevelAttribute()
    {
        return [
            'name' => $this->level_name,
            'slug' => $this->level_slug
        ];
    }

    public function toArray()
    {
        $array = parent::toArray();
        $array['level'] = $this->level;
        return $array;
    }
}
