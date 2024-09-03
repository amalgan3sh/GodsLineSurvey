<?php

namespace App\Models;

use CodeIgniter\Model;
 
class SurveyModel extends Model
{
    protected $table = 'survey_responses';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'who_are_you', 'first_name', 'last_name', 'gender', 'nationality', 'age', 'phone', 'email',
        'designation', 'current_residential_location', 'hometown', 'project_location',
        'interested_district', 'distance_from_city', 'house_type', 'farm_type',
        'farm_acres', 'farm_facility_management', 'farm_additional_services', 
        'villa_bedrooms', 'villa_sqft', 'villa_master_bedroom_size', 'villa_living_room_size',
        'villa_bedroom_size', 'villa_bathroom_size', 'villa_swimming_pool', 'villa_pool_size',
        'villa_facility_management', 'villa_site_visiting', 'villa_online_booking', 
        'villa_real_time_monitoring', 'resort_type', 'resort_camp_site', 'resort_pub', 
        'resort_bar', 'resort_open_restaurant', 'resort_additional_suggestions', 
        'resort_yoga_meditations', 'resort_indoor_games', 'resort_other_suggestions', 
        'wellness_park_facilities', 'smart_home_facility', 'other_facilities', 'budget_range',
        'family_members', 'additional_income', 'income_sources', 'created_at'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}