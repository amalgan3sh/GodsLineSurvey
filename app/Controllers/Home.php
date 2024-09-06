<?php

namespace App\Controllers;
use App\Models\SurveyModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header') . view('index');
    }
    public function Survey(): string
    {
        return view('survey');
    }

    public function Overview(): string
    {
        return view('header') . view('overview');
    }

    public function OurInspiration(): string
    {
        return view('header') . view('our_inspiration');
    }
    public function VisionAndMission(): string
    {
        return view('header') . view('vision_and_mission');
    }

    public function AboutAraneaPlatform(): string
    {
        return view('header') . view('about_aranea_platform');
    }

    public function SubmitSurvey(){

        $json = $this->request->getJSON();


        if (!$json) {
            
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON(['error' => 'Invalid input']);
        }
        

        // Load the SurveyModel
        $surveyModel = new SurveyModel();
        

        // Define the data array
        $data = [
            'name' => $json->name,
            'age' => $json->age,
            'gender' => $json->gender,
            'location' => $json->location,
            'email' => $json->email,
            'phone_number' => $json->phone_number,
            'awareness_source' => $json->awareness_source,
            'awareness_other_source' => $json->awareness_other_source,
            'project_appeal' => $json->project_appeal,
            'other_project_appeal' => $json->other_project_appeal,
            'likelihood_to_invest' => $json->likelihood_to_invest,
            'rating_sustainable_homes' => $json->rating_sustainable_homes,
            'rating_energy_infrastructure' => $json->rating_energy_infrastructure,
            'rating_healthcare_facilities' => $json->rating_healthcare_facilities,
            'rating_green_spaces' => $json->rating_green_spaces,
            'rating_community_centers' => $json->rating_community_centers,
            'rating_smart_technologies' => $json->rating_smart_technologies,
            'rating_recreational_facilities' => $json->rating_recreational_facilities,
            'rating_road_infrastructure' => $json->rating_road_infrastructure,
            'additional_features' => $json->additional_features,
            'additional_features_specify' => $json->additional_features_specify,
            'sustainability_importance' => $json->sustainability_importance,
            'community_participation' => $json->community_participation,
            'community_activities' => $json->community_activities,
            'additional_comments' => $json->additional_comments,
            'additional_comments_specify' => $json->additional_comments_specify,
            'followup_method' => $json->followup_method,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        

        if ($surveyModel->insert($data)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                ->setJSON(['success' => false, 'error' => 'Failed to save data']);
        }
    }
}
