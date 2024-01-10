<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->lang->load("message", "en");
    }

    public function index()
    {
        $data["user_page_name"] = "Home";
        $this->load->view("users/Index", $data);
    }

    public function about()
    {
        $data["user_page_name"] = "About";
        $this->load->view("users/About", $data);
    }

    public function battery_repair()
    {
        $data["user_page_name"] = "Battery Repair";
        $this->load->view("users/BatteryRepair", $data);
    }

    public function brake_repair()
    {
        $data["user_page_name"] = "Brake Repair";
        $this->load->view("users/BrakeRepair", $data);
    }

    public function car_cleaning()
    {
        $data["user_page_name"] = "Car Cleaning";
        $this->load->view("users/CarCleaning", $data);
    }

    public function contact()
    {
        $data["user_page_name"] = "Contact";
        $this->load->view("users/Contact", $data);
    }

    public function cooling_system()
    {
        $data["user_page_name"] = "Cooling System";
        $this->load->view("users/CoolingSystem", $data);
    }

    public function engine_repair()
    {
        $data["user_page_name"] = "Engine Repair";
        $this->load->view("users/EngineRepair", $data);
    }

    public function exterior_revitalization()
    {
        $data["user_page_name"] = "Exterior Revitalization";
        $this->load->view("users/ExteriorRevitalization", $data);
    }

    public function faq()
    {
        $data["user_page_name"] = "FAQ";
        $this->load->view("users/Faq", $data);
    }

    public function services()
    {
        $data["user_page_name"] = "Services";
        $this->load->view("users/Services", $data);
    }

    public function steering_repair()
    {
        $data["user_page_name"] = "Steering Repair";
        $this->load->view("users/SteeringRepair", $data);
    }

    public function tire_repair()
    {
        $data["user_page_name"] = "Tire Repair";
        $this->load->view("users/TireRepair", $data);
    }
}
