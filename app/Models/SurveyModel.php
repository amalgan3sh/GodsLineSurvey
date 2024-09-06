<?php

namespace App\Models;

use CodeIgniter\Model;
 
class SurveyModel extends Model
{
    protected $table = 'gods_line_survey';
    protected $primaryKey = 'response_id';
    protected $allowedFields = [
        'name', 'age', 'gender', 'location', 'email', 'phone_number', 'awareness_source', 'awareness_other_source', 
        'project_appeal', 'other_project_appeal', 'likelihood_to_invest', 'rating_sustainable_homes', 
        'rating_energy_infrastructure', 'rating_healthcare_facilities', 'rating_green_spaces', 
        'rating_community_centers', 'rating_smart_technologies', 'rating_recreational_facilities', 'rating_road_infrastructure', 
        'additional_features', 'additional_features_specify', 'sustainability_importance', 'community_participation', 
        'community_activities', 'additional_comments', 'additional_comments_specify', 'followup_method', 'created_at'
    ];
    protected $useTimestamps = true;
    protected $updatedField = 'updated_at';
    protected $createdField = 'created_at';
    
}