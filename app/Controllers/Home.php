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
        'who_are_you' => $json->whoAreYou,
        'first_name' => $json->firstName,
        'last_name' => $json->lastName,
        'gender' => $json->gender,
        'nationality' => $json->nationality,
        'age' => $json->age,
        'phone' => $json->phone,
        'email' => $json->email,
        'designation' => $json->designation,
        'current_residential_location' => $json->currentLocation,
        'hometown' => $json->hometown,
        'project_location' => $json->projectLocation,
        'interested_district' => $json->interestedDistrict,
        'distance_from_city' => $json->distanceFromCity,
        'house_type' => $json->houseType,
        'farm_type' => $json->farmType,
        'farm_acres' => $json->acres,
        'farm_facility_management' => $json->facilityManagement,
        'farm_additional_services' => $json->additionalServices,
        'villa_bedrooms' => $json->bedrooms,
        'villa_sqft' => $json->squareFeet,
        'villa_master_bedroom_size' => $json->masterBedroomSize,
        'villa_living_room_size' => $json->livingRoomSize,
        'villa_bedroom_size' => $json->bedroomSize,
        'villa_bathroom_size' => $json->bathroomSize,
        'villa_swimming_pool' => $json->swimmingPool,
        'villa_pool_size' => $json->poolSize,
        'villa_facility_management' => $json->facilityManagementVilla,
        'villa_site_visiting' => $json->siteVisiting,
        'villa_online_booking' => $json->onlineBooking,
        'villa_real_time_monitoring' => $json->realTimeMonitoring,
        'resort_type' => $json->resortType,
        'resort_camp_site' => $json->campSite,
        'resort_pub' => $json->pub,
        'resort_bar' => $json->bar,
        'resort_open_restaurant' => $json->restaurant,
        'resort_additional_suggestions' => $json->additionalSuggestions,
        'resort_yoga_meditations' => $json->yogaMeditations,
        'resort_indoor_games' => $json->indoorGames,
        'resort_other_suggestions' => $json->otherSuggestions,
        'wellness_park_facilities' => $json->wellnessFacilities,
        'smart_home_facility' => $json->smartHome,
        'other_facilities' => $json->otherFacilities,
        'budget_range' => $json->budgetRange,
        'family_members' => $json->familyMembers,
        'additional_income' => $json->additionalIncome,
        'income_sources' => $json->incomeType,
        'updated_at' => date('Y-m-d H:i:s'),
    ];
    
        

        if ($surveyModel->insert($data)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                ->setJSON(['success' => false, 'error' => 'Failed to save data']);
        }
    }
}
