<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $table = 'properties';

    // protected $fillable = ['user_id','property_name','property_type','direction','sale_price','rent_price','address','map_latitude','map_longitude','bathrooms','bedrooms','area','description','featured_image'];

    public function direction_to()
        {
            return $this->belongsTo(Direction::class, 'direction', 'id');
        }

    public function readiness_of()
        {
            return $this->belongsTo(Readiness::class, 'readiness', 'id');
        }

    public function scopeSearchByKeyword($query, $keyword,$direction,$type)
        {

            if($keyword!='' and $direction!='' and $type!='')
            {
                $query->where(function ($query) use ($keyword,$direction,$type) {
                $query->where("status", "1")
                    ->where("direction", "$direction")
                    ->where("property_type", "$type")
                    ->orWhere("property_features", 'like', '%' .$keyword. '%')
                    ->orWhere("property_name", 'like', '%' .$keyword. '%');
                });
            }
            elseif ($direction!='' and $type!='')
            {
                        $query->where(function ($query) use ($keyword,$direction,$type) {
                        $query->where("status", "1")
                            ->where("direction", "$direction")
                            ->where("property_type", "$type");
                        });
            }
            elseif ($direction!='')
            {
                        $query->where(function ($query) use ($keyword,$direction,$type) {
                        $query->where("status", "1")->where("direction", "$direction");
                        });
            }
            elseif ($type!='')
            {
                        $query->where(function ($query) use ($keyword,$direction,$type) {
                        $query->where("status", "1")->where("property_type", "$type");
                        });
            }
            else
            {
                $query->where(function ($query) use ($keyword,$direction,$type) {
                $query->where("status", "1")
                    ->where("property_features", 'like', '%' .$keyword. '%')
                    ->orWhere("property_name", 'like', '%' .$keyword. '%');
                });
            }

        return $query;
      }

    }
